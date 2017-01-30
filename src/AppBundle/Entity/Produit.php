<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="descr_produit", type="text", nullable=true)
     */
    private $descrProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="img_produit", type="string", length=255, nullable=true)
     */
    private $imgProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_produit", type="float")
     */
    private $prixProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="promo_produit", type="float", nullable=true)
     */
    private $promoProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=255)
     */
    private $nomProduit;


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
     * Set descrProduit
     *
     * @param string $descrProduit
     *
     * @return Produit
     */
    public function setDescrProduit($descrProduit)
    {
        $this->descrProduit = $descrProduit;

        return $this;
    }

    /**
     * Get descrProduit
     *
     * @return string
     */
    public function getDescrProduit()
    {
        return $this->descrProduit;
    }

    /**
     * Set imgProduit
     *
     * @param string $imgProduit
     *
     * @return Produit
     */
    public function setImgProduit($imgProduit)
    {
        $this->imgProduit = $imgProduit;

        return $this;
    }

    /**
     * Get imgProduit
     *
     * @return string
     */
    public function getImgProduit()
    {
        return $this->imgProduit;
    }

    /**
     * Set prixProduit
     *
     * @param float $prixProduit
     *
     * @return Produit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    /**
     * Get prixProduit
     *
     * @return float
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * Set promoProduit
     *
     * @param float $promoProduit
     *
     * @return Produit
     */
    public function setPromoProduit($promoProduit)
    {
        $this->promoProduit = $promoProduit;

        return $this;
    }

    /**
     * Get promoProduit
     *
     * @return float
     */
    public function getPromoProduit()
    {
        return $this->promoProduit;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }
}

