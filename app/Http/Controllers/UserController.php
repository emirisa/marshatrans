<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use routes\web;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adm.create-user');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $user = new User();

       $user->username=$request->username;
       $user->password=Crypt::encryptString($request->password);

       $user->save();


        return redirect()->route('adm.index')->with('sucsess','User Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::get();
        $user = $data->find($id);
        return view('adm.edit-user')->with([
            'txtusername' => $user->username,
            'txtpassword' => $user->password,
            'txtid' => $id
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::get();
        $edit=$data->find($id);
        $edit->username=$request->txtusername;
        $edit->password=$request->txtpassword;
        $edit->save();

        return redirect()->route('adm.index')->with('sucsessedt','User Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::get();
        $destroy=$data->find($id);
        $destroy->delete();
        return redirect('adm-index');
    }
}
