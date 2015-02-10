<?php

/**
 * Copyright Usabilla.com. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * https://github.com/usabilla/api-php/blob/master/LICENSE.MD
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Usabilla\API\Client;
use Usabilla\API\Enum\Enum;

/**
 * Contains enumerable default factory options that can be passed to a client's factory method
 */
class ClientOptions extends Enum
{
    /**
     * @var string Access Key ID
     */
    const KEY = 'key';

    /**
     * @var string Secret access key
     */
    const SECRET = 'secret';

    /**
     * @var string You can optionally provide a custom `Usabilla\API\Credentials\Credentials` object
     */
    const CREDENTIALS = 'credentials';



    /**
     * @var string Pass this option to specify a custom `Guzzle\Http\ClientInterface` to use if your credentials require
     *             a HTTP request (e.g. RefreshableInstanceProfileCredentials)
     */
    const CREDENTIALS_CLIENT = 'credentials.client';


    /**
     * @var string URI Scheme of the base URL (e.g. 'https', 'http').
     */
    const SCHEME = 'scheme';


    /**
     * @var string Instead of using a `region` and `scheme`, you can specify a custom base URL for the client
     */
    const BASE_URL = 'base_url';

    /**
     * @var string You can optionally provide a custom signature implementation used to sign requests
     */
    const SIGNATURE = 'signature';


    /**
     * @var string Service description to use with the client
     */
    const SERVICE_DESCRIPTION = 'service.description';


    /**
     * @var string API version used by the client
     */
    const VERSION = 'version';
}