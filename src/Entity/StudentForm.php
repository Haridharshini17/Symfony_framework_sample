<?php
namespace App\Entity;

use Doctrine\DBAL\Types\DateType;
use Symfony\component\Validator\Constraints as Assert;

class StudentForm
{
    #[Assert\NotBlank()]
    protected $Name;
    #[Assert\NotBlank()]
    #[Assert\Type(\DateTime::class)]
    protected $Age;


    public function getName(): string
    {
        return $this->Name;
    }

    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }

    public function getDob(): ?\DateTime
    {
        return $this->Dob;

    }
    public function setDob(?\DateTime $Dob): void
    {
        $this->Dob = $Dob;
    }
}
?>