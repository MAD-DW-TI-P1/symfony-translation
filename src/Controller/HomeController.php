<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends AbstractController
{
    #[Route(
        '{_locale}/home', 
        name: 'app_home',
        requirements: [
            '_locale' => 'en|es',
        ])
    ]
    public function index(TranslatorInterface $translator, Request $request): Response
    {
    
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'locale' => $request->getLocale(),
            'messageController' => $translator->trans('Hello World', domain: 'messages', locale: 'es_ES'),
        ]);
    }
}
