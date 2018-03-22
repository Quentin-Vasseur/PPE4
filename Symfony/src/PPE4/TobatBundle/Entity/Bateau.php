<?php

namespace PPE4\TobatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table(name="bateau")
 * @ORM\Entity(repositoryClass="PPE4\TobatBundle\Repository\BateauRepository")
 */
class Bateau
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
     * @ORM\Column(name="nomBateau", type="string", length=255)
     */
    private $nomBateau;

    /**
     * @var float
     *
     * @ORM\Column(name="longueurBateau", type="float")
     */
    private $longueurBateau;

    /**
     * @var float
     *
     * @ORM\Column(name="largeurBateau", type="float")
     */
    private $largeurBateau;

    /**
     * @var int
     *
     * @ORM\Column(name="poidsBateau", type="integer")
     */
    private $poidsBateau;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesseMaxBateau", type="integer")
     */
    private $vitesseMaxBateau;
	
	/**
	 * @ORM\ManyToOne(targetEntity="PPE4\TobatBundle\Entity\Categorie")
	 * @ORM\JoinColumn(nullable=false)
	 */
	 private $categorie;
	
	/**
	 * @ORM\ManyToOne(targetEntity="PPE4\TobatBundle\Entity\Type")
	 * @ORM\JoinColumn(nullable=false)
	 */
	 private $type;
	
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
     * Set nomBateau
     *
     * @param string $nomBateau
     *
     * @return Bateau
     */
    public function setNomBateau($nomBateau)
    {
        $this->nomBateau = $nomBateau;

        return $this;
    }

    /**
     * Get nomBateau
     *
     * @return string
     */
    public function getNomBateau()
    {
        return $this->nomBateau;
    }

    /**
     * Set longueurBateau
     *
     * @param float $longueurBateau
     *
     * @return Bateau
     */
    public function setLongueurBateau($longueurBateau)
    {
        $this->longueurBateau = $longueurBateau;

        return $this;
    }

    /**
     * Get longueurBateau
     *
     * @return float
     */
    public function getLongueurBateau()
    {
        return $this->longueurBateau;
    }

    /**
     * Set largeurBateau
     *
     * @param float $largeurBateau
     *
     * @return Bateau
     */
    public function setLargeurBateau($largeurBateau)
    {
        $this->largeurBateau = $largeurBateau;

        return $this;
    }

    /**
     * Get largeurBateau
     *
     * @return float
     */
    public function getLargeurBateau()
    {
        return $this->largeurBateau;
    }

    /**
     * Set poidsBateau
     *
     * @param integer $poidsBateau
     *
     * @return Bateau
     */
    public function setPoidsBateau($poidsBateau)
    {
        $this->poidsBateau = $poidsBateau;

        return $this;
    }

    /**
     * Get poidsBateau
     *
     * @return int
     */
    public function getPoidsBateau()
    {
        return $this->poidsBateau;
    }

    /**
     * Set vitesseMaxBateau
     *
     * @param integer $vitesseMaxBateau
     *
     * @return Bateau
     */
    public function setVitesseMaxBateau($vitesseMaxBateau)
    {
        $this->vitesseMaxBateau = $vitesseMaxBateau;

        return $this;
    }

    /**
     * Get vitesseMaxBateau
     *
     * @return int
     */
    public function getVitesseMaxBateau()
    {
        return $this->vitesseMaxBateau;
    }
}

