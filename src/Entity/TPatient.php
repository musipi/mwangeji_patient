<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\TType;
/**
 * TPatient
 *
 * @ORM\Table(name="t_patient", indexes={@ORM\Index(name="fk_pat", columns={"idType"})})
 * @ORM\Entity
 */
class TPatient
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPatient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpatient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=100, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genre", type="string", length=50, nullable=true)
     */
    private $genre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresseDomicile", type="string", length=120, nullable=true)
     */
    private $adressedomicile;

    /**
     *
     * @ORM\ManyToOne(targetEntity=TType:class)
     */
    
    private $TType;

    private $idtype;

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdressedomicile(): ?string
    {
        return $this->adressedomicile;
    }

    public function setAdressedomicile(?string $adressedomicile): self
    {
        $this->adressedomicile = $adressedomicile;

        return $this;
    }

    public function getIdtype(): ?TType
    {
        return $this->idtype;
    }

    public function setIdtype(?TType $idtype): self
    {
        $this->idtype = $idtype;

        return $this;
    }


}
