<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WechatUser extends Model
{
    //
    public $timestamps = false;
    protected $casts = [
        'options' => 'array',
    ];
    public function lotteries()
    {
        return $this->hasMany('App\Lottery','user_id');
    }
    public function Info()
    {
        return $this->hasOne('App\Info','id');
    }
}
