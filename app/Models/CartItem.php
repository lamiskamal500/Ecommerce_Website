<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function Product(){

        return $this->hasMany(Product::class, 'product_id');
        }

    public function User(){

        return $this->belongsTo(User::class, 'user_id');
        }

    
}
