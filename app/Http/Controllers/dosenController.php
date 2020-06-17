<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
class dosenController extends Controller
{
    //
    public function create(){
        //eloquent database
        $insert = Dosen::firstOrCreate([
            'name'=> 'sandhika',
            'matkul'=> 'pemrograman web',
            'address'=>'bandung'
        ]);
    }
public function show ($slug){

    $lihat = Dosen::where('matkul', $slug)->first(); 


    return view('lihat')->with('lihat', $lihat);
}
}
