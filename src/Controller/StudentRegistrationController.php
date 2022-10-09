<?php

namespace App\Controller;

use App\Form\Type\StudentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\component\Routing\Annotation\Route;
use Symfony\component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\StudentRegistration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class StudentRegistrationController extends AbstractController
{
     #[Route('/exampleform' , name: 'exampleshow',)] //methods: ['POST'])]
    public function new(ManagerRegistry $doctrine, Request $request,EntityManagerInterface $entityManager): Response
    { 
        $datas = new StudentRegistration();
        $formcreated = $this->createForm(StudentFormType::class, $datas);
        $formcreated->handleRequest($request);
        if($formcreated->isSubmitted() && $formcreated->isValid())
        {
            $entityManager->persist($datas);
            $entityManager->flush();
            return new Response('sucess');
        }
        return $this->renderForm('submitForm/new.html.twig',
        [
            'formcreated' => $formcreated,//$datas->getId(),
        ]);
    }
}