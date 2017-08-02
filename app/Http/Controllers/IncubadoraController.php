<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class IncubadoraController extends Controller
{
    public function postLecture(Request $request){
        DB::insert('insert into lecturas (humedad) values (?)', ["1"]);
    }

    public function getLectures(){
        $lecturas =DB::table('lecturas')->get();

        return view('incubadora/mostrarLecturas')->with(['lecturas' => $lecturas]);
    }
}
