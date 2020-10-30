<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THospitalisation
 *
 * @ORM\Table(name="t_hospitalisation", indexes={@ORM\Index(name="fk_DepHosp", columns={"service"}), @ORM\Index(name="fk_agentHosp", columns={"idAgent"}), @ORM\Index(name="fk_hospPat", columns={"idPatient"})})
 * @ORM\Entity
 */
class THospitalisation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idHosp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhosp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomConjoint", type="string", length=50, nullable=true)
     */
    private $nomconjoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionConjoint", type="string", length=50, nullable=true)
     */
    private $professionconjoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagnostic", type="string", length=50, nullable=true)
     */
    private $diagnostic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numDossier", type="integer", nullable=true)
     */
    private $numdossier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numAdmission", type="integer", nullable=true)
     */
    private $numadmission;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numLit", type="integer", nullable=true)
     */
    private $numlit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEntre", type="date", nullable=true)
     */
    private $dateentre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateSortie", type="date", nullable=true)
     */
    private $datesortie;

    /**
     * @var \TDepartement
     *
     * @ORM\ManyToOne(targetEntity="TDepartement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service", referencedColumnName="idDepartement")
     * })
     */
    private $service;

    /**
     * @var \TAgent
     *
     * @ORM\ManyToOne(targetEntity="TAgent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgent", referencedColumnName="idAgent")
     * })
     */
    private $idagent;

    /**
     * @var \TPatient
     *
     * @ORM\ManyToOne(targetEntity="TPatient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient", referencedColumnName="idPatient")
     * })
     */
    private $idpatient;

    public function getIdhosp(): ?int
    {
        return $this->idhosp;
    }

    public function getNomconjoint(): ?string
    {
        return $this->nomconjoint;
    }

    public function setNomconjoint(?string $nomconjoint): self
    {
        $this->nomconjoint = $nomconjoint;

        return $this;
    }

    public function getProfessionconjoint(): ?string
    {
        return $this->professionconjoint;
    }

    public function setProfessionconjoint(?string $professionconjoint): self
    {
        $this->professionconjoint = $professionconjoint;

        return $this;
    }

    public function getDiagnostic(): ?string
    {
        return $this->diagnostic;
    }

    public function setDiagnostic(?string $diagnostic): self
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    public function getNumdossier(): ?int
    {
        return $this->numdossier;
    }

    public function setNumdossier(?int $numdossier): self
    {
        $this->numdossier = $numdossier;

        return $this;
    }

    public function getNumadmission(): ?int
    {
        return $this->numadmission;
    }

    public function setNumadmission(?int $numadmission): self
    {
        $this->numadmission = $numadmission;

        return $this;
    }

    public function getNumlit(): ?int
    {
        return $this->numlit;
    }

    public function setNumlit(?int $numlit): self
    {
        $this->numlit = $numlit;

        return $this;
    }

    public function getDateentre(): ?\DateTimeInterface
    {
        return $this->dateentre;
    }

    public function setDateentre(?\DateTimeInterface $dateentre): self
    {
        $this->dateentre = $dateentre;

        return $this;
    }

    public function getDatesortie(): ?\DateTimeInterface
    {
        return $this->datesortie;
    }

    public function setDatesortie(?\DateTimeInterface $datesortie): self
    {
        $this->datesortie = $datesortie;

        return $this;
    }

    public function getService(): ?TDepartement
    {
        return $this->service;
    }

    public function setService(?TDepartement $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getIdagent(): ?TAgent
    {
        return $this->idagent;
    }

    public function setIdagent(?TAgent $idagent): self
    {
        $this->idagent = $idagent;

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
