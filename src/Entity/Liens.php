<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LiensRepository")
 */
class Liens
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $URL;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;


    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $TAGS;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(string $URL): self
    {
        $this->URL = $URL;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTAGS(): ?string
    {
        return $this->TAGS;
    }

    public function setTAGS(?string $TAGS): self
    {
        $this->TAGS = $TAGS;

        return $this;
    }


}
