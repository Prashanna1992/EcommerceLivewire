<?php

namespace App\Http\Livewire;

use App\Domains\Product\Models\Product;
use App\Domains\Product\Models\ProductImage;
use App\Domains\Product\Models\ProductVariation;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public $variations;
    public $selected_variation;
    public $id;
    public $images;

    public function mount($id)
    {
        $this->id = $id;
        $this->product = Product::find($id);
        $this->variations = ProductVariation::where('product_id',$this->product->id)->get();
        $this->images = ProductImage::where([
            ['product_id' => $this->product->id],
            ['variation_id' => $this->variations->first()->id],
        ])->get();
    }

    public function render()
    {
        return view('livewire.frontend.product-detail');
    }
}
