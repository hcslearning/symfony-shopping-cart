<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductoRepository")
 */
class Producto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $precioOferta;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagenPrincipal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $imagenes;

    /**
     * @ORM\Column(type="float")
     */
    private $envio;

    /**
     * @ORM\Column(type="float")
     */
    private $envioRegion;

    /**
     * @ORM\Column(type="float")
     */
    private $envioAdicional;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecioOferta(): ?float
    {
        return $this->precioOferta;
    }

    public function setPrecioOferta(?float $precioOferta): self
    {
        $this->precioOferta = $precioOferta;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getImagenPrincipal(): ?string
    {
        return $this->imagenPrincipal;
    }

    public function setImagenPrincipal(string $imagenPrincipal): self
    {
        $this->imagenPrincipal = $imagenPrincipal;

        return $this;
    }

    public function getImagenes(): ?string
    {
        return $this->imagenes;
    }

    public function setImagenes(?string $imagenes): self
    {
        $this->imagenes = $imagenes;

        return $this;
    }

    public function getEnvio(): ?float
    {
        return $this->envio;
    }

    public function setEnvio(float $envio): self
    {
        $this->envio = $envio;

        return $this;
    }

    public function getEnvioRegion(): ?float
    {
        return $this->envioRegion;
    }

    public function setEnvioRegion(float $envioRegion): self
    {
        $this->envioRegion = $envioRegion;

        return $this;
    }

    public function getEnvioAdicional(): ?float
    {
        return $this->envioAdicional;
    }

    public function setEnvioAdicional(float $envioAdicional): self
    {
        $this->envioAdicional = $envioAdicional;

        return $this;
    }

}
