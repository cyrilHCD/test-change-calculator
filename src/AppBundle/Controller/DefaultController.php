<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Registry\CalculatorRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Model\Change;

class DefaultController extends Controller
{
    /**
     * @Route("/automaton/{model}/{method}/{amount}", name="automaton", requirements={"amount"="\d+"})
     */
    public function changeCalculatorAction($model, $method, $amount) {

        $calculatorRegistry = new CalculatorRegistry();
        $automaton = $calculatorRegistry->getCalculatorFor($model);

        if (!is_null($automaton)) {

            if ($method == "change") {

                $change = $automaton->getChange(intval($amount));
                if (!is_null($change)) {

                    $response = json_encode(get_object_vars($change));
                    return new Response($response, 200);

                } else {

                    return new Response('', 204);

                }
            }

        } else {

            return new Response('', 404);

        }
    }
}
