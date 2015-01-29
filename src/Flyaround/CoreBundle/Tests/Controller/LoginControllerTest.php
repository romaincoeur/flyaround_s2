<?php

namespace Flyaround\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CoreControllerTest extends WebTestCase
{
    
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/login');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /login");

        // Fill in the form and submit it
        $form = $crawler->selectButton('Connexion')->form(array(
            'fos_user_security_login[_username]'  => 'test',
            'fos_user_security_login[_password]'  => 'azerty',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

    }

}
