<?php

namespace App\Entity;

use App\Repository\RegenerateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegenerateRepository::class)]
class Regenerate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $example_example = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExampleExample(): ?string
    {
        return $this->example_example;
    }

    public function setExampleExample(string $example_example): self
    {
        $this->example_example = $example_example;

        return $this;
    }
}
