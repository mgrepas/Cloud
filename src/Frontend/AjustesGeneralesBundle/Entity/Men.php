<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Men
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Men
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
     * @return Men
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
}
