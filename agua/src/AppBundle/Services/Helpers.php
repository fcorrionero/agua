<?php
namespace AppBundle\Services;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class Helpers {

    public $serializer;

    public function __construct(){
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function json($object){
        return $this->serializer->serialize($object, 'json');
    }

    public function setResponseJson($json){
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent($json);
        $response->headers->set("Content-Type", "application/json");

        return $response;
    }

    public function getObjectFromJson($json){
        return $this->serializer->deserialize($json,'Data','json');
    }

    public function getObjectFromXml($xml){
        return $this->serializer->deserialize($xml,'Data','xml');
    }
}