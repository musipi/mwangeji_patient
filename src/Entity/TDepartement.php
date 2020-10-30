<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDepartement
 *
 * @ORM\Table(name="t_departement")
 * @ORM\Entity
 */
class TDepartement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idDepartement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepartement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomDepartement", type="string", length=50, nullable=true)
     */
    private $nomdepartement;

    public function getIddepartement(): ?int
    {
        return $this->iddepartement;
    }

    public function getNomdepartement(): ?string
    {
        return $this->nomdepartement;
    }

    public function setNomdepartement(?string $nomdepartement): self
    {
        $this->nomdepartement = $nomdepartement;

        return $this;
    }


}
