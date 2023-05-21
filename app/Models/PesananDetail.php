<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Pesanan::class, 'product_id', 'id');
    }
}
