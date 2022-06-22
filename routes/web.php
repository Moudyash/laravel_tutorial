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
//this rout will print welcome to main when search www.yoursite.com/main or your localhost http://127.0.0.1:8000/main
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::get('main', function () {
//      echo "welcome to main ";
//});

//this rout will go first to controller and show function
//هاي الطريقة بخلي الroute يروح على كنترولر ومن داخل الكنترولر بيختار function
//استعمالها لفلترة الrequest
//لو بدك تفحص شروط قبل عرض الصفحة
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::get('cont',"\App\Http\Controllers\Controller@show");

//this rout will go to  view
//the rout will go to view directly
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::view('rout2',"welcome");

//this rout will print the parameter hi from route and the id of route when search  www.yoursite.com/route/mohammed(this the parameter)
// or your localhost http://127.0.0.1:8000/route/mohammed(this the parameter)
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::get('/route/{id?}', function ($id=0){
//   echo "hi from route  $id ";
//});

//route
// بيروح ل
//route تاني حسب الاسم
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::get('routey', function () {
//   this route will go to this route that named "test page"
//    return redirect()->route("test page");
//});
//Route::get('routex', function () {
//    echo "hello from route y ";
////->name here to name your redirect
//})->name("test page");


//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::get('routey/{id?}', function ($id = 0) {
//    if ($id == "mohammed") {
//        return redirect()->route("mohammed");
//
//    } else     return redirect()->route("test page");
//
//});
//Route::get('routex', function () {
//    echo "hello from route y ";
//})->name("test page");
//
//Route::get('mohammed', function () {
//    echo "hello from mohammed route";
//})->name("mohammed");


//route will  go another route directly without name

//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::get('routey', function () {
//    echo "hello from route y ";
//
//});
//Route::get('routex', function () {
//    echo "hello from route x ";
//});
//Route::redirect('routey','routex');
////301 is the status
//Route::redirect('routey','routex',301);
////permanentRedirect is the same thing in redirect
//Route::permanentRedirect('routey','routex');
//// and you can redirect to another website like github or more like face google or any web page
//Route::redirect('github','https://github.com/Moudyash');
//-----------------------------route group--------------------------
//used to set one prefixes to some routes
//like
//Route::get('/admin/home');
//Route::get('/admin/profile');
//Route::get('/admin/reset');


//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
//Route::prefix("admin")->group(function (){
//    Route::get('dashboard', function () {
//     echo "welcome to admin dashboard ";
//});
//    Route::get('home', function () {
//        echo "welcome to admin home ";
//    });
//    Route::get('profile', function () {
//        echo "welcome to admin profile ";
//    });
//    Route::get('reset', function () {
//        echo "welcome to admin reset ";
//    });
//});



///this route will deal with middleware
///  when you request to access to /sensitive auth middleware will block any user how haven't logged in in the website


//                ||||||
//                ||||||
//                ||||||
//                ||||||
//                ||||||
//               _||||||_
//               \      /
//                \    /
//                 \  /
//                  \/
//------------------------------------------------
/******************Authenticate middleware***********/

//Route::middleware(['auth'])->group(function (){
//
//
//Route::get("sensitive",function (){
//    echo "u most be logged in ";
//});
//});
/******************ThrottleRequests middleware***********/
///20 for count to try to access route time
/// 1 for time 1 minute
/// you can access or refresh time route just 20 time per minute
//Route::middleware(['throttle:20,10'])->group(function (){
//
//
//Route::get("time",function (){
//return view('welcome');
//});
//});
