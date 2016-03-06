<?php

// src/HMA/AppBundle/Controller/AppController.php

namespace HMA\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use HMA\AppBundle\Entity\Fiche_client;
use HMA\AppBundle\Form\Fiche_clientType;
use HMA\AppBundle\Entity\Fiche_vehicule;
use HMA\AppBundle\Form\Fiche_vehiculeType;

class AppController extends Controller
{
    public function homeAction(Request $request)
    {
        return $this->render('HMAAppBundle:App:home.html.twig');
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function workshopAction(Request $request)
    {
        $ficheClient = new Fiche_client();
        $formClient = $this->get('form.factory')->create(Fiche_clientType::class, $ficheClient);

        $ficheVehicule = new Fiche_vehicule();
        $formVehicule = $this->get('form.factory')->create(Fiche_vehiculeType::class, $ficheVehicule);

        return $this->render('HMAAppBundle:App:workshop.html.twig', array(
            'formClient' => $formClient->createView(),
            'formVehicule' => $formVehicule->createView()
        ));
    }
}
