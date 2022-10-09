<?php

namespace App\Entity;

use App\Repository\StudentRegistrationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRegistrationRepository::class)]
class StudentRegistration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $StudentName = null;

    #[ORM\Column]
    private ?int $Age = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentName(): ?string
    {
        return $this->StudentName;
    }

    public function setStudentName(string $StudentName): self
    {
        $this->StudentName = $StudentName;

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

//     public function getSubjectGroup(): ?string
//     {
//         return $this->SubjectGroup;
//     }

//     public function setSubjectGroup(string $SubjectGroup): self
//     {
//         $this->SubjectGroup = $SubjectGroup;

//         return $this;
//     }
}
