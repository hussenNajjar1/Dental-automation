<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\MessageController;


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

            Route::get('/hero', function () {
                
                return view('welcome');
            });
            Route::get('/switch-language/{language}', [Lang::class, 'switchLanguage'])->name('switch.language');

            Route::get('/dashboard', function () {
                return view('index');
            })->middleware(['auth', 'verified'])->name('dashboard');

            Route::middleware('auth')->group(function () {
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            });

            require __DIR__.'/auth.php';



                // reservations
                Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
                Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
                Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
                Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
                Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
                Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');



              

                // مسار لعرض النموذج لإرسال الرسالة
                Route::get('/send-message-form/{phone}', [MessageController::class, 'showSendMessageForm'])->name('send.message.form');

                // مسار لإرسال الرسالة
                Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');



                // post
                Route::get('/', [PostController::class, 'index']);
                Route::get('/posts', [PostController::class, 'showpost']);
                Route::get('/posts/create', [PostController::class, 'create']);
                Route::post('/posts', [PostController::class, 'store']);
                Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
                Route::put('/posts/{post}', [PostController::class, 'update']);
                Route::delete('/posts/{post}', [PostController::class, 'destroy']);
        

                  // vidoes 
                
                Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
                Route::get('/videoss', [VideoController::class, 'DashbodeIndex'])->name('videos.DashbodeIndex');
                Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
                Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
                Route::get('/videos/{id}/edit', [VideoController::class, 'edit'])->name('videos.edit');
                Route::put('/videos/{id}', [VideoController::class, 'update'])->name('videos.update');
                Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
                Route::get('/videos/{id}', [VideoController::class, 'show'])->name('videos.show');

                //  records
                Route::get('/records', [RecordController::class, 'index'])->name('records.index');
                Route::get('/records/create', [RecordController::class, 'create'])->name('records.create');
                Route::post('/records', [RecordController::class, 'store'])->name('records.store');
                Route::get('/records/{record}/edit', [RecordController::class, 'edit'])->name('records.edit');
                Route::put('/records/{record}', [RecordController::class, 'update'])->name('records.update');
                Route::delete('/records/{record}', [RecordController::class, 'destroy'])->name('records.destroy');
                Route::get('/records/search', [RecordController::class, 'search'])->name('records.search');





