<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        Pasien::create($request->all());
        return redirect()->route('pasien.index');
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $pasien->update($request->all());
        return redirect()->route('pasien.index');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}