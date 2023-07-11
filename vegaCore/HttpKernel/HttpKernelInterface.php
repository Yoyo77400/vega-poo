<?php
namespace VegaCore\HttpKernel;


use Symfony\Component\HttpFoundation\Response;

interface HttpKernelInterface
{
    /**
     * cette méthode du noyau lui permet de soumettre et  de retourner la réponse correspondante
     */
    public function handleRequest() : Response;
}