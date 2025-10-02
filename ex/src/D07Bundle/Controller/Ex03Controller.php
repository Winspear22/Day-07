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
            $number = $this->getParameter('d07.number');
            return new Response('Le nombre est : ' . $number);
    }
}
