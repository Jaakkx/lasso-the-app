<?php

namespace App\Entity;

use App\Repository\FavorisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FavorisRepository::class)
 */
class Favoris
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Association::class, inversedBy="favoris")
     */
    private $associations;

    /**
     * @ORM\ManyToOne(targetEntity=Favoris::class, inversedBy="favoris")
     */
    private $userFavoris;

    /**
     * @ORM\OneToMany(targetEntity=Favoris::class, mappedBy="userFavoris")
     */
    private $favoris;

    public function __construct()
    {
        $this->favoris = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssociations(): ?Association
    {
        return $this->associations;
    }

    public function setAssociations(?Association $associations): self
    {
        $this->associations = $associations;

        return $this;
    }

    public function getUserFavoris(): ?self
    {
        return $this->userFavoris;
    }

    public function setUserFavoris(?self $userFavoris): self
    {
        $this->userFavoris = $userFavoris;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(self $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris[] = $favori;
            $favori->setUserFavoris($this);
        }

        return $this;
    }

    public function removeFavori(self $favori): self
    {
        if ($this->favoris->removeElement($favori)) {
            // set the owning side to null (unless already changed)
            if ($favori->getUserFavoris() === $this) {
                $favori->setUserFavoris(null);
            }
        }

        return $this;
    }

}
