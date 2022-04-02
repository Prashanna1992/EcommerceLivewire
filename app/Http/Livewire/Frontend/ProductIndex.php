<?php

namespace App\Http\Livewire\Frontend;

use App\Domains\Product\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.frontend.product-index');
    }
}
