<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "product_variations";

    protected $fillable = [
        "product_id",
        "variation_name",
        "price",
        "discount_price",
        "rating",
        "quantity",
        "in_stock",
        "description"
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function attributes()
    {
        return $this->hasMany(ProductVariationAttribute::class,'id','product_variation_id');
    }

    public function images()
    {
        return $this->hasMany(ProductVariationImage::class,'id','product_variation_id');
    }
}
