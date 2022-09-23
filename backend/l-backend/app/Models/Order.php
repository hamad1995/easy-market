<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
    ];
    public function orders()
    {
        return $this->belongsToMany(Product::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
}
