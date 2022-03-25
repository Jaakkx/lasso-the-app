<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionUser
 *
 * @ORM\Table(name="question_user")
 * @ORM\Entity(repositoryClass="App\Repository\QuestionUserRepository")
 */
class QuestionUser
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
     * @var string
     *
     * @ORM\Column(name="libelle_already_answer", type="string", length=255, nullable=false)
     */
    private $libelleAlreadyAnswer;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="questionsUser")
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
            $user->addQuestionsUser($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeQuestionsUser($this);
        }

        return $this;
    }

}
