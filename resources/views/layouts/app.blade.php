<!DOCTYPE HTML>
<html lang="en">

@include('layouts.head')

<body id="top">
    
    @include('layouts.header')
    <main class="mt-lg-0">
        @yield('content')
    </main>


    @include('layouts.footer')

    @include('layouts.foot')



</body>

</html>
