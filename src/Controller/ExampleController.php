<?php

namespace App\Controller;

use App\Service\Example;
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
    #[Route('/service/example/2', name: 'example_2')]
    public function new(Example $example)
    {
           $logger = $example->getMessage();
           return new response($logger);
    }
}
