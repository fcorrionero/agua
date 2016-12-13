<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="place")
 */
class Place {
    protected $id;
    protected $name;
    protected $description;
    protected $location;
}