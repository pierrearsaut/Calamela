<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debloque
 *
 * @ORM\Table(name="debloque")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DebloqueRepository")
 */
class Debloque
{

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ornement")
    * @ORM\JoinColumn(nullable=false)
    */
    private $ornement;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="debloque", type="boolean")
     */
    private $debloque;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set debloque
     *
     * @param boolean $debloque
     *
     * @return Debloque
     */
    public function setDebloque($debloque)
    {
        $this->debloque = $debloque;

        return $this;
    }

    /**
     * Get debloque
     *
     * @return bool
     */
    public function getDebloque()
    {
        return $this->debloque;
    }
}

