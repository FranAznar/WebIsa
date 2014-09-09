<?php

namespace WebIsa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use WebIsa\BackendBundle\Entity\Acuarela;
/**
 * Tecnica
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tecnica
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
     * @var string
     *
     * @ORM\Column(name="tecnica", type="string", length=255)
     */
    private $tecnica;


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
     * @return Tecnica
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
}
