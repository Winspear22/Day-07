<?php

namespace App\Ex01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Ex01Controller extends AbstractController
{

    #[Route(path:"/ex01", name:"ex01_action")]
    public function ex01Action(): Response
    {
            $number = $this->getParameter('d07.number');
            return new Response('Le nombre est : ' . $number);
    }
}
