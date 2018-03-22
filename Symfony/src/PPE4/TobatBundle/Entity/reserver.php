<?php

namespace PPE4\TobatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reserver
 *
 * @ORM\Table(name="reserver")
 * @ORM\Entity(repositoryClass="PPE4\TobatBundle\Repository\reserverRepository")
 */
class reserver
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
     * @ORM\ManyToOne(targetEntity="PPE4\TobatBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="PPE4\TobatBundle\Entity\Visite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $visite;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersonnes", type="integer")
     */
    private $nbPersonnes;


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
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return reserver
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return int
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }

    /**
     * Set client
     *
     * @param \PPE4\TobatBundle\Entity\Client $client
     *
     * @return reserver
     */
    public function setClient(\PPE4\TobatBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \PPE4\TobatBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set visite
     *
     * @param \PPE4\TobatBundle\Entity\Visite $visite
     *
     * @return reserver
     */
    public function setVisite(\PPE4\TobatBundle\Entity\Visite $visite)
    {
        $this->visite = $visite;

        return $this;
    }

    /**
     * Get visite
     *
     * @return \PPE4\TobatBundle\Entity\Visite
     */
    public function getVisite()
    {
        return $this->visite;
    }
}
