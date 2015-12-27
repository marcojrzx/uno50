<?php

namespace ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="ClienteBundle\Repository\ProductoRepository")
 */
class Producto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreP", type="string", length=255)
     */
    private $nombreP;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripcionP", type="text")
     */
    private $descripcionP;

    /**
     * @var int
     *
     * @ORM\Column(name="precio1", type="integer")
     */
    private $precio1;

    /**
     * @var int
     *
     * @ORM\Column(name="precio2", type="integer")
     */
    private $precio2;

    /**
     * @var int
     *
     * @ORM\Column(name="precio3", type="integer")
     */
    private $precio3;

    /**
     * @var int
     *
     * @ORM\Column(name="edicion", type="integer")
     */
    private $edicion;

    /**
     * @var bool
     *
     * @ORM\Column(name="comprado", type="boolean")
     */
    private $comprado;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreP
     *
     * @param string $nombreP
     *
     * @return Producto
     */
    public function setNombreP($nombreP)
    {
        $this->nombreP = $nombreP;

        return $this;
    }

    /**
     * Get nombreP
     *
     * @return string
     */
    public function getNombreP()
    {
        return $this->nombreP;
    }

    /**
     * Set descripcionP
     *
     * @param string $descripcionP
     *
     * @return Producto
     */
    public function setDescripcionP($descripcionP)
    {
        $this->descripcionP = $descripcionP;

        return $this;
    }

    /**
     * Get descripcionP
     *
     * @return string
     */
    public function getDescripcionP()
    {
        return $this->descripcionP;
    }

    /**
     * Set precio1
     *
     * @param integer $precio1
     *
     * @return Producto
     */
    public function setPrecio1($precio1)
    {
        $this->precio1 = $precio1;

        return $this;
    }

    /**
     * Get precio1
     *
     * @return int
     */
    public function getPrecio1()
    {
        return $this->precio1;
    }

    /**
     * Set precio2
     *
     * @param integer $precio2
     *
     * @return Producto
     */
    public function setPrecio2($precio2)
    {
        $this->precio2 = $precio2;

        return $this;
    }

    /**
     * Get precio2
     *
     * @return int
     */
    public function getPrecio2()
    {
        return $this->precio2;
    }

    /**
     * Set precio3
     *
     * @param integer $precio3
     *
     * @return Producto
     */
    public function setPrecio3($precio3)
    {
        $this->precio3 = $precio3;

        return $this;
    }

    /**
     * Get precio3
     *
     * @return int
     */
    public function getPrecio3()
    {
        return $this->precio3;
    }

    /**
     * Set edicion
     *
     * @param integer $edicion
     *
     * @return Producto
     */
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;

        return $this;
    }

    /**
     * Get edicion
     *
     * @return int
     */
    public function getEdicion()
    {
        return $this->edicion;
    }

    /**
     * Set comprado
     *
     * @param boolean $comprado
     *
     * @return Producto
     */
    public function setComprado($comprado)
    {
        $this->comprado = $comprado;

        return $this;
    }

    /**
     * Get comprado
     *
     * @return bool
     */
    public function getComprado()
    {
        return $this->comprado;
    }
}
