<?php

namespace App\Http\Middleware;
use App\Models\adminregistermodel;
use App\Models\registermodel;
use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $adminInfo =adminregistermodel::where('arname','=',session('loggeduser'))->first();
        $userInfo =registermodel::where('rname','=',session('loggeduser'))->first(); 
        if(session()->has('loggeduser') )
        {
            if($adminInfo)
            {
                if($request->path()!='home'&& $request->path()!='adminregistration'&& $request->path()!='categorys'&& $request->path()!='afeedelete/{id}'&& $request->path()!='adminregistrations'&& $request->path()!='addbooks'&& $request->path()!='registerview'&& $request->path()!='category'&& $request->path()!='addbook' && $request->path()!='addcategory')
                {
                    return back();
                }

            }
            else
            {
                if($request->path()!='userhome' && $request->path()!='userview'&& $request->path()!='cartlist'&& $request->path()!='order'&& $request->path()!='myorders'&& $request->path()!='card'&& $request->path()!='vieworders'&& $request->path()!='contact'&& $request->path()!='aboutus')
                {
                    return back();
                }

            }

        }
        else
        {
            if($request->path()!='/' && $request->path()!='index'&& $request->path()!='adminlogin')
            {
                return redirect('/')->with ('fail','You must be logged in');
            }

        }



        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
}
