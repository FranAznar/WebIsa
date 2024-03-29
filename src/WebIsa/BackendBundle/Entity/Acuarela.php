<?php

namespace WebIsa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WebIsa\BackendBundle\Entity\Tecnica;

/**
 * Acuarela
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Acuarela
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="WebIsa\BackendBundle\Entity\Tecnica")
     */
    private $tecnica;

    /**
     * @var string
     *
     * @ORM\Column(name="tamaño", type="string", length=255)
     */
    private $tamaño;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean")
     */
    private $estado;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tecnica
     *
     * @param string $tecnica
     * @return Acuarela
     */
    public function setTecnica($tecnica)
    {
        $this->tecnica = $tecnica;

        return $this;
    }

    /**
     * Get tecnica
     *
     * @return string 
     */
    public function getTecnica()
    {
        return $this->tecnica;
    }

    /**
     * Set tamaño
     *
     * @param string $tamaño
     * @return Acuarela
     */
    public function setTamaño($tamaño)
    {
        $this->tamaño = $tamaño;

        return $this;
    }

    /**
     * Get tamaño
     *
     * @return string 
     */
    public function getTamaño()
    {
        return $this->tamaño;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Acuarela
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Acuarela
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
