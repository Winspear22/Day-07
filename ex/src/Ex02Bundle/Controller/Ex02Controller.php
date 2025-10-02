<?php

namespace App\Ex02Bundle\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Ex02Controller extends AbstractController
{



    #[Route(path: '/{_locale}/ex02/{count}', name: 'ex02', requirements: ['_locale' => 'en|fr', 'count' => '\d'], defaults: ['count' => 0])]
    public function translationsAction($_locale, $count=0): Response
    {
        try
        {
            $number = $this->getParameter('d07.number');

            return $this->render('ex02/ex02.html.twig', [
                'number' => $number,
                'count' => $count,
            ]);
        }
        catch (Exception $e)
        {
            $message = "Erreur lors du chargement de la page : ";
            $this->addFlash('error', $message . $e->getMessage());
            return $this->redirectToRoute('ex01_action');
        }
    }
}
