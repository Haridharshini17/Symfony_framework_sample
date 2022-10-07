<?php

namespace App\Controller;

use App\Form\Type\StudentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\component\Routing\Annotation\Route;
use symfony\component\HttpFoundation\Response;


class StudentRegistrationController extends AbstractController
{
    #[Route('/exampleform' , name: 'exampleshow')]
    public function new(): Response
    { 
        $formcreated = $this->createForm(StudentFormType::class);
        return $this->renderForm('submitForm/new.html.twig',
        [
            'formcreated' => $formcreated,
        ]);
    }
}