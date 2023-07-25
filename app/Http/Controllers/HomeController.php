<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use routes\web;

class HomeController extends Controller
{
    public function master(){
        $unit = Unit::get();
        return view ('master',compact('unit'));
    }

    public function unit(){
        $unit = Unit::get();
        return view ('master',compact('unit'));
    }

    public function unitDetails(){
        return view ('unit-details');
    }

    public function blog(){
        return view ('blog');
    }

    public function blogDetails(){
        return view ('blog-details');
    }

    public function contact(){
        return view ('contact');
    }
}
