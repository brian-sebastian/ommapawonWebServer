<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css">
  </head>
  <body>
    <div class="row no-gutters">
        @include('partials.navbar')
        <div class="col-md-10" style="background-color: salmon;">
            <h4 class="pt-3 pb-2 mb-3 ms-auto">
              <a href="" class="badge bg-dark" style="margin-left: 950px">
                <i class="bi bi-box-arrow-in-right"></i>
              </a>
            </h4>
            <hr class="bg-secondary col-lg-11">
            <div class="pe-5 pt-6">
                @yield('container')
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/signout.js"></script>
  </body>
</html>


