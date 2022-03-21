<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris", indexes={@ORM\Index(name="IDX_8933C432F68F41F7", columns={"user_favoris_id"}), @ORM\Index(name="IDX_8933C4324122538A", columns={"associations_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\FavorisRepository")
 */
class Favoris
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
     * @var \Association
     *
     * @ORM\ManyToOne(targetEntity="Association")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="associations_id", referencedColumnName="id")
     * })
     */
    private $associations;

    /**
     * @var \Favoris
     *
     * @ORM\ManyToOne(targetEntity="Favoris")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_favoris_id", referencedColumnName="id")
     * })
     */
    private $userFavoris;

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


}
