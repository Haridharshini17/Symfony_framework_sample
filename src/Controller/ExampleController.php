<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    #[Route('/example', name: 'app_example')]
    public function index(): Response
    {
        $welcome = "Welcome to generated controller";
        return $this->render('example/welcome.html.twig', [
            'Welcome' => $welcome,
        ]);
    }
}
