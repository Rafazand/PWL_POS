<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/level',[LevelController::class,'index']);

Route::get('/kategori/update/{id}',[KategoriController::class,'update'])->name('/kategori/update');
Route::get('/kategori/delete/{id}',[KategoriController::class,'delete'])->name('/kategori/delete');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);

Route::get('/user',[UserController::class,'index'])->name('/user');
Route::get('/user/tambah',[UserController::class,'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}',[UserController::class,'ubah'])->name('/user/ubah');
Route::get('/user/hapus{id}',[UserController::class,'hapus'])->name('/user/hapus');
Route::get('/user/tambah_simpan',[UserController::class,'tambah_simpan'])->name('/user/tambah_simpan');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('m_user', POSController::class);

Route::get('/', [WelcomeController::class, 'index']);

// User Route
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// Grup middleware 'auth' untuk melindungi route admin dan manager
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });

    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});

