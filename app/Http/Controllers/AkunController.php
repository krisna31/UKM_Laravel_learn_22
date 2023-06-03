<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AkunController extends Controller
{

    public function store(Request $request)
    {
        $user = new Akun();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->back()->with('success', 'Akun berhasil ditambahkan');
    }

    public function index()
    {
        $data = DB::table('akun')->get();
        return view('form', compact('data'));
    }
}
