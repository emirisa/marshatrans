<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use routes\web;
use App\Models\User;

class AdmController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function admLg(){
        return view ('adm.adm-lg');
    }

    public function admIndex(){
        $data = User::get();
        return view('adm.adm-master',compact('data'));
    }


    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
