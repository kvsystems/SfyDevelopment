<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FirstController
 * @package App\Controller
 */
class FirstController extends AbstractController {

    /**
     * View random number
     * @return Response
     */
    public function number()    {
        $number = rand(12,100);
        return $this->render('number.html.twig', [
            'number' => $number,
        ]);
    }

}