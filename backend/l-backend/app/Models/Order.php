<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_items_id',
        'status',
    ];
    public function orders()
    {
        return $this->hasMany(Order_items::class, 'Order_items_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
}
