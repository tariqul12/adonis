<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function shippingAddress()
    {
        return $this->hasOne(ShippingAddress::class, 'order_id', 'id');
    }
}
