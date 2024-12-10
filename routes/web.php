<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeadRegistrarController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\RegistrarMiddleware;
use App\Http\Middleware\HeadRegistrarMiddleware;



// Default Laravel Routes
Route::get('/', function () {
    return view('auth.login');
});

// Dashboard Auth

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Registrar Routes
Route::prefix('registrar')->middleware(['auth', RegistrarMiddleware::class])->group(function () {
    Route::get('dashboard', [RegistrarController::class, 'show'])->name('registrar.dashboard');

    Route::get('upload-file', [RegistrarController::class, 'uploadFile'])->name('registrar.uploadFile');

    Route::get('validate', [RegistrarController::class, 'validate'])->name('registrar.validate');

    Route::get('transaction', [RegistrarController::class, 'transaction'])->name('registrar.transaction');
    Route::post('transaction', [RegistrarController::class, 'storeTransaction'])->name('registrar.storeTransaction');

    Route::get('track', [RegistrarController::class, 'track'])->name('registrar.track');

    Route::get('stat-request', [RegistrarController::class, 'statRequest'])->name('registrar.statRequest');

    Route::get('stat-transac', [RegistrarController::class, 'statTransac'])->name('registrar.statTransac');

    Route::get('re-record', [RegistrarController::class, 'reRecord'])->name('registrar.reRecord');

    Route::get('released', [RegistrarController::class, 'released'])->name('registrar.released');

    Route::get('pulled', [RegistrarController::class, 'pulled'])->name('registrar.pulled');
    Route::post('pulled', [RegistrarController::class, 'storePulled'])->name('registrar.pulled');

    Route::get('check-in', [RegistrarController::class, 'checkIn'])->name('registrar.checkIn');

    Route::get('check-list', [RegistrarController::class, 'checkList'])->name('registrar.checkList');
    
    Route::get('/search-student', [RegistrarController::class, 'searchStudent']);
    Route::put('track', [RegistrarController::class, 'update'])->name('registrar.track');
   
});



// Admin Routes
Route::prefix('admin')->middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('dashboard', [AdminController::class, 'show'])->name('admin.dashboard');

    Route::get('archived-documents', [AdminController::class, 'archivedDocuments'])->name('admin.archivedDocuments');

    Route::get('activity-logs', [AdminController::class, 'activityLogs'])->name('admin.activityLogs');

    Route::get('deactivate', [AdminController::class, 'deactivate'])->name('admin.deactivate');

    Route::get('document-management', [AdminController::class, 'documentManagement'])->name('admin.documentManagement');

    Route::get('lock-account', [AdminController::class, 'lockAccount'])->name('admin.lockAccount');
    
    Route::get('modify', [AdminController::class, 'modify'])->name('admin.modify');

    Route::get('user-management', [AdminController::class, 'userManagement'])->name('admin.userManagement');
});

// Head Registrar Routes
Route::prefix('head-registrar')->middleware(['auth', HeadRegistrarMiddleware::class])->group(function () {
    Route::get('dashboard', [HeadRegistrarController::class, 'show'])->name('head-registrar.dashboard');
    
});


// Include authentication routes
require __DIR__.'/auth.php';
