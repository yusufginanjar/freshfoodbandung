@extends('dashboard.layouts.main')


@section('container')
    <section class="content">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-8">
                    <div class="item-blog m">
                        <h4 class="title">{{ $blog->title }}</h4>
                        <a href="{{ config('app.path') }}/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span> Back to blogs</a>
                        <a href="{{ config('app.path') }}/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this blog?')"><span data-feather="x-circle"></span> Delete</button>
                        </form>
                        <div>
                            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid my-2" alt="Responsive image">
                        </div>
                        <div>
                            {!! $blog->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      
    
@endsection


