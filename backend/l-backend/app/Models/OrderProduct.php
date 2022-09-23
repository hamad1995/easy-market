<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'order_id',

    ];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
