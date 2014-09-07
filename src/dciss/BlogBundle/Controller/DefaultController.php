<?php

namespace dciss\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('dcissBlogBundle:Default:index.html.twig', array('name' => $name));
        return new Response("
        		<h1>Hello CSE5ITP This is our first test by Group 3 Test</h1>
        		");
    }
}
