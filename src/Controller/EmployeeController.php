<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\EmployeeInformation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Validator\EmployeeInformationValidator;
use PhpParser\Node\Stmt\Return_;

use function Symfony\Component\DependencyInjection\Loader\Configurator\param;

class EmployeeController extends AbstractController
{
    #[Route('/employee/create', name: 'add_employee')]
    public function create(ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $data = $doctrine->getManager();
        $record = new EmployeeInformation();
        $errors = $validator->validate($record);
        if(count($errors)>0){
            echo false;
        }
        else{
        $record->setName('pranavi');
        $record->setAge(22);
        $record->setDesignation('Software Developer');
        $record->setEducation('BE');
        $record->setCity('Coimbatore');
        $data->persist($record);
        $data->flush();
        return new Response('saved new record with id:'.$record->getId());     
       }
    }
    
    #[Route('/employee/show/{id}', name: 'show_employee')]
    public function show(ManagerRegistry $doctrine,  $id): Response
    {

        $record = $doctrine->getRepository(EmployeeInformation::class)->find($id);
        // $connection = $record->prepare();
        // $connection->execute();
        // $connection->fetchAll();die;
        if(!$record)
        {
            throw $this->createNotFoundException('Not found');
        }
        // return new Response($connection);
       return new Response('DATAS:'.$record->getName()  .$record->getAge() .$record->getDesignation() .$record->getEducation() .$record->getCity());
    }
    #[Route('/employee/update/{id}', name: 'update_employee')]
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
    #[Route('/employee/delete/{id}', name: 'delete_employee')]
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
    ##EXAMPLE FOR THERE NO COLUMN NAMECITY IN TABLE BUT BY USING METHODS WE CAN ADD FOR THIS DOCTRINE HELPS
    #[Route('/employee/merge/{id}', name: 'delete_employee')]
    public function merge(ManagerRegistry $doctrine, $id): Response
    {
          $data = $doctrine->getManager();
          $record = $doctrine->getRepository(EmployeeInformation::class)->find($id);
          if(!$record)
          {
             throw $this->createNotFoundException('Not Found');
          }
          return new Response('Datas:'.$record->getNameCity());

    }
    #[Route('/employee/show', name: 'show_allemployee')]
    public function showAll(ManagerRegistry $doctrine): Response
    {
        $record = $doctrine->getRepository(EmployeeInformation::class)->findAll();
        return $this->render('display.html.twig', array('data' => $record));   
    }
}