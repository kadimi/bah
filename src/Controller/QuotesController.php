<?php

namespace App\Controller;

use App\Entity\Quote;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\createFormBuilder;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/quotes/new", name="quotes.new")
     */
    public function new(Request $request)
    {
    	$quote = new Quote;
    	$quote->setContent('So many books, so little time.');

    	$form = $this->createFormBuilder($quote)
    		->add('content', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Quote'))
    		->getForm()
		;

        return $this->render('quotes/new.html.twig', array(
            'form' => $form->createView(),
            'controller_name' => 'QuotesController',
        ));
    }
}
