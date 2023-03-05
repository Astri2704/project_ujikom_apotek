<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Riwayat_obat;
use Illuminate\Support\Facades\DB;

class TotalController extends Controller
{
    public function index()
    {
        $user = User::all();
        $total = $user->Count();
        $keluar = Riwayat_obat::where('type','keluar')->count();
        $masuk = Riwayat_obat::where('type','masuk')->count();

        $total_obat = DB::table('obats')
            ->sum('stok');

        // $total_obat = $obat->Count();

        return view('layouts.components.beranda', compact('total', 'total_obat','keluar','masuk'));
    }

}
