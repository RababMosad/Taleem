<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Course;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\SubscriberDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VideoController;


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

Route::get('/courses', [CourseController::class, 'indexshow']);
Route::get('local/{lang}', [LocalController::class, 'setLocale'])->name('locale.switch');
Route::get('/courses/{courseId}/videos', [VideoController::class, 'indexshow'])->name('courses.videos');
Route::get('/blog', [ArticleController::class, 'index'])->name('blog.index');

Route::get('/Payment', [StripeController::class, 'index'])->name('index');
Route::post('/stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');


Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::resource('/admin/articles', ArticleController::class);
Route::resource('/admin/courses', CourseController::class);
Route::resource('/admin/videos', VideoController::class);
// Route::post('/admin/courses/{course}/videos', [VideosController::class, 'store'])->name('videos.store');




