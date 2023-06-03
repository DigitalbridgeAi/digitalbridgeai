<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('title') |
        {{ config('app.name', 'DigitalBridge') }}
    </title>
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/odometer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/toastr.min.css')}}">

</head>

<body>

    <!-- Overlayer -->
    <span class="toTopBtn">
        <i class="fas fa-angle-up"></i>
    </span>
    <div class="overlayer"></div>
    <div class="loader"></div>
    <!-- Overlayer -->

    <!-- User Dashboard -->
    <main class="dashboard-section">
        @include('user.includes.sidebar')
        <article class="main--content">
            @include('user.includes.topbar')
            <div class="dashborad--content">
                @yield('content')
                @include('user.includes.footer')
            </div>
        </article>
    </main>
    <!-- User Dashboard -->



    <script>
        let mainurl = '{{ url('/') }}';
    </script>
    <script src="{{ asset('assets/front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/front/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/notify.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script src="{{asset('assets/front/js/toastr.min.js')}}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>


    {{-- @include('layouts.notify') --}}
    @stack('js')

    <script>
		'use strict';
	
		@if (Session::has('message'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
			toastr.success("{{ session('message') }}");
		@endif
	  
		@if (Session::has('error'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
			toastr.error("{{ session('error') }}");
		@endif
	  
		@if (Session::has('info'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
			toastr.info("{{ session('info') }}");
		@endif
	  
		@if (Session::has('warning'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
			toastr.warning("{{ session('warning') }}");
		@endif
	</script>


</body>

</html>
