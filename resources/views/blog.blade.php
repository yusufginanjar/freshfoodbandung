<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | {{ $title }}</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body id="blog">
    @include('partials.navbar')

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="item-blog m">
                        <h4 class="title">{{ $blog->title }}</h4>
                        <p class="date">{{ ($blog->created_at)->isoFormat('dddd D Y') }}</p>
                        <img src="assets/images/{{ $blog->image }}" class="img-fluid my-3" alt="Responsive image">
                        {!! $blog->body !!}
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="container">
                        <h5 class="txt-red">Recent Posts</h5>
                        @foreach ($recentBlogs as $item)
                            <a href="{{ config('app.path') }}/blogs/{{ $item->slug }}"><p>{{ $item->title }}</p></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')


</body>
</html>