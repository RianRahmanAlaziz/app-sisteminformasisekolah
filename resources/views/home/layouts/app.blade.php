<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @if (empty($title))
            Selamat Datang di TK Nurul Ilmi
        @else
            {{ $title }} | TK Nurul Ilmi
        @endif
    </title>
    <link rel="shorcut icon" href="/assets/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="/assets/css/simple-line-icons.css">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- Main CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    @include('home.layouts.navbar')
    @yield('container')
    <!--============================= FOOTER =============================-->
    @include('home.layouts.footer')
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/tether.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/counterup.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/validate.js"></script>
    <script src="/assets/js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="/assets/js/subscribe.js"></script>
    <!-- Script JS -->
    <script src="/assets/js/script.js"></script>
</body>

</html>
