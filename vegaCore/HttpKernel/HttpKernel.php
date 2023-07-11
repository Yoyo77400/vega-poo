<?php
namespace VegaCore\HttpKernel;


use Psr\Container\ContainerInterface;
use VegaCore\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Response;

abstract class HttpKernel implements HttpKernelInterface
{

    /**
     * cette propriété représente le container de dépendances
     */
    protected readonly ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function handleRequest() : response
    {
        $response = new Response(
            'Content',
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );
        return $response;
    }
}