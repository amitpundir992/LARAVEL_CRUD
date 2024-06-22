<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\Register;

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

Route::get('/test',function(){
   $emp = Student::all();
   echo "<pre>";
   print_r($emp->toArray());
});

Route::get('/form',[Register::class,'index']);
Route::post('/register',[Register::class,'register']);
Route::get('/view',[Register::class,'view_student']);
Route::get('/update/{id}',[Register::class,'update_student']);
Route::post('/editupdate/{id}',[Register::class,'edit_update']);
Route::get('/delete/{id}',[Register::class,'delete_student']);
