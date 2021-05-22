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

Route::post('/ulogs',[registercontroller::class,'check']);
Route::get('/ulogout',[registercontroller :: class,'logout']);



Route::post('/adminregisterread',[adminregistercontroller :: class,'store']); 

Route::post('/alogs',[adminregistercontroller::class,'check']);

Route::post('/categoryread',[categorycontroller :: class,'store']); 

route::post('/categoryeditprocess/{id}', [categorycontroller::class,'update']);
route::post('/categorydeleteprocess/{id}',[categorycontroller::class,'destroy']);




route::post('/addbookread', [addbookcontroller::class,'store']);

route::get('/cancelorder/{id}/{userid}', [addbookcontroller::class,'cancelorder']);

Route::get('/add_to_cart/{abookid}',[addbookcontroller::class,'addToCart']);
Route::get('removecart/{id}',[addbookcontroller::class , 'removecart' ] );
route::post('/bookeditprocess/{id}', [addbookcontroller::class,'update']);
route::post('/bookdeleteprocess/{id}',[addbookcontroller::class,'destroy']);

Route::group(['middleware'=>['usercheck']],function()
{
    
    
});


Route::get('/adminregistrations',[adminregistercontroller :: class,'index']);

Route::group(['middleware'=>['AuthCheck']],function()
{
    Route::get('/adminlogin',[adminregistercontroller::class,'admlogin'] );
    Route::get('/home',[adminregistercontroller::class,'homeadmin']);
    Route::get('/adminregistration',[adminregistercontroller :: class,'create']);
    Route::get('/categorys',[categorycontroller :: class,'index']);
    
    Route::get('/addbooks',[addbookcontroller :: class,'index']);
    Route::get('/registerview',[registercontroller :: class,'index']);
    Route::get('/category',[categorycontroller :: class,'create']);
    
    route::get('/addbook',[addbookcontroller::class,'create']);
    
    route::get('/addcategory',[addbookcontroller::class,'getAllGenre']);
    

    Route::get('/userhome',[registercontroller::class,'homeuser']);
    Route::get('/userview',[addbookcontroller::class,'indexnew']);
  
    Route::get('/cartlist',[addbookcontroller::class , 'cartlist' ] );
    Route::get('/order',[addbookcontroller::class , 'ordernow' ] ); 
    

    Route::get('/myorders',[addbookcontroller::class,'myorder']);
   
    route::get('/card', [addbookcontroller::class,'card']);
     
    route::get('/contact', [addbookcontroller::class,'contact']);
    Route::get('/index',[registercontroller::class,'usrlogin'] );
  
    route::get('/aboutus', [addbookcontroller::class,'aboutus']);

    route::get('/', [addbookcontroller::class,'first']);
    
   
});



Route::get('/vieworders',[addbookcontroller::class , 'vieworders' ] );  







route::get('/order/{id}/edit', [addbookcontroller::class,'orderedit']);

route::post('/ordereditprocess/{id}',[addbookcontroller::class,'updateorder']);

route::get('/categoryeditview/{id}', [categorycontroller::class,'edit']);
route::get('/categorydeleteview/{id}', [categorycontroller::class,'deleteview']);

route::get('/addbookeditview/{id}', [addbookcontroller::class,'edit']);
route::get('/addbookdeleteview/{id}', [addbookcontroller::class,'deleteview']);

Route::get('/alogout',[adminregistercontroller :: class,'logout']);
Route::post('/cussearch',[addbookcontroller::class,'search']);



Route::post('/orderplace',[addbookcontroller::class,'orderplace']);



















/*
Route::get('/addmember',[membercontroller :: class,'create']);
Route::post('/addmemberread',[membercontroller :: class,'store']);
Route::get('/addmember',[membercontroller::class,'index']);*/
/*Route::get('/userviewdetails/{id}',[addbookcontroller::class,'indexnewnew']); */


/*
Route::get('placeorder', function () {
    return view('placeorder');
  
});


Route::get('/', function () {
    return view('first');

});

Route::get('index', function () {
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



