<?php
// src/Flyaround/MapBundle/DataFixtures/ORM/LoadUserData.php

namespace Flyaround\MapBundle\DataFixtures\ORM;

use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $em)
    {
        $factory = $this->getSecurityManager();
        $faker = $this->getFaker();

        // user romain
        $user1 = new User();
        $user1->addGroup($em->merge($this->getReference('group-admin')));
        $user1->setFirstname('Romain');
        $user1->setLastname('Coeur');
        $user1->setFirstname('Romain');
        $user1->setLastname('Coeur');
        $user1->setEmail('coeurro@gmail.com');
        $user1->setUsername('romain');
        $user1->setEnabled(true);
        $user1->setSuperAdmin(true);
        $user1->setLocked(false);
        $this->addReference('user-romain', $user1);
        $encoder = $factory->getEncoder($user1);
        $encodedPassword = $encoder->encodePassword('Rogvog4', $user1->getSalt());
        $user1->setPassword($encodedPassword);
        $em->persist($user1);

        // user admin
        $user2 = new User();
        $user2->addGroup($em->merge($this->getReference('group-admin')));
        $user2->setEmail('admin@gmail.com');
        $user2->setUsername('admin');
        $user2->setFirstname('Steeve');
        $user2->setLastname('Jobs');
        $user2->setEnabled(true);
        $user2->setSuperAdmin(true);
        $user2->setLocked(false);
        $this->addReference('user-admin', $user2);
        $encoder = $factory->getEncoder($user2);
        $encodedPassword = $encoder->encodePassword('mfcarre', $user2->getSalt());
        $user2->setPassword($encodedPassword);
        $em->persist($user2);

        // user tom
        $user4 = new User();
        $user4->addGroup($em->merge($this->getReference('group-admin')));
        $user4->setFirstname('Tom');
        $user4->setLastname('Nana');
        $user4->setEmail('tom@gmail.com');
        $user4->setEnabled(true);
        $user4->setUsername('tom');
        $user4->setSuperAdmin(false);
        $user4->setLocked(false);
        $this->addReference('user-tom', $user4);
        $encoder = $factory->getEncoder($user4);
        $encodedPassword = $encoder->encodePassword('azerty', $user4->getSalt());
        $user4->setPassword($encodedPassword);
        $em->persist($user4);

        foreach (range(1, 43) as $id) {
            $user = new User();
            $user->addGroup($em->merge($this->getReference('group-user')));
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setEmail($faker->safeEmail);
            $user->setPhone($faker->phoneNumber);
            $user->setUsername($faker->userName);
            $user->setPassword('');
            $user->setEnabled(true);
            $user->setLocked(false);
            $this->addReference('user-'.$id, $user);
            $em->persist($user);
        }

        $em->flush();
    }

    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }

    /**
     * @return \FOS\UserBundle\Model\UserManagerInterface
     */
    public function getUserManager()
    {
        return $this->container->get('fos_user.user_manager');
    }

    /**
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    public function getSecurityManager()
    {
        return $this->container->get('security.encoder_factory');
    }

    /**
     * @return \Faker\Generator
     */
    public function getFaker()
    {
        return $this->container->get('faker.generator');
    }
}