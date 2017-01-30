<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gagner
 *
 * @ORM\Table(name="gagner")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GagnerRepository")
 */
class Gagner
{
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recompense")
    * @ORM\JoinColumn(nullable=false)
    */
    private $recompense;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_remise", type="date")
     */
    private $dateRemise;


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
     * Set dateRemise
     *
     * @param \DateTime $dateRemise
     *
     * @return Gagner
     */
    public function setDateRemise($dateRemise)
    {
        $this->dateRemise = $dateRemise;

        return $this;
    }

    /**
     * Get dateRemise
     *
     * @return \DateTime
     */
    public function getDateRemise()
    {
        return $this->dateRemise;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Gagner
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set recompense
     *
     * @param \AppBundle\Entity\Recompense $recompense
     *
     * @return Gagner
     */
    public function setRecompense(\AppBundle\Entity\Recompense $recompense)
    {
        $this->recompense = $recompense;

        return $this;
    }

    /**
     * Get recompense
     *
     * @return \AppBundle\Entity\Recompense
     */
    public function getRecompense()
    {
        return $this->recompense;
    }
}
