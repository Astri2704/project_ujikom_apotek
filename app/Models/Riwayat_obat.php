<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Obat;

class Riwayat_obat extends Model
{
    use HasFactory;

    public function obat()
    {
        return $this->belongsTo(Obat::class,'id_obat');
    }
    public function supplier()
    {
        return $this->belongsTo(supplier::class);
    }

}
