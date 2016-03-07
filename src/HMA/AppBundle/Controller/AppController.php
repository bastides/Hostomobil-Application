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

        if ($formClient->handleRequest($request)->isValid()) {
            $formValue = $formClient->get('nom')->getData();

            $em = $this->getDoctrine()->getManager();
            $client = $em->getRepository('HMAAppBundle:Fiche_client')->findBy(
                array('nom' => $formValue)
            );

            if (null === $client) {
                throw new Exception("Le client n'existe pas !");
            }

            $listVehicles = $em->getRepository('HMAAppBundle:Fiche_vehicule')->findBy(
                array('ficheclient' => $client)
            );

            return $this->render('HMAAppBundle:App:result.html.twig', array(
                'customers' => $client,
                'listVehicles' => $listVehicles,
                'formClient' => $formClient->createView(),
                'formVehicule' => $formVehicule->createView()
            ));
        }

        /* if ($formVehicule->handleRequest($request)->isValid()) {
            $formValue = $formVehicule->get('immat')->getData();

            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('HMAAppBundle:Fiche_vehicule')->findBy(
                array('immat' => $formValue)
            );

            if (null === $vehicule) {
                throw new Exception("Le véhicule n'existe pas !");
            }

            $client = $em->getRepository('HMAAppBundle:Fiche_client')->findBy(
                array('id' => $vehicule->getFicheclient())
            );

            return $this->render('HMAAppBundle:App:result.html.twig', array(
                'customers' => $client,
                'listVehicles' => $vehicle,
                'formClient' => $formClient->createView(),
                'formVehicule' => $formVehicule->createView()
            ));
        } */

        return $this->render('HMAAppBundle:App:workshop.html.twig', array(
            'formClient' => $formClient->createView(),
            'formVehicule' => $formVehicule->createView()
        ));
    }
}
