<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Nit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Nit
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
     * Set nit
     *
     * @param string $nit
     * @return Nit
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
