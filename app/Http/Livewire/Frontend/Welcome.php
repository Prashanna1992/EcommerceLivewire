<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Domains\Product\Models\Product;

class Welcome extends Component
{
    public $title;
    public $products;
    public $trending;
    public $bestSellers;
    public $branch;
    public $cart;

    public function mount()
    {
        $this->title = "Welcome to Wire Commerce";
        $this->products = Product::all();
        $this->trending = Product::all();
        $this->bestSellers = Product::all()->take(2);

        if(Auth::user()){
            $this->cart = [];
        }else
            $this->cart = [];
    }

    public function render()
    {
        return view('livewire.frontend.welcome');
    }
}
