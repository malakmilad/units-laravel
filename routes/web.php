<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\TaxonomyController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //?profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //?blog
    Route::get('/blogs/{type}',[BlogController::class,'index'])->name('blogs.index');
    Route::get('/blog/create/{type}',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog/show/{blog}',[BlogController::class,'show'])->name('blog.show');
    Route::get('/blog/edit/{blog}',[BlogController::class,'edit'])->name('blog.edit');
    Route::put('/blog/update/{blog}',[BlogController::class,'update'])->name('blog.update');
    Route::get('/blog/destroy/{blog}',[BlogController::class,'destroy'])->name('blog.destroy');
    Route::get('/blog/slug',[BlogController::class,'slug'])->name('blog.slug');
    //?media
    Route::get('/media',[MediaController::class,'index'])->name('media.index');
    Route::post('/media/store',[MediaController::class,'store'])->name('media.store');
    Route::get('/media/show/{media}',[MediaController::class,'show'])->name('media.show');
    Route::get('/media/edit/{media}',[MediaController::class,'edit'])->name('media.edit');
    Route::put('/media/update/{media}',[MediaController::class,'update'])->name('media.update');
    Route::get('/media/destroy/{media}',[MediaController::class,'destroy'])->name('media.destroy');
    //?taxonomy
    Route::get('/taxonomies',[TaxonomyController::class,'index'])->name('taxonomies.index');
    Route::get('/taxonomy/create',[TaxonomyController::class,'create'])->name('taxonomy.create');
    Route::post('/taxonomy/store',[TaxonomyController::class,'store'])->name('taxonomy.store');
    Route::get('/taxonomy/show/{taxonomy}',[TaxonomyController::class,'show'])->name('taxonomy.show');
    Route::get('/taxonomy/edit/{taxonomy}',[TaxonomyController::class,'edit'])->name('taxonomy.edit');
    Route::put('/taxonomy/update/{taxonomy}',[TaxonomyController::class,'update'])->name('taxonomy.update');
    Route::get('/taxonomy/destroy/{taxonomy}',[TaxonomyController::class,'destroy'])->name('taxonomy.destroy');
    Route::get('/taxonomy/slug',[TaxonomyController::class,'slug'])->name('taxonomy.slug');
    //?type
    Route::get('/types',[TypeController::class,'index'])->name('types.index');
    Route::get('/type/create',[TypeController::class,'create'])->name('type.create');
    Route::post('/type/store',[TypeController::class,'store'])->name('type.store');
    Route::get('/type/show/{type}',[TypeController::class,'show'])->name('type.show');
    Route::get('/type/edit/{type}',[TypeController::class,'edit'])->name('type.edit');
    Route::put('/type/update/{type}',[TypeController::class,'update'])->name('type.update');
    Route::get('/type/destroy/{type}',[TypeController::class,'destroy'])->name('type.destroy');
    //?term
    Route::get('/terms',[TermController::class,'index'])->name('terms.index');
    Route::get('/term/create',[TermController::class,'create'])->name('term.create');
    Route::post('/term/store',[TermController::class,'store'])->name('term.store');
    Route::get('/term/show/{term}',[TermController::class,'show'])->name('term.show');
    Route::get('/term/edit/{term}',[TermController::class,'edit'])->name('term.edit');
    Route::put('/term/update/{term}',[TermController::class,'update'])->name('term.update');
    Route::get('/term/destroy/{term}',[TermController::class,'destroy'])->name('term.destroy');
    Route::get('/term/slug',[TermController::class,'slug'])->name('term.slug');
});

require __DIR__.'/auth.php';
