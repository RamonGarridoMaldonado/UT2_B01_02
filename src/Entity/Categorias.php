<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="categorias")
 */
class Categorias
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
     * @ORM\Column(type="string")
     */
    private $descripcion;

    /**
     * @var string
     * @ORM\Column(type="string",unique=true)
     */
    private $abreviatura;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $archivada;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    public function getAbreviatura(): ?string
    {
        return $this->abreviatura;
    }

    public function setAbreviatura(string $abreviatura): void
    {
        $this->abreviatura = $abreviatura;
    }

    public function isArchivada(): ?bool
    {
        return $this->archivada;
    }

    public function setArchivada(bool $archivada): void
    {
        $this->archivada = $archivada;
    }


}