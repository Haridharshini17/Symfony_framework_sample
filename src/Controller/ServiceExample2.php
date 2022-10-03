<?php 

namespace App\Controller;

use App\Service\Example;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceExample2 extends AbstractController
{
    #[Route('/service/examples', name: 'service_examples')]
    public function new(Example $example)
    {
        $logger=$example->getMessage();
        return new response($logger);
    }
}
?>