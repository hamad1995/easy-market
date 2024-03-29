<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'image',
        'price',
        'category_id',
        'description',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order()
    {
        return $this->hasMany(OrderItem::class);
    }
}
