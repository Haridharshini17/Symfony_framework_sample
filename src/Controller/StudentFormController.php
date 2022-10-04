<?php

namespace App\Controller;

use App\Form\Type\StudentFormType;
use App\Entity\StudentForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\component\Routing\Annotation\Route;
use symfony\component\HttpFoundation\Response;

class StudentFormController extends AbstractController
{
    #[Route('\exampleform' , name: 'exampleshow')]
    public function new(): Response
    {
        $form = new StudentForm();
        $form->setName('Haridharshini');
        $form->setDOB(new \DateTime ('yesterday'));
        $submitForm = $this->createForm(StudentFormType::class, $form);
        return $this->renderForm('submitForm/new.html.twig',
        [
            'submitForm' => $submitForm,
        ]);
    }
}