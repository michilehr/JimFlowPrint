<?php

namespace Jimdo\JimkanbanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TicketTypeControllerTest extends WebTestCase
{
    /**
     * @test
     */
    public function returnsHttpStatusCodeOk()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        $client->request('GET', '/tickettype/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }

    /**
     * @test
     */
    public function editShouldShowAForm()
    {

    }

    /**
     * @test
     */
    public function editFormShouldPersistMyChangesOnSubmit()
    {

    }
}