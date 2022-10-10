<?php

namespace App\Controller;

use App\Form\Type\StudentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\StudentRegistration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

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
    #[Route('/exampleform/{id}', name: 'records_show')]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $records = $doctrine->getRepository(StudentRegistration::class)->find($id);

        if (!$records) {
            throw $this->createNotFoundException(
                'No record found'.$id
            );
        }

        return new Response('Required Record: '.$records->getStudentName()." ".$records->getAge());
    }
}