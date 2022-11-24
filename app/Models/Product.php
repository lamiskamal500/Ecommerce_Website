<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category_id',
        'discount_id',
        'image',
        'description',
        'gender'
    ];
    public function Discount(){

    return $this->belongsTo(Discount::class, 'discount_id');
    }

    public function Category(){

        return $this->belongsTo(Category::class, 'category_id');
}
    public function CartItem(){

        return $this->belongsTo(CartItem::class, 'product_id');
    }

    }
