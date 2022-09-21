<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route(' /', name: 'hello',)]
    public function greetings(): Response
    {
        $message = "SYMFONY World";
        return $this->render('message.html.twig',['message'=>$message]); 
    }
    // #[Route(' /nextpage', name: 'nextpage',)]
    // public function nextpage(): Response
    // {
    //     $nextpage = "Next page..Hi!!";
    //     return $this->render('message.html.twig',['message'=>$nextpage]);
    // }
    #[Route(' /nextpage/{slug}', name: 'examplepage', requirements: ['slug' => '\d+'])]//we can also present default value as /nextpage/{slug<\d+>?1}
    public function slugExample(int $slug = 1): Response
    {
        $nextpage = "Example page..Hello!!";
        return $this->render('message.html.twig',['message'=>$nextpage]);
    }
    #[Route(' /nextpage/{slug}', name: 'requirementpage',)]
    public function requirement(): Response
    {
        $nextpage = "Requirement Example page..Hello!!";
        return $this->render('message.html.twig',['message'=>$nextpage]);
    }
    #[Route(' /twigexample', name: 'twigpage',)]
    public function twigexample(): Response
    {
        $userName = 'Hari';
        $userAge = 20;
        return $this->render('user.html.twig',['user_name'=>$userName,'user_age'=>$userAge]);
    }
}
?>