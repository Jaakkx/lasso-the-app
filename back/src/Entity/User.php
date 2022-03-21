<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passworld;

    /**
     * @ORM\ManyToOne(targetEntity=Association::class, inversedBy="users")
     */
    private $associations;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class, inversedBy="users")
     */
    private $questions;

    /**
     * @ORM\ManyToOne(targetEntity=QuestionUser::class, inversedBy="users")
     */
    private $questionsUser;

    /**
     * @ORM\OneToOne(targetEntity=Ranking::class, inversedBy="userRanking", cascade={"persist", "remove"})
     */
    private $ranking;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->username;
    }

    public function setUserName(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassworld(): ?string
    {
        return $this->passworld;
    }

    public function setPassworld(string $passworld): self
    {
        $this->passworld = $passworld;

        return $this;
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

    public function getQuestions(): ?Question
    {
        return $this->questions;
    }

    public function setQuestions(?Question $questions): self
    {
        $this->questions = $questions;

        return $this;
    }

    public function getQuestionsUser(): ?QuestionUser
    {
        return $this->questionsUser;
    }

    public function setQuestionsUser(?QuestionUser $questionsUser): self
    {
        $this->questionsUser = $questionsUser;

        return $this;
    }

    public function getRanking(): ?Ranking
    {
        return $this->ranking;
    }

    public function setRanking(?Ranking $ranking): self
    {
        $this->ranking = $ranking;

        return $this;
    }

}
