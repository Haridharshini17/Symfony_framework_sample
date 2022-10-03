<?php 

namespace App\Controller;

use App\Service\Example;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceExample extends AbstractController
{
    #[Route('/service/example', name: 'service_example')]
    public function new(Example $example)
     {
        $logger=$example->getMessage();
        return new response($logger);
    }
}
?>