<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BlogController::class,'home'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard',[BlogController::class,'userdashboard'])->name('dashboard');
        Route::prefix('blog')->group(function(){
                Route::get('/form',[BlogController::class,'addform'])->name('blog.form');

                Route::post('/post_blog',[BlogController::class,'post_blog']);
                Route::get('/delete_blog/{id}',[BlogController::class,'delete_blog'])->name('blog.delete');

                // Route::post('/blog/post_blog',[BlogController::class,'post_blog']);

                Route::get('/edit_form/{id}',[BlogController::class,'edit_form'])->name('blog.edit_form');

                Route::post('/update_blog/{id}',[BlogController::class,'update_blog'])->name('blog.update_blog');

        });
});

require __DIR__.'/auth.php';
