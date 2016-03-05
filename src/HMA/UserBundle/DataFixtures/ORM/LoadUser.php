<?php
// src/HMA/UserBundle/DataFixtures/ORM/LoadUser.php

namespace HMA\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HMA\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $listNames = array('ADMIN', 'BRUNO');

        foreach ($listNames as $name) {
            $user = new User;

            $user->setUsername($name);
            $user->setPassword($name);
            $user->setSalt('');
            $user->setRoles(array('ROLE_ADMIN'));

            $manager->persist($user);
        }

        $manager->flush();
    }
}
