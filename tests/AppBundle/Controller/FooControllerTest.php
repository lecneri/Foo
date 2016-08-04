<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FooControllerTest extends WebTestCase
{
    public function testIndex()
   {
      $client = static::createClient();

      $crawler = $client->request('GET', '/foo');
      $this->assertTrue($client->getResponse()->isSuccessful());
   }

}
