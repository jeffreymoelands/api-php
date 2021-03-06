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

namespace Usabilla\API\Description;

use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\Operation;

class UsabillaDescription extends Description
{
    /**
     * UsabillaDescription constructor.
     */
    public function __construct()
    {
        parent::__construct([

            // Basic information about the Usabilla API.
            'baseUrl' => 'https://data.usabilla.com',
            'apiVersion' => '1.2',

            // All the operations that can be performed at the Usabilla API.
            'operations' => [

                // Usabilla for Apps.
                'GetApps' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/apps',
                    'responseModel' => 'AppItems',
                ],

                'GetAppFeedbackItems' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/apps/{id}/feedback',
                    'responseModel' => 'AppFeedbackItems',
                    'parameters' => [
                        'id' => [ '$ref' => 'NonMandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                'GetAppCampaigns' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/apps/campaign',
                    'responseModel' => 'AppCampaignItems',
                ],

                'GetAppCampaignResults' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/apps/campaign/{id}/results',
                    'responseModel' => 'AppCampaignResults',
                    'parameters' => [
                        'id' => [ '$ref' => 'MandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                // Usabilla for Email.
                'GetEmailButtons' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/email/button',
                    'responseModel' => 'EmailButtonItems',
                ],

                'GetEmailFeedbackItems' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/email/button/{id}/feedback',
                    'responseModel' => 'EmailFeedbackItems',
                    'parameters' => [
                        'id' => [ '$ref' => 'NonMandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                // Usabilla for Websites.
                'GetInpageWidgets' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/inpage',
                    'responseModel' => 'InpageWidgetItems',
                    'parameters' => [
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                'GetInpageWidgetFeedbackItems' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/inpage/{id}/feedback',
                    'responseModel' => 'InpageWidgetFeedbackItems',
                    'parameters' => [
                        'id' => [ '$ref' => 'MandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                'GetWebsiteCampaigns' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/campaign',
                    'responseModel' => 'WebsiteCampaignItems',
                    'parameters' => [
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                'GetWebsiteCampaignResults' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/campaign/{id}/results',
                    'responseModel' => 'WebsiteCampaignResultItems',
                    'parameters' => [
                        'id' => [ '$ref' => 'MandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                'GetWebsiteCampaignStats' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/campaign/{id}/stats',
                    'responseModel' => 'WebsiteCampaignStatsItems',
                    'parameters' => [
                        'id' => [ '$ref' => 'MandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],

                'GetWebsiteButtons' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/button',
                    'responseModel' => 'WebsiteButtonItems',
                ],

                'GetWebsiteFeedbackItems' => [
                    'httpMethod' => 'GET',
                    'uri' => '/live/websites/button/{id}/feedback',
                    'responseModel' => 'WebsiteFeedbackItems',
                    'parameters' => [
                        'id' => [ '$ref' => 'NonMandatoryIdParam' ],
                        'limit' => [ '$ref' => 'LimitParam' ],
                        'since' => [ '$ref' => 'SinceParam' ],
                    ],
                ],
            ],

            'models' => [

                // The main models that can be fetched from the Usabilla API.
                'AppItems' => [ '$ref' => 'DefaultRequest' ],
                'AppFeedbackItems' => [ '$ref' => 'DefaultRequest' ],
                'AppCampaignItems' => [ '$ref' => 'DefaultRequest' ],
                'AppCampaignResults' => [ '$ref' => 'DefaultRequest' ],
                'WebsiteFeedbackItems' => [ '$ref' => 'DefaultRequest' ],
                'EmailFeedbackItems' => [ '$ref' => 'DefaultRequest' ],
                'WebsiteButtonItems' => [ '$ref' => 'DefaultRequest' ],
                'EmailButtonItems' => [ '$ref' => 'DefaultRequest' ],
                'InpageWidgetItems' => [ '$ref' => 'DefaultRequest' ],
                'InpageWidgetFeedbackItems' => [ '$ref' => 'DefaultRequest' ],
                'WebsiteCampaignItems' => [ '$ref' => 'DefaultRequest' ],
                'WebsiteCampaignStatsItems'  => [ '$ref' => 'DefaultRequest' ],
                'WebsiteCampaignResultItems' => [ '$ref' => 'DefaultRequest' ],

                // Request types
                'DefaultRequest' => [
                    'type' => 'object',
                    'properties' => [
                        'count' => [ '$ref' => 'CountAttribute' ],
                        'hasMore' => [ '$ref' => 'HasMoreAttribute' ],
                        'items' => [
                            'location' => 'json',
                            'type' => 'array',
                            'items' => [
                                'type' => 'object',
                            ],
                        ],
                        'lastTimestamp' => [ '$ref' => 'LastTimestampAttribute' ],
                    ],
                    'errorResponses' => [
                        [ '$ref' => '403Error' ]
                    ],
                ],

                // Other models that are fetched from the Usabilla API.
                'CountAttribute' => ['type' => 'integer', 'location' => 'json'],
                'HasMoreAttribute' => ['type' => 'boolean', 'location' => 'json'],
                'LastTimestampAttribute' => ['type' => 'integer', 'location' => 'json'],

                // Parameter models.
                'LimitParam' => [ 'type' => 'integer', 'location' => 'query' ],
                'MandatoryIdParam' => [ 'type' => 'string', 'location' => 'uri' ],
                'NonMandatoryIdParam' => [ 'type' => 'string', 'location' => 'uri', 'default' => '*' ],
                'SinceParam' => [ 'type' => 'integer', 'location' => 'query' ],

                // Error responses
                '403Error' => [
                    'code'   => '403',
                    'phrase' => 'authorisation failed',
                    'class'  => 'ClientErrorResponseException'
                ]

            ]

        ]);
    }

    /**
     * @return Operation[]
     */
    public function getOperations()
    {
        return parent::getOperations();
    }
}
