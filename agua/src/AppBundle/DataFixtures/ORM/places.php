<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Place;

class Places implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $file = file_get_contents(__DIR__.'/../../Resources/Maps/sites.csv');
        $lines = explode("\n",$file);
        array_pop($lines);
        array_shift($lines);
        $places = array();
        foreach($lines as $line){
            $fields = explode(";",$line);
            $site = array();
            $site['name'] = (isset($fields[0]))?$fields[0]:exit(dump($fields));
            $site['size'] = (isset($fields[1]))?$fields[1]:exit(dump($fields));
            $site['description'] = (isset($fields[2]))?$fields[2]:exit(dump($fields));
            $site['annotation'] = (isset($fields[3]))?$fields[3]:exit(dump($fields));
            $site['distance'] = (isset($fields[4]))?$fields[4]:exit(dump($fields));
            $site['rise_length'] = (isset($fields[5]))?$fields[5]:exit(dump($fields));
            $site['path_type'] = (isset($fields[6]))?$fields[6]:exit(dump($fields));
            $site['track_route'] = (isset($fields[7]))?$fields[7]:exit(dump($fields));
            $site['tourist_offer'] = (isset($fields[8]))?$fields[8]:exit(dump($fields));
            $site['author'] = (isset($fields[9]))?$fields[9]:exit(dump($fields));
            $site['latitude'] = (isset($fields[10]))?$fields[10]:exit(dump($fields));
            $site['longitude'] = (isset($fields[11]))?$fields[11]:exit(dump($fields));

            $places[] = $site;
        }

        foreach($places as $place){
            $entity = new Place();
            $entity->setName($place['name']);
            $entity->setDescription($place['description']);
            $entity->setSize($place['size']);
            $entity->setAnnotation($place['annotation']);
            $entity->setDistance($place['distance']);
            $entity->setRiseLength($place['rise_length']);
            $entity->setPathType($place['path_type']);
            $entity->setTrackRoute($place['track_route']);
            $entity->setTouristOffer($place['tourist_offer']);
            $entity->setAuthor($place['author']);
            $entity->setLatitude($place['latitude']);
            $entity->setLongitude($place['longitude']);

            $manager->persist($entity);
        }
        $manager->flush();
    }
}