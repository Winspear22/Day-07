<?php

namespace App\D07Bundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Service\Ex03Service;

class Ex03Extension extends AbstractExtension
{
    private Ex03Service $service;

    // Le service s'injecte via le constructeur
    public function __construct(Ex03Service $service)
    {
        $this->service = $service;
    }

    public function getFilters(): array
    {
        // Déclare le filtre Twig
        return [
            new TwigFilter('uppercaseWords', [$this->service, 'uppercaseWords']),
        ];
    }

    public function getFunctions(): array
    {
        // Déclare la fonction Twig
        return [
            new TwigFunction('countNumbers', [$this->service, 'countNumbers']),
        ];
    }
}
