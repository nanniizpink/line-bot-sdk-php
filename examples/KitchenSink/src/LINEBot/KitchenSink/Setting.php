<?php

//** Copyright 2016 LINE Corporation

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
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'ndNiKsAlmhsqr2Tm6Bov8gv67zZirO8Gk2Xhe52VjubjZw/easIibl6I4ft/bfG0Pq5peRO4AwKmIz5awqcI/JlOw2gqeVy4wAjvIr1pm6tbmVNmOuLYpB0b29mFr1bdk/B9LRWewgJTFqO0FDIIbAdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '3f6d430fa381af1e4ada0b42e07d3f33',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
