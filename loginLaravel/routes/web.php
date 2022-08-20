<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
//crear los roles admin y cliente
//use Spatie\Permission\Models\Role;

//Role::create(['name'=>'admin']);
//Role::create(['name'=>'cliente']);

    Auth::routes();

    Route::get('/' , [App\Http\Controllers\ProductosController::class, 'welcome'] )->name('welcome');
    // Route::get('registrarse-admin', [RegisterController::class, 'createAdmin'])->name('register.admin');

    Route::get('categoria', [CategoriasController::class, 'index'])->name('categorias.index');
    Route::get('create-categoria', [CategoriasController::class, 'create'])->name('categorias.create');
    Route::post('store-categoria', [CategoriasController::class, 'store'])->name('categorias.store');
    Route::get('edit-categoria/{id}', [CategoriasController::class, 'edit'])->name('categorias.edit');
    Route::put('update-categoria/{id}', [CategoriasController::class, 'update'])->name('categorias.update');
    Route::get('show-categoria/{id}', [CategoriasController::class, 'show'])->name('categorias.show');
    Route::delete('destroy-categoria/{id}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');
    
    Route::get('producto', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index');
    Route::get('create-producto', [App\Http\Controllers\ProductosController::class, 'create'])->name('productos.create');
    Route::post('store-producto', [App\Http\Controllers\ProductosController::class, 'store'])->name('productos.store');
    Route::get('edit-producto/{id}', [App\Http\Controllers\ProductosController::class, 'edit'])->name('productos.edit');
    Route::put('update-producto/{id}', [App\Http\Controllers\ProductosController::class, 'update'])->name('productos.update');
    Route::get('show-producto/{id}', [App\Http\Controllers\ProductosController::class, 'show'])->name('productos.show');
    Route::delete('destroy-producto/{id}', [App\Http\Controllers\ProductosController::class, 'destroy'])->name('productos.destroy');

    Route::get('/home', [App\Http\Controllers\ProductosController::class, 'index'])->name('home');
