<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 22/04/19
 * Time: 14:03
 */

namespace AppBundle\Calculator;



use AppBundle\Model\Change;

class Mk1Calculator implements CalculatorInterface
{
    const MODEL = "mk1";


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
        if ($amount >= 0) {

            $change = new Change();
            $change->setCoin1($amount);

            return $change;

        } else {

            return null;

        }
    }
}