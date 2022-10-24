<?php

namespace App;

use App\Controller\ProdutoController;
use App\Controller\TipoProdutoController;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function registerBundles(): array
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        ];
    }

    protected function configureContainer(ContainerConfigurator $c): void
    {
        // PHP equivalent of config/packages/framework.yaml
        $c->extension('framework', [
            'secret' => 'S0ME_SECRET'
        ]);
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->add('produtos_todos', '/produtos')->controller([ProdutoController::class, 'todos'])->methods(['GET']);
        $routes->add('produtos_salvar', '/produtos')->controller([ProdutoController::class, 'salvar'])->methods(['POST']);
        $routes->add('tipo_produto_todos', '/tipo-produtos')->controller([TipoProdutoController::class, 'todos'])->methods(['GET']);
        $routes->add('tipo_produto_salvar', '/tipo-produtos')->controller([TipoProdutoController::class, 'salvar'])->methods(['POST']);
    }
}