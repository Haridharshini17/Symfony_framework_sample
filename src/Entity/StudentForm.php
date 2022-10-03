<?php
namespace App\Entity;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Doctrine\DBAL\Types\DateType;

class StudentForm
{
    protected $Name;
    protected $Age;

    public function getName(): string
    {
        return $this->Name;
    }

    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }

    public function getDob(): DateType
    {
        return $this->Dob;
    }

    public function setDob(DateType $Dob): void
    {
        $this->Dob = $Dob;
    }
}
?>