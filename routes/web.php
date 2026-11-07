<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatformController;

// واجهة الزوار
Route::get('/', [PlatformController::class, 'index'])->name('home');
Route::get('/go/{slug}', [PlatformController::class, 'go'])->name('affiliate.go');

// لوحة التحكم (Admin Dashboard)
Route::get('/admin', [PlatformController::class, 'admin'])->name('admin.dashboard');
Route::post('/admin/platforms', [PlatformController::class, 'store'])->name('admin.platforms.store');
Route::post('/admin/platforms/{id}/update-link', [PlatformController::class, 'updateLink'])->name('admin.platforms.updateLink');
Route::delete('/admin/platforms/{id}', [PlatformController::class, 'destroy'])->name('admin.platforms.destroy');

Route::post('/admin/login', [PlatformController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [PlatformController::class, 'adminLogout'])->name('admin.logout');

// صفحة قراءة المقال (SEO Friendly)
Route::get('/blog/{slug}', [PlatformController::class, 'showPost'])->name('post.show');

// إضافة وحذف المقالات من لوحة التحكم
Route::post('/admin/posts', [PlatformController::class, 'storePost'])->name('admin.posts.store');
Route::delete('/admin/posts/{id}', [PlatformController::class, 'destroyPost'])->name('admin.posts.destroy');