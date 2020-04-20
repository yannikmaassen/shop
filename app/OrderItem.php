<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['name', 'price', 'description', 'qty'];

    public function orders()
    {
        return $this->belongsTo('App\Order');
    }
}
