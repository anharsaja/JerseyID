<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::paginate(8);
        return view('livewire.product-index', [
            'products' => $products
        ]);
    }
}
