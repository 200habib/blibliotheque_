<?php

namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuteurRepository::class)]
class Auteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prénom = null;

    #[ORM\Column(length: 255)]
    private ?string $Date_de_naissance = null;

    #[ORM\Column(length: 255)]
    private ?string $Date_de_création = null;

    #[ORM\Column(length: 255)]
    private ?string $Date_de_modification = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrénom(): ?string
    {
        return $this->prénom;
    }

    public function setPrénom(string $prénom): static
    {
        $this->prénom = $prénom;

        return $this;
    }

    public function getDateDeNaissance(): ?string
    {
        return $this->Date_de_naissance;
    }

    public function setDateDeNaissance(string $Date_de_naissance): static
    {
        $this->Date_de_naissance = $Date_de_naissance;

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
