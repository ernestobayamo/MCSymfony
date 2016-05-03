<?php

namespace MCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
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

    /**
     * @Route("/tutors", name="tutors")
     */
    public function tutorsAction(Request $request){
      return $this->render('MCBundle:Frontend:tutors.html.twig');
    }

    /**
     * @Route("/survey", name="survey")
     */
    public function surveyAction(Request $request){
      return $this->render('MCBundle:Frontend:survey.html.twig');
    }

    /**
     * @Route("/website-forum", name="website-forum")
     */
    public function forumAction(Request $request){
      return $this->render('MCBundle:Frontend:website-forum.html.twig');
    }
}
