<?php

namespace DanielPardamean\MysqlEncrypt\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            // MysqlEncrypt::class,
        ];
    }
}
