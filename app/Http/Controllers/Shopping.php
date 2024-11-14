<?php

namespace App\Http\Controllers;
use App\Models\costumers;


use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Shopping extends Controller
{
    public function index()
    {
      
        return view('shopping.landingpage');
    }


    public function menu()
    {
        $product=products::all();
        return view('shopping.menu',['product'=>$product]);
    }
    public function res()
    {
        $reserv=costumers::all();
        return view('shopping.res',['reserv'=>$reserv]);
    }


    public function add_to_cart()
    {
      $count=session::get('counter');
      $count++;
      session::put('counter',$count);
      return view('shopping.landingpage');

    }


    public function productdetails($id)
    {
        
        $producdetails=DB::table('products')
        ->join('products__details','products.id','=','products__details.id_products')
        ->where('products.id','=',$id)
        ->first();

       
        return view('shopping.product_details',['prod'=>$producdetails]);
    }



    public function reservations()
    {
        return view('shopping.reservations');
    }

    // حفظ بيانات الحجز
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        
        DB::table('costumers')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'تم الحجز بنجاح!');
    }

}
