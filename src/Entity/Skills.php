<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillsRepository::class)]
class Skills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'skills', targetEntity: AgentsSpe::class)]
    private Collection $agentsSpes;

    #[ORM\OneToMany(mappedBy: 'Skills', targetEntity: Missions::class)]
    private Collection $missions;

    public function __construct()
    {
        $this->agentsSpes = new ArrayCollection();
        $this->missions = new ArrayCollection();
    }

    public function __toString()
    {
        return $this -> getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, AgentsSpe>
     */
    public function getAgentsSpes(): Collection
    {
        return $this->agentsSpes;
    }

    public function addAgentsSpe(AgentsSpe $agentsSpe): self
    {
        if (!$this->agentsSpes->contains($agentsSpe)) {
            $this->agentsSpes->add($agentsSpe);
            $agentsSpe->setSkills($this);
        }

        return $this;
    }

    public function removeAgentsSpe(AgentsSpe $agentsSpe): self
    {
        if ($this->agentsSpes->removeElement($agentsSpe)) {
            // set the owning side to null (unless already changed)
            if ($agentsSpe->getSkills() === $this) {
                $agentsSpe->setSkills(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Missions>
     */
    public function getMissions(): Collection
    {
        return $this->missions;
    }

    public function addMission(Missions $mission): self
    {
        if (!$this->missions->contains($mission)) {
            $this->missions->add($mission);
            $mission->setSkills($this);
        }

        return $this;
    }

    public function removeMission(Missions $mission): self
    {
        if ($this->missions->removeElement($mission)) {
            // set the owning side to null (unless already changed)
            if ($mission->getSkills() === $this) {
                $mission->setSkills(null);
            }
        }

        return $this;
    }
}
