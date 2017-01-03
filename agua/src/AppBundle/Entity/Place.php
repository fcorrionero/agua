<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PlaceRepository")
 * @ORM\Table(name="place")
 */
class Place {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** @ORM\Column(type="string", length=255) */
    protected $name;

    /** @ORM\Column(type="text", nullable=true) */
    protected $description;

    /** @ORM\Column(type="text", nullable=true) */
    protected $location;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    protected $picture;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $town;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $province;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $track_route;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $tourist_offer;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $size;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $distance; // distancia al pueblo

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $rise_length; //metros de ascensión

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $path_type; //tipo sendero

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $latitude;

    /** @ORM\Column(type="string",length=255, nullable=true) */
    protected $longitude;



    /**
     * @return mixed
     */
    public function getTrackRoute()
    {
        return $this->track_route;
    }

    /**
     * @param mixed $track_route
     */
    public function setTrackRoute($track_route)
    {
        $this->track_route = $track_route;
    }

    /**
     * @return mixed
     */
    public function getTouristOffer()
    {
        return $this->tourist_offer;
    }

    /**
     * @param mixed $tourist_offer
     */
    public function setTouristOffer($tourist_offer)
    {
        $this->tourist_offer = $tourist_offer;
    }



    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getRiseLength()
    {
        return $this->rise_length;
    }

    /**
     * @param mixed $rise_length
     */
    public function setRiseLength($rise_length)
    {
        $this->rise_length = $rise_length;
    }

    /**
     * @return mixed
     */
    public function getPathType()
    {
        return $this->path_type;
    }

    /**
     * @param mixed $path_type
     */
    public function setPathType($path_type)
    {
        $this->path_type = $path_type;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}