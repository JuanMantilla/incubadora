<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/',[
        'uses'=>'IncubadoraController@postLecture'
    ]
);

Route::get('/',[
        'uses'=>'IncubadoraController@viewLectures',
        'as'=> 'mostrarLecturas'
    ]
);

Route::get('getLectures',[
        'uses'=>'IncubadoraController@getLectures'
    ]
);