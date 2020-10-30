<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TConsulation
 *
 * @ORM\Table(name="t_consulation", indexes={@ORM\Index(name="fk_AgentCons", columns={"idAgent"}), @ORM\Index(name="fk_signeCons", columns={"idSigneV"})})
 * @ORM\Entity
 */
class TConsulation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idConsult", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsult;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateConsultation", type="date", nullable=true)
     */
    private $dateconsultation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="antecedant", type="string", length=150, nullable=true)
     */
    private $antecedant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anamnese", type="string", length=150, nullable=true)
     */
    private $anamnese;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complementAnamnese", type="string", length=150, nullable=true)
     */
    private $complementanamnese;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conclusion", type="string", length=150, nullable=true)
     */
    private $conclusion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

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
     * @var \TSignev
     *
     * @ORM\ManyToOne(targetEntity="TSignev")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSigneV", referencedColumnName="idSigne")
     * })
     */
    private $idsignev;

    public function getIdconsult(): ?int
    {
        return $this->idconsult;
    }

    public function getDateconsultation(): ?\DateTimeInterface
    {
        return $this->dateconsultation;
    }

    public function setDateconsultation(?\DateTimeInterface $dateconsultation): self
    {
        $this->dateconsultation = $dateconsultation;

        return $this;
    }

    public function getAntecedant(): ?string
    {
        return $this->antecedant;
    }

    public function setAntecedant(?string $antecedant): self
    {
        $this->antecedant = $antecedant;

        return $this;
    }

    public function getAnamnese(): ?string
    {
        return $this->anamnese;
    }

    public function setAnamnese(?string $anamnese): self
    {
        $this->anamnese = $anamnese;

        return $this;
    }

    public function getComplementanamnese(): ?string
    {
        return $this->complementanamnese;
    }

    public function setComplementanamnese(?string $complementanamnese): self
    {
        $this->complementanamnese = $complementanamnese;

        return $this;
    }

    public function getConclusion(): ?string
    {
        return $this->conclusion;
    }

    public function setConclusion(?string $conclusion): self
    {
        $this->conclusion = $conclusion;

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

    public function getIdagent(): ?TAgent
    {
        return $this->idagent;
    }

    public function setIdagent(?TAgent $idagent): self
    {
        $this->idagent = $idagent;

        return $this;
    }

    public function getIdsignev(): ?TSignev
    {
        return $this->idsignev;
    }

    public function setIdsignev(?TSignev $idsignev): self
    {
        $this->idsignev = $idsignev;

        return $this;
    }


}
