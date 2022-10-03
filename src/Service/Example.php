<?php

namespace App\Service;

class Example
{
    public function getMessage(): string
    {
        $messages = ['Hello,Welcome to the page'];
        $index = array_rand($messages);
        return $messages[$index];
    }
}