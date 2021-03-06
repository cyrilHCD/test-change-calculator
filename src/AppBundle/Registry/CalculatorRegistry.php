<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 22/04/19
 * Time: 14:06
 */

namespace AppBundle\Registry;


use AppBundle\Calculator\CalculatorInterface;
use AppBundle\Calculator\Mk1Calculator;
use AppBundle\Calculator\Mk2Calculator;

class CalculatorRegistry implements CalculatorRegistryInterface
{

    /**
     * @param string $model Indicates the model of automaton
     *
     * @return CalculatorInterface|null The calculator, or null if no CalculatorInterface supports that model
     */
    public function getCalculatorFor(string $model): ?CalculatorInterface
    {
        switch ($model) {

            case "mk1":
                return new Mk1Calculator();
                break;

            case "mk2":
                return new Mk2Calculator();
                break;

            default:
                return null;
        }
    }
}