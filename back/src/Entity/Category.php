<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     *
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Association", mappedBy="category")
     */
    private $association;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->association = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection<int, Association>
     */
    public function getAssociation(): Collection
    {
        return $this->association;
    }

    public function addAssociation(Association $association): self
    {
        if (!$this->association->contains($association)) {
            $this->association[] = $association;
            $association->addCategory($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->association->removeElement($association)) {
            $association->removeCategory($this);
        }

        return $this;
    }

}
