<?php

namespace Flyaround\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 */
class Terrain
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $iCAO;

    /**
     * @var string
     */
    private $iATA;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $altitude;


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
     * Set name
     *
     * @param string $name
     * @return Terrain
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set iCAO
     *
     * @param string $iCAO
     * @return Terrain
     */
    public function setICAO($iCAO)
    {
        $this->iCAO = $iCAO;

        return $this;
    }

    /**
     * Get iCAO
     *
     * @return string 
     */
    public function getICAO()
    {
        return $this->iCAO;
    }

    /**
     * Set iATA
     *
     * @param string $iATA
     * @return Terrain
     */
    public function setIATA($iATA)
    {
        $this->iATA = $iATA;

        return $this;
    }

    /**
     * Get iATA
     *
     * @return string 
     */
    public function getIATA()
    {
        return $this->iATA;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Terrain
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set altitude
     *
     * @param float $altitude
     * @return Terrain
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return float 
     */
    public function getAltitude()
    {
        return $this->altitude;
    }
}
