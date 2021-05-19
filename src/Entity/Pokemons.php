<?php

namespace App\Entity;

use App\Repository\PokemonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PokemonsRepository::class)
 */
class Pokemons
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Types::class)
     */
    private $types;

    /**
     * @ORM\ManyToMany(targetEntity=Dresseurs::class, inversedBy="pokemons")
     */
    private $Dresseur;

    public function __construct()
    {
        $this->pokeTypes = new ArrayCollection();
        $this->types = new ArrayCollection();
        $this->Dresseur = new ArrayCollection();
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
     * @return Collection|Types[]
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }

    public function addType(Types $type): self
    {
        if (!$this->types->contains($type)) {
            $this->types[] = $type;
        }

        return $this;
    }

    public function removeType(Types $type): self
    {
        $this->types->removeElement($type);

        return $this;
    }

    /**
     * @return Collection|Dresseurs[]
     */
    public function getDresseur(): Collection
    {
        return $this->Dresseur;
    }

    public function addDresseur(Dresseurs $dresseur): self
    {
        if (!$this->Dresseur->contains($dresseur)) {
            $this->Dresseur[] = $dresseur;
        }

        return $this;
    }

    public function removeDresseur(Dresseurs $dresseur): self
    {
        $this->Dresseur->removeElement($dresseur);

        return $this;
    }

    public function __toString(): string
    {
        return (string) $this->getName();
    }

   

}
