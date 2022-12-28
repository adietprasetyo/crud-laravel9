<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    //
    public function index(){
        $warga = Warga::all();
        // dd($warga);
        return view('warga.index',compact(['warga']));
    }

    public function create()
    {
        # code...
        return view('warga.create');
    }

    public function store(Request $request)
    {
        # code...
        // dd($request->all());
        // dd($request->except('_token', 'submit'));
        Warga::create($request->except(['_token', 'submit']));
        return redirect('/warga');
    }

    public function edit($idWarga)
    {
        # code...
        $warga = Warga::find($idWarga);
        // dd($warga);
        return view('warga.edit',compact(['warga']));
    }

    public function update($idWarga, Request $request)
    {
        # code...
        $warga = Warga::find($idWarga);
        $warga->update($request->except(['_token', 'submit']));
        return redirect('/warga');
    }

    public function destroy($idWarga)
    {
        # code...
        $warga = Warga::find($idWarga);
        $warga->delete();
        return redirect('/warga');
    }
}
