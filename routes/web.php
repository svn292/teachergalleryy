<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/our-teacher', function () {
    return view('our-teacher');
});
Route::get('/book-ads', function () {
    return view('book-ads');
});
Route::get('/mutual-transfer', function () {
    return view('mutual-transfer');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/view-profile', function () {
    return view('view-profile');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/forget-password', function () {
    return view('auth.forgetpassword');
});

Route::get('/',[App\Http\Controllers\FrontController::class, 'index']);
Route::post('/contact',[App\Http\Controllers\FrontController::class, 'contact']);
Route::get('/pricing',[App\Http\Controllers\FrontController::class, 'pricing']);
Route::get('/searchteacher',[App\Http\Controllers\FrontController::class, 'searchteacher']);
Route::get('/our-teacher',[App\Http\Controllers\FrontController::class, 'ourteacher']);
// Route::get('/pricing',[App\Http\Controllers\FrontController::class, 'pricing']);
Route::get('/mutual-transfer',[App\Http\Controllers\FrontController::class, 'mutualtransfer']);
Route::get('/view-profile/{user}',[App\Http\Controllers\HomeController::class, 'viewprofile']);
Route::post('/view-profile/{user}',[App\Http\Controllers\HomeController::class, 'postcomment']);




Route::post('/chkemail',[App\Http\Controllers\Auth\LoginController::class, 'chkemail']);
Route::get('/login',[App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('/login',[App\Http\Controllers\Auth\LoginController::class, 'chklogin']);
Route::post('/forget-password',[App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgetpassword']);
Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'userregister']);
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'saveregister']);
Route::get('/teacherregister',[App\Http\Controllers\Auth\RegisterController::class, 'teacherregister']);
Route::post('/teacherregister',[App\Http\Controllers\Auth\RegisterController::class, 'saveteacherregister']);
Route::get('/publisherregister',[App\Http\Controllers\Auth\RegisterController::class, 'publisherregister']);
Route::post('/publisherregister',[App\Http\Controllers\Auth\RegisterController::class, 'savepublisherregister']);
Route::get('/verifyemail/{id}/{token}',[App\Http\Controllers\Auth\RegisterController::class, 'verifyemail']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'saveprofile']);
Route::post('/mutualtransfersave', [App\Http\Controllers\HomeController::class, 'mutualtransfersave']);
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/book-ads', [App\Http\Controllers\HomeController::class, 'bookads']);
Route::post('/book-ads', [App\Http\Controllers\HomeController::class, 'savebookads']);
Route::get('/delads/{ads}', [App\Http\Controllers\HomeController::class, 'delads']);
Route::get('/buynow/{package}', [App\Http\Controllers\HomeController::class, 'buynow']);
Route::get('/paymentcallback', [App\Http\Controllers\HomeController::class, 'paymentcallbackpayu'])->name('status');
Route::get('/thankyou', [App\Http\Controllers\HomeController::class, 'thankyou']);



//admin
Route::get('/adminlogin',[App\Http\Controllers\Auth\AdminloginController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/adminlogin',[App\Http\Controllers\Auth\AdminloginController::class, 'login']);
Route::get('/adminhome',[App\Http\Controllers\AdminhomeController::class, 'index']);
Route::prefix('admin')->group(function () {
    Route::get('/allads',[App\Http\Controllers\AdminhomeController::class, 'allads']);
    Route::get('/changeadsstatus/{ads}',[App\Http\Controllers\AdminhomeController::class, 'changeadsstatus']);
    Route::get('/allstudent',[App\Http\Controllers\AdminhomeController::class, 'allstudent']);
    Route::get('/addstudent',[App\Http\Controllers\AdminhomeController::class, 'addstudent']);
    Route::post('/addstudent',[App\Http\Controllers\AdminhomeController::class, 'savestudent']);
    Route::get('/editstudent/{user}',[App\Http\Controllers\AdminhomeController::class, 'editstudent']);
    Route::post('/editstudent/{user}',[App\Http\Controllers\AdminhomeController::class, 'updatestudent']);
    Route::delete('/deletestudent/{user}',[App\Http\Controllers\AdminhomeController::class, 'deletestudent']);
    Route::get('/allteacher',[App\Http\Controllers\AdminhomeController::class, 'allteacher']);
    Route::get('/addteacher',[App\Http\Controllers\AdminhomeController::class, 'addteacher']);
    Route::post('/addteacher',[App\Http\Controllers\AdminhomeController::class, 'saveteacher']);
    Route::get('/editteacher/{user}',[App\Http\Controllers\AdminhomeController::class, 'editteacher']);
    Route::post('/editteacher/{user}',[App\Http\Controllers\AdminhomeController::class, 'updateteacher']);
    Route::delete('/deleteteacher/{user}',[App\Http\Controllers\AdminhomeController::class, 'deleteteacher']);
    Route::get('/allpublisher',[App\Http\Controllers\AdminhomeController::class, 'allpublisher']);
    Route::get('/package',[App\Http\Controllers\AdminhomeController::class, 'package']);
    Route::post('/package',[App\Http\Controllers\AdminhomeController::class, 'savepackage']);
    Route::delete('/deletepackage/{package}',[App\Http\Controllers\AdminhomeController::class, 'deletepackage']);
    Route::get('/allsubject',[App\Http\Controllers\AdminhomeController::class, 'allsubject']);
    Route::post('/allsubject',[App\Http\Controllers\AdminhomeController::class, 'savesubject']);
    Route::delete('/deletesubject/{subject}',[App\Http\Controllers\AdminhomeController::class, 'deletesubject']);
    Route::get('/paymenthistory',[App\Http\Controllers\AdminhomeController::class, 'paymenthistory']);
    Route::get('/sliders',[App\Http\Controllers\SliderController::class, 'index']);
    Route::get('/newslider',[App\Http\Controllers\SliderController::class, 'create']);
    Route::post('/newslider',[App\Http\Controllers\SliderController::class, 'store']);
    Route::post('/editslider/{slider}',[App\Http\Controllers\SliderController::class, 'update']);
    Route::get('/editslider/{slider}',[App\Http\Controllers\SliderController::class, 'edit']);
    Route::delete('/deleteslider/{slider}',[App\Http\Controllers\SliderController::class, 'destroy']);
    Route::get('/cms',[App\Http\Controllers\AdminhomeController::class, 'cms']);
    Route::get('/editcms/{cms}',[App\Http\Controllers\AdminhomeController::class, 'editcms']);
    Route::post('/editcms/{cms}',[App\Http\Controllers\AdminhomeController::class, 'updatecms']);
});

