<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ornement
 *
 * @ORM\Table(name="ornement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrnementRepository")
 */
class Ornement
{
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
     * @ORM\Column(name="img_ornement", type="string", length=255)
     */
    private $imgOrnement;

    /**
     * @var int
     *
     * @ORM\Column(name="seuil_ornement", type="integer", nullable=true)
     */
    private $seuilOrnement;

    /**
     * @var string
     *
     * @ORM\Column(name="unite_seuil_ornement", type="string", length=255, nullable=true)
     */
    private $uniteSeuilOrnement;

    /**
     * @var bool
     *
     * @ORM\Column(name="payant_ornement", type="boolean")
     */
    private $payantOrnement;


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
     * Set imgOrnement
     *
     * @param string $imgOrnement
     *
     * @return Ornement
     */
    public function setImgOrnement($imgOrnement)
    {
        $this->imgOrnement = $imgOrnement;

        return $this;
    }

    /**
     * Get imgOrnement
     *
     * @return string
     */
    public function getImgOrnement()
    {
        return $this->imgOrnement;
    }

    /**
     * Set seuilOrnement
     *
     * @param integer $seuilOrnement
     *
     * @return Ornement
     */
    public function setSeuilOrnement($seuilOrnement)
    {
        $this->seuilOrnement = $seuilOrnement;

        return $this;
    }

    /**
     * Get seuilOrnement
     *
     * @return int
     */
    public function getSeuilOrnement()
    {
        return $this->seuilOrnement;
    }

    /**
     * Set uniteSeuilOrnement
     *
     * @param string $uniteSeuilOrnement
     *
     * @return Ornement
     */
    public function setUniteSeuilOrnement($uniteSeuilOrnement)
    {
        $this->uniteSeuilOrnement = $uniteSeuilOrnement;

        return $this;
    }

    /**
     * Get uniteSeuilOrnement
     *
     * @return string
     */
    public function getUniteSeuilOrnement()
    {
        return $this->uniteSeuilOrnement;
    }

    /**
     * Set payantOrnement
     *
     * @param boolean $payantOrnement
     *
     * @return Ornement
     */
    public function setPayantOrnement($payantOrnement)
    {
        $this->payantOrnement = $payantOrnement;

        return $this;
    }

    /**
     * Get payantOrnement
     *
     * @return bool
     */
    public function getPayantOrnement()
    {
        return $this->payantOrnement;
    }
}

