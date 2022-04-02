<?php

namespace App\Domains\Product\Models;

use App\Domains\Common\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = "product_has_images";

    protected $fillable = [
        'product_id',
        'image_id'
    ];

    public function image()
    {
        return $this->hasOne(Image::class,'image_id','id');
    }
}
