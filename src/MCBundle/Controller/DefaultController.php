<?php

namespace MCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction(Request $request){
      return $this->render('MCBundle:Frontend:index.html.twig');
    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricingAction(Request $request){
      return $this->render('MCBundle:Frontend:pricing.html.twig');
    }


}
