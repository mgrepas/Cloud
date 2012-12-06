<?php

namespace Frontend\AjustesGeneralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend\AjustesGeneralesBundle\Entity\Dane
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Dane
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
     * @var string $dane
     *
     * @ORM\Column(name="dane", type="string", length=255)
     */
    private $dane;


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
     * Set dane
     *
     * @param string $dane
     * @return Dane
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
}
