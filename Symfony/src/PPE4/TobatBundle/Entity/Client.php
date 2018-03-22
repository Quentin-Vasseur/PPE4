<?php

namespace PPE4\TobatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="PPE4\TobatBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="prenomClient", type="string", length=255)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=255)
     */
    private $nomClient;

    /**
     * @var int
     *
     * @ORM\Column(name="telClient", type="integer", unique=true)
     */
    private $telClient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseClient", type="string", length=255)
     */
    private $adresseClient;

    /**
     * @var int
     *
     * @ORM\Column(name="cpClient", type="integer")
     */
    private $cpClient;

    /**
     * @var string
     *
     * @ORM\Column(name="villeClient", type="string", length=255)
     */
    private $villeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="mailClient", type="string", length=255)
     */
    private $mailClient;

    /**
     * @var string
     *
     * @ORM\Column(name="passClient", type="string", length=40)
     */
    private $passClient;


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
     * Set prenomClient
     *
     * @param string $prenomClient
     *
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set telClient
     *
     * @param integer $telClient
     *
     * @return Client
     */
    public function setTelClient($telClient)
    {
        $this->telClient = $telClient;

        return $this;
    }

    /**
     * Get telClient
     *
     * @return int
     */
    public function getTelClient()
    {
        return $this->telClient;
    }

    /**
     * Set adresseClient
     *
     * @param string $adresseClient
     *
     * @return Client
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    /**
     * Get adresseClient
     *
     * @return string
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Set cpClient
     *
     * @param integer $cpClient
     *
     * @return Client
     */
    public function setCpClient($cpClient)
    {
        $this->cpClient = $cpClient;

        return $this;
    }

    /**
     * Get cpClient
     *
     * @return int
     */
    public function getCpClient()
    {
        return $this->cpClient;
    }

    /**
     * Set villeClient
     *
     * @param string $villeClient
     *
     * @return Client
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;

        return $this;
    }

    /**
     * Get villeClient
     *
     * @return string
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }

    /**
     * Set mailClient
     *
     * @param string $mailClient
     *
     * @return Client
     */
    public function setMailClient($mailClient)
    {
        $this->mailClient = $mailClient;

        return $this;
    }

    /**
     * Get mailClient
     *
     * @return string
     */
    public function getMailClient()
    {
        return $this->mailClient;
    }

    /**
     * Set passClient
     *
     * @param string $passClient
     *
     * @return Client
     */
    public function setPassClient($passClient)
    {
        $this->passClient = $passClient;

        return $this;
    }

    /**
     * Get passClient
     *
     * @return string
     */
    public function getPassClient()
    {
        return $this->passClient;
    }
}
