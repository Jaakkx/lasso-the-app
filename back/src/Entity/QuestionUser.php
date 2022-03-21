<?php

namespace App\Entity;

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


}
