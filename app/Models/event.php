<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['organization_name', 'organization_type', 'bank_name', 'account_name', 'account_no', 'event_type', 'event_date', 'event_title', 'event_description', 'event_location', 'event_contact', 'event_image', 'livestock_type', 'livestock_price', 'user_id'];

    public function order()
    {
        return $this->hasMany('order');
    }

    public function user()
    {
        return $this->belongsTo('user');
    }
}
