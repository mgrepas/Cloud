<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Jornada
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Jornada
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $jornada
     *
     * @ORM\Column(name="jornada", type="string", length=50)
     */
    private $jornada;


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
     * Set jornada
     *
     * @param string $jornada
     * @return Jornada
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;
    
        return $this;
    }

    /**
     * Get jornada
     *
     * @return string 
     */
    public function getJornada()
    {
        return $this->jornada;
    }
    
    public function __toString(){
        return $this->getJornada();
    }
}