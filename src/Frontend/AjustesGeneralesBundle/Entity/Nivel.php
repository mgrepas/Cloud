<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Nivel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Nivel
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
     * @var string $nivel
     *
     * @ORM\Column(name="nivel", type="string", length=100)
     */
    private $nivel;


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
     * Set nivel
     *
     * @param string $nivel
     * @return Nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }
    
    public function __toString(){
        return $this->getNivel();
    }

}