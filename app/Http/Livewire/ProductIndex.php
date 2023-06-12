<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{

    public $search;

    protected $updateQueryString = ['search'];

    public function render()
    {

        if ($this->search) {
            $products = Product::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        } else {
            $products = Product::paginate(8);
        }
        
        return view('livewire.product-index', [
            'products' => $products
        ]);
    
    }
}
