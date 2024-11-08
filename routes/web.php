<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Course;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\SubscriberDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\VideosController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $courses = Course::all();
        return view('taleem-welcome', ['courses' => $courses]); 
    })->name('dashboard');
});

Route::get('/courses', [CourseController::class, 'index']);
Route::get('local/{lang}', [LocalController::class, 'setLocale'])->name('locale.switch');;
Route::get('/courses/{courseId}/videos', [VideosController::class, 'index'])->name('courses.videos');

Route::get('/blog', [ArticleController::class, 'index'])->name('blog.index');
// Route::middleware(['auth', 'role:manager'])->group(function () {
//     Route::get('/manager/dashboard', [ManagerDashboardController::class, 'index'])->name('manager.dashboard');
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
// });

// Route::middleware(['auth', 'role:subscriber'])->group(function () {
//     Route::get('/subscriber/dashboard', [SubscriberDashboardController::class, 'index'])->name('subscriber.dashboard');
// });
