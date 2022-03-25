<?php

namespace App\Entity;

use App\Repository\RankingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RankingRepository::class)
 */
class Ranking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ScoreUpdateUser;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="ranking", cascade={"persist", "remove"})
     */
    private $userRanking;

    /**
     * @ORM\ManyToMany(targetEntity=Association::class, inversedBy="rankings")
     */
    private $associations;

    public function __construct()
    {
        $this->associations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScoreUpdateUser(): ?int
    {
        return $this->ScoreUpdateUser;
    }

    public function setScoreUpdateUser(int $ScoreUpdateUser): self
    {
        $this->ScoreUpdateUser = $ScoreUpdateUser;

        return $this;
    }

    public function getUserRanking(): ?User
    {
        return $this->userRanking;
    }

    public function setUserRanking(?User $userRanking): self
    {
        // unset the owning side of the relation if necessary
        if ($userRanking === null && $this->userRanking !== null) {
            $this->userRanking->setRanking(null);
        }

        // set the owning side of the relation if necessary
        if ($userRanking !== null && $userRanking->getRanking() !== $this) {
            $userRanking->setRanking($this);
        }

        $this->userRanking = $userRanking;

        return $this;
    }

    /**
     * @return Collection<int, Association>
     */
    public function getAssociations(): Collection
    {
        return $this->associations;
    }

    public function addAssociation(Association $association): self
    {
        if (!$this->associations->contains($association)) {
            $this->associations[] = $association;
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        $this->associations->removeElement($association);

        return $this;
    }
}
