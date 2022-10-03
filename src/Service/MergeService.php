<?php
namespace App\Service;

use App\Service\Example;
use Psr\Log\LoggerInterface;

class MergeService
{
    private $example;
    private $logger;

    public function __construct(Example $example,LoggerInterface $logger)
    {
        $this->example = $example;
        $this->logger = $logger;
    }

    public function Message()
    {
        $Message = $this->example->getMessage();
        $loggers = $this->logger->info('helooo').$Message;
        return $loggers;
    }
}
?>