
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCrudController; 
//task 66
Route::get('/student/register', [StudentController::class, 'create']);
Route::post('/student/register', [StudentController::class, 'store']);

// --- Task 65 
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// --- Task 67: Resource Route for Full CRUD ---
Route::resource('students', StudentCrudController::class); // <-- 2. Yo line sabai bhanda tala thapne

// Dynamic parameter route sadhai sabai bhanda tala rakhne (yedi tala rakhna milena vane mathi sari-sari rakhna milxa, tara resource route mathi rakhda safe huncha)
Route::get('/student/{name}', function ($name) {
    return view('student', ['studentName' => $name]);
});