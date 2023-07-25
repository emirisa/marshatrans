<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUnitRequest;
use Illuminate\Support\Facades\Storage;
use routes\web;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = Unit::get();
        return view('adm.unit-index',compact('unit'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adm.unit-store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'depan' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'dalam' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);
        
        $logo = time() . '.' . $request->logo->extension();
        $request->logo->storeAs('public/unit-images', $logo);

        $depan = time() . '.' . $request->depan->extension();
        $request->depan->storeAs('public/unit-images', $depan);

        $dalam = time() . '.' . $request->dalam->extension();
        $request->dalam->storeAs('public/unit-images', $dalam);
        
        $unit = new Unit();

        $unit->nama = $request->namaMobil;
        $unit->jenis = $request->jenis;
        $unit->harga = $request->harga;
        $unit->logo = $logo;
        $unit->depan = $depan;
        $unit->dalam = $dalam;
        $unit->deskripsi = $request->deskripsi;

        $unit->save();
        
        return redirect()->route('unit-adm.index')->with('sucsess','User Berhasil Ditambah');


    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $data = Unit::get();
        $destroy=$data->find($id);
        unlink("storage/public/unit-images/".$destroy->logo);
        unlink("storage/public/unit-images/".$destroy->depan);
        unlink("storage/public/unit-images/".$destroy->dalam);
        $destroy->delete();

        return redirect('unit-adm');
    }
}
