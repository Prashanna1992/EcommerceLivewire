<?php

namespace App\View\Components;

use App\Domains\Product\Model\Product;
use Illuminate\View\Component;

class ProductComponent extends Component
{
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount()
    {
        $this->products = Product::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-component');
    }
}
