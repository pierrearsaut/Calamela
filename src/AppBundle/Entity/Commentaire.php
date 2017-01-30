<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;

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
     * @var string
     *
     * @ORM\Column(name="txt_comment", type="text")
     */
    private $txtComment;

    /**
     * @var bool
     *
     * @ORM\Column(name="validation_comment", type="boolean")
     */
    private $validationComment;


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
     * Set txtComment
     *
     * @param string $txtComment
     *
     * @return Commentaire
     */
    public function setTxtComment($txtComment)
    {
        $this->txtComment = $txtComment;

        return $this;
    }

    /**
     * Get txtComment
     *
     * @return string
     */
    public function getTxtComment()
    {
        return $this->txtComment;
    }

    /**
     * Set validationComment
     *
     * @param boolean $validationComment
     *
     * @return Commentaire
     */
    public function setValidationComment($validationComment)
    {
        $this->validationComment = $validationComment;

        return $this;
    }

    /**
     * Get validationComment
     *
     * @return bool
     */
    public function getValidationComment()
    {
        return $this->validationComment;
    }

    /**
     * Set video
     *
     * @param \AppBundle\Entity\Video $video
     *
     * @return Commentaire
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
