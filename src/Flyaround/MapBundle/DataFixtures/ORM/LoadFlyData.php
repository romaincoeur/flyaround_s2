<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadFlyData.php

namespace Flyaround\MapBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Flyaround\MapBundle\Entity\Fly;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadFlyData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $faker = $this->getFaker();

        $fly1 = new Fly();
        $fly1->setName('chateau des vaux');
        $fly1->setLatitude('48');
        $fly1->setLongitude('1.0');
        $fly1->setDescription('magnifique chateau de la region ');
        $manager->persist($fly1);

        $lon_min = -1.0522795;
        $lon_max = 6.7260408;
        $lat_min = 42.4838724;
        $lat_max = 49.6637400;
        foreach (range(1, 20) as $id) {
            $fly = new Fly();
            $fly->setName($faker->userName);
            $fly->setDescription($faker->realText(250));
            $fly->setLatitude((mt_rand() / mt_getrandmax())*($lat_max-$lat_min) + $lat_min);
            $fly->setLongitude((mt_rand() / mt_getrandmax())*($lon_max-$lon_min) + $lon_min);
            $manager->persist($fly);
        }

        $manager->flush();
    }

    /**
     * @return \Faker\Generator
     */
    public function getFaker()
    {
        return $this->container->get('faker.generator');
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

}