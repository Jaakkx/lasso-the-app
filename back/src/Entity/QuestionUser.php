<?php

namespace App\Entity;

use App\Repository\QuestionUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionUserRepository::class)
 */
class QuestionUser
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
    private $libelleAlreadyAnswer;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="questionsUser")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleAlreadyAnswer(): ?string
    {
        return $this->libelleAlreadyAnswer;
    }

    public function setLibelleAlreadyAnswer(string $libelleAlreadyAnswer): self
    {
        $this->libelleAlreadyAnswer = $libelleAlreadyAnswer;

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
            $user->setQuestionsUser($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getQuestionsUser() === $this) {
                $user->setQuestionsUser(null);
            }
        }

        return $this;
    }
}
