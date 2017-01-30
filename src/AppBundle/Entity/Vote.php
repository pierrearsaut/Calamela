<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoteRepository")
 */
class Vote
{
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Battle")
    * @ORM\JoinColumn(nullable=false)
    */
    private $battle;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="perdant_vote", type="integer")
     */
    private $perdantVote;

    /**
     * @var int
     *
     * @ORM\Column(name="gagnant_vote", type="integer")
     */
    private $gagnantVote;


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
     * Set perdantVote
     *
     * @param integer $perdantVote
     *
     * @return Vote
     */
    public function setPerdantVote($perdantVote)
    {
        $this->perdantVote = $perdantVote;

        return $this;
    }

    /**
     * Get perdantVote
     *
     * @return int
     */
    public function getPerdantVote()
    {
        return $this->perdantVote;
    }

    /**
     * Set gagnantVote
     *
     * @param integer $gagnantVote
     *
     * @return Vote
     */
    public function setGagnantVote($gagnantVote)
    {
        $this->gagnantVote = $gagnantVote;

        return $this;
    }

    /**
     * Get gagnantVote
     *
     * @return int
     */
    public function getGagnantVote()
    {
        return $this->gagnantVote;
    }

    /**
     * Set battle
     *
     * @param \AppBundle\Entity\Battle $battle
     *
     * @return Vote
     */
    public function setBattle(\AppBundle\Entity\Battle $battle)
    {
        $this->battle = $battle;

        return $this;
    }

    /**
     * Get battle
     *
     * @return \AppBundle\Entity\Battle
     */
    public function getBattle()
    {
        return $this->battle;
    }
}
