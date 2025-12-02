<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Homepage (Public)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomepageController::class, 'index'])->name('homepage');


/*
|--------------------------------------------------------------------------
| AUTH (PUBLIC)
|--------------------------------------------------------------------------
*/

// pilih login → admin / user
Route::get('/login', [AuthController::class, 'chooseRole'])->name('login');

// login admin & user
Route::get('/login/admin', [AuthController::class, 'loginAdmin'])->name('login.admin');
Route::get('/login/user', [AuthController::class, 'loginUser'])->name('login.user');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post');

// FIX: ketika user buka /register langsung → diarahkan ke register/user
Route::get('/register', function () {
    return redirect()->route('register.user');
});

// register admin & user
Route::get('/register/admin', [AuthController::class, 'registerAdmin'])->name('register.admin');
Route::get('/register/user', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('register.post');

// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| USER AREA (HARUS LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/product', [HomepageController::class, 'product'])->name('product');
    Route::get('/product/{barang}', [HomepageController::class, 'detailProduct'])->name('product.detail');
});


/*
|--------------------------------------------------------------------------
| ADMIN AREA (HARUS LOGIN + ROLE ADMIN)
|--------------------------------------------------------------------------
*/
Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {

    // USER
    Route::get('/getUser', [UserController::class, 'getUser'])->name('user.get');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'handleCreate'])->name('user.store');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/edit/{user}', [UserController::class, 'handleEdit'])->name('user.update');
    Route::delete('/user/delete/{user}', [UserController::class, 'delete'])->name('user.delete');

    // BARANG
    Route::get('/getBarang', [BarangController::class, 'getBarang'])->name('barang.get');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang/create', [BarangController::class, 'handleCreate'])->name('barang.store');
    Route::get('/barang/edit/{barang}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/barang/edit/{barang}', [BarangController::class, 'handleEdit'])->name('barang.update');
    Route::delete('/barang/delete/{barang}', [BarangController::class, 'delete'])->name('barang.delete');

});
