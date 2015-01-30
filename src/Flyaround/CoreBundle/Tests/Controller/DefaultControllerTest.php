<?php

namespace Flyaround\WelcomeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals('Flyaround\CoreBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }

    public function testRegisteration()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $form = $crawler->selectButton('Enregistrer')->form(array(
            'fos_user_registration_form[username]'  => 'romain',
            'fos_user_registration_form[email]' => 'romain@test.fr',
            'fos_user_registration_form[plainPassword][first]' => 'azerty1234',
            'fos_user_registration_form[plainPassword][second]' => 'azerty1234'
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();
        // TODO revoir la redirection après inscription
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }

    public function testconnexion()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $form = $crawler->selectButton('_submit')->form(array(
            '_username'  => 'user',
            '_password'  => 'pa$$word',
        ));


        $client->submit($form);
        $crawler = $client->followRedirect();
        // TODO revoir la redirection après inscription
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }
}
