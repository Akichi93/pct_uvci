<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city Wall</title>
    <!-- fav icon link -->
    <link rel="shortcut icon" href="images/fav-icon/fav-logo.png" type="image/x-icon">
    <!-- font awesome-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="../../../css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Link slick slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <!-- letter animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/cssanimation.min.css') }}">
    <!-- lordicon icons animation -->
    <script src="{{ asset('assets/lordicon.js') }}"></script>
    <!-- AOS animation -->
    <link href="{{ asset('assets/aos/dist/aos.css') }}" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('assets/npm/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>

<body>
    <!-- =====header section===== -->
    @include('layouts.front.header')
   
     @yield('content')
    <!-- =====Footer section===== -->
    @include('layouts.front.footer')
    <!-- jQuery js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- letter animation -->
    <script src="{{ asset('assets/js/plugins/letteranimation.min.js') }}"></script>
    <!-- AOS animation -->
    <script src="{{ asset('assets/aosbeta.6/dist/aos.js') }}"></script>
    <!-- font awesome -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <!-- slick slider JS -->
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
