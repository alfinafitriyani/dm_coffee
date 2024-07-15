<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// admin
Route::get('/users', [AdminController::class, 'index'])->name('users.index');

// makanan
Route::get('/admin/menu/makanan', [AdminController::class, 'makananIndex'])->name('admin.makanan.index');
Route::get('/admin/menu/makanan/create', [AdminController::class, 'makananCreate'])->name('admin.makanan.create');
Route::post('/admin/menu/makanan', [AdminController::class, 'makananStore'])->name('admin.makanan.store');
Route::get('/admin/menu/makanan/edit/{id}', [AdminController::class, 'makananEdit'])->name('edit.makanan');
Route::put('/admin/menu/makanan/{id}', [AdminController::class, 'makananUpdate'])->name('admin.makanan.update');
Route::delete('/admin/menu/makanan/{id}', [AdminController::class, 'makananDestroy'])->name('delete.makanan');

// snack
Route::get('/admin/menu-snack', [AdminController::class, 'snackIndex'])->name('admin.snack.index');
Route::get('/admin/menu-snack/create', [AdminController::class, 'snackCreate'])->name('admin.snack.create');
Route::post('/admin/menu-snack', [AdminController::class, 'snackStore'])->name('admin.snack.store');
Route::get('/admin/menu-snack/edit/{id}', [AdminController::class, 'snackEdit'])->name('edit.snack');
Route::put('/admin/menu-snack/snack/{id}', [AdminController::class, 'snackUpdate'])->name('admin.snack.update');
Route::delete('/admin/menu-snack/snack/{id}', [AdminController::class, 'snackDestroy'])->name('delete.snack');

// kopi
Route::get('/admin/menu-kopi', [AdminController::class, 'kopiIndex'])->name('admin.kopi.index');
Route::get('/admin/menu-kopi/create', [AdminController::class, 'kopiCreate'])->name('admin.kopi.create');
Route::post('/admin/menu-kopi', [AdminController::class, 'kopiStore'])->name('admin.kopi.store');
Route::get('/admin/menu-kopi/edit/{id}', [AdminController::class, 'kopiEdit'])->name('edit.kopi');
Route::put('/admin/menu-kopi/kopi/{id}', [AdminController::class, 'kopiUpdate'])->name('admin.kopi.update');
Route::delete('/admin/menu-kopi/kopi/{id}', [AdminController::class, 'kopiDestroy'])->name('delete.kopi');

// wedangan
Route::get('/admin/menu-wedangan', [AdminController::class, 'wedanganIndex'])->name('admin.wedangan.index');
Route::get('/admin/menu-wedangan/create', [AdminController::class, 'wedanganCreate'])->name('admin.wedangan.create');
Route::post('/admin/menu-wedangan', [AdminController::class, 'wedanganStore'])->name('admin.wedangan.store');
Route::get('/admin/menu-wedangan/edit/{id}', [AdminController::class, 'wedanganEdit'])->name('edit.wedangan');
Route::put('/admin/menu-wedangan/wedangan/{id}', [AdminController::class, 'wedanganUpdate'])->name('admin.wedangan.update');
Route::delete('/admin/menu-wedangan/wedangan/{id}', [AdminController::class, 'wedanganDestroy'])->name('delete.wedangan');

// jus
Route::get('/admin/menu-jus', [AdminController::class, 'jusIndex'])->name('admin.jus.index');
Route::get('/admin/menu-jus/create', [AdminController::class, 'jusCreate'])->name('admin.jus.create');
Route::post('/admin/menu-jus', [AdminController::class, 'jusStore'])->name('admin.jus.store');
Route::get('/admin/menu-jus/edit/{id}', [AdminController::class, 'jusEdit'])->name('edit.jus');
Route::put('/admin/menu-jus/jus/{id}', [AdminController::class, 'jusUpdate'])->name('admin.jus.update');
Route::delete('/admin/menu-jus/jus/{id}', [AdminController::class, 'jusDestroy'])->name('delete.jus');

// galeri
Route::get('/admin/galeri', [GaleriController::class, 'galeriIndex'])->name('admin.galeri.index');
Route::get('/admin/galeri/create', [GaleriController::class, 'galeriCreate'])->name('admin.galeri.create');
Route::post('/admin/galeri', [GaleriController::class, 'galeriStore'])->name('admin.galeri.store');
Route::get('/admin/galeri/edit/{id}', [GaleriController::class, 'galeriEdit'])->name('edit.galeri');
Route::put('/admingaleri/jus/{id}', [GaleriController::class, 'galeriUpdate'])->name('admin.galeri.update');
Route::delete('/admin/galeri/jus/{id}', [GaleriController::class, 'galeriDestroy'])->name('delete.galeri');

// home
Route::get('/redirects', [HomeController::class, 'redirects']);
Route::get('/deleteuser/{id}', [HomeController::class, 'deleteUser'])->name('delete.user');
Route::get('/admin/users/{id}/edit', [HomeController::class, 'edit'])->name('edit.user');
Route::post('/admin/users/{id}', [HomeController::class, 'update'])->name('update.user');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
