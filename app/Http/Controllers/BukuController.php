<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function Select0194()
    {
        $no1 = 1;
        $data1 = Buku::get();
        return view('Select0194', compact('no1','data1'));
    }

    public function SelectWhere0194()
    {
        $no2 = 1;
        $data2 = Buku::where('tahun_terbit_buku','>','2015')->get();
        return view('SelectWhere0194', compact('no2','data2'));
    }

    public function SelectJoin0194()
    {
        $no3 = 1;
        $data3 = Buku::with('kategori')->get();
        return view('SelectJoin0194', compact('no3','data3'));
    }

    public function SelectJoinWhere0194()
    {
        $no4 = 1;
        $data4 = Buku::with('kategori')->where('tahun_terbit_buku','>','2015')->get();
        return view('SelectJoinWhere0194', compact('no4','data4'));
    }
    
}
