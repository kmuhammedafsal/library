<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\adminregistercontroller;
use App\Http\Controllers\addbookcontroller;
use App\Http\Controllers\membercontroller;
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



Route::get('/registration',[registercontroller :: class,'create']);
Route::post('/registerread',[registercontroller :: class,'store']);
Route::get('/registerview',[registercontroller :: class,'index']);
Route::post('/ulogs',[registercontroller::class,'check']);
Route::get('/ulogout',[registercontroller :: class,'logout']);


Route::get('/adminregistration',[adminregistercontroller :: class,'create']);
Route::post('/adminregisterread',[adminregistercontroller :: class,'store']); 

Route::post('/alogs',[adminregistercontroller::class,'check']);
Route::get('/alogout',[adminregistercontroller :: class,'logout']);

Route::get('/category',[categorycontroller :: class,'create']);
Route::post('/categoryread',[categorycontroller :: class,'store']); 
Route::get('/categorys',[categorycontroller :: class,'index']);

route::get('/categoryeditview/{id}', [categorycontroller::class,'edit']);
route::get('/categorydeleteview/{id}', [categorycontroller::class,'deleteview']);
route::post('/categoryeditprocess/{id}', [categorycontroller::class,'update']);
route::post('/categorydeleteprocess/{id}',[categorycontroller::class,'destroy']);


/*
Route::get('/addmember',[membercontroller :: class,'create']);
Route::post('/addmemberread',[membercontroller :: class,'store']);
Route::get('/addmember',[membercontroller::class,'index']);*/




route::get('/addbook',[addbookcontroller::class,'create']);
route::post('/addbookread', [addbookcontroller::class,'store']);
route::get('/addcategory',[addbookcontroller::class,'getAllGenre']);
Route::get('/addbooks',[addbookcontroller :: class,'index']);




route::get('/addbookeditview/{id}', [addbookcontroller::class,'edit']);
route::get('/addbookdeleteview/{id}', [addbookcontroller::class,'deleteview']);
route::post('/bookeditprocess/{id}', [addbookcontroller::class,'update']);
route::post('/bookdeleteprocess/{id}',[addbookcontroller::class,'destroy']);

Route::group(['middleware'=>['usercheck']],function()
{
    Route::get('/index',[registercontroller::class,'usrlogin'] );
    Route::get('/userhome',[registercontroller::class,'homeuser']);
    Route::get('/userview',[addbookcontroller::class,'indexnew']);
    /*Route::get('/userviewdetails/{id}',[addbookcontroller::class,'indexnewnew']); */
   
});
Route::group(['middleware'=>['admincheck']],function()
{
    Route::get('/adminlogin',[adminregistercontroller::class,'admlogin'] );
    Route::get('/home',[adminregistercontroller::class,'homeadmin']);
    
  
    
    route::get('/addcategory',[addbookcontroller::class,'getAllGenre']);
    Route::get('/addbooks',[addbookcontroller :: class,'index']);
});
Route::get('/adminregistrations',[adminregistercontroller :: class,'index']);
Route::get('/categorys',[categorycontroller :: class,'index']);

Route::post('/cussearch',[addbookcontroller::class,'search']);

Route::get('/userview',[addbookcontroller::class,'indexnew']);

Route::post('/orderplace',[addbookcontroller::class,'orderplace']);


Route::get('removecart/{id}',[addbookcontroller::class , 'removecart' ] );
Route::get('/cartlist',[addbookcontroller::class , 'cartlist' ] );
Route::get('/order',[addbookcontroller::class , 'ordernow' ] );

Route::get('/add_to_cart/{abookid}',[addbookcontroller::class,'addToCart']);

Route::get('/myorders',[addbookcontroller::class,'myorder']);

route::get('/card', [addbookcontroller::class,'card']);
Route::get('/vieworders',[addbookcontroller::class , 'vieworders' ] );

route::post('/ordereditprocess/{id}',[addbookcontroller::class,'updateorder']);


route::get('/order/{id}/edit', [addbookcontroller::class,'orderedit']);


route::get('/cancelorder/{id}/{userid}', [addbookcontroller::class,'cancelorder']);

route::get('/aboutus', [addbookcontroller::class,'aboutus']);






Route::get('placeorder', function () {
    return view('placeorder');
  
});


Route::get('/', function () {
    return view('first');

});

/*Route::get('index', function () {
    return view('index');

});
Route::get('registration', function () {
    return view('registration');
  
});
Route::get('category', function () {
    return view('category');
  
});
Route::get('addbook', function () {
    return view('addbook');
  
});
Route::get('placeorder', function () {
    return view('placeorder');
  
});
Route::get('addmembers', function () {
    return view('addmembers');
  
});
Route::get('home', function () {
    return view('home');
  
});
Route::get('userhome', function () {
    return view('userhome');
  
});
Route::get('adminlogin', function () {
    return view('adminlogin');
  
});
Route::get('adminview', function () {
    return view('adminview');
  
});
Route::get('/userview', function () {
    return view('userview');
  
});
Route::get('adminregistration', function () {
    return view('adminregistration');
  
});*/



route::get('/contact', [addbookcontroller::class,'contact']);