<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="prioridades")
 */
class Prioridades
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer",unique=true)
     * @var int|null
     */
    private $numero;
    /**
     * @ORM\Column(type="string",unique=true)
     * @var string
     */
    private $abreviatura;
    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $descripcion;

    /**
     * @ORM\OneToOne(targetEntity="Empleados",mappedBy="empleados")
     * @ORM\JoinColumn(nullable=false)
     * @var Persona
     */
    private $responsable;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }
    public function getAbreviatura(): ?string
    {
        return $this->abreviatura;
    }
    public function setAbreviatura(string $abreviatura): void
    {
        $this->abreviatura = $abreviatura;
    }
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return Persona
     */
    public function getResponsable(): Persona
    {
        return $this->responsable;
    }

    /**
     * @param Persona $responsable
     */
    public function setResponsable(Persona $responsable): void
    {
        $this->responsable = $responsable;
    }


}