<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity;
use App\Entity\SymfonyExample;

class TableExampleController extends AbstractController
{
    #[Route('/table/example', name: 'app_table_example')]
    
        public function createRecord(ManagerRegistry $doctrine): Response
        {
            $entityManager = $doctrine->getManager();
    
            $record = new SymfonyExample();
            $record->setName('jothi');
            $record->setAge(23);
            
    
            $entityManager->persist($record);
    
            $entityManager->flush();
    
            return new Response('Saved new record with id '.$record->getId());
        }
        // return $this->render('table_example/index.html.twig', [
        //     'controller_name' => 'TableExampleController',
        // ]);
}
