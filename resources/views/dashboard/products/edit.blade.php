@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product</h1>
</div>

<div class="col-lg-8">


    <form method="POST" action="/dashboard/products/{{ $product->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Edit Product</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $product->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <p>Use all lowercase with no spacing. example: product-one</p>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $product->slug) }}" placeholder="product-one">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="currency" class="form-label">Currency</label>
            <input type="text" class="form-control @error('currency') is-invalid @enderror" id="currency" name="currency" placeholder="Rp" required value="{{ old('currency', $product->currency) }}" >
            @error('currency')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price', $product->price) }}" >
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="badge" class="form-label">Badge</label>
            <input type="text" class="form-control @error('badge') is-invalid @enderror" id="badge" name="badge"  value="{{ old('badge', $product->badge) }}" >
            @error('badge')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"  value="{{ old('description', $product->description) }}" >
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Product Image</label>
            <input type="hidden" name="oldImage" value="{{ $product->image }}">
            @if ( $product->image )
                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 col-lg-3 d-block">
            @else
                <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5 col-lg-3">
                
            @endif
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>


<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/products/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })


    function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFRevent) {
                imgPreview.src = oFRevent.target.result;
            }
            
        }
</script>


@endsection