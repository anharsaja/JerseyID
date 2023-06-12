<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{

    public $product;
    
    public function mount($id)
    {
        $productDetail = Product::find($id);

        if($productDetail) {
            $this -> product = $productDetail;
        }
    }
    
    public function render()
    {
        return view('livewire.product-detail');
    }
}
