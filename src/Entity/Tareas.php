<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="tareas")
 */
class Tareas
{
    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private $titulo;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $empleado;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $prioridad;

    /**
     * @var integer
     * @ORM\Id()
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
     * @ORM\OneToMany(targetEntity="Incidencia")
     * @var Incidencia[]|Collection
     */
    private $etiquetas;

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): Tareas
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getEmpleado(): ?string
    {
        return $this->empleado;
    }

    public function setEmpleado(string $empleado): Tareas
    {
        $this->empleado = $empleado;
        return $this;
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
     * @return Collection|Incidencia[]
     */
    public function getEtiquetas()
    {
        return $this->etiquetas;
    }

    /**
     * @param Collection|Incidencia[] $etiquetas
     */
    public function setEtiquetas($etiquetas): void
    {
        $this->etiquetas = $etiquetas;
    }


}