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
        'brand',
    ];

    public function getCurrentPrice(){
        return $this->discount_price ? $this->discount_price : $this->price;
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
}
