<?php
// src/Entity/Auteur.php
namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuteurRepository::class)]
class Auteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $prénom = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $dateDeNaissance = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $dateDeCréation = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $dateDeModification = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrénom(): ?string
    {
        return $this->prénom;
    }

    public function setPrénom(string $prénom): self
    {
        $this->prénom = $prénom;
        return $this;
    }

    public function getDateDeNaissance(): ?\DateTime
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTime $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;
        return $this;
    }

    public function getDateDeCréation(): ?\DateTime
    {
        return $this->dateDeCréation;
    }

    public function setDateDeCréation(\DateTime $dateDeCréation): self
    {
        $this->dateDeCréation = $dateDeCréation;
        return $this;
    }

    public function getDateDeModification(): ?\DateTime
    {
        return $this->dateDeModification;
    }

    public function setDateDeModification(\DateTime $dateDeModification): self
    {
        $this->dateDeModification = $dateDeModification;
        return $this;
    }
}
