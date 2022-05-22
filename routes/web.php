<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

// use App\Http\Controllers\user123;
// use App\Http\Controllers\newcontrol;
// use App\Http\Controllers\demo;
// use App\Http\Controllers\singleactioncontroller;
// use App\Http\Controllers\PhotoController;
// use App\Models\Customer;
use App\Http\Controllers\customercontroller;
// use App\Http\Controllers\Indexcontroller;
// use App\Http\Middleware\Webguard;
// use App\Http\Controllers\testcontroller;
// use App\Http\Controllers\testing;
use Illuminate\Http\Request;
// use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\App;


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

// Route::get('/{welcome2}', function ($welcome2) {
//     // return view('welcome',['welcome2'=>$welcome2]);
//     echo $welcome2;
// });

// Route::get('user123', [user123::class, 'Index']);

// Route::get('User/{id}', [UserController::class, 'index']);

// Route::view('myuser', 'create1');

// Route::middleware(['guard','Web'])->group(function () {
    // Route::get('/data', [Indexcontroller::class, 'Index']);
    // Route::get('/group/{group}', [Indexcontroller::class, 'Group']);
// });

// Route::get('/no-access', function () {
//     echo "you are not alllowsd to access this file";
    
// });

// //  protected
// Route::get('/login', function () {
//     session()->put('user_id', 1);
//     echo 'login';
    
//     //  return redirect('/');
// });

// Route::get('/logout', function () {
//     session()->forget('user_id');
//     return redirect('/');
 
// });



// Route::get('/', cunction () {
//     return view('first');
// });

// Route::get('/{lang?}', function ($lang=null) {
//   App::setLocale($lang);
//     return view('first');
// });

// Route::post('create',function(){
//     return 'hello';
// });

// Route::put('users/{id}', function ($id) {

// });
// Route::delete('users/{id}', function ($id) {

// });

// Route::patch();

// Route::any('create1',function(){
//         return 'hello welcome to my world';
//     });

// Route::get('create1',function(){
//     return 'hello nilesh';
// });

// Route::apiResources(["create1"]);
/*
Route::get('/create1/{name}/{id?}', function ($name,$id=null) {
    $data = compact('name','id'); 
    return view('create1')->with($data);
 
    // echo "<pre>";
    // print_r($data);
});
*/


// Route::get('/{nilesh}',function($nilesh){
// return view("User",["nilesh" => $nilesh]);
// });

// Route::get('User/{nilesh}', [newcontrol::class, 'loadView']);

// Route::view('user2', 'user2');
// Route::view('about', 'about');

// Route::get('/{name?}', function ($name=null) {
//     $demo = "<h2>Hello Nileshji</h2>";
//     $data = compact('name','demo');
//    return view('layout.header1')->with($data);

// });

// Route::get('/about1', function () {
//     return view('about1');

//  });

//  Route::get('/', function () {
//     return view('home1');

//  });

//  Route::get('courses', function () {
//     return view('courses');

//  });

// Route::get('/', [demo::class, 'index']);
// Route::get('courses', singleactioncontroller::class);
// Route::get('/about1', [demo::class, 'about1']);
// Route::resource('/photo', PhotoController::class);

// Route::get('/register', [UserController::class, 'Index']);

// Route::post('/register', [UserController::class, 'Register']);

// Route::get('customer/', function () {
//     $customer = Customer::all();
//     echo "<pre>";
//     print_r($customer->toArray());
// });


//CRUD Operation Routes 

Route::get('/customer', [customercontroller::class, 'create']);
Route::get('/customer/view',[customercontroller::class, 'view']);
Route::post('/customer', [customercontroller::class, 'Store']);

Route::get('customer/delete/{id}',[customercontroller::class ,'Delete'])->name('customer.delete');
Route::get('/customer/delete/{id?}',[customercontroller::class ,'Delete']);
Route::get('/customer/edit/{id?}',[customercontroller::class ,'edit'])->name('customer.edit');
Route::post('/customer/update/{id?}',[customercontroller::class ,'update'])->name('customer.update');

// Route::get('get-all-session', function () {
//     $session = session()->all();
//     p($session);
// });

// Route::get('set-session', function (Request $request) {
//     $request->session()->put('name','nilesh bhai mbbs');
//     $request->session()->put('user_id','12456');
//     $request->session()->flash('status','Success');
//     return redirect('get-all-session');
// });

//session
// Route::get('destroy-session', function () {

//     session()->forget(['name','user_id']);
// //    session()->forget('name');
// //    session()->forget('user_id');
//     return redirect('get-all-session');
// });

// soft delete
Route::get('/customer/trash/', [customercontroller::class, 'trash']);
Route::get('/customer/restore/{id}', [customercontroller::class, 'restore'])->name('customer.restore');
Route::get('/force/delete/{id}', [customercontroller::class, 'forceDelete'])->name('force.delete');

//file upload

// Route::match(['get', 'post'], 'upload', [UserController::class, 'upload']);

// Route::group(['prefix' => '/customer'], function () {
//     Route::get('/', [customercontroller::class, 'create']);
//     Route::get('/view', [customercontroller::class, 'view']);
//     Route::post('/', [customercontroller::class, 'Store']);

//     Route::get('delete/{id}', [customercontroller::class, 'Delete'])->name('customer.delete');
//     Route::get('/delete/{id?}', [customercontroller::class, 'Delete']);
//     Route::get('/edit/{id?}', [customercontroller::class, 'edit'])->name('customer.edit');
//     Route::post('/update/{id?}', [customercontroller::class, 'update'])->name('customer.update');
//     Route::get('trash/', [customercontroller::class, 'trash']);
//     Route::get('/restore/{id}', [customercontroller::class, 'restore'])->name('customer.restore');
//     Route::get('/force/delete/{id}', [customercontroller::class, 'forceDelete'])->name('force.delete');
// });

// Route::view('flipkart','flipkart');
Route::get('/', function () {
    return view('layout/know');
});

