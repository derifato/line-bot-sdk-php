<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEXrbSAXQzZJYBBUJlqH4Gbc9jNNc3fmGYCd8dPLJThtPxITP5oX55ZeVtaQiFV4HBbra8hq2RBtWtgm+EI61TrpQuIM4C/jmb3mCGY7/UQhMhk1XZQlWDe4wy7GpB58BF+7hzUvWfQhaHtlsKe428tgdB04t89/1O/w1cDnyilFU=L_TOKEN') ?: '<your channel token>',
                    'channelSecret' => getenv('b698a505da81e94f99cd0ad1c6157892') ?: '<your channel secret>',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
