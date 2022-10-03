<?php 

 namespace App\Service;

 use Psr\Log\LoggerInterface;

 class LoggerService 
 {

    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function message()
    {
        $logger=$this->logger->info('Welcome to Lamp team');
        return $logger;
    }
 }