<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addmembermodel;
class membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addmembers=addmembermodel::all();
        return view('addmember',compact('addmembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addmember');

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getmn=request('mn');
        $getmid=request('mid');
        $getjd=request('jd');
        $geted=request('ed');
        $getam=request('am');
        $getpm=request('pm');


        echo $getmn;
        echo "<br>";
        echo $getmid;
        echo "<br>";
        echo $getjd;
        echo "<br>";
        echo $geted;
        echo "<br>";
        echo $getam;
        echo "<br>";
        echo $getpm;
        echo "<br>";

        $member=new addmembermodel();
        $member->mn=$getmn;
        $member->mid=$getmid;
        $member->jd=$getjd;
        $member->ed=$geted;
        $member->am=$getam;
        $member->pm=$getpm;
        


        $member->save();
        return redirect('/addmember');
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
}
