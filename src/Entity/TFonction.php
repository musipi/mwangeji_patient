<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFonction
 *
 * @ORM\Table(name="t_fonction")
 * @ORM\Entity
 */
class TFonction
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFonction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomFonction", type="string", length=100, nullable=true)
     */
    private $nomfonction;

    public function getIdfonction(): ?int
    {
        return $this->idfonction;
    }

    public function getNomfonction(): ?string
    {
        return $this->nomfonction;
    }

    public function setNomfonction(?string $nomfonction): self
    {
        $this->nomfonction = $nomfonction;

        return $this;
    }


}
