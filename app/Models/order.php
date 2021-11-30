<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['package_amount','order_name','order_date','order_note','payment_proof','user_id','event_id'];


    public function User()
    {
        return $this->belongsTo('user');
    }


    public function Event()
    {
        return $this->belongsTo('event');
    }


}
