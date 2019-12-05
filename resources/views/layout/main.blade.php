<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('resources/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->
    <!-- <div style="height: 100vh">
        <div class="flex-center flex-column">

            <h1 class="text-hide animated fadeIn mb-4" style="background-image: url('https://mdbootstrap.com/img/logo/mdb-transparent-250px.png'); width: 250px; height: 90px;">
                MDBootstrap</h1>
            <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

            <p class="animated fadeIn text-muted">MDB Team</p>
        </div>
    </div> -->

    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
    <!-- Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('resources/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('resources/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('resources/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('resources/js/mdb.min.js') }}"></script>
</body>

</html>
