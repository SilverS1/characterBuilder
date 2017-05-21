<?php

namespace CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CharacterBundle:Default:index.html.twig');
    }
}
