<?php 

namespace App\Controller;

use App\Service\MergeService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class InjectedController extends AbstractController
{
      #[Route('/service/injectedexample', name: 'service_injected')]
      public function new(MergeService $merge)
      {
        $example = $merge->Message();
        var_dump($example);
        return  new response($example);
      }
}

