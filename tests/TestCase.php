<?php

namespace TapanDerasari\MysqlEncrypt\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TapanDerasari\MysqlEncrypt\Providers\LaravelServiceProvider;
use TapanDerasari\MysqlEncrypt\Tests\Models\Demo;

class TestCase extends Orchestra
{

    protected function getPackageProviders($app)
    {
        return [
            LaravelServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'mysql');
        $app['config']->set('database.connections.mysql', [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => '3306',
            'database' => 'testing',
            'username' => 'root',
            'password' => '',
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ]);
    }
}
