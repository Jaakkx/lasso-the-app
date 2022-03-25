<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="IDX_8D93D649BCB134CE", columns={"questions_id"}),  @ORM\Index(name="IDX_8D93D6494122538A", columns={"associations_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements \Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface
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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \Association
     *
     * @ORM\ManyToOne(targetEntity="Association")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="associations_id", referencedColumnName="id")
     * })
     */
    private $associations;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questions_id", referencedColumnName="id")
     * })
     */
    private $questions;


    /**
     * @ORM\ManyToMany(targetEntity=AssociationUser::class, mappedBy="users")
     */
    private $associationUsers;

    /**
     * @ORM\ManyToMany(targetEntity=QuestionUser::class, inversedBy="users")
     */
    private $questionsUser;

    /**
     * @ORM\OneToMany(targetEntity=Favoris::class, mappedBy="favUser")
     */
    private $UserFav;


    public function __construct()
    {
        $this->associationUsers = new ArrayCollection();
        $this->questionsUser = new ArrayCollection();
        $this->UserFav = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    /**
     * @return Collection<int, AssociationUser>
     */
    public function getAssociationUsers(): Collection
    {
        return $this->associationUsers;
    }

    public function addAssociationUser(AssociationUser $associationUser): self
    {
        if (!$this->associationUsers->contains($associationUser)) {
            $this->associationUsers[] = $associationUser;
            $associationUser->addUser($this);
        }

        return $this;
    }

    public function removeAssociationUser(AssociationUser $associationUser): self
    {
        if ($this->associationUsers->removeElement($associationUser)) {
            $associationUser->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, QuestionUser>
     */
    public function getQuestionsUser(): Collection
    {
        return $this->questionsUser;
    }

    public function addQuestionsUser(QuestionUser $questionsUser): self
    {
        if (!$this->questionsUser->contains($questionsUser)) {
            $this->questionsUser[] = $questionsUser;
        }

        return $this;
    }

    public function removeQuestionsUser(QuestionUser $questionsUser): self
    {
        $this->questionsUser->removeElement($questionsUser);

        return $this;
    }

    /**
     * @return Collection<int, Favoris>
     */
    public function getUserFav(): Collection
    {
        return $this->UserFav;
    }

    public function addUserFav(Favoris $userFav): self
    {
        if (!$this->UserFav->contains($userFav)) {
            $this->UserFav[] = $userFav;
            $userFav->setFavUser($this);
        }
        return $this;
    }

    public function removeUserFav(Favoris $userFav): self
    {
        if ($this->UserFav->removeElement($userFav)) {
            // set the owning side to null (unless already changed)
            if ($userFav->getFavUser() === $this) {
                $userFav->setFavUser(null);
            }
        }

        return $this;
    }


}
