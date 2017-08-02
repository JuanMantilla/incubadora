<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lecture;
use App\Http\Requests;

class IncubadoraController extends Controller
{
    public function postLecture(Request $request){
        $lecture = new Lecture();
        $lecture->humedad = $request->humedad;
        $lecture->temperatura = $request->temperatura;
        $lecture->save();
    }

    public function viewLectures(){

        $lecturas =DB::table('lecturas')->orderBy('id', 'desc')->limit(10)->get();

        return view('incubadora/mostrarLecturas')->with(['lecturas' => $lecturas]);
    }

    public function getLectures(){

        $lecturas =DB::table('lecturas')->orderBy('id', 'desc')->limit(10)->get();

        return response()->json($lecturas);
    }
}
