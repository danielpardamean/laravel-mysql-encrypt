<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use TapanDerasari\MysqlEncrypt\Tests\TestCase;


uses(DatabaseMigrations::class)->in(__DIR__);
uses(TestCase::class)->in(__DIR__);
