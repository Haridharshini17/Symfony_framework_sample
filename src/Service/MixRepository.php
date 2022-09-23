<?php

namespace App\Service;

class MixRepository{

    public function welcomemessage(): string{
        
        $message = ['Hi Welcome to the lamp team'];
        $variable = array_rand($message);
        return $message[$variable];
    }
  
}