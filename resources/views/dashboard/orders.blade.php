@extends('layouts.appdash')

@section('content')
<!-- delete model-->
 
 

<div class="container">
<h1 class="alert alert-success">تفاصيل المنتجات</h1>
<form action="{{route('createorder')}}" method="post">
@csrf

 <div class="card">
    <div class="card-body">
    <div class="row">
   
   <div class="col">
       <label for="product_no"> اختر المنتج</label>
       <select class="form-select" name="product_no" id="product_no">
        @foreach($prod as $item)
         <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
       </select>
   </div>
 </div>
 

 <div class="row mt-3">
   <div class="col">
   @foreach($prod as $item)
         <option value="{{$item->id}}">{{$item->id}}</option>
        @endforeach
   <label for="product_Id" class="form-label">رقم الطلب</label>
   <input type="text" class="form-control" id="product_Id" name="product_Id">


     
   </div>
   
 </div>

 <div class="row mt-3">
   <div class="col">
   <label for="costumer_Id" class="form-label">رقم العميل</label>
   <input type="text" class="form-control" id="costumer_Id" name="costumer_Id">
   </div>
   <div class="col">
   <label for="img" class="form-label">الحاله</label>
   <input type="text" class="form-control" id="img" name="img">
   </div>
 </div>

 <div class="row mt-2">
   <div class="col text-center">
       <button class="btn btn-primary">حفظ</button>
   </div>
 </div>
 </form>
    </div>
 </div>
    
 
 <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body ">
                   <table class="table text-center">
                      <thead>
                        <tr>
                            <th>رقم الطلب</th>
                            <th>رقم العميل</th>
                            <th>رقم المنيو  </th>
                            <th>الحاله </th>
                            
                            <th colspan="2"> إجراء </th>
                        </tr>
                       
                      </thead>
                      <tbody>
                      @foreach($prod as $item)
         <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

        
                        @foreach($ordmunu as $item)
                          <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                               {{$item->costumer_Id}}
                            </td>
                            <td>
                                {{$item->product_Id}}
                            </td>
                            <td>
                                {{$item->status}}
                            </td>
                            
                            <td><a href="#" onclick="lunch({{$item->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                            <td><a href="{{route('edit',['id'=>$item->id])}}" ><i class="bi bi-pencil-square text-success"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection