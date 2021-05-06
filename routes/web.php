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
    return redirect('/upload-file');
});
Route::get('/upload-file', [FileUpload::class, 'index'])->name('files');
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('file-upload');
Route::get('/view-file/{file}', [FileUpload::class, 'fileView'])->name('file-overview');