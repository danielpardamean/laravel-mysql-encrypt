<?php

namespace TapanDerasari\MysqlEncrypt\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use TapanDerasari\MysqlEncrypt\Traits\Encryptable;


class Testing extends Model
{
    use Encryptable;

    protected $table = 'testing';

    protected $guarded = [];

    protected $encryptable = [ // <-- 2. Include columns to be encrypted
        'value',
    ];
}
