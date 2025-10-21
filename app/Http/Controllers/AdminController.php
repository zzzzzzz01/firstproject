<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function allWatches(){
        return view('admin.allWatches');
    }

    public function addWatches(){
        return view('admin.addWatches');
    }

    public function watchStore(Request $request){
        dd($request->all());
    }
}
