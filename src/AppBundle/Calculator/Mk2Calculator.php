<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 22/04/19
 * Time: 14:04
 */

namespace AppBundle\Calculator;


use AppBundle\Model\Change;

class Mk2Calculator implements CalculatorInterface
{
    const MODEL = "mk2";

    /**
     * @return string Indicates the model of automaton
     */
    public function getSupportedModel(): string
    {
        return self::MODEL;
    }

    /**
     * @param int $amount The amount of money to turn into change
     *
     * @return Change|null The change, or null if the operation is impossible
     */
    public function getChange(int $amount): ?Change
    {
        $impossibleRemains = [1, 3, 9];

        $dozens = $amount / 10;
        $amountRemained = $amount % 10;

        if ($amount >= 0 && !in_array($amountRemained, $impossibleRemains)) {

            $change = new Change();

            $bill10 = $dozens - ($amountRemained / 10);
            $change->setBill10($bill10);

            if (in_array($amountRemained, [0, 2, 4, 6, 8])) {
                $change->setCoin2($amountRemained / 2);
            } else {
                $change->setBill5(1);
                $change->setCoin2(($amountRemained - 5) / 2);
            }


            return $change;

        } else {

            return null;

        }
    }
}