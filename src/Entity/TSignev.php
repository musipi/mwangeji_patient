<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TSignev
 *
 * @ORM\Table(name="t_signev", indexes={@ORM\Index(name="fk_patSign", columns={"idPatient"}), @ORM\Index(name="fk_agent", columns={"idAgent"})})
 * @ORM\Entity
 */
class TSignev
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSigne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsigne;

    /**
     * @var int|null
     *
     * @ORM\Column(name="temperature", type="integer", nullable=true)
     */
    private $temperature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tensionArt", type="integer", nullable=true)
     */
    private $tensionart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="poids", type="integer", nullable=true)
     */
    private $poids;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numeroEnregistre", type="integer", nullable=true)
     */
    private $numeroenregistre;

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

    public function getIdsigne(): ?int
    {
        return $this->idsigne;
    }

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(?int $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getTensionart(): ?int
    {
        return $this->tensionart;
    }

    public function setTensionart(?int $tensionart): self
    {
        $this->tensionart = $tensionart;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;

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

    public function getNumeroenregistre(): ?int
    {
        return $this->numeroenregistre;
    }

    public function setNumeroenregistre(?int $numeroenregistre): self
    {
        $this->numeroenregistre = $numeroenregistre;

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
