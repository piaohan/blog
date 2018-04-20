<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Tools\Api\Api
 *
 * @mixin \Eloquent
 */
class manual extends Model
{
    //
    protected $table="data_manual";
    protected $fillable = ['aname','tid','description','flag','created_at','updated_at'];//开启白名单字段
}
