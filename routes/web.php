<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteControllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('website-views.index');
})->name('home');

Route::get('/login', function () {
    return view('website-views.login');
});

Route::get('/otp', function () {
    return view('website-views.otp');
});

// Route::get('/contact-us', function () {
//     return view('website-views.contact-us');
// })->name('contact-us');

Route::get('/calendar', function () {
    return view('website-views.calendar');
})->name('calendar');

Route::get('/programs', function () {
    return view('website-views.program');
})->name('programs');

Route::get('/programs/program-view', function () {
    return view('website-views.program-view');
})->name('program-view');

Route::get('/programs/program-view/admission-apply', function () {
    return view('website-views.admission-apply');
})->name('admission-apply');

Route::get('/contact-us', [ContactController::class, 'showContact'])->name('contact-us');
