<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Grado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Frontend\AjustesGeneralesBundle\Entity\GradoRepository")
 */
class Grado
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
     * @var string $grado
     *
     * @ORM\Column(name="grado", type="string", length=100)
     */
    private $grado;

    /**
     * @var string $nivel
     *
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Nivel")
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
     * Set grado
     *
     * @param string $grado
     * @return Grado
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;
    
        return $this;
    }

    /**
     * Get grado
     *
     * @return string 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set nivel
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Nivel $nivel
     * @return Grado
     */
    public function setNivel(\Frontend\AjustesGeneralesBundle\Entity\Nivel $nivel = null)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Nivel 
     */
    public function getNivel()
    {
        return $this->nivel;
    }
    
    public function __toString(){
        return $this->getGrado();
    }
}