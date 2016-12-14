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

        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);*/
    }

    public function viewAction(Request $request){
        $json = $request->get('json',null);
        dump($json);
        exit();
    }
}
