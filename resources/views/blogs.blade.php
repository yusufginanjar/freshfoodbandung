<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Blogs</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="blogs">

    @include('partials.navbar')

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($blogs as $blog)
                        <a href="/blogs/{{ $blog->slug }}">
                            <div class="item-blog m">
                                <h4 class="title">{{ $blog->title }}</h4>
                                <p class="date">{{ ($blog->created_at)->isoFormat('dddd D Y') }}</p>
                                <hr>
                                    {!! $blog->excerpt !!}
                                    </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="col-md-4 sidebar">
                    <div class="container">
                        <h5 class="txt-red">Recent Posts</h5>
                            @foreach ($blogs as $blog)
                                <a href="/blogs/{{ $blog->slug }}"><p>{{ $blog->title }}</p></a>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')

</body>
</html>