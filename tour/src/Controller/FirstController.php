<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class FirstController
 * @package App\Controller
 */
class FirstController {

    /**
     * Random number
     * @return Response
     */
    public function number()    {
        $number = round(0,100);
        return new Response($number);
    }

}