<?php

namespace Backend\SuperAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\SuperAdminBundle\Entity\DatosLegales
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DatosLegales
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
     * @var string $men
     *
     * @ORM\Column(name="men", type="string", length=255)
     */
    private $men;

    /**
     * @var string $dane
     *
     * @ORM\Column(name="dane", type="string", length=255)
     */
    private $dane;

    /**
     * @var string $nit
     *
     * @ORM\Column(name="nit", type="string", length=255)
     */
    private $nit;


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
     * Set men
     *
     * @param string $men
     * @return DatosLegales
     */
    public function setMen($men)
    {
        $this->men = $men;
    
        return $this;
    }

    /**
     * Get men
     *
     * @return string 
     */
    public function getMen()
    {
        return $this->men;
    }

    /**
     * Set dane
     *
     * @param string $dane
     * @return DatosLegales
     */
    public function setDane($dane)
    {
        $this->dane = $dane;
    
        return $this;
    }

    /**
     * Get dane
     *
     * @return string 
     */
    public function getDane()
    {
        return $this->dane;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return DatosLegales
     */
    public function setNit($nit)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }
    
}
