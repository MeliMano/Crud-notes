<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name('notas.detalle');

Route::post('/', [PagesController::class, 'crear'])->name('notas.crear');

Route::get('editar/{id}',[PagesController::class, 'editar'])->name('notas.editar');

Route::put('editar/{id}',[PagesController::class, 'update'])->name('notas.update');

Route::delete('eliminar/{id}',[PagesController::class, 'eliminar'])->name('notas.eliminar');

route::get('fotos', [PagesController::class, 'fotos'])->name('foto');

route::get('blog', [PagesController::class, 'blog'])->name('noticias');

route::get('nosotros/{nombre?}',[PagesController::class, 'nosotros'])->name('nosotros');