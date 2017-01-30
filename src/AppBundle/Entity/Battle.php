<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Battle
 *
 * @ORM\Table(name="battle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BattleRepository")
 */
class Battle
{
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Evenement")
    * @ORM\JoinColumn(nullable=false)
    */
    private $evenement;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Video")
    * @ORM\JoinColumn(nullable=false)
    */
    private $video;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set evenement
     *
     * @param \AppBundle\Entity\Evenement $evenement
     *
     * @return Battle
     */
    public function setEvenement(\AppBundle\Entity\Evenement $evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \AppBundle\Entity\Evenement
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set video
     *
     * @param \AppBundle\Entity\Video $video
     *
     * @return Battle
     */
    public function setVideo(\AppBundle\Entity\Video $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \AppBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }
}
