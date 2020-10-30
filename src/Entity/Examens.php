<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examens
 *
 * @ORM\Table(name="examens", indexes={@ORM\Index(name="fk_phys", columns={"idPhysique"}), @ORM\Index(name="fk_exam", columns={"idAgent"}), @ORM\Index(name="fk_exaPara", columns={"idExampara"}), @ORM\Index(name="fk_exaPat", columns={"idPatient"})})
 * @ORM\Entity
 */
class Examens
{
    /**
     * @var int
     *
     * @ORM\Column(name="idExamen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexamen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomExamen", type="string", length=50, nullable=true)
     */
    private $nomexamen;

    /**
     * @var \TExampara
     *
     * @ORM\ManyToOne(targetEntity="TExampara")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idExampara", referencedColumnName="idExampara")
     * })
     */
    private $idexampara;

    /**
     * @var \TPatient
     *
     * @ORM\ManyToOne(targetEntity="TPatient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient", referencedColumnName="idPatient")
     * })
     */
    private $idpatient;

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
     * @var \TExamphysique
     *
     * @ORM\ManyToOne(targetEntity="TExamphysique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPhysique", referencedColumnName="idPhysique")
     * })
     */
    private $idphysique;

    public function getIdexamen(): ?int
    {
        return $this->idexamen;
    }

    public function getNomexamen(): ?string
    {
        return $this->nomexamen;
    }

    public function setNomexamen(?string $nomexamen): self
    {
        $this->nomexamen = $nomexamen;

        return $this;
    }

    public function getIdexampara(): ?TExampara
    {
        return $this->idexampara;
    }

    public function setIdexampara(?TExampara $idexampara): self
    {
        $this->idexampara = $idexampara;

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

    public function getIdagent(): ?TAgent
    {
        return $this->idagent;
    }

    public function setIdagent(?TAgent $idagent): self
    {
        $this->idagent = $idagent;

        return $this;
    }

    public function getIdphysique(): ?TExamphysique
    {
        return $this->idphysique;
    }

    public function setIdphysique(?TExamphysique $idphysique): self
    {
        $this->idphysique = $idphysique;

        return $this;
    }


}
