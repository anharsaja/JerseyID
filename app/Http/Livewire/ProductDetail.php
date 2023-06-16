<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{

    public $product, $jumlah_pesanan, $nama, $nomor;
    
    public function mount($id)
    {
        $productDetail = Product::find($id);

        if($productDetail) {
            $this -> product = $productDetail;
        }
    }

    public function masukkanKeranjang()
    {
        $this -> validate([
            'jumlah_pesanan' => 'required'
        ]);

        /* validate jika belum login */
        if (!Auth::user()) {
            return redirect()->route('login');
        }
    }
    
    public function render()
    {
        return view('livewire.product-detail');
    }
}
