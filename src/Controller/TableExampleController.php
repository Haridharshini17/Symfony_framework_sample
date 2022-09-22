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
    
        public function createProduct(ManagerRegistry $doctrine): Response
        {
            $entityManager = $doctrine->getManager();
    
            $product = new SymfonyExample();
            $product->setName('jothi');
            $product->setAge(23);
            
    
            $entityManager->persist($product);
    
            $entityManager->flush();
    
            return new Response('Saved new product with id '.$product->getId());
        }
        // return $this->render('table_example/index.html.twig', [
        //     'controller_name' => 'TableExampleController',
        // ]);
}
