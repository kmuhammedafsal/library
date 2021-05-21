<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\registermodel;
use Validator;
class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeuser(){
        $registers=registermodel::all();
        $data=['LoggedUserinfo'=>registermodel::where('rname','=',session('loggeduser'))->first()];
        return view('userhome',compact('registers'),$data);

    }

    public function index()
    {
        $registers=registermodel::all();
        $data=['LoggedUserinfo'=>registermodel::where('rname','=',session('loggeduser'))->first()];
        return view('registerview',compact('registers'),$data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
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
            'rname' => 'required|unique:App\Models\registermodel,rname',
            'rphone' => 'required|digits:10|unique:App\Models\registermodel,rphone',
            'rplace' => 'required',
            'rmailid' => 'required|unique:App\Models\registermodel,rmailid',
            'rpassword' => 'required|min:5',
            
        ]);


        $getname=request('rname');
        $getphone=request('rphone');
        $getplace=request('rplace');
        $getmailid=request('rmailid');
        $getpassword=request('rpassword');


        echo $getname;
        echo "<br>";
        echo $getphone;
        echo "<br>";
        echo $getplace;
        echo "<br>";
        echo $getmailid;
        echo "<br>";
        echo $getpassword;
        echo "<br>";

        $register=new registermodel();
        $register->rname=$getname;
        $register->rphone=$getphone;
        $register->rplace=$getplace;
        $register->rmailid=$getmailid;
        

        $register->rpassword=Hash::make($request->rpassword);

        $register->save();
        return redirect('/index');

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
    public function home()
    {
        return view('/userhome');
    }
    public function usrlogin()
    {
        return view('/index');
    }
   

/*public function ulogs(Request $request)
    {
        $getmailid=$request -> input('rmailid');
        $getpassword=$request -> input('rpassword');
        $data = DB::select('select id from registermodels where rmailid=? and rpassword=?',[$getmailid,$getpassword]);

        if(count($data))
        {
            $request->session()->put('loggeduser',$getmailid);
           return redirect('/userhome');
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
            return redirect('/index');
        }
        else
        {
            return redirect('/index');
        }

    }

    public function check(Request $request)
    {

        $userInfo =registermodel::where('rmailid','=',$request->rmailid)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->rpassword , $userInfo->rpassword))
            {
                $request-> session()->put('loggeduser', $userInfo->rname);
           
                return redirect('/userhome');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }


}
}