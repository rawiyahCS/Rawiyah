@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row mt-5">
        @foreach ($product as $item)
            <div class="col-md-4">
                <div class="card">
                    @php
                        
                        $imageIndex = $item->id % 3; // 
                        $images = [
                            'img23.jpeg', // الصورة الأولى
                            'img22.jpeg', // الصورة الثانية
                            'img1.jpeg',
                            'img2.jpeg',
                        ];
                        
                     $imageIndex = $loop->index % count($images);


                
                          $selectedImage = $images[$imageIndex];
                     @endphp


                    <img src="{{ asset('images/' . $selectedImage) }}" class="card-img-top" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <a href="{{ route('proddet', ['id' => $item->id]) }}" class="btn btn-primary">تفاصيل</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
         

@endsection