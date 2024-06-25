<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function data()
    {
        return $this->hasMany(OrdersData::class, 'order_id');
    }
}
