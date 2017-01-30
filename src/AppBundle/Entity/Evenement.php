<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @ORM\Column(name="nom_event", type="string", length=255)
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_event", type="date")
     */
    private $debutEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_event", type="date")
     */
    private $finEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="descr_event", type="text")
     */
    private $descrEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="type_event", type="string", length=255)
     */
    private $typeEvent;


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
     * Set nomEvent
     *
     * @param string $nomEvent
     *
     * @return Evenement
     */
    public function setNomEvent($nomEvent)
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    /**
     * Get nomEvent
     *
     * @return string
     */
    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    /**
     * Set debutEvent
     *
     * @param \DateTime $debutEvent
     *
     * @return Evenement
     */
    public function setDebutEvent($debutEvent)
    {
        $this->debutEvent = $debutEvent;

        return $this;
    }

    /**
     * Get debutEvent
     *
     * @return \DateTime
     */
    public function getDebutEvent()
    {
        return $this->debutEvent;
    }

    /**
     * Set finEvent
     *
     * @param \DateTime $finEvent
     *
     * @return Evenement
     */
    public function setFinEvent($finEvent)
    {
        $this->finEvent = $finEvent;

        return $this;
    }

    /**
     * Get finEvent
     *
     * @return \DateTime
     */
    public function getFinEvent()
    {
        return $this->finEvent;
    }

    /**
     * Set descrEvent
     *
     * @param string $descrEvent
     *
     * @return Evenement
     */
    public function setDescrEvent($descrEvent)
    {
        $this->descrEvent = $descrEvent;

        return $this;
    }

    /**
     * Get descrEvent
     *
     * @return string
     */
    public function getDescrEvent()
    {
        return $this->descrEvent;
    }

    /**
     * Set typeEvent
     *
     * @param string $typeEvent
     *
     * @return Evenement
     */
    public function setTypeEvent($typeEvent)
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    /**
     * Get typeEvent
     *
     * @return string
     */
    public function getTypeEvent()
    {
        return $this->typeEvent;
    }
}

