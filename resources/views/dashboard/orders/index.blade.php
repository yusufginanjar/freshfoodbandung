@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Products</h1>
    </div>
    <div class="table-responsive">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}    
            </div>            
        @endif
        <a href="{{ config('app.path') }}/dashboard/products/create" class="btn btn-primary my-3">Add new product</a>
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Address</th>
            <th scope="col">whatsapp</th>
            <th scope="col">Email</th>
            <th scope="col">Note</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>FFB-0{{ $order->cart_id }}</td>
                <td>{{ $order->first_name . " " . $order->last_name }}</td>
                <td>{{ $order->company }}</td>
                <td>{{ $order->address . ", " . $order->province . ", " . $order->country . ", " .$order->postcode }}</td>
                <td>{{ $order->whatsapp }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->notes }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a href="{{ config('app.path') }}/dashboard/orders/{{ $order->id }}" class="badge bg-info"><span data-feather="eye"></span> Detail</a>
                    <form action="/dashboard/orders/{{ $order->id }}" method="POST" class="d-inline ">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0 my-2" onclick="return confirm('Are you sure this order already finished?')"><span data-feather="x-circle"></span> Finish</button>
                    </form>
                
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    
@endsection