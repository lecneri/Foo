<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * Every action in this Controller will prefixed with /foo
 * @Route("/foo")
 */
class FooController extends Controller
{
    /**
     * Route should be /foo
     * @Route("/")
     */
    public function indexAction()
    {
       return $this->render("AppBundle:Foo:index.html.twig");
    }

}
