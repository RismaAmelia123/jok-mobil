<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ProfileController;


// =============================
// FRONTEND
// =============================


Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/layanan/{slug}', [FrontendController::class, 'show'])->name('services.show');

// Route::get('/', function () {
//     return view('home');
// });


// =============================
// ADMIN
// =============================

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.process');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')
->middleware('admin')
->name('admin.')
->group(function () {
        //DASHBOARD
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        //SERVICES
        Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
        Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
        Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
        //MATERIALS
        Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
        Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');
        Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');
        Route::get('/materials/{material}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
        Route::put('/materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
        Route::delete('/materials/{material}', [MaterialController::class, 'destroy'])->name('materials.destroy');
        //GALLERIES
        Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
        Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
        Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
        Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
        Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])->name('galleries.update');
        Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy');
        //TESTIMONIALS
        Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
        Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
        Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::put('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
        //SETTINGS
        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::get('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
        Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
        //FAQS
        Route::get('/faqs', [FaqController::class,'index'])->name('faqs.index');
        Route::get('/faqs/create',[FaqController::class,'create'])->name('faqs.create');
        Route::post('/faqs',[FaqController::class,'store'])->name('faqs.store');
        Route::get('/faqs/{faq}/edit',[FaqController::class,'edit'])->name('faqs.edit');
        Route::put('/faqs/{faq}',[FaqController::class,'update'])->name('faqs.update');
        Route::delete('/faqs/{faq}',[FaqController::class,'destroy'])->name('faqs.destroy');
        //PROFILE
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    });