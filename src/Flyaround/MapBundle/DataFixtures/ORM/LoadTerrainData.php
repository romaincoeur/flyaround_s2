<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadTerrainData.php

namespace Flyaround\MapBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Flyaround\MapBundle\Entity\Fly;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Flyaround\MapBundle\Entity\Terrain;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadTerrainData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $stream = fopen(__DIR__.'/../Data/terrains.csv', 'r');
        while ($line = fgets($stream))
        {
            $data = explode(';', $line);
            $entity = new Terrain();
            $entity->setICAO(str_replace('"', '', $data[1]));
            $entity->setIATA(str_replace('"', '', $data[2]));
            $entity->setName(str_replace('"', '', $data[3]));
            $entity->setCity(str_replace('"', '', $data[4]));
            $entity->setCountry(str_replace('"', '', $data[5]));
            $entity->setLatitude(str_replace(',', '.', str_replace('"', '', $data[6])));
            $entity->setLongitude(str_replace(',', '.', str_replace('"', '', $data[7])));
            $entity->setAltitude(str_replace('"', '', $data[8]));
            $entity->setTimezone(str_replace('"', '', $data[9]));
            $entity->setDac(str_replace('"', '', $data[10]));
            $entity->setDepartement(str_replace('"', '', $data[12]));
            $entity->setRestreint(str_replace('"', '', $data[13]));
            $entity->setUlm(str_replace('"', '', $data[14]));
            $entity->setHeliStation(str_replace('"', '', $data[15]));
            $entity->setVac(str_replace('"', '', $data[16]));
            $entity->setTouchAndGoPrice(str_replace('"', '', $data[17]));
            $entity->setLandingPrice(str_replace('"', '', $data[18]));
            $entity->setDayLawnPrice(str_replace('"', '', $data[19]));
            $entity->setHangarPrice(str_replace('"', '', $data[20]));
            $entity->setAltiport(str_replace('"', '', $data[21]));
            $entity->setRegion(str_replace('"', '', $data[22]));
            $entity->setPhone(str_replace('"', '', $data[23]));
            $entity->setPublished(str_replace('"', '', $data[24]));
            $entity->setCreatedAt(new \DateTime());
            $em->persist($entity);
        }
        fclose($stream);
        $em->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

}