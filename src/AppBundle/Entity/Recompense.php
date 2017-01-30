<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recompense
 *
 * @ORM\Table(name="recompense")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecompenseRepository")
 */
class Recompense
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
     * @ORM\Column(name="type_award", type="string", length=255)
     */
    private $typeAward;

    /**
     * @var string
     *
     * @ORM\Column(name="img_award", type="string", length=255, nullable=true)
     */
    private $imgAward;

    /**
     * @var string
     *
     * @ORM\Column(name="descr_award", type="text", nullable=true)
     */
    private $descrAward;

    /**
     * @var int
     *
     * @ORM\Column(name="seuil_award", type="integer")
     */
    private $seuilAward;

    /**
     * @var string
     *
     * @ORM\Column(name="unite_award", type="string", length=255)
     */
    private $uniteAward;


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
     * Set typeAward
     *
     * @param string $typeAward
     *
     * @return Recompense
     */
    public function setTypeAward($typeAward)
    {
        $this->typeAward = $typeAward;

        return $this;
    }

    /**
     * Get typeAward
     *
     * @return string
     */
    public function getTypeAward()
    {
        return $this->typeAward;
    }

    /**
     * Set imgAward
     *
     * @param string $imgAward
     *
     * @return Recompense
     */
    public function setImgAward($imgAward)
    {
        $this->imgAward = $imgAward;

        return $this;
    }

    /**
     * Get imgAward
     *
     * @return string
     */
    public function getImgAward()
    {
        return $this->imgAward;
    }

    /**
     * Set descrAward
     *
     * @param string $descrAward
     *
     * @return Recompense
     */
    public function setDescrAward($descrAward)
    {
        $this->descrAward = $descrAward;

        return $this;
    }

    /**
     * Get descrAward
     *
     * @return string
     */
    public function getDescrAward()
    {
        return $this->descrAward;
    }

    /**
     * Set seuilAward
     *
     * @param integer $seuilAward
     *
     * @return Recompense
     */
    public function setSeuilAward($seuilAward)
    {
        $this->seuilAward = $seuilAward;

        return $this;
    }

    /**
     * Get seuilAward
     *
     * @return int
     */
    public function getSeuilAward()
    {
        return $this->seuilAward;
    }

    /**
     * Set uniteAward
     *
     * @param string $uniteAward
     *
     * @return Recompense
     */
    public function setUniteAward($uniteAward)
    {
        $this->uniteAward = $uniteAward;

        return $this;
    }

    /**
     * Get uniteAward
     *
     * @return string
     */
    public function getUniteAward()
    {
        return $this->uniteAward;
    }
}

