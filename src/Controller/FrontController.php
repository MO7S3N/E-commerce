<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/search", name="front_search")
     */
    public function custom_search(): Response
    {
        return $this->render('front/custom.search.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/magazin", name="front_magazin")
     */
    public function magazin(): Response
    {
        return $this->render('front/magazin.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

}
