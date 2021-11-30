<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['user_name', 'user_ic', 'user_email', 'user_phone', 'user_address', 'user_password'];

    public function order()
    {
        return $this->hasMany('order');
    }

    public function event()
    {
        return $this->hasMany('event');
    }


}
