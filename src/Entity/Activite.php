<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomActivite = null;

    #[ORM\Column(length: 255)]
    private ?string $dureeActivite = null;

    #[ORM\Column(length: 255)]
    private ?string $tenueActivite = null;

    #[ORM\Column(length: 255)]
    private ?string $difficulteActivite = null;

    #[ORM\Column(length: 255)]
    private ?string $imageActivite = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionActivite = null;

    #[ORM\ManyToMany(targetEntity: Cours::class, mappedBy: 'activites')]
    private Collection $cours;

    
    public function __construct()
    {
        $this->cours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomActivite(): ?string
    {
        return $this->nomActivite;
    }

    public function setNomActivite(string $nomActivite): self
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    public function getDureeActivite(): ?string
    {
        return $this->dureeActivite;
    }

    public function setDureeActivite(string $dureeActivite): self
    {
        $this->dureeActivite = $dureeActivite;

        return $this;
    }

    public function getTenueActivite(): ?string
    {
        return $this->tenueActivite;
    }

    public function setTenueActivite(string $tenueActivite): self
    {
        $this->tenueActivite = $tenueActivite;

        return $this;
    }

    public function getDifficulteActivite(): ?string
    {
        return $this->difficulteActivite;
    }

    public function setDifficulteActivite(string $difficulteActivite): self
    {
        $this->difficulteActivite = $difficulteActivite;

        return $this;
    }

    public function getImageActivite(): ?string
    {
        return $this->imageActivite;
    }

    public function setImageActivite(string $imageActivite): self
    {
        $this->imageActivite = $imageActivite;

        return $this;
    }

    public function getDescriptionActivite(): ?string
    {
        return $this->descriptionActivite;
    }

    public function setDescriptionActivite(string $descriptionActivite): self
    {
        $this->descriptionActivite = $descriptionActivite;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
            $cour->addActivite($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->removeElement($cour)) {
            $cour->removeActivite($this);
        }

        return $this;
    }    

}
