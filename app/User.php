<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // setNameAttribute 方法是新增的 - 存入大些字符串，在model中实现
    // 为什么是 setNameAttribute 呢？因为你是 name 属性，如果你的属性名叫 password, 可以这里就要变成 setPasswordAttribute。

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
