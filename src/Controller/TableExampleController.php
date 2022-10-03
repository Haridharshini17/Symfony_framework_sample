<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\SymfonyExample;
use App\Repository\SymfonyExampleRepository;
use Symfony\Component\HttpFoundation\Request;

class TableExampleController extends AbstractController
{
    #[Route('/table/example', name: 'app_table_example')]
    
    public function createRecord(ManagerRegistry $doctrine): Response
        {
        
            $entityManager = $doctrine->getManager();
            $record = new SymfonyExample();
            $record->setName('Hema');
            $record->setAge(23);
            $entityManager->persist($record);
            $entityManager->flush();
                return new Response('Saved new record with id '.$record->getId());
            
        }
        #[Route('/record/{id}', name: 'product_show')]
    public function show(ManagerRegistry $doctrine, int $id): Response
        {
            $record = $doctrine->getRepository(SymfonyExample::class)->find($id);
            if(!$record){
                throw $this->createNotFoundException('Not found');
            }
            return new Response('Display record of given id:'.$record->getAge());
        }
     
        #simple example using senio/framework/bundle;
        #[Route('/products/{id}', name: 'product_shows')]
    public function shows(SymfonyExample $record): Response
        {
            return new Response('Display record of given id:'.$record->getName());
        }
//         #[Route('/record/Update', name: 'update_record')]
//     public function updateAction($productId)
//         {
//             $entityManager = $this->getDoctrine()->getManager();
//             $product = $entityManager->getRepository(Product::class)->find($productId);
//             if (!$product) 
//             {
//                 throw $this->createNotFoundException('No product found for id '.$productId);
//             }
//            $product->setName('New product name!');
//            $entityManager->flush();
//            return $this->redirectToRoute('homepage');
//         }
    
}