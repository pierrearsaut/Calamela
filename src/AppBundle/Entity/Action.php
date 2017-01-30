<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table(name="action")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActionRepository")
 */
class Action
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
     * @ORM\Column(name="type_action", type="string", length=255)
     */
    private $typeAction;

    /**
     * @var int
     *
     * @ORM\Column(name="pts_action", type="integer")
     */
    private $ptsAction;


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
     * Set typeAction
     *
     * @param string $typeAction
     *
     * @return Action
     */
    public function setTypeAction($typeAction)
    {
        $this->typeAction = $typeAction;

        return $this;
    }

    /**
     * Get typeAction
     *
     * @return string
     */
    public function getTypeAction()
    {
        return $this->typeAction;
    }

    /**
     * Set ptsAction
     *
     * @param integer $ptsAction
     *
     * @return Action
     */
    public function setPtsAction($ptsAction)
    {
        $this->ptsAction = $ptsAction;

        return $this;
    }

    /**
     * Get ptsAction
     *
     * @return int
     */
    public function getPtsAction()
    {
        return $this->ptsAction;
    }
}

