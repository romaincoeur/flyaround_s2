<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 27/03/14
 * Time: 15:39
 */

// src/Flyaround/MapBundle/DataFixtures/ORM/LoadGroupData.php
namespace Flyaround\MapBundle\DataFixtures\ORM;

use Application\Sonata\UserBundle\Entity\Group;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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

        // group admin
        $group_admin = new Group('admin', array('ROLE_ADMIN','ROLE_SONATA_ADMIN', 'ROLE_SUPER_ADMIN'));
        $this->addReference('group-admin', $group_admin);
        $em->persist($group_admin);

        // group user
        $group_user = new Group('user', array('ROLE_USER'));
        $this->addReference('group-user', $group_user);
        $em->persist($group_user);

        $em->flush();
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}