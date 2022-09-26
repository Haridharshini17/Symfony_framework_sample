<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\EmployeeInformation;

class EmployeeController extends AbstractController
{
    #[Route('/create/employee', name: 'add_employee')]
    public function create(ManagerRegistry $doctrine): Response
    {
        $data = $doctrine->getManager();
        $record = new EmployeeInformation();
        $record->setName("sivaKumar");
        $record->setAge(22);
        $record->setDesignation('Software Developer');
        $record->setEducation('BE');
        $record->setCity('Coimbatore');
        $data->persist($record);
        $data->flush();
         return new Response('saved new record with id:'.$record->getId());     
   }
    #[Route('/show/employee/{id}', name: 'show_employee')]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $record = $doctrine->getRepository(EmployeeInformation::class)->find($id);
        if(!$record)
        {
            throw $this->createNotFoundException('Not found');
        }
           return new Response('DATAS:'.$record->getName()  .$record->getAge() .$record->getDesignation() .$record->getEducation() .$record->getCity());
    }
    #[Route('/update/employee/{id}', name: 'update_employee')]
    public function update(ManagerRegistry $doctrine ,$id): Response
    {
        $data = $doctrine->getManager();
        $record = $data->getRepository(EmployeeInformation::class)->find($id);
        if (!$record) 
        {
            throw $this->createNotFoundException('No record found for id '.$id );
        }
        $record->setName('Keerthi');
        $data->flush();
        return $this->redirectToRoute('show_employee',
        ['id'=>$record->getid($id)]);
    }
    #[Route('/delete/employee/{id}', name: 'delete_employee')]
    public function delete(ManagerRegistry $doctrine, $id): Response
    {
        $data = $doctrine->getManager();
        $record = $doctrine->getRepository(EmployeeInformation::class)->find($id);
        if(!$record)
        {
            throw $this->createNotFoundException('Not Found');
        }
        $data->remove($record);
        $data->flush();
        return $this->redirectToRoute('nextpage');
    }
}