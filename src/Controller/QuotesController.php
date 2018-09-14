<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuotesController extends AbstractController
{
    /**
     * @Route("/quotes", name="quotes")
     */
    public function index()
    {
        return $this->render('quotes/index.html.twig', [
            'controller_name' => 'QuotesController',
        ]);
    }
}
