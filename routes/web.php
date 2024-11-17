<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Admin\DashboardController;

/*============website===============*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/member', [HomeController::class, 'member'])->name('member');
Route::post('/member-submit', [HomeController::class, 'memberSubmit'])->name('member.submit');


/*==================admin=====================*/
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/member-list', [DashboardController::class,'memberList'])->name('dashboard.member');
Route::get('/member-list/edit/{id}', [DashboardController::class,'edit'])->name('memberlist.edit');
Route::post('/member-approved/{id}', [DashboardController::class,'memberApproved'])->name('member.approved');
});
