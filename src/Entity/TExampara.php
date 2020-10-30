<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TExampara
 *
 * @ORM\Table(name="t_exampara", indexes={@ORM\Index(name="fk_para", columns={"idDepartement"})})
 * @ORM\Entity
 */
class TExampara
{
    /**
     * @var int
     *
     * @ORM\Column(name="idExampara", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexampara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nomExamen", type="integer", nullable=true)
     */
    private $nomexamen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateExamen", type="date", nullable=true)
     */
    private $dateexamen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var \TDepartement
     *
     * @ORM\ManyToOne(targetEntity="TDepartement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartement", referencedColumnName="idDepartement")
     * })
     */
    private $iddepartement;

    public function getIdexampara(): ?int
    {
        return $this->idexampara;
    }

    public function getNomexamen(): ?int
    {
        return $this->nomexamen;
    }

    public function setNomexamen(?int $nomexamen): self
    {
        $this->nomexamen = $nomexamen;

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

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIddepartement(): ?TDepartement
    {
        return $this->iddepartement;
    }

    public function setIddepartement(?TDepartement $iddepartement): self
    {
        $this->iddepartement = $iddepartement;

        return $this;
    }


}
