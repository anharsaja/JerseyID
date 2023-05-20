<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function pesanan_details()
    {
        return $this->hasMany(PesananDetails::class, 'pesanan_id', 'id');
    }
}
