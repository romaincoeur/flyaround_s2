<?php

namespace Flyaround\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 */
class Terrain
{
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
            $this->created_at = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }











    // YAML GENERATED CODE
    
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
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var string
     */
    private $dac;

    /**
     * @var string
     */
    private $departement;

    /**
     * @var boolean
     */
    private $restreint;

    /**
     * @var boolean
     */
    private $ulm;

    /**
     * @var boolean
     */
    private $heliStation;

    /**
     * @var string
     */
    private $vac;

    /**
     * @var string
     */
    private $touchAndGoPrice;

    /**
     * @var string
     */
    private $landingPrice;

    /**
     * @var string
     */
    private $dayLawnPrice;

    /**
     * @var string
     */
    private $hangarPrice;

    /**
     * @var boolean
     */
    private $altiport;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var boolean
     */
    private $published;

    /**
     * @var string
     */
    private $virtualName;

    /**
     * @var string
     */
    private $context;

    /**
     * @var string
     */
    private $contextId;

    /**
     * @var boolean
     */
    private $isMainContext;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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

    /**
     * Set city
     *
     * @param string $city
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return Terrain
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set dac
     *
     * @param string $dac
     * @return Terrain
     */
    public function setDac($dac)
    {
        $this->dac = $dac;

        return $this;
    }

    /**
     * Get dac
     *
     * @return string 
     */
    public function getDac()
    {
        return $this->dac;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return Terrain
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set restreint
     *
     * @param boolean $restreint
     * @return Terrain
     */
    public function setRestreint($restreint)
    {
        $this->restreint = $restreint;

        return $this;
    }

    /**
     * Get restreint
     *
     * @return boolean 
     */
    public function getRestreint()
    {
        return $this->restreint;
    }

    /**
     * Set ulm
     *
     * @param boolean $ulm
     * @return Terrain
     */
    public function setUlm($ulm)
    {
        $this->ulm = $ulm;

        return $this;
    }

    /**
     * Get ulm
     *
     * @return boolean 
     */
    public function getUlm()
    {
        return $this->ulm;
    }

    /**
     * Set heliStation
     *
     * @param boolean $heliStation
     * @return Terrain
     */
    public function setHeliStation($heliStation)
    {
        $this->heliStation = $heliStation;

        return $this;
    }

    /**
     * Get heliStation
     *
     * @return boolean 
     */
    public function getHeliStation()
    {
        return $this->heliStation;
    }

    /**
     * Set vac
     *
     * @param string $vac
     * @return Terrain
     */
    public function setVac($vac)
    {
        $this->vac = $vac;

        return $this;
    }

    /**
     * Get vac
     *
     * @return string 
     */
    public function getVac()
    {
        return $this->vac;
    }

    /**
     * Set touchAndGoPrice
     *
     * @param string $touchAndGoPrice
     * @return Terrain
     */
    public function setTouchAndGoPrice($touchAndGoPrice)
    {
        $this->touchAndGoPrice = $touchAndGoPrice;

        return $this;
    }

    /**
     * Get touchAndGoPrice
     *
     * @return string 
     */
    public function getTouchAndGoPrice()
    {
        return $this->touchAndGoPrice;
    }

    /**
     * Set landingPrice
     *
     * @param string $landingPrice
     * @return Terrain
     */
    public function setLandingPrice($landingPrice)
    {
        $this->landingPrice = $landingPrice;

        return $this;
    }

    /**
     * Get landingPrice
     *
     * @return string 
     */
    public function getLandingPrice()
    {
        return $this->landingPrice;
    }

    /**
     * Set dayLawnPrice
     *
     * @param string $dayLawnPrice
     * @return Terrain
     */
    public function setDayLawnPrice($dayLawnPrice)
    {
        $this->dayLawnPrice = $dayLawnPrice;

        return $this;
    }

    /**
     * Get dayLawnPrice
     *
     * @return string 
     */
    public function getDayLawnPrice()
    {
        return $this->dayLawnPrice;
    }

    /**
     * Set hangarPrice
     *
     * @param string $hangarPrice
     * @return Terrain
     */
    public function setHangarPrice($hangarPrice)
    {
        $this->hangarPrice = $hangarPrice;

        return $this;
    }

    /**
     * Get hangarPrice
     *
     * @return string 
     */
    public function getHangarPrice()
    {
        return $this->hangarPrice;
    }

    /**
     * Set altiport
     *
     * @param boolean $altiport
     * @return Terrain
     */
    public function setAltiport($altiport)
    {
        $this->altiport = $altiport;

        return $this;
    }

    /**
     * Get altiport
     *
     * @return boolean 
     */
    public function getAltiport()
    {
        return $this->altiport;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Terrain
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Terrain
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Terrain
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set virtualName
     *
     * @param string $virtualName
     * @return Terrain
     */
    public function setVirtualName($virtualName)
    {
        $this->virtualName = $virtualName;

        return $this;
    }

    /**
     * Get virtualName
     *
     * @return string 
     */
    public function getVirtualName()
    {
        return $this->virtualName;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return Terrain
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set contextId
     *
     * @param string $contextId
     * @return Terrain
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;

        return $this;
    }

    /**
     * Get contextId
     *
     * @return string 
     */
    public function getContextId()
    {
        return $this->contextId;
    }

    /**
     * Set isMainContext
     *
     * @param boolean $isMainContext
     * @return Terrain
     */
    public function setIsMainContext($isMainContext)
    {
        $this->isMainContext = $isMainContext;

        return $this;
    }

    /**
     * Get isMainContext
     *
     * @return boolean 
     */
    public function getIsMainContext()
    {
        return $this->isMainContext;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Terrain
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Terrain
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postCode;


    /**
     * Set slug
     *
     * @param string $slug
     * @return Terrain
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Terrain
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     * @return Terrain
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string 
     */
    public function getPostCode()
    {
        return $this->postCode;
    }
    /**
     * @var string
     */
    private $town;


    /**
     * Set town
     *
     * @param string $town
     * @return Terrain
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }
}
