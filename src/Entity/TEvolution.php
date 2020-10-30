<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEvolution
 *
 * @ORM\Table(name="t_evolution", indexes={@ORM\Index(name="fk_evoluHosp", columns={"idHosp"}), @ORM\Index(name="fk_evoluPat", columns={"idPatient"})})
 * @ORM\Entity
 */
class TEvolution
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvolution", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevolution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evolution", type="string", length=150, nullable=true)
     */
    private $evolution;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEvolution", type="date", nullable=true)
     */
    private $dateevolution;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var \THospitalisation
     *
     * @ORM\ManyToOne(targetEntity="THospitalisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHosp", referencedColumnName="idHosp")
     * })
     */
    private $idhosp;

    /**
     * @var \TPatient
     *
     * @ORM\ManyToOne(targetEntity="TPatient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient", referencedColumnName="idPatient")
     * })
     */
    private $idpatient;

    public function getIdevolution(): ?int
    {
        return $this->idevolution;
    }

    public function getEvolution(): ?string
    {
        return $this->evolution;
    }

    public function setEvolution(?string $evolution): self
    {
        $this->evolution = $evolution;

        return $this;
    }

    public function getDateevolution(): ?\DateTimeInterface
    {
        return $this->dateevolution;
    }

    public function setDateevolution(?\DateTimeInterface $dateevolution): self
    {
        $this->dateevolution = $dateevolution;

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

    public function getIdhosp(): ?THospitalisation
    {
        return $this->idhosp;
    }

    public function setIdhosp(?THospitalisation $idhosp): self
    {
        $this->idhosp = $idhosp;

        return $this;
    }

    public function getIdpatient(): ?TPatient
    {
        return $this->idpatient;
    }

    public function setIdpatient(?TPatient $idpatient): self
    {
        $this->idpatient = $idpatient;

        return $this;
    }


}
