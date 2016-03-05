<?php

// src/HMA/AppBundle/Controller/AppController.php

namespace HMA\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{
    public function homeAction(Request $request)
    {
        return $this->render('HMAAppBundle:App:home.html.twig');
    }
}
