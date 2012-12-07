<?php

namespace Backend\SuperAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\SuperAdminBundle\Entity\Institucion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Backend\SuperAdminBundle\Entity\InstitucionRepository")
 */
class Institucion
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
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\Ciudad")
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
     * @ORM\Column(name="nivel_academico", type="string", length=255)
     */
     private $nivel_academico;
     
     /**
     * 
     * @ORM\Column(name="foto", type="string", length=255)
     */
     private $foto;
     
     /**
     * 
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\DatosLegales")
     */
     private $datoslegales;


    
    public function __toString(){
        return $this->getNombre();
    }


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
     * @return Institucion
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
     * Set direccion
     *
     * @param string $direccion
     * @return Institucion
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
     * @return Institucion
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
     * @return Institucion
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
     * @return Institucion
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
     * @return Institucion
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
     * @return Institucion
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
     * Set distribucion_usuarios
     *
     * @param string $distribucionUsuarios
     * @return Institucion
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
     * @return Institucion
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
     * @return Institucion
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
     * @param Backend\SuperAdminBundle\Entity\Ciudad $ciudad
     * @return Institucion
     */
    public function setCiudad(\Backend\SuperAdminBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return Backend\SuperAdminBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set nivel_academico
     *
     * @param string $nivelAcademico
     * @return Institucion
     */
    public function setNivelAcademico($nivelAcademico)
    {
        $this->nivel_academico = $nivelAcademico;
    
        return $this;
    }

    /**
     * Get nivel_academico
     *
     * @return string 
     */
    public function getNivelAcademico()
    {
        return $this->nivel_academico;
    }

    /**
     * Set datoslegales
     *
     * @param Backend\SuperAdminBundle\Entity\DatosLegales $datoslegales
     * @return Institucion
     */
    public function setDatoslegales(\Backend\SuperAdminBundle\Entity\DatosLegales $datoslegales = null)
    {
        $this->datoslegales = $datoslegales;
    
        return $this;
    }

    /**
     * Get datoslegales
     *
     * @return Backend\SuperAdminBundle\Entity\DatosLegales 
     */
    public function getDatoslegales()
    {
        return $this->datoslegales;
    }
}