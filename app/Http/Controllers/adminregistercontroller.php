<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\adminregistermodel;
use Validator;
class adminregistercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeadmin(){
        $adminregistrations=adminregistermodel::all();
        $data=['LoggedUserinfo'=>adminregistermodel::where('id','=',session('loggeduser'))->first()];
        return view('home',compact('adminregistrations'),$data);

    }
    public function admlogin()
    {
        return view('/adminlogin');
    }
    public function index()
    {
        $adminregistrations=adminregistermodel::all();
        return view('adminregistration',compact('adminregistrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('adminregistration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'arname' => 'required|unique:App\Models\adminregistermodel,arname',
            'arphone' => 'required|digits:10|unique:App\Models\adminregistermodel,arphone',
            'arplace' => 'required',
            'armailid' => 'required|unique:App\Models\adminregistermodel,armailid',
            'arpassword' => 'required|min:5',
            
        ]);

        $argetname=request('arname');
        $argetphone=request('arphone');
        $argetplace=request('arplace');
        $argetmailid=request('armailid');
        $argetpassword=request('arpassword');


        echo $argetname;
        echo "<br>";
        echo $argetphone;
        echo "<br>";
        echo $argetplace;
        echo "<br>";
        echo $argetmailid;
        echo "<br>";
        echo $argetpassword;
        echo "<br>"; 

        $aregister=new adminregistermodel();
        $aregister->arname=$argetname;
        $aregister->arphone=$argetphone;
        $aregister->arplace=$argetplace;
        $aregister->armailid=$argetmailid;
        
        $aregister->arpassword=Hash::make($request->arpassword);

        $aregister->save();
        return redirect('/adminregistrations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*public function alogs(Request $request)
    {
        $argetmailid=$request -> input('armailid');
        $argetpassword=$request -> input('arpassword');
        $data = DB::select('select id from adminregistermodels where armailid=? and arpassword=?',[$argetmailid,$argetpassword]);

        if(count($data))
        {
            $request->session()->put('loggeduser',$argetmailid);
           return view('home');

        }
        else
        {
    
            return back()->with('fail','invalid login');
            
        }

    }*/
    public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('adminlogin');
        }
        else
        {
            return redirect('adminlogin');
        }

    }
    public function check(Request $request)
    {

        $userInfo =adminregistermodel::where('armailid','=',$request->armailid)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->arpassword , $userInfo->arpassword))
            {
                $request-> session()->put('loggeduser', $userInfo->arname);
           
                return redirect('/home');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }


}
}

