<?php

namespace Backend\SuperAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\SuperAdminBundle\Entity\Estrato
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estrato
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
     * @var string $estrato
     *
     * @ORM\Column(name="estrato", type="string", length=100)
     */
    private $estrato;


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
     * Set estrato
     *
     * @param string $estrato
     * @return Estrato
     */
    public function setEstrato($estrato)
    {
        $this->estrato = $estrato;
    
        return $this;
    }

    /**
     * Get estrato
     *
     * @return string 
     */
    public function getEstrato()
    {
        return $this->estrato;
    }
    
    public function __toString(){
        return $this->getEstrato();
    }
}