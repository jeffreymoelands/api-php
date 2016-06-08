<?php

/**
 * Copyright Usabilla.com. All Rights Reserved.
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

namespace Usabilla\Tests\API\Client;

use Usabilla\API\Client\UsabillaClient;
use PHPUnit_Framework_TestCase;

class CommandsTest extends PHPUnit_Framework_TestCase
{
    public function testDefaultClient()
    {
        $client = new UsabillaClient(DEFAULT_KEY, DEFAULT_SECRET);
    }
}











