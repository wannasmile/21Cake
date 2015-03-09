<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class AppController
 * @Route("/")
 */
class AppController extends Controller
{
    /**
     * @Route("/", name="Home-Page")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/gallery")
     * @Template()
     */
    public function listAction(){
        return array();
    }

    /**
     * @Route("detail/{id}")
     * @Template()
     */
    public function detailAction($id){
        return new Response(array());
    }

}
