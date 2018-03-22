<?php

namespace PPE4\TobatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite")
 * @ORM\Entity(repositoryClass="PPE4\TobatBundle\Repository\VisiteRepository")
 */
class Visite
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateVisite", type="date")
     */
    private $dateVisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutVisite", type="time")
     */
    private $heureDebutVisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinVisite", type="time")
     */
    private $heureFinVisite;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlacesVisite", type="integer")
     */
    private $nbPlacesVisite;
	
	/**
	 * @ORM\ManyToOne(targetEntity="PPE4\TobatBundle\Entity\Bateau")
	 * @ORM\JoinColumn(nullable=false)
	 */
	 private $bateau;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateVisite
     *
     * @param \DateTime $dateVisite
     *
     * @return Visite
     */
    public function setDateVisite($dateVisite)
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    /**
     * Get dateVisite
     *
     * @return \DateTime
     */
    public function getDateVisite()
    {
        return $this->dateVisite;
    }

    /**
     * Set heureDebutVisite
     *
     * @param \DateTime $heureDebutVisite
     *
     * @return Visite
     */
    public function setHeureDebutVisite($heureDebutVisite)
    {
        $this->heureDebutVisite = $heureDebutVisite;

        return $this;
    }

    /**
     * Get heureDebutVisite
     *
     * @return \DateTime
     */
    public function getHeureDebutVisite()
    {
        return $this->heureDebutVisite;
    }

    /**
     * Set heureFinVisite
     *
     * @param \DateTime $heureFinVisite
     *
     * @return Visite
     */
    public function setHeureFinVisite($heureFinVisite)
    {
        $this->heureFinVisite = $heureFinVisite;

        return $this;
    }

    /**
     * Get heureFinVisite
     *
     * @return \DateTime
     */
    public function getHeureFinVisite()
    {
        return $this->heureFinVisite;
    }

    /**
     * Set nbPlacesVisite
     *
     * @param integer $nbPlacesVisite
     *
     * @return Visite
     */
    public function setNbPlacesVisite($nbPlacesVisite)
    {
        $this->nbPlacesVisite = $nbPlacesVisite;

        return $this;
    }

    /**
     * Get nbPlacesVisite
     *
     * @return integer
     */
    public function getNbPlacesVisite()
    {
        return $this->nbPlacesVisite;
    }

    /**
     * Set bateau
     *
     * @param \PPE4\TobatBundle\Entity\Bateau $bateau
     *
     * @return Visite
     */
    public function setBateau(\PPE4\TobatBundle\Entity\Bateau $bateau)
    {
        $this->bateau = $bateau;

        return $this;
    }

    /**
     * Get bateau
     *
     * @return \PPE4\TobatBundle\Entity\Bateau
     */
    public function getBateau()
    {
        return $this->bateau;
    }
}