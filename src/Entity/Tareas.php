<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="tareas")
 */
class Tareas
{

    public function __construct()
    {
        $this->etiquetas = new ArrayCollection();
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer",unique=true)
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private $titulo;

    /**
     * @ORM\ManyToOne(targetEntity="Empleados")
     * @ORM\JoinColumn(nullable=false, unique=true)
     * @var Empleados | null
     */
    private $empleado;

    /**
     * @ORM\ManyToOne(targetEntity="Prioridades")
     * @var Prioridades
     */
    private $prioridad;

    /**
     * @var integer
     * @ORM\Column(type="string",unique=true)
     */
    private $codigo;

    /**
     * @var integer
     * @ORM\Column(type="string",nullable=true)
     */
    private $tiempoEstimado;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $detalle;

    /**
     * @ORM\ManyToMany(targetEntity="Categorias",inversedBy="tareas")
     * @var Categorias[]|Collection
     */
    private $categorias;

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): Tareas
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return Empleados|null
     */
    public function getEmpleado(): ?Empleados
    {
        return $this->empleado;
    }

    /**
     * @param Empleados|null $empleado
     */
    public function setEmpleado(?Empleados $empleado): void
    {
        $this->empleado = $empleado;
    }


    public function getPrioridad(): ?int
    {
        return $this->prioridad;
    }

    public function setPrioridad(int $prioridad): Tareas
    {
        $this->prioridad = $prioridad;
        return $this;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): Tareas
    {
        $this->codigo = $codigo;
        return $this;
    }

    public function getTiempoEstimado(): ?int
    {
        return $this->tiempoEstimado;
    }

    public function setTiempoEstimado(int $tiempoEstimado): Tareas
    {
        $this->tiempoEstimado = $tiempoEstimado;
        return $this;
    }

    public function getDetalle(): ?string
    {
        return $this->detalle;
    }

    public function setDetalle(string $detalle): Tareas
    {
        $this->detalle = $detalle;
        return $this;
    }

    /**
     * @return Collection|Categorias[]
     */
    public function getEtiquetas()
    {
        return $this->etiquetas;
    }

    /**
     * @param Collection|Categorias[] $etiquetas
     */
    public function setEtiquetas($etiquetas): void
    {
        $this->etiquetas = $etiquetas;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
}