@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Products</h1>
    </div>
    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}    
            </div>            
        @endif
        <a href="/{{ config('app.path') }}/dashboard/products/create" class="btn btn-primary my-3">Add new product</a>
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->badge }}</td>
                <td>
                    <a href="/{{ config('app.path') }}/dashboard/products/{{ $product->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/{{ config('app.path') }}/dashboard/products/{{ $product->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete this product?')"><span data-feather="x-circle"></span></button>
                    </form>
                
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    
@endsection