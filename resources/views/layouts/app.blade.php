<!DOCTYPE html>
<html lang="es" class="no-js one-page-layout sound-effects" data-audio-tick="{{ asset('assets/audio/tick.mp3') }}" data-click-ripple-animation="yes">

@include('layouts.src.head')

<body>
    <!-- .home-wrap -->
    @yield('content')
    <!-- .home-wrap -->


    <!-- .one-page-content-->
    <div class="one-page-content">

        <a href="/" class="close-page">
            <span class="close-text"></span>
        </a>

        <div class="content-wrap"></div>

    </div>
    <!-- .one-page-content-->


    <!-- page transition overlays -->
    <div class="overlay overlay-1"></div>
    <div class="overlay overlay-2"></div>
    <!-- page transition overlays -->


    <!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
    <div class="p-overlay"></div>
    <div class="p-overlay"></div>

    <!-- SCRIPTS -->
    @include('layouts.src.scripts')


</body>
</html>
