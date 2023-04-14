<?php

use App\Http\Controllers\TestController;
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

Route::get('/bar', [TestController::class, 'bar'])->name('bar.edit');//bar est la vue pour créer une retrospective 
Route::get('/feedback', [TestController::class, 'feedback'])->name('feedback.edit'); 
// cette route affiche la vue contenant la liste des feedback sous forme de deux liste deroule 



//bonne formulation de routes 

Route::get('/foo', [TestController::class, 'foo'])->name('foo.edit');//foo est la vue pour créer un feedback.
Route::post('/foo', [TestController::class, 'feedbackSend'])->name('foo.edit');

Route::get('/feedbackcrée', [TestController::class, 'feedbackcrée'])->name('feedbackcrée.edit');

Route::post('/submit-feedback', [TestController::class,'submitFeedback'])->name('submitFeedback');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
