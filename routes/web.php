<?php
use App\Http\Controllers\EmailController;
use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;


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
Route::get('/test-email', function(){
    // $emailJob = new SendWelcomeEmail();
    // dispatch($emailJob);
    
});

