<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $helpers = $this->get('app.helpers');

        $em = $this->getDoctrine()->getEntityManager();
        $places = $em->getRepository('AppBundle:Place')->findAll();
        $json = $helpers->json($places);

        return $helpers->setResponseJson($json);

    }

    public function viewAction(Request $request){
        $helpers = $this->get('app.helpers');

        $data = json_decode($request->get('json',null));

        $em = $this->getDoctrine()->getEntityManager();
        $place = $em->getRepository('AppBundle:Place')->find($data->id);

        $json = $helpers->json($place);

        return $helpers->setResponseJson($json);
    }

    public function searchAction(Request $request){
        $helpers = $this->get('app.helpers');

        $data = json_decode($request->get('json',null));

        $em = $this->getDoctrine()->getEntityManager();
        $place = $em->getRepository('AppBundle:Place')->findBy(
            array(
                'town' => $data->town
            )
        );

        $json = $helpers->json($place);
        return $helpers->setResponseJson($json);
    }

    public function townsAction(Request $request){
        $helpers = $this->get('app.helpers');
        $em = $this->getDoctrine()->getEntityManager();
        $towns = $em->getRepository('AppBundle:Place')->findTowns();

        $json = $helpers->json($towns);
        return $helpers->setResponseJson($json);
    }
}
