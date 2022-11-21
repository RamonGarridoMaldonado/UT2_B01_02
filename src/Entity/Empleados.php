<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="empleados")
 */
class Empleados
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer",unique=true)
     * @var int|null
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",unique=true)
     */
    private $nombre;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $apellidos;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    private $fechaNacimiento;

    /**
     * @var boolean
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $estaActivo;

    /**
     * @ORM\ManyToOne(targetEntity="Empleados",inversedBy="empleados")
     * @ORM\JoinColumn(nullable=false)
     * @var Empleados
     */
    private $sustituto;

    /**
     * @ORM\OneToOne(targetEntity="Prioridades",mappedBy="responsable")
     * @var Persona
     */
    private $empleados;


    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): Empleados
    {
        $this->nombre = $nombre;
        return $this;
    }


    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): Empleados
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getFechaNacimiento(): ?DateTime
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(DateTime $fechaNacimiento): Empleados
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    public function isEstaActivo(): ?bool
    {
        return $this->estaActivo;
    }

    public function setEstaActivo(bool $estaActivo): Empleados
    {
        $this->estaActivo = $estaActivo;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Empleados
    {
        $this->id = $id;
        return $this;
    }

    public function getSustituto(): Empleados
    {
        return $this->sustituto;
    }

    public function setSustituto(Empleados $sustituto): void
    {
        $this->sustituto = $sustituto;
    }

    public function getEmpleados(): Persona
    {
        return $this->empleados;
    }

    public function setEmpleados(Persona $empleados): void
    {
        $this->empleados = $empleados;
    }


}