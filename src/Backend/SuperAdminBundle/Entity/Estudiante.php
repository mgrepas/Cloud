<?php

namespace Backend\SuperAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\SuperAdminBundle\Entity\Estudiante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Backend\SuperAdminBundle\Entity\EstudianteRepository")
 */
class Estudiante
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
     * @var string $user_id
     *
     * @ORM\OneToOne(targetEntity="Backend\SuperAdminBundle\Entity\User")
     */
    private $user_id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string $lugNacimiento
     *
     * @ORM\Column(name="lugNacimiento", type="string", length=255)
     */
    private $lugNacimiento;

    /**
     * @var \DateTime $fecNacimiento
     *
     * @ORM\Column(name="fecNacimiento", type="datetime")
     */
    private $fecNacimiento;

    /**
     * @var string $ciudad
     *
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\Ciudad")
     */
    private $ciudad;

    /**
     * @var string $identificacion
     *
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\TipoId")
     */
    private $identificacion;

    /**
     * @var integer $numero
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string $expedidaEn
     *
     * @ORM\Column(name="expedidaEn", type="string", length=255)
     */
    private $expedidaEn;

    /**
     * @var string $barrio
     *
     * @ORM\Column(name="barrio", type="string", length=255)
     */
    private $barrio;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string $estrato
     *
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\Estrato")
     */
    private $estrato;

    /**
     * @var integer $telefono
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var integer $celular
     *
     * @ORM\Column(name="celular", type="integer")
     */
    private $celular;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $sexo
     *
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\Sexo")
     */
    private $sexo;

    /**
     * @var string $salud
     *
     * @ORM\Column(name="salud", type="string", length=255)
     */
    private $salud;

    /**
     * @var string $observacionesPer
     *
     * @ORM\Column(name="observacionesPer", type="text")
     */
    private $observacionesPer;

    /**
     * @var string $colegioProcedencia
     *
     * @ORM\Column(name="colegioProcedencia", type="string", length=255)
     */
    private $colegioProcedencia;

    /**
     * @var string $sede
     *
     * @ORM\Column(name="sede", type="string", length=255)
     */
    private $sede;

    /**
     * @var string $nivel
     *
     * @ORM\ManyToOne(targetEntity="Backend\SuperAdminBundle\Entity\Nivel")
     */
    private $nivel;

    /**
     * @var string $observacionesAcad
     *
     * @ORM\Column(name="observacionesAcad", type="text")
     */
    private $observacionesAcad;

    /**
     * @var integer $numPersonas
     *
     * @ORM\Column(name="numPersonas", type="integer")
     */
    private $numPersonas;

    /**
     * @var string $casa
     *
     * @ORM\Column(name="casa", type="string", length=255)
     */
    private $casa;

    /**
     * @var integer $telefonoCasa
     *
     * @ORM\Column(name="telefonoCasa", type="integer")
     */
    private $telefonoCasa;

    /**
     * @var boolean $viveCon
     *
     * @ORM\Column(name="viveCon", type="boolean")
     */
    private $viveCon;

    /**
     * @var integer $numHermanos
     *
     * @ORM\Column(name="numHermanos", type="integer")
     */
    private $numHermanos;

    /**
     * @var integer $celCasa
     *
     * @ORM\Column(name="celCasa", type="integer")
     */
    private $celCasa;

    /**
     * @var string $nomMadre
     *
     * @ORM\Column(name="nomMadre", type="string", length=255)
     */
    private $nomMadre;

    /**
     * @var integer $ccMadre
     *
     * @ORM\Column(name="ccMadre", type="integer")
     */
    private $ccMadre;

    /**
     * @var string $nomPadre
     *
     * @ORM\Column(name="nomPadre", type="string", length=255)
     */
    private $nomPadre;

    /**
     * @var integer $ccPadre
     *
     * @ORM\Column(name="ccPadre", type="integer")
     */
    private $ccPadre;

    /**
     * @var string $nomAcudiente
     *
     * @ORM\Column(name="nomAcudiente", type="string", length=255)
     */
    private $nomAcudiente;

    /**
     * @var integer $ccAcudiente
     *
     * @ORM\Column(name="ccAcudiente", type="integer")
     */
    private $ccAcudiente;

    /**
     * @var string $direccionCasa
     *
     * @ORM\Column(name="direccionCasa", type="string", length=255)
     */
    private $direccionCasa;



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
     * @return Estudiante
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Estudiante
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set lugNacimiento
     *
     * @param string $lugNacimiento
     * @return Estudiante
     */
    public function setLugNacimiento($lugNacimiento)
    {
        $this->lugNacimiento = $lugNacimiento;
    
        return $this;
    }

    /**
     * Get lugNacimiento
     *
     * @return string 
     */
    public function getLugNacimiento()
    {
        return $this->lugNacimiento;
    }

    /**
     * Set fecNacimiento
     *
     * @param \DateTime $fecNacimiento
     * @return Estudiante
     */
    public function setFecNacimiento($fecNacimiento)
    {
        $this->fecNacimiento = $fecNacimiento;
    
        return $this;
    }

    /**
     * Get fecNacimiento
     *
     * @return \DateTime 
     */
    public function getFecNacimiento()
    {
        return $this->fecNacimiento;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Estudiante
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set expedidaEn
     *
     * @param string $expedidaEn
     * @return Estudiante
     */
    public function setExpedidaEn($expedidaEn)
    {
        $this->expedidaEn = $expedidaEn;
    
        return $this;
    }

    /**
     * Get expedidaEn
     *
     * @return string 
     */
    public function getExpedidaEn()
    {
        return $this->expedidaEn;
    }

    /**
     * Set barrio
     *
     * @param string $barrio
     * @return Estudiante
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;
    
        return $this;
    }

    /**
     * Get barrio
     *
     * @return string 
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Estudiante
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
     * @param integer $telefono
     * @return Estudiante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     * @return Estudiante
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return integer 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Estudiante
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
     * Set salud
     *
     * @param string $salud
     * @return Estudiante
     */
    public function setSalud($salud)
    {
        $this->salud = $salud;
    
        return $this;
    }

    /**
     * Get salud
     *
     * @return string 
     */
    public function getSalud()
    {
        return $this->salud;
    }

    /**
     * Set observacionesPer
     *
     * @param string $observacionesPer
     * @return Estudiante
     */
    public function setObservacionesPer($observacionesPer)
    {
        $this->observacionesPer = $observacionesPer;
    
        return $this;
    }

    /**
     * Get observacionesPer
     *
     * @return string 
     */
    public function getObservacionesPer()
    {
        return $this->observacionesPer;
    }

    /**
     * Set colegioProcedencia
     *
     * @param string $colegioProcedencia
     * @return Estudiante
     */
    public function setColegioProcedencia($colegioProcedencia)
    {
        $this->colegioProcedencia = $colegioProcedencia;
    
        return $this;
    }

    /**
     * Get colegioProcedencia
     *
     * @return string 
     */
    public function getColegioProcedencia()
    {
        return $this->colegioProcedencia;
    }

   

    /**
     * Set numPersonas
     *
     * @param integer $numPersonas
     * @return Estudiante
     */
    public function setNumPersonas($numPersonas)
    {
        $this->numPersonas = $numPersonas;
    
        return $this;
    }

    /**
     * Get numPersonas
     *
     * @return integer 
     */
    public function getNumPersonas()
    {
        return $this->numPersonas;
    }

    /**
     * Set casa
     *
     * @param string $casa
     * @return Estudiante
     */
    public function setCasa($casa)
    {
        $this->casa = $casa;
    
        return $this;
    }

    /**
     * Get casa
     *
     * @return string 
     */
    public function getCasa()
    {
        return $this->casa;
    }

    /**
     * Set telefonoCasa
     *
     * @param integer $telefonoCasa
     * @return Estudiante
     */
    public function setTelefonoCasa($telefonoCasa)
    {
        $this->telefonoCasa = $telefonoCasa;
    
        return $this;
    }

    /**
     * Get telefonoCasa
     *
     * @return integer 
     */
    public function getTelefonoCasa()
    {
        return $this->telefonoCasa;
    }

    /**
     * Set viveCon
     *
     * @param boolean $viveCon
     * @return Estudiante
     */
    public function setViveCon($viveCon)
    {
        $this->viveCon = $viveCon;
    
        return $this;
    }

    /**
     * Get viveCon
     *
     * @return boolean 
     */
    public function getViveCon()
    {
        return $this->viveCon;
    }

    /**
     * Set numHermanos
     *
     * @param integer $numHermanos
     * @return Estudiante
     */
    public function setNumHermanos($numHermanos)
    {
        $this->numHermanos = $numHermanos;
    
        return $this;
    }

    /**
     * Get numHermanos
     *
     * @return integer 
     */
    public function getNumHermanos()
    {
        return $this->numHermanos;
    }

    /**
     * Set celCasa
     *
     * @param integer $celCasa
     * @return Estudiante
     */
    public function setCelCasa($celCasa)
    {
        $this->celCasa = $celCasa;
    
        return $this;
    }

    /**
     * Get celCasa
     *
     * @return integer 
     */
    public function getCelCasa()
    {
        return $this->celCasa;
    }

    /**
     * Set nomMadre
     *
     * @param string $nomMadre
     * @return Estudiante
     */
    public function setNomMadre($nomMadre)
    {
        $this->nomMadre = $nomMadre;
    
        return $this;
    }

    /**
     * Get nomMadre
     *
     * @return string 
     */
    public function getNomMadre()
    {
        return $this->nomMadre;
    }

    /**
     * Set ccMadre
     *
     * @param integer $ccMadre
     * @return Estudiante
     */
    public function setCcMadre($ccMadre)
    {
        $this->ccMadre = $ccMadre;
    
        return $this;
    }

    /**
     * Get ccMadre
     *
     * @return integer 
     */
    public function getCcMadre()
    {
        return $this->ccMadre;
    }

    /**
     * Set nomPadre
     *
     * @param string $nomPadre
     * @return Estudiante
     */
    public function setNomPadre($nomPadre)
    {
        $this->nomPadre = $nomPadre;
    
        return $this;
    }

    /**
     * Get nomPadre
     *
     * @return string 
     */
    public function getNomPadre()
    {
        return $this->nomPadre;
    }

    /**
     * Set ccPadre
     *
     * @param integer $ccPadre
     * @return Estudiante
     */
    public function setCcPadre($ccPadre)
    {
        $this->ccPadre = $ccPadre;
    
        return $this;
    }

    /**
     * Get ccPadre
     *
     * @return integer 
     */
    public function getCcPadre()
    {
        return $this->ccPadre;
    }

    /**
     * Set nomAcudiente
     *
     * @param string $nomAcudiente
     * @return Estudiante
     */
    public function setNomAcudiente($nomAcudiente)
    {
        $this->nomAcudiente = $nomAcudiente;
    
        return $this;
    }

    /**
     * Get nomAcudiente
     *
     * @return string 
     */
    public function getNomAcudiente()
    {
        return $this->nomAcudiente;
    }

    /**
     * Set ccAcudiente
     *
     * @param integer $ccAcudiente
     * @return Estudiante
     */
    public function setCcAcudiente($ccAcudiente)
    {
        $this->ccAcudiente = $ccAcudiente;
    
        return $this;
    }

    /**
     * Get ccAcudiente
     *
     * @return integer 
     */
    public function getCcAcudiente()
    {
        return $this->ccAcudiente;
    }

    /**
     * Set direccionCasa
     *
     * @param string $direccionCasa
     * @return Estudiante
     */
    public function setDireccionCasa($direccionCasa)
    {
        $this->direccionCasa = $direccionCasa;
    
        return $this;
    }

    /**
     * Get direccionCasa
     *
     * @return string 
     */
    public function getDireccionCasa()
    {
        return $this->direccionCasa;
    }

    /**
     * Set ciudad
     *
     * @param Backend\SuperAdminBundle\Entity\Ciudad $ciudad
     * @return Estudiante
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
     * Set identificacion
     *
     * @param Backend\SuperAdminBundle\Entity\TipoId $identificacion
     * @return Estudiante
     */
    public function setIdentificacion(\Backend\SuperAdminBundle\Entity\TipoId $identificacion = null)
    {
        $this->identificacion = $identificacion;
    
        return $this;
    }

    /**
     * Get identificacion
     *
     * @return Backend\SuperAdminBundle\Entity\TipoId 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set estrato
     *
     * @param Backend\SuperAdminBundle\Entity\Estrato $estrato
     * @return Estudiante
     */
    public function setEstrato(\Backend\SuperAdminBundle\Entity\Estrato $estrato = null)
    {
        $this->estrato = $estrato;
    
        return $this;
    }

    /**
     * Get estrato
     *
     * @return Backend\SuperAdminBundle\Entity\Estrato 
     */
    public function getEstrato()
    {
        return $this->estrato;
    }

    /**
     * Set sexo
     *
     * @param Backend\SuperAdminBundle\Entity\Sexo $sexo
     * @return Estudiante
     */
    public function setSexo(\Backend\SuperAdminBundle\Entity\Sexo $sexo = null)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return Backend\SuperAdminBundle\Entity\Sexo 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set sede
     *
     * @param Backend\SuperAdminBundle\Entity\Sede $sede
     * @return Estudiante
     */
    public function setSede(\Backend\SuperAdminBundle\Entity\Sede $sede = null)
    {
        $this->sede = $sede;
    
        return $this;
    }

    /**
     * Get sede
     *
     * @return Backend\SuperAdminBundle\Entity\Sede 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set nivel
     *
     * @param Backend\SuperAdminBundle\Entity\Nivel $nivel
     * @return Estudiante
     */
    public function setNivel(\Backend\SuperAdminBundle\Entity\Nivel $nivel = null)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return Backend\SuperAdminBundle\Entity\Nivel 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set user_id
     *
     * @param Backend\SuperAdminBundle\Entity\User $userId
     * @return Estudiante
     */
    public function setUserId(\Backend\SuperAdminBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return Backend\SuperAdminBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set observacionesAcad
     *
     * @param string $observacionesAcad
     * @return Estudiante
     */
    public function setObservacionesAcad($observacionesAcad)
    {
        $this->observacionesAcad = $observacionesAcad;
    
        return $this;
    }

    /**
     * Get observacionesAcad
     *
     * @return string 
     */
    public function getObservacionesAcad()
    {
        return $this->observacionesAcad;
    }
}