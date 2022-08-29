<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link href="{{asset('front/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <link href="{{asset('front/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">
     <link href="{{asset('front/css/settings_prot.css')}}" rel="stylesheet" type="text/css">
<style>
.bg-login-image {

}
@media (min-width: 1200px)
.col-xl-10 {
    flex: 0 0 83.33333%;
    /* max-width: 83.33333%; */
}
@media (min-width: 992px)
.d-lg-block {
    display: block!important;
}

</style>
</head>

<body class="bg-gradient-primary">
    @include('sweetalert::alert')
    <div class="container">



            @yield('content')

    </div>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('front/js/sb-admin-2.min.js')}}"></script>

    </body>
    </html>

