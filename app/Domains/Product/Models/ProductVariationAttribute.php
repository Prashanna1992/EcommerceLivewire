<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationAttribute extends Model
{
    use HasFactory;

    protected $table = "product_variation_has_attributes";

    protected $fillable = [
        'product_variation_id',
        'attribute_name',
        'value'
    ];

    public function variation()
    {
        return $this->belongsTo(ProductVariation::class);
    }
}
