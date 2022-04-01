<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'quantity',
    ];

    public function getCurrentPrice(){
        return $this->discount_price ? $this->discount_price : $this->price;
    }
}
