<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MajuAppZ Blog | {{ $title }}</title>
    <link rel="icon" href="{{ url('img/favicon.png') }}img/favicon.png">
    <script src="https://kit.fontawesome.com/c00efe6860.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('css/blog-min.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('partials.navbar')

    <div class="container py-3">
        @yield('container')
    </div>

    <footer class="blog-footer">
      <p>
        Website Blog oleh <a href="https://majuappz.blogspot.com/">MajuAppZ</a>
      </p>
      <p>
        <a href="#">Kembali ke atas</a>
      </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
