<?php

namespace App\Ex01Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class D07Extension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $configs[0];
        $container->setParameter('d07.number', $config['number']);
        $container->setParameter('d07.enable', $config['enable'] ?? true);
    }
}
?>