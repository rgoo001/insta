<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        // 'main' => [
        //     'id' => '294280f7a15e4b7593120e38b095c335',
        //     'secret' => '25a4cc03cc004ffa90228140166b8846',
        //     'access_token' => '929d2dd482374cb6af38ddfa95660532',
        // ],
        // 'main' => [
        //     'id' => env('INSTAGRAM_CLIENT_ID'),
        //     'secret' => env('INSTAGRAM_CLIENT_SECRET'),
        //     'access_token' => '{ "access_token": "' . env('INSTAGRAM_ACCESS_TOKEN') . '" }',
        // ],
        // 'main' => [
        //     'id' => env('INSTAGRAM_CLIENT_ID'),
        //     'secret' => env('INSTAGRAM_CLIENT_SECRET'),
        //     'access_token' => env('INSTAGRAM_ACCESS_TOKEN'),
        // ],
    'main' => [ 'id' => env('INSTAGRAM_CLIENT_ID'), 'secret' => env('INSTAGRAM_CLIENT_SECRET'), 'access_token' => '{ "access_token": "929d2dd482374cb6af38ddfa95660532"}' ],

        'alternative' => [
            'id' => 'your-client-id',
            'secret' => 'your-client-secret',
            'access_token' => null,
        ],

    ],

];
