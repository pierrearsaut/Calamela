<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoRepository")
 */
class Video
{
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_vid", type="string", length=255)
     */
    private $titreVid;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_vid", type="string", length=255)
     */
    private $genreVid;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_vid", type="string", length=255)
     */
    private $lienVid;


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
     * Set titreVid
     *
     * @param string $titreVid
     *
     * @return Video
     */
    public function setTitreVid($titreVid)
    {
        $this->titreVid = $titreVid;

        return $this;
    }

    /**
     * Get titreVid
     *
     * @return string
     */
    public function getTitreVid()
    {
        return $this->titreVid;
    }

    /**
     * Set genreVid
     *
     * @param string $genreVid
     *
     * @return Video
     */
    public function setGenreVid($genreVid)
    {
        $this->genreVid = $genreVid;

        return $this;
    }

    /**
     * Get genreVid
     *
     * @return string
     */
    public function getGenreVid()
    {
        return $this->genreVid;
    }

    /**
     * Set lienVid
     *
     * @param string $lienVid
     *
     * @return Video
     */
    public function setLienVid($lienVid)
    {
        $this->lienVid = $lienVid;

        return $this;
    }

    /**
     * Get lienVid
     *
     * @return string
     */
    public function getLienVid()
    {
        return $this->lienVid;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Video
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
}
