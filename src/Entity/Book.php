<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $date_de_publication = null;

    #[ORM\Column(length: 255)]
    private ?string $Date_de_création = null;

    #[ORM\Column(length: 255)]
    private ?string $Date_de_modification = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDePublication(): ?string
    {
        return $this->date_de_publication;
    }

    public function setDateDePublication(string $date_de_publication): static
    {
        $this->date_de_publication = $date_de_publication;

        return $this;
    }

    public function getDateDeCréation(): ?string
    {
        return $this->Date_de_création;
    }

    public function setDateDeCréation(string $Date_de_création): static
    {
        $this->Date_de_création = $Date_de_création;

        return $this;
    }

    public function getDateDeModification(): ?string
    {
        return $this->Date_de_modification;
    }

    public function setDateDeModification(string $Date_de_modification): static
    {
        $this->Date_de_modification = $Date_de_modification;

        return $this;
    }
}
