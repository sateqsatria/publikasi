<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Direktorat Jenderal Hortikultura</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
</head>
    <body>

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <div class="page-logo">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                    <h3>Ditjen Horti</h3>
                </div>
                <div class="nav-menu">
                    <a href="{{url('/')}}"><h4>Home</h4></a>
                    <a href="{{url('publikasi')}}"><h4>Publikasi</h4></a>
                    <a href="https://www.instagram.com/ditjenhorti/"><img src="{{asset('assets/img/instagram.svg')}}" alt="instagram"></a>
                    <a href="https://www.facebook.com/DitjenHortikultura"><img src="{{asset('assets/img/facebook.svg')}}" alt="facebook"></a>
                    <a href="https://twitter.com/ditjenhorti"><img src="{{asset('assets/img/twitter.svg')}}" alt="twitter"></a>
                    <a href="https://www.youtube.com/channel/UClEt4Ef4NbCB8YferF7Bo7Q"><img src="{{asset('assets/img/youtube.svg')}}" alt="youtube"></a>
                </div>
            </div>
        </nav>
    
        <div class="contaniber mt-5">
            @yield('content')
        </div>

        <section class="footer">
            <div class="footer-media">
                <a href="https://www.instagram.com/ditjenhorti/"><img src="{{asset('assets/img/instagram.svg')}}" alt="instagram"></a>
                    <a href="https://www.facebook.com/DitjenHortikultura"><img src="{{asset('assets/img/facebook.svg')}}" alt="facebook"></a>
                    <a href="https://twitter.com/ditjenhorti"><img src="{{asset('assets/img/twitter.svg')}}" alt="twitter"></a>
                    <a href="https://www.youtube.com/channel/UClEt4Ef4NbCB8YferF7Bo7Q"><img src="{{asset('assets/img/youtube.svg')}}" alt="youtube"></a>
            </div>
            <p class="font-weight-bold">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Direktorat Jenderal Hortikultura All Rights Reserved</p>
        </section>

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/bundle.min.js')}}"></script>
            
    </body>
</html>
