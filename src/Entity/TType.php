<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TType
 *
 * @ORM\Table(name="t_type", indexes={@ORM\Index(name="fk_type", columns={"idAbonner"})})
 * @ORM\Entity
 */
class TType
{
    /**
     * @var int
     *
     * @ORM\Column(name="idType", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prive", type="string", length=20, nullable=true)
     */
    private $prive;

    /**
     * @var \TAbonner
     *
     * @ORM\ManyToOne(targetEntity="TAbonner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAbonner", referencedColumnName="idAbonner")
     * })
     */
    private $idabonner;

    public function getIdtype(): ?int
    {
        return $this->idtype;
    }

    public function getPrive(): ?string
    {
        return $this->prive;
    }

    public function setPrive(?string $prive): self
    {
        $this->prive = $prive;

        return $this;
    }

    public function getIdabonner(): ?TAbonner
    {
        return $this->idabonner;
    }

    public function setIdabonner(?TAbonner $idabonner): self
    {
        $this->idabonner = $idabonner;

        return $this;
    }


}
