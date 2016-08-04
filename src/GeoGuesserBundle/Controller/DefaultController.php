<?php

namespace GeoGuesserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeoGuesserBundle::index.html.twig');
    }

        public function gameAction()
    {
        return $this->render('GeoGuesserBundle::game.html.twig');
    }
}
