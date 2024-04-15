<?php

use App\Http\Controllers\AlumnosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('alumnos.start');
});

Route::get('/nota', function () {
    return view('alumnoinfo.nota');
})->name('alumnoinfo.nota');

Route::get('/expe', function () {
    return view('alumnoinfo.expe');
})->name('alumnoinfo.expe');

Route::get('/materia', function () {
    return view('alumnoinfo.materia');
})->name('alumnoinfo.materia');

Route::get('/start', function () {
    return view('alumnos.start');
})->name('alumnos.start');

Route::get('/acerca', function () {
    return view('alumnoinfo.acerca');
})->name('alumnoinfo.acerca');