<?php
// src/HMA/AppBundle/DataFixtures/ORM/LoadFiche_vehicule.php

namespace HMA\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HMA\AppBundle\Entity\Fiche_client;
use HMA\AppBundle\Entity\fiche_vehicule;

class LoadFiche_vehicule implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ficheClient1 = new Fiche_client();
        $ficheClient1->setNom('BASTIDE BRUNO');
        $ficheClient1->setAdresse('11 AVENUE EMILE ZOLA');
        $ficheClient1->setVille('YZEURE');
        $ficheClient1->setCodepostal('03400');
        $ficheClient1->setTel2('0631781201');
        $ficheClient1->setEmail('bruno.bastide@hotmail.fr');

        $ficheClient2 = new Fiche_client();
        $ficheClient2->setNom('CAILLOT HUBERT');
        $ficheClient2->setAdresse('2 ROUTE SAINT VOIR');
        $ficheClient2->setVille('GOUISE');
        $ficheClient2->setCodepostal('03340');
        $ficheClient2->setTel1('0470430649');
        $ficheClient2->setTel2('0608229269');

        $ficheVehicule1 = new Fiche_vehicule();
        $ficheVehicule1->setMarque('MAZDA');
        $ficheVehicule1->setModele('MX-5');
        $ficheVehicule1->setImmat('7580VN03');
        $ficheVehicule1->setMec(new \DateTime('1999-08-16'));
        $ficheVehicule1->setKilometres(0);
        $ficheVehicule1->setMotorisation('ESSENCE');
        $ficheVehicule1->setTypemoteur('blabla');
        $ficheVehicule1->setType('blabla');
        $ficheVehicule1->setSn('JMZNB186200130461');
        $ficheVehicule1->setTeinte('NOIRE');
        $ficheVehicule1->setPneudimav('blabla');
        $ficheVehicule1->setPneumodav('blabla');
        $ficheVehicule1->setPneudimar('blabla');
        $ficheVehicule1->setPneumodar('blabla');
        $ficheVehicule1->setDatedernieremodification(new \DateTime('2015-08-28'));
        $ficheVehicule1->setCt(new \DateTime('2016-01-09'));
        $ficheVehicule1->setFicheclient($ficheClient1);

        $ficheVehicule2 = new Fiche_vehicule();
        $ficheVehicule2->setMarque('CITROEN');
        $ficheVehicule2->setModele('SAXO');
        $ficheVehicule2->setImmat('7574VA03');
        $ficheVehicule2->setKilometres(0);
        $ficheVehicule2->setMotorisation('ESSENCE');
        $ficheVehicule2->setDatedernieremodification(new \DateTime('2015-11-29'));
        $ficheVehicule2->setFicheclient($ficheClient1);

        $ficheVehicule3 = new Fiche_vehicule();
        $ficheVehicule3->setMarque('PEUGEOT');
        $ficheVehicule3->setModele('308');
        $ficheVehicule3->setImmat('BC734SH');
        $ficheVehicule3->setMec(new \DateTime('2007-11-27'));
        $ficheVehicule3->setKilometres(0);
        $ficheVehicule3->setType('4C9HZC/1');
        $ficheVehicule3->setSn('VF34C9HZC55072291');
        $ficheVehicule3->setDatedernieremodification(new \DateTime('2014-09-15'));
        $ficheVehicule3->setFicheclient($ficheClient2);

        $manager->persist($ficheVehicule1);
        $manager->persist($ficheVehicule2);
        $manager->persist($ficheVehicule3);

        $manager->flush();
    }
}
