<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return redirect('/index');
});
Route::get('/index', [FileUpload::class, 'index'])->name('index');
Route::post('/file-upload', [FileUpload::class, 'fileUpload'])->name('file-upload');
Route::get('/view-file/{file}', [FileUpload::class, 'fileView'])->name('file-overview');
Route::get('/delete-file/{file}', [FileUpload::class, 'fileDelete'])->name('file-delete');