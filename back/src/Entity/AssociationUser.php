<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AssociationUser
 *
 * @ORM\Table(name="association_user")
 * @ORM\Entity(repositoryClass="App\Repository\AssociationUserRepository")
 */
class AssociationUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="score_update_user", type="integer", nullable=false)
     */
    private $scoreUpdateUser;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="associationUsers")
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $associationName;

    /**
     * @ORM\Column(type="integer")
     */
    private $associationId;

    /**
     * @ORM\Column(type="string", length=4000)
     */
    private $associationDescription;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScoreUpdateUser(): ?int
    {
        return $this->scoreUpdateUser;
    }

    public function setScoreUpdateUser(int $scoreUpdateUser): self
    {
        $this->scoreUpdateUser = $scoreUpdateUser;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function getAssociationName(): ?string
    {
        return $this->associationName;
    }

    public function setAssociationName(string $associationName): self
    {
        $this->associationName = $associationName;

        return $this;
    }

    public function getAssociationId(): ?int
    {
        return $this->associationId;
    }

    public function setAssociationId(int $associationId): self
    {
        $this->associationId = $associationId;

        return $this;
    }

    public function getAssociationDescription(): ?string
    {
        return $this->associationDescription;
    }

    public function setAssociationDescription(string $associationDescription): self
    {
        $this->associationDescription = $associationDescription;

        return $this;
    }


}
