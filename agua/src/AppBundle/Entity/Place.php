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