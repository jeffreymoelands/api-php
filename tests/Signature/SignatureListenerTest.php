<?php

/**
 * Copyright 2009-2014 Usabilla.com. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * https://github.com/usabilla/php-client
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Usabilla\Tests\API\Signature;

use Usabilla\API\Client\Client;
use Usabilla\API\Credentials\Credentials;
use Usabilla\API\Signature\SignatureListener;
use Guzzle\Common\Collection;
use Guzzle\Http\Message\Request;
use Guzzle\Common\Event;

class SignatureListenerTest extends \PHPUnit_Framework_TestCase
{


    public function testSignsRequestsProperly()
    {
        $request = new Request('GET', 'http://www.example.com');
        $request->getEventDispatcher();
        $credentials = new Credentials('a', 'b');
        $signature = $this->getMock('Usabilla\API\Signature\Signature');

        // Ensure that signing the request occurred once with the correct args
        $signature->expects($this->once())
            ->method('signRequest')
            ->with($this->equalTo($request), $this->equalTo($credentials));

        $listener = new SignatureListener($credentials, $signature);

        // Create a mock event
        $event = new Event(array(
            'request' => $request
        ));

        $listener->onRequestBeforeSend($event);
    }

    public function testCredentialsGetUpdated()
    {
        $credentials = new Credentials('access-key-one', 'secret');
        $signature = $this->getMock('Usabilla\API\Signature\Signature');
        $config = new Collection();

        $client = new Client($credentials, $signature, $config);
        $listener = new SignatureListener($credentials, $signature);
        $client->addSubscriber($listener);

        $this->assertEquals('access-key-one', $this->readAttribute($listener, 'credentials')->getAccessKeyId());
        $client->setCredentials(new Credentials('access-key-two', 'secret'));
        $this->assertEquals('access-key-two', $this->readAttribute($listener, 'credentials')->getAccessKeyId());
    }


    public function testSubscribesToEvents()
    {
        $events = SignatureListener::getSubscribedEvents();
        $this->assertArrayHasKey('request.before_send', $events);
        $this->assertArrayHasKey('client.credentials_changed', $events);
    }
}