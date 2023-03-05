<?php

namespace App\Http\Controllers;

use App\Models\Riwayat_obat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_obats = Riwayat_obat::with('obat','supplier')->latest()->get();
        // dd($riwayat_obats);
        return view('riwayat_obat.index',compact('riwayat_obats'));
    }
}
