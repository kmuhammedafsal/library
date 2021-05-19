<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorymodel;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=categorymodel::all();
        return view('category',compact('categorys'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cgetid=request('cid');
        $cgetname=request('cname');

        
        $category=new categorymodel();
        $category->cid=$cgetid;
        $category->cname=$cgetname;

        $category->save();

        return back();
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
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorys=categorymodel::find($id);
        return view('categoryeditview',compact('categorys'));
    }
    public function deleteview($id)
    {
        $categorys=categorymodel::find($id);
        return view('categorydeleteview',compact('categorys'));


    }
    public function destroy($id)
    {
        $category=categorymodel::find($id);

        $category->delete();

        return redirect('/categorys');
    }
    public function update(Request $request, $id)
    {
        $category=categorymodel::find($id);
        $cgetid=request('cid');
        $cgetname=request('cname');

        echo $cgetid;
        echo "<br>";
        echo $cgetname;
        echo "<br>";

        
        $category->cid=$cgetid;
        $category->cname=$cgetname;

        $category->save();
  

        return redirect('/categorys');

    }
}
