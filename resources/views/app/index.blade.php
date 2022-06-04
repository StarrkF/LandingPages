<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> 

    @include('app.plugins.menu')

    @yield('app.content')

    @include('app.plugins.footer')

    <!-- Js Plugins -->
    <script src="{{ asset('app/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('app/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('app/js/main.js') }}"></script>
</body>

</html>
