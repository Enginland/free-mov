<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/index.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/css/pagination.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	{{-- add new --}}
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>

	<script>
// 		function switchLanguage(lang) {
//     const flagElement = document.getElementById('currentFlag');
//     const languageElement = document.getElementById('currentLanguage');
//     const englishContent = document.getElementById('englishContent');
//     const khmerContent = document.getElementById('khmerContent');
    
//     if (lang === 'en') {
//         flagElement.className = 'fa fa-flag-usa fs-4 align-middle me-1 lh-1';
//         languageElement.textContent = 'English';
//         englishContent.style.display = 'block';
//         khmerContent.style.display = 'none';
//     } else if (lang === 'km') {
//         flagElement.className = 'fa fa-flag-khmer fs-4 align-middle me-1 lh-1';
//         languageElement.textContent = 'Khmer';
//         englishContent.style.display = 'none';
//         khmerContent.style.display = 'block';
//     }
// }
// // Set default language on page load
// document.addEventListener('DOMContentLoaded', () => {
//             switchLanguage('km'); // Set Khmer as default
//         });
function switchLanguage(lang) {
            const flagElement = document.getElementById('currentFlag');
            const languageElement = document.getElementById('currentLanguage');
            const englishContent = document.querySelectorAll('.english-content');
            const khmerContent = document.querySelectorAll('.khmer-content');
            
            if (lang === 'en') {
                flagElement.className = 'fa fa-flag-usa fs-4 align-middle me-1 lh-1';
                languageElement.textContent = 'English';
                englishContent.forEach(el => el.style.display = 'block');
                khmerContent.forEach(el => el.style.display = 'none');
            } else if (lang === 'km') {
                flagElement.className = 'fa fa-flag-khmer fs-4 align-middle me-1 lh-1';
                languageElement.textContent = 'Khmer';
                englishContent.forEach(el => el.style.display = 'none');
                khmerContent.forEach(el => el.style.display = 'block');
            }
        }

        // Set default language on page load
        document.addEventListener('DOMContentLoaded', () => {
            switchLanguage('en'); // Set Khmer as default
        });
	</script>

</head>

<body>
<div>
    @include('frontend.navigationfront')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <!-- Page Content -->
    {{-- <main>
        @yield('main-content')
    </main> --}}


    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar_sticky = document.getElementById("navbar_sticky");
        var sticky = navbar_sticky.offsetTop;
        var navbar_height = document.querySelector('.navbar').offsetHeight;

        function myFunction() {
            if (window.pageYOffset >= sticky + navbar_height) {
                navbar_sticky.classList.add("sticky")
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                navbar_sticky.classList.remove("sticky");
                document.body.style.paddingTop = '0'
            }
        }
    </script>

</body>

</html>
