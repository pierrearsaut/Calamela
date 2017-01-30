<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @ORM\Column(name="photo", type="string", nullable=true)
     */
    protected $photo;

	/**
     * @ORM\Column(name="descr_user", type="text", nullable=true)
     */
    protected $descr_user;

	/**
     * @ORM\Column(name="statut", type="string", nullable=true)
     */
    protected $statut;

     /**
     * @ORM\Column(name="widget_fb", type="string", nullable=true)
     */
    protected $widget_fb;

     /**
     * @ORM\Column(name="widget_insta", type="string", nullable=true)
     */
    protected $widget_insta;

     /**
     * @ORM\Column(name="bourse", type="integer")
     */
    protected $bourse;

     /**
     * @ORM\Column(name="parrain", type="string", nullable=true)
     */
    protected $parrain;

    public function __construct()
    {
        parent::__construct();
        $this->photo = "newbie.jpg";
        $this->descr_user = "Salut, je suis nouveau :)";
        $this->bourse = 0;
    }




    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set descrUser
     *
     * @param string $descrUser
     *
     * @return User
     */
    public function setDescrUser($descrUser)
    {
        $this->descr_user = $descrUser;

        return $this;
    }

    /**
     * Get descrUser
     *
     * @return string
     */
    public function getDescrUser()
    {
        return $this->descr_user;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return User
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set widgetFb
     *
     * @param string $widgetFb
     *
     * @return User
     */
    public function setWidgetFb($widgetFb)
    {
        $this->widget_fb = $widgetFb;

        return $this;
    }

    /**
     * Get widgetFb
     *
     * @return string
     */
    public function getWidgetFb()
    {
        return $this->widget_fb;
    }

    /**
     * Set widgetInsta
     *
     * @param string $widgetInsta
     *
     * @return User
     */
    public function setWidgetInsta($widgetInsta)
    {
        $this->widget_insta = $widgetInsta;

        return $this;
    }

    /**
     * Get widgetInsta
     *
     * @return string
     */
    public function getWidgetInsta()
    {
        return $this->widget_insta;
    }

    /**
     * Set bourse
     *
     * @param integer $bourse
     *
     * @return User
     */
    public function setBourse($bourse)
    {
        $this->bourse = $bourse;

        return $this;
    }

    /**
     * Get bourse
     *
     * @return integer
     */
    public function getBourse()
    {
        return $this->bourse;
    }

    /**
     * Set parrain
     *
     * @param string $parrain
     *
     * @return User
     */
    public function setParrain($parrain)
    {
        $this->parrain = $parrain;

        return $this;
    }

    /**
     * Get parrain
     *
     * @return string
     */
    public function getParrain()
    {
        return $this->parrain;
    }
}
