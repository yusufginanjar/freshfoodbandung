<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Fresh Food Bandung</title>
    <link rel="stylesheet" href="{{ config('app.path') }}/../../../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.path') }}/../../../assets/css/dashboard.css">

    <link rel="stylesheet" type="text/css" href="../../../assets/css/trix.css">
    <script type="text/javascript" src="../../../assets/js/trix.js"></script>

    <style>
      trix-toolbar [data-trix-button-group = "file-tools"] {
        display: none;
      }
    </style>

  </head>
  <body>
    @include('dashboard.layouts.header')


<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
    </main>
  </div>
</div>

    

    <script src="../../../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    <script>
      feather.replace();
    </script>
    <script src="../../../assets/js/dashboard.js"></script>
  </body>
</html>
