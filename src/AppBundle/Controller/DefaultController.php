<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homeindex")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contenedor/index.html.twig');
    }
    /**
     * @Route("/nosotros/{sitio}", name="nosotros")
     */
    public function nosotrosAction(Request $request,$sitio='todos')
    {
        // replace this example code with whatever you need
        return $this->render('contenedor/nosotros.html.twig',array('sitio'=>$sitio));
    }
}
