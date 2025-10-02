<?php

namespace App\Ex01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Ex01Controller extends AbstractController
{

    public function index(): Response
    {
        return new Response("Hello from Ex01Controller!");
    }
}
