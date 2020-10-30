<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAbonner
 *
 * @ORM\Table(name="t_abonner")
 * @ORM\Entity
 */
class TAbonner
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAbonner", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomSociete", type="string", length=50, nullable=true)
     */
    private $nomsociete;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numeroBon", type="integer", nullable=true)
     */
    private $numerobon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule", type="string", length=50, nullable=true)
     */
    private $matricule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    public function getIdabonner(): ?int
    {
        return $this->idabonner;
    }

    public function getNomsociete(): ?string
    {
        return $this->nomsociete;
    }

    public function setNomsociete(?string $nomsociete): self
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    public function getNumerobon(): ?int
    {
        return $this->numerobon;
    }

    public function setNumerobon(?int $numerobon): self
    {
        $this->numerobon = $numerobon;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
