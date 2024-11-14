@extends('layouts.main')

@section('content')


    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full"
                            src="{{ asset('images/Restaurant.jpeg') }}" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">احجز طاولتك</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    آهلابك</div>
                            </div>
                            <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12">
                            <div class="card shadow-lg border-0">
                                <div class="card-body p-5">
                                    <h3 class="text-center mb-4 fw-bold">حجز الطاولة</h3>
                                    @if(session('success'))
                                        <div class="alert alert-success text-center">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('shopping.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name" class="form-label fw-bold">الاسم</label>
                                            <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="أدخل اسمك" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="form-label fw-bold">البريد الإلكتروني</label>
                                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="أدخل بريدك الإلكتروني" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="address" class="form-label fw-bold">العنوان</label>
                                            <select name="address" id="address" class="form-select form-select-lg" required>
                                                <option value="مكة">مكة</option>
                                                <option value="جدة">جدة</option>
                                                <option value="الرياض">الرياض</option>
                                            </select>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg">حجز</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection