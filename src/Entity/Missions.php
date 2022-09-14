<?php

namespace App\Entity;

use App\Repository\MissionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: MissionsRepository::class)]
class Missions
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
    private ?string $nom_de_code = null;

    #[ORM\Column(length: 255)]
    private ?string $pays = null;


    #[ORM\Column(length: 255)]
    private ?string $type_mission = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\ManyToOne(inversedBy: 'missions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?AgentsSpe $AgentsSpec = null;

    #[ORM\ManyToOne(inversedBy: 'missions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contacts $Contacts = null;

    #[ORM\ManyToOne(inversedBy: 'missions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cibles $Cibles = null;

    #[ORM\ManyToOne(inversedBy: 'missions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Planques $Planques = null;

    #[ORM\ManyToOne(inversedBy: 'missions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Skills $Skills = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNomDeCode(): ?string
    {
        return $this->nom_de_code;
    }

    public function setNomDeCode(string $nom_de_code): self
    {
        $this->nom_de_code = $nom_de_code;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }


    public function getTypeMission(): ?string
    {
        return $this->type_mission;
    }

    public function setTypeMission(string $type_mission): self
    {
        $this->type_mission = $type_mission;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
  

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getAgentsSpec(): ?AgentsSpe
    {
        return $this->AgentsSpec;
    }

    public function setAgentsSpec(?AgentsSpe $AgentsSpec): self
    {
        $this->AgentsSpec = $AgentsSpec;

        return $this;
    }

    public function getContacts(): ?Contacts
    {
        return $this->Contacts;
    }

    public function setContacts(?Contacts $Contacts): self
    {
        $this->Contacts = $Contacts;

        return $this;
    }

    public function getCibles(): ?Cibles
    {
        return $this->Cibles;
    }

    public function setCibles(?Cibles $Cibles): self
    {
        $this->Cibles = $Cibles;

        return $this;
    }

    public function getPlanques(): ?Planques
    {
        return $this->Planques;
    }

    public function setPlanques(?Planques $Planques): self
    {
        $this->Planques = $Planques;

        return $this;
    }

    public function getSkills(): ?Skills
    {
        return $this->Skills;
    }

    public function setSkills(?Skills $Skills): self
    {
        $this->Skills = $Skills;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    
}
