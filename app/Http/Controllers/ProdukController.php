<?php

namespace App\Http\Controllers;

use App\Models\Produk as ModelsProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = ModelsProduk::all();
        return view('produk.master', compact('produk'));
    }
}
