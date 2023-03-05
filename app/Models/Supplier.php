<?php

namespace App\Models;

use App\Models\Obat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    public $fillable = ['id', 'supplier','id_obat','jumlah'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }

    public $timestamps = true;
}
