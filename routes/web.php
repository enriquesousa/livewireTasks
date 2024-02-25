<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskCreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', TaskIndex::class);
Route::get('/tasks/create', TaskCreate::class);