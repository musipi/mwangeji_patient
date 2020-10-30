<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAgent
 *
 * @ORM\Table(name="t_agent", indexes={@ORM\Index(name="fk_depAgent", columns={"idDepartement"}), @ORM\Index(name="fk_fonction", columns={"idFonction"})})
 * @ORM\Entity
 */
class TAgent
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAgent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagent;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=100, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=30, nullable=true)
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grade", type="string", length=50, nullable=true)
     */
    private $grade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etatCivil", type="string", length=50, nullable=true)
     */
    private $etatcivil;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEngage", type="date", nullable=true)
     */
    private $dateengage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorieProfession", type="string", length=100, nullable=true)
     */
    private $categorieprofession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niveauEtude", type="string", length=50, nullable=true)
     */
    private $niveauetude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acteMotivation", type="string", length=200, nullable=true)
     */
    private $actemotivation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commissionAff", type="string", length=100, nullable=true)
     */
    private $commissionaff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salaire", type="string", length=10, nullable=true)
     */
    private $salaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prime", type="string", length=10, nullable=true)
     */
    private $prime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fonctionAdmin", type="string", length=50, nullable=true)
     */
    private $fonctionadmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule", type="string", length=20, nullable=true)
     */
    private $matricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageAgent", type="string", length=100, nullable=true)
     */
    private $imageagent;

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

    /**
     * @var \TFonction
     *
     * @ORM\ManyToOne(targetEntity="TFonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFonction", referencedColumnName="idFonction")
     * })
     */
    private $idfonction;

    public function getIdagent(): ?int
    {
        return $this->idagent;
    }

    public function getNomcomplet(): ?string
    {
        return $this->nomcomplet;
    }

    public function setNomcomplet(string $nomcomplet): self
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getEtatcivil(): ?string
    {
        return $this->etatcivil;
    }

    public function setEtatcivil(?string $etatcivil): self
    {
        $this->etatcivil = $etatcivil;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(?\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getDateengage(): ?\DateTimeInterface
    {
        return $this->dateengage;
    }

    public function setDateengage(?\DateTimeInterface $dateengage): self
    {
        $this->dateengage = $dateengage;

        return $this;
    }

    public function getCategorieprofession(): ?string
    {
        return $this->categorieprofession;
    }

    public function setCategorieprofession(?string $categorieprofession): self
    {
        $this->categorieprofession = $categorieprofession;

        return $this;
    }

    public function getNiveauetude(): ?string
    {
        return $this->niveauetude;
    }

    public function setNiveauetude(?string $niveauetude): self
    {
        $this->niveauetude = $niveauetude;

        return $this;
    }

    public function getActemotivation(): ?string
    {
        return $this->actemotivation;
    }

    public function setActemotivation(?string $actemotivation): self
    {
        $this->actemotivation = $actemotivation;

        return $this;
    }

    public function getCommissionaff(): ?string
    {
        return $this->commissionaff;
    }

    public function setCommissionaff(?string $commissionaff): self
    {
        $this->commissionaff = $commissionaff;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(?string $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getPrime(): ?string
    {
        return $this->prime;
    }

    public function setPrime(?string $prime): self
    {
        $this->prime = $prime;

        return $this;
    }

    public function getFonctionadmin(): ?string
    {
        return $this->fonctionadmin;
    }

    public function setFonctionadmin(?string $fonctionadmin): self
    {
        $this->fonctionadmin = $fonctionadmin;

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

    public function getImageagent(): ?string
    {
        return $this->imageagent;
    }

    public function setImageagent(?string $imageagent): self
    {
        $this->imageagent = $imageagent;

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

    public function getIdfonction(): ?TFonction
    {
        return $this->idfonction;
    }

    public function setIdfonction(?TFonction $idfonction): self
    {
        $this->idfonction = $idfonction;

        return $this;
    }


}
