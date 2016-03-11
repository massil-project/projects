<?php

namespace Massil\ConfigBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ParamControllerTest extends WebTestCase
{
    public function testInit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/init');
    }

}
