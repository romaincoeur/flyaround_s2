<?php

namespace Application\Sonata\UserBundle\Tests\Controller;

use Application\Sonata\UserBundle\Tests\WebTestCase;
use Symfony\Component\HttpKernel\Client;


/**
 * Class ApiSecurityControllerTest
 * @package Application\Sonata\UserBundle\Tests\Controller
 */
class ApiSecurityControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->client = static::createClient();
    }

    /**
     * test login
     */
    public function testLoginFailure()
    {
        $this->loadFixtures(array(
            'Flyaround\MapBundle\DataFixtures\ORM\LoadGroupData',
            'Flyaround\MapBundle\DataFixtures\ORM\LoadUserData'
        ));

        $data = array(
            'username' => 'user',
            'password' => 'userwrongpass',
        );

        $this->client->request('POST', $this->getUrl('api_login_check'), $data);
        $this->assertJsonResponse($this->client->getResponse(), 401);
    }

    /**
     * test login
     */
    public function testLoginSuccess()
    {
        $data = array(
            'username' => 'tom',
            'password' => 'azerty',
        );

        $this->client->request('POST', $this->getUrl('api_login_check'), $data);
        $this->assertJsonResponse($this->client->getResponse(), 200);

        $response = json_decode($this->client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('token', $response);

        // check token from query string work

        $client = static::createClient();
        $client->request('HEAD', $this->getUrl('api_ping', array($this->queryParameterName => $response['token'])));

        $this->assertJsonResponse($client->getResponse(), 200, false);

        // check token work

        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('%s %s', $this->authorizationHeaderPrefix, $response['token']));
        $client->request('HEAD', $this->getUrl('api_ping'));

        $this->assertJsonResponse($client->getResponse(), 200, false);

        // check token works several times, as long as it is valid

        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('%s %s', $this->authorizationHeaderPrefix, $response['token']));
        $client->request('HEAD', $this->getUrl('api_ping'));

        $this->assertJsonResponse($client->getResponse(), 200, false);

        // check a bad token does not work

        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('%s %s', $this->authorizationHeaderPrefix, $response['token'].'changed'));
        $client->request('HEAD', $this->getUrl('api_ping'));

        $this->assertJsonResponse($client->getResponse(), 401, false);

        // check error if no authorization header

        $client = static::createClient();
        $client->request('HEAD', $this->getUrl('api_ping'));

        $this->assertJsonResponse($client->getResponse(), 401, false);
    }
}
