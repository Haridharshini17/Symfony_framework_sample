<?php

namespace App\Entity;

use App\Repository\EmployeeInformationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeInformationRepository::class)]
class EmployeeInformation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?int $Age = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Designation = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Education = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $City = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->Designation;
    }

    public function setDesignation(string $Designation): self
    {
        $this->Designation = $Designation;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->Education;
    }

    public function setEducation(string $Education): self
    {
        $this->Education = $Education;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

        return $this;
    }
    ##EXAMPLE FOR THERE NO COLUMN NAMECITY IN TABLE BUT BY USING METHODS WE CAN ADD FOR THIS DOCTRINE HELPS
    public function getNameCity(): ?string
    {
        return $this->getName().' '.$this->getAge();
    }
    public function prepare()
    {
        $sql = 'SELECT *FROM employee_information WHERE id = 3';
        return $this->prepare($sql);
    }
}
