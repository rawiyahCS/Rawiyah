<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Products_Details;
use App\Models\costumers;

use App\Models\orders;

use Illuminate\Support\Facades\DB;

class Dashblard extends Controller
{
    public function index(Request $request)
    {
        //dd($request->user()->password);
        return view('dashboard.index');
    }

    public function products()
    {
        $prod=products::All();
        return view('dashboard.products',['prod'=>$prod]);

    }

    public function create_newproducts(Request $request)
    {
       
      $prod=products::create([

            'name'=>$request->productname,
            'Description'=>$request->description

      ]);

      $prod->save();
      return redirect()->route('products');
    }


    public function delete()
    {
      $id=$_GET['id_product'];
      $p=products::find($id);
      $p->delete();
           
    }
     public function update(Request $request)
     {
        
        products::where('id',$request->id)
        ->update(['name'=>$request->name,'Description'=>$request->description]);
        return redirect()->route('products');
     }
    public function edit($id)
    {
        $products=products::find($id);
        return view('dashboard.edit',['products'=>$products]);
    }
////////////////////////////////////////////////////////////////////////////////
    public function create_new_details(Request $request)
    {
        
       $product_details=Products_Details::Create([
          'id_products'=>$request->product_no,
          'price'=>$request->price,
          'color'=>$request->color,
          'qty'=>$request->qty,
          'image'=>$request->img
       ]);
       $product_details->save();
       return redirect()->route('showdet');
    }
    public function showproduct_details()
    {
      $prod=products::All();
      $producdetails=DB::table('products')
      ->join('products__details','products.id','=','products__details.id_products')
      ->get();
      return view('dashboard.product_details',['prod'=>$prod,'producdetails'=>$producdetails]);
    }

   ///////////////////////////////////////////////////////////////////////////////////////////////




   /*public function costumers()
   {
       $reserv=costumers::All();
       return view('dashboard.costumers',['reserv'=>$reserv]);

   }

   public function create_costumers(Request $request)
   {
      
     $reserv=costumers::create([

           'name'=>$request->costumersname,
           'email'=>$request->email,
           'address'=>$request->address
  
     ]);

     $reserv->save();
     return redirect()->route('costumers');
   }

   public function deletecostumers($id)
{
    $customer = costumers::find($id); //ل
    if ($customer) {
        $customer->delete();
        return response()->json(['status' => 'success', 'message' => 'Record deleted successfully'], 200);
    } else {
        return response()->json(['status' => 'error', 'message' => 'Record not found'], 404);
    }
}*/
    /* public function deletecostumers()
   {
     $id=$_GET['id_costumers'];
     $p=costumers::find($id);
     $p->deletecostumers();
          
   }*/
  /*public function update(Request $request)
    {
       
       products::where('id',$request->id)
       ->update(['name'=>$request->name,'Description'=>$request->description]);
       return redirect()->route('products');
    }
   public function edit($id)
   {
       $products=products::find($id);
       return view('dashboard.edit',['products'=>$products]);
   }*/

   ////////////////////////////////////////////////////////////////////////
  

   public function create_orders(Request $request)
   {
      
      $ordmunu=orders::create([

           'costumer_Id'=>$request->costumer_Id,
           'product_Id'=>$request->product_Id,
            'status'=>$request->img,
      ]);

     $ordmunu->save();
     return redirect()->route('showorders');
   }
   /*public function create_new_details(Request $request)
   {
       
      $product_details=Products_Details::Create([
         'id_products'=>$request->product_no,
         'price'=>$request->price,
         'color'=>$request->color,
         'qty'=>$request->qty,
         'image'=>$request->img
      ]);
      $product_details->save();
      return redirect()->route('showdet');
   }
   public function showorders_details()
   {
       
    $prod=products::All();
    $reserv=costumers::All();
    $ordmunu=DB::table('products')
     
     ->join('orders','products.id','=','orders.id')
     ->get();
     return view('dashboard.orders',['prod'=>$prod,'ordmunu'=>$ordmunu]);

     $ordmunu=DB::table('costumers')
     
     ->join('orders','costumers.id','=','orders.id')
     ->get();
     return view('dashboard.orders',['reserv'=>$reserv,'ordmunu'=>$ordmunu]);
   }*/

   public function costumers()
   {
       $reservations = DB::table('costumers')->get();

       return view('dashboard.costumers', compact('reservations'));
   }



}
