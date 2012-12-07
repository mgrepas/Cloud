<?php

namespace Backend\SuperAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\SuperAdminBundle\Entity
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sexo
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
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=50)
     */
    private $sexo;


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
     * Set sexo
     *
     * @param string $sexo
     * @return Sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }
    
    public function __toString(){
        return $this->getSexo();
    }
}