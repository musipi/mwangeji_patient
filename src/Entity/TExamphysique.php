<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TExamphysique
 *
 * @ORM\Table(name="t_examphysique")
 * @ORM\Entity
 */
class TExamphysique
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPhysique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphysique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tete", type="string", length=50, nullable=true)
     */
    private $tete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coup", type="string", length=50, nullable=true)
     */
    private $coup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coeurs", type="string", length=50, nullable=true)
     */
    private $coeurs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abdomen", type="string", length=50, nullable=true)
     */
    private $abdomen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateExamen", type="date", nullable=true)
     */
    private $dateexamen;

    public function getIdphysique(): ?int
    {
        return $this->idphysique;
    }

    public function getTete(): ?string
    {
        return $this->tete;
    }

    public function setTete(?string $tete): self
    {
        $this->tete = $tete;

        return $this;
    }

    public function getCoup(): ?string
    {
        return $this->coup;
    }

    public function setCoup(?string $coup): self
    {
        $this->coup = $coup;

        return $this;
    }

    public function getCoeurs(): ?string
    {
        return $this->coeurs;
    }

    public function setCoeurs(?string $coeurs): self
    {
        $this->coeurs = $coeurs;

        return $this;
    }

    public function getAbdomen(): ?string
    {
        return $this->abdomen;
    }

    public function setAbdomen(?string $abdomen): self
    {
        $this->abdomen = $abdomen;

        return $this;
    }

    public function getDateexamen(): ?\DateTimeInterface
    {
        return $this->dateexamen;
    }

    public function setDateexamen(?\DateTimeInterface $dateexamen): self
    {
        $this->dateexamen = $dateexamen;

        return $this;
    }


}
