<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\addbookmodel;
use App\Models\categorymodel;
use App\Models\cartmodel;
use Session;
use Carbon\Carbon;
use App\Models\order;
class addbookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function contact()
    {
        
         return view('contact');
    }

    public function indexnew()
    {
        $addbooks=addbookmodel::all();
         return view('userview',compact('addbooks'));
    }
    public function indexnewnew($id)
    {
        $addbooks=addbookmodel::find($id);
        return view('userview',compact('addbooks'));
    }
    
   
    
   
    public function storeg(Request $request)
    {
        $getGenre= request('cname');
        $genre=new categorymodel();
        $genre->cname=$getGenre;
        $genre->save();
        return view('home');
    }
    public function getAllGenre()
    {
        $bgenre=categorymodel::all();

        return view('addbook',compact('bgenre'));

    }
    public function index()
    {
        $addbooks=addbookmodel::all();
        return view('addbookview',compact('addbooks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adgetbookid=request('abookid');
        $adgetbookname=request('abookname');
        $adgetauthor=request('aauthor');
        $adgetcategory=request('acategory');
        $adgetpublisher=request('apublisher');
        $adgetrent=request('arent');
        $adgetdate=request('adate');
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();

        $getpimage->move(public_path('assets/project_img'),$name);
       

        echo $adgetbookid;
        echo "<br>";
        echo $adgetbookname;
        echo "<br>";
        echo $adgetauthor;
        echo "<br>";
        echo $adgetcategory;
        echo "<br>";
        echo $adgetpublisher;
        echo "<br>"; 
        echo $adgetrent;
        echo "<br>"; 
        echo $adgetdate;
        echo "<br>";
        echo $getpimage;
        
        
        $addbook=new addbookmodel();
        $addbook->abookid=$adgetbookid;
        $addbook->abookname=$adgetbookname;
        $addbook->aauthor=$adgetauthor;
        $addbook->acategory=$adgetcategory;
        $addbook->apublisher=$adgetpublisher;
        $addbook->arent=$adgetrent;
        $addbook->adate=$adgetdate;
        $addbook->pimage=$name;

        $addbook->save();
        
        return redirect('/addcategory');
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
        $addbooks=addbookmodel::find($id);
        return view('addbookeditview',compact('addbooks'));
    }
    public function deleteview($id)
    {
        $addbooks=addbookmodel::find($id);
        return view('addbookdeleteview',compact('addbooks'));


    }
    public function destroy($id)
    {
        $addbook=addbookmodel::find($id);

        $addbook->delete();

        return redirect('/addbooks');
    }
    public function update(Request $request, $id)
    {
        $addbook=addbookmodel::find($id);
        $adgetbookid=request('abookid');
        $adgetbookname=request('abookname');
        $adgetauthor=request('aauthor');
        $adgetcategory=request('acategory');
        $adgetpublisher=request('apublisher');
        $adgetdate=request('adate');
        $adgetrent=request('arent');
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();

        $getpimage->move(public_path('assets/project_img'),$name);
       

        echo $adgetbookid;
        echo "<br>";
        echo $adgetbookname;
        echo "<br>";
        echo $adgetauthor;
        echo "<br>";
        echo $adgetcategory;
        echo "<br>";
        echo $adgetpublisher;
        echo "<br>"; 
        echo $adgetrent;
        echo "<br>";
        echo $adgetdate;
        echo "<br>";
        echo $getpimage;
        
        
        $addbook->abookid=$adgetbookid;
        $addbook->abookname=$adgetbookname;
        $addbook->aauthor=$adgetauthor;
        $addbook->acategory=$adgetcategory;
        $addbook->apublisher=$adgetpublisher;
        $addbook->adate=$adgetdate;
        $addbook->arent=$adgetrent;
        $addbook->pimage=$name;

        $addbook->save();
        

        return redirect('/addbooks');

    }
    public function search(Request $request)
    {
        $adgetbookname=request('abookname');
        $addbooks=addbookmodel::query()
        ->where('abookname','LIKE',"%{$adgetbookname}%")
        ->get();
        return view('userview',compact('addbooks'));
    }
    public function adsearch(Request $request)
    {
        $adgetbookname=request('abookname');
        $addbooks=addbookmodel::query()
        ->where('abookname','LIKE',"%{$adgetbookname}%")
        ->get();
        return view('addbookview',compact('addbooks'));
        
    }
    public function addToCart(Request $request)
    {

        if($request->session()->has('loggeduser')){
            
            $cart= new cartmodel;
            $cart->rname=$request->session()->get('loggeduser');
           $cart->abookid=$request->abookid;
           $cart->save();
           return redirect('/userview');
        }
        else
        {
          echo "fail";
        }
        
    }
    public function cartlist()
{
    $products=addbookmodel::all();
    $rname=Session::get('loggeduser');
    $products= DB::table('cartmodels')
    ->join('addbookmodels', 'cartmodels.abookid', '=', 'addbookmodels.abookid')
    ->where('cartmodels.rname', $rname)
   // ->select('pmodels.*')
    ->select('addbookmodels.*','cartmodels.id as cart_id')
    ->get();
     return view('cart', compact('products'));
}
public function removecart($id)
{
    cartmodel::destroy($id);

    return redirect('/cartlist');
}  
public function ordernow()
    {
        $products=addbookmodel::all();
        $rname=Session::get('loggeduser');
        $total= $products= DB::table('cartmodels')
        ->join('addbookmodels', 'cartmodels.abookid', '=', 'addbookmodels.abookid')
        ->where('cartmodels.rname', $rname)
        ->sum('addbookmodels.arent');
         return view('order', ['total'=>$total]);
    }
    public function orderplace (Request $req)
    {
        $getbookingdate = Carbon::now()->toDateString();
        $rname= Session::get('loggeduser');
        $allCart=cartmodel::where('rname', $rname)->get();
        foreach($allCart as $cart)
      {
        $order= new order;
        $order->abookid=$cart['abookid'];
        $order->rname=$cart['rname']; 
        $order->address=$req->address;
        $order->bookingdate=$getbookingdate;
        $order->status="pending";
        $order->paymentmethod=$req->payment; 
        $order->paymentstatus="pending";
        $order->save();
      } 
      cartmodel::where('rname', $rname)->delete();
      if($req->payment=='cod')
      {
        return redirect('/myorders')->with('success','Thank you for your order');
      }
      else 
      { 
         return redirect('/card');

      }
    }
    public function myorder()
{
   // $products=pmodel::all();
    $userId=Session::get('loggeduser');
    $orders= DB::table('orders')
    ->join('addbookmodels', 'orders.abookid', '=', 'addbookmodels.abookid')
    ->where('orders.rname', $userId)
    ->get();
     return view('myorders', ['orders'=>$orders]);
}
public function card()
    {
        return view('card');

    }
    public function vieworders()
    { 
        $prod=order::all();
       return view('vieworders',compact('prod'));

    }
    public function orderedit($id)
    {
        $prod=order::find($id);
        return view('editorder',compact('prod'));
    }
    public function updateorder(Request $request, $id)
    {
        $prod=order::find($id);


        $getstatus=request('status');

        $prod->status = $getstatus;


        $prod->save();


        return redirect('/vieworders');

    }
    public function cancelorder($id,$uid)
    {
        DB::table('orders')
        ->where('abookid',$id)
        ->where('rname',$uid)
        ->delete();
        return redirect('/myorders');
    }
    public function aboutus()
    {
        return view('aboutus');

    }
    public function first()
    {
        return view('first');

    }
    
    
    
}
