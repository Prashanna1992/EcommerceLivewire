<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Product\Models\Product;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductsTable extends LivewireDatatable
{
    public function builder()
    {
        $query = Product::query()
                ->leftJoin('product_variations as pv','pv.product_id','products.id');
        return $query;
    }

    public function columns()
    {
        return [
            Column::name('name'),
        ];
    }
}
