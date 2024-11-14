@extends('layouts.appdash')

@section('content')
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحجوزات</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4 fw-bold">قائمة الحجوزات</h1>
    <div class="card shadow-lg border-0">
        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>الاسم</th>
                        <th>البريد الإلكتروني</th>
                        <th>العنوان</th>
                        <th>تاريخ الحجز</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->address }}</td>
                    <td>{{ $reservation->created_at }}</td>
                </tr>
            @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection