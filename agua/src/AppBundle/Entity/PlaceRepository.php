<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PlaceRepository extends EntityRepository{

    public function findTowns(){
        $em = $this->getEntityManager();

        $dql = "SELECT p.town FROM AppBundle:Place p ORDER BY p.town ASC ";

        $query = $em->createQuery($dql);

        return $query->getResult();
    }

}