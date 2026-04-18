<?php

declare(strict_types=1);

namespace App\Core\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetingController extends AbstractController
{
    #[Route('/greeting')]
    public function index(): Response
    {
        return new Response('Hello World!');
    }
}
