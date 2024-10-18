<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
 

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}


        {{-- add --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


        <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/back/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('asset/back/css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/notika-custom-icon.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/wave/waves.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/back/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('asset/back/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('asset/back/newstyle.css')}}">
    


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>



        <!-- jquery
		============================================ -->
    <script src="{{asset('asset/back/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('asset/back/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('asset/back/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('asset/back/js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('asset/back/js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('asset/back/js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('asset/back/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('asset/back/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('asset/back/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/back/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('asset/back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{asset('asset/back/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('asset/back/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('asset/back/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('asset/back/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('asset/back/js/sparkline/sparkline-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('asset/back/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('asset/back/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('asset/back/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('asset/back/js/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('asset/back/js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('asset/back/js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('asset/back/js/knob/knob-active.js')}}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{asset('asset/back/js/wave/waves.min.js')}}"></script>
    <script src="{{asset('asset/back/js/wave/wave-active.js')}}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('asset/back/js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('asset/back/js/plugins.js')}}"></script>
	<!--  Chat JS
		============================================ -->
    {{-- <script src="{{asset('asset/back/js/chat/moment.min.js')}}"></script>
    <script src="{{asset('asset/back/js/chat/jquery.chat.js')}}"></script> --}}
    <!-- main JS
		============================================ -->
    <script src="{{asset('asset/back/js/main.js')}}"></script>
	<!-- tawk chat JS
		============================================ -->
    {{-- <script src="{{asset('asset/back/js/tawk-chat.js')}}"></script> --}}


    <script src="{{asset('asset/back/newjs.js')}}"></script>
    </body>
</html>
