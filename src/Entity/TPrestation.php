<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPrestation
 *
 * @ORM\Table(name="t_prestation", indexes={@ORM\Index(name="fk_hospPres", columns={"idHosp"})})
 * @ORM\Entity
 */
class TPrestation
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="idPatient", type="integer", nullable=true)
     */
    private $idpatient;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datePrest", type="date", nullable=true)
     */
    private $dateprest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prestation", type="string", length=100, nullable=true)
     */
    private $prestation;

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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TPatient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPrestation", referencedColumnName="idPatient")
     * })
     */
    private $idprestation;

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
    }

    public function setIdpatient(?int $idpatient): self
    {
        $this->idpatient = $idpatient;

        return $this;
    }

    public function getDateprest(): ?\DateTimeInterface
    {
        return $this->dateprest;
    }

    public function setDateprest(?\DateTimeInterface $dateprest): self
    {
        $this->dateprest = $dateprest;

        return $this;
    }

    public function getPrestation(): ?string
    {
        return $this->prestation;
    }

    public function setPrestation(?string $prestation): self
    {
        $this->prestation = $prestation;

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

    public function getIdprestation(): ?TPatient
    {
        return $this->idprestation;
    }

    public function setIdprestation(?TPatient $idprestation): self
    {
        $this->idprestation = $idprestation;

        return $this;
    }


}
