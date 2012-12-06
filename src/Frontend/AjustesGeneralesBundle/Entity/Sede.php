<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Sede
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Frontend\AjustesGeneralesBundle\Entity\SedeRepository")
 */
class Sede
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
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Ciudad")
     */
     private $ciudad;
     

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=30)
     */
    private $telefono;

    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=30)
     */
    private $fax;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Nit")
     */
     private $nit;
     
     /**
     * 
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Dane")
     */
     private $dane;
     
     /**
     * 
     * @ORM\ManyToOne(targetEntity="Frontend\AjustesGeneralesBundle\Entity\Men")
     */
     private $men;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string $rector
     *
     * @ORM\Column(name="rector", type="string", length=255)
     */
    private $rector;

    /**
     * @var string $secretaria
     *
     * @ORM\Column(name="secretaria", type="string", length=255)
     */
    private $secretaria;
    
    /**
     * 
     * @ORM\Column(name="distribucion_usuarios", type="string", length=10)
     */
     private $distribucion_usuarios;
     
     /**
     * 
     * @ORM\Column(name="modelo_pedagogico", type="string", length=255)
     */
     private $modelo_pedagogico;
     
     /**
     * 
     * @ORM\Column(name="foto", type="string", length=255)
     */
     private $foto;


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
     * Set direccion
     *
     * @param string $direccion
     * @return Sede
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Sede
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Sede
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Sede
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rector
     *
     * @param string $rector
     * @return Sede
     */
    public function setRector($rector)
    {
        $this->rector = $rector;
    
        return $this;
    }

    /**
     * Get rector
     *
     * @return string 
     */
    public function getRector()
    {
        return $this->rector;
    }

    /**
     * Set secretaria
     *
     * @param string $secretaria
     * @return Sede
     */
    public function setSecretaria($secretaria)
    {
        $this->secretaria = $secretaria;
    
        return $this;
    }

    /**
     * Get secretaria
     *
     * @return string 
     */
    public function getSecretaria()
    {
        return $this->secretaria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Sede
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
     * Set nivelesacademicos
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Nivel $nivelesacademicos
     * @return Sede
     */
    public function setNivelesacademicos(\Frontend\AjustesGeneralesBundle\Entity\Nivel $nivelesacademicos = null)
    {
        $this->nivelesacademicos = $nivelesacademicos;
    
        return $this;
    }

    /**
     * Get nivelesacademicos
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Nivel 
     */
    public function getNivelesacademicos()
    {
        return $this->nivelesacademicos;
    }
    
    public function __toString(){
        return $this->getNombre();
    }

    /**
     * Set distribucion_usuarios
     *
     * @param string $distribucionUsuarios
     * @return Sede
     */
    public function setDistribucionUsuarios($distribucionUsuarios)
    {
        $this->distribucion_usuarios = $distribucionUsuarios;
    
        return $this;
    }

    /**
     * Get distribucion_usuarios
     *
     * @return string 
     */
    public function getDistribucionUsuarios()
    {
        return $this->distribucion_usuarios;
    }

    /**
     * Set modelo_pedagogico
     *
     * @param string $modeloPedagogico
     * @return Sede
     */
    public function setModeloPedagogico($modeloPedagogico)
    {
        $this->modelo_pedagogico = $modeloPedagogico;
    
        return $this;
    }

    /**
     * Get modelo_pedagogico
     *
     * @return string 
     */
    public function getModeloPedagogico()
    {
        return $this->modelo_pedagogico;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Sede
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set ciudad
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Ciudad $ciudad
     * @return Sede
     */
    public function setCiudad(\Frontend\AjustesGeneralesBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set nit
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Nit $nit
     * @return Sede
     */
    public function setNit(\Frontend\AjustesGeneralesBundle\Entity\Nit $nit = null)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Nit 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set dane
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Dane $dane
     * @return Sede
     */
    public function setDane(\Frontend\AjustesGeneralesBundle\Entity\Dane $dane = null)
    {
        $this->dane = $dane;
    
        return $this;
    }

    /**
     * Get dane
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Dane 
     */
    public function getDane()
    {
        return $this->dane;
    }

    /**
     * Set men
     *
     * @param Frontend\AjustesGeneralesBundle\Entity\Men $men
     * @return Sede
     */
    public function setMen(\Frontend\AjustesGeneralesBundle\Entity\Men $men = null)
    {
        $this->men = $men;
    
        return $this;
    }

    /**
     * Get men
     *
     * @return Frontend\AjustesGeneralesBundle\Entity\Men 
     */
    public function getMen()
    {
        return $this->men;
    }
}