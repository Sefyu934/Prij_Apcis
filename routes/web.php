<?php

use App\Http\Controllers\JeuneController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//JEUNES
Route::get('/jeunes', [JeuneController::class, 'index'])
    ->name('jeune.index');

Route::get('/jeunes/{jeune}', [JeuneController::class, 'show'])
    ->name('jeune.show')
    ->where('jeune', '[0-9]+');

Route::get('/jeunes/create', [JeuneController::class, 'create'])
    ->name('jeune.create');

Route::post('/jeunes/store', [JeuneController::class, 'store'])
    ->name('jeune.store');

Route::get('/jeunes/{jeune}/edit', [JeuneController::class, 'edit'])
    ->name('jeune.edit')
    ->where('jeune', '[0-9]+');

Route::put('/jeunes/{jeune}/update', [JeuneController::class, 'update'])
    ->name('jeune.update')
    ->where('jeune', '[0-9]+');

Route::delete('/jeunes/{jeune}', [JeuneController::class, 'destroy'])
    ->name('jeune.destroy')
    ->where('jeune', '[0-9]+');


//RDV
Route::get('/rdvs/{rdv}', [\App\Http\Controllers\RdvController::class, 'show'])
    ->name('rdv.show')
    ->where('rdv', '[0-9]+');

Route::get('/rdvs/create', [\App\Http\Controllers\RdvController::class, 'create'])
    ->name('rdv.create');

Route::post('/rdvs/store', [\App\Http\Controllers\RdvController::class, 'store'])
    ->name('rdv.store');

Route::get('/rdvs/{rdv}/edit', [\App\Http\Controllers\RdvController::class, 'edit'])
    ->name('rdv.edit')
    ->where('rdv', '[0-9]+');

Route::put('/rdvs/{rdv}/update', [\App\Http\Controllers\RdvController::class, 'update'])
    ->name('rdv.update')
    ->where('rdv', '[0-9]+');

Route::delete('/rdvs/{rdv}', [\App\Http\Controllers\RdvController::class, 'destroy'])
    ->name('rdv.destroy')
    ->where('rdv', '[0-9]+');
