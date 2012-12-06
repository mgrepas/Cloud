<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Curso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Frontend\AjustesGeneralesBundle\Entity\CursoRepository")
 */
class Curso
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $cupo
     *
     * @ORM\Column(name="cupo", type="string", length=255)
     */
    private $cupo;

    /**
     * @var string $jornada
     *
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Jornada")
     */
    private $jornada;
    
    /**
     * @var string $grado
     *
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Grado")
     */
    private $grado;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Curso
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cupo
     *
     * @param string $cupo
     * @return Curso
     */
    public function setCupo($cupo)
    {
        $this->cupo = $cupo;
    
        return $this;
    }

    /**
     * Get cupo
     *
     * @return string 
     */
    public function getCupo()
    {
        return $this->cupo;
    }

    /**
     * Set jornada
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Jornada $jornada
     * @return Curso
     */
    public function setJornada(\Frontend\AjustesGeneralesBundle\Entity\Jornada $jornada = null)
    {
        $this->jornada = $jornada;
    
        return $this;
    }

    /**
     * Get jornada
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Jornada 
     */
    public function getJornada()
    {
        return $this->jornada;
    }
    
    public function __toString(){
        return $this->getNombre();
    } 

    /**
     * Set grado
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Grado $grado
     * @return Curso
     */
    public function setGrado(\Frontend\AjustesGeneralesBundle\Entity\Grado $grado = null)
    {
        $this->grado = $grado;
    
        return $this;
    }

    /**
     * Get grado
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Grado 
     */
    public function getGrado()
    {
        return $this->grado;
    }
}