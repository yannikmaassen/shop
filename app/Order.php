<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }

    public function addItems(array $orderItems)
    {
        foreach ($orderItems as $item) {
            $this->orderItems()->updateOrCreate(
                [
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'qty' => $item['qty'],
                    'price' => $item['price']
                ]
            );
        }

        // TODO iteriere durch alle items



        // TODO füge jedes OrderItem mit der

        // updateOrCreate-Methode zur Order hinzu
    }
}
