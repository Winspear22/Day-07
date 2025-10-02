<?php

namespace App\Ex01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Ex03Controller extends AbstractController
{

    #[Route(path:"/ex03", name:"ex03_action")]
    public function extensionAction(): Response
    {
        $text = $this->getParameter('d07.number') . ' voici le résultat de l exercice 03!';

        return $this->render('ex03/ex03.html.twig', [
            'text' => $text,
            'example' => "42 is the answer in 2025!",
        ]);
    }
}
