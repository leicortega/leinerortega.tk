@extends('layouts.app')

@section('title') Home @endsection

@section('content')
<div class="home-wrap">


    <!-- HOME BG IMAGE -->
    <div class="home-bg" style="background-image: url({{ asset('assets/images/home/cover_01.jpg') }})"></div>
    <!-- HOME BG IMAGE -->


    <!-- HOME BG LOGO -->
    <div class="home-bg-logo">
        <img src="{{ asset('assets/images/home/icon-bg.svg') }}" alt="icon" />
    </div>
    <!-- HOME BG LOGO -->


    <!-- .home-menu -->
    <nav class="home-menu">
        <a href="/about" data-slug="about">
            <span class="item-name">Sobre Mi</span>
        </a>
        <a href="/resume" data-slug="resume">
            <span class="item-name">Curriculum</span>
        </a>
        <a href="/portfolio" data-slug="portfolio" id="portfolio-link">
            <span class="item-name">Portafolio</span>
        </a>
        <a href="#" data-slug="blog">
            <span class="item-name">Blog</span>
        </a>
        <a href="/contact" data-slug="contact">
            <span class="item-name">Contacto</span>
        </a>
    </nav>
    <!-- .home-menu -->


    <!-- .home-heading -->
    <div class="home-heading">

        <!-- .home-logo -->
        <div class="home-logo">

            <p class="home-job-title">Web Developer</p>

            <p class="home-marquee">
                Desarrollador web FullStack, Front-end, Back-end, DevsOps and SQL Databases.
                Desarrollador web FullStack, Front-end, Back-end, DevsOps and SQL Databases.
                Desarrollador web FullStack, Front-end, Back-end, DevsOps and SQL Databases.
            </p>

            <i class="home-logo-left "><span>Web</span></i>
            <i class="home-logo-center">
                <span class="home-icon">
                    <img src="{{ asset('assets/images/home/icon.svg') }}" alt="icon" />
                </span>
                <span class="home-text-container">
                    <span class="home-text-container-placeholder">Leiner Ortega</span>
                </span>
                <span class="home-text">Leiner Ortega</span>
            </i>
            <i class="home-logo-right"><span>Developer</span></i>

        </div>
        <!-- .home-logo -->

    </div>
    <!-- .home-heading -->


    <!-- .home-social -->
    <p class="home-social">
        <a class="social-link github" href="https://github.com/leicortega/" target="_blank"></a>
    </p>
    <!-- .home-social -->


    <!-- .home-footer -->
    <p class="home-footer">&copy; <script>document.write(new Date().getFullYear())</script> Leiner Ortega</p>
    <!-- .home-footer -->


    <!-- FULL SCREEN TOGGLE -->
    <div class="full-screen-wrap">
        <div class="top-left"></div>
        <div class="top-left-horiz"></div>
        <div class="top-right"></div>
        <div class="top-right-horiz"></div>
        <div class="bottom-left"></div>
        <div class="bottom-left-horiz"></div>
        <div class="bottom-right"></div>
        <div class="bottom-right-horiz"></div>
    </div>
    <!-- FULL SCREEN TOGGLE -->



    <!-- REMOVE THIS MARKUP TO DISABLE BG AUDIO -->

    <div class="bg-music-confirm">
        <p>Autoplay Music?</p>
        <p><a class="bg-music-yes">Yeah!</a> <a class="bg-music-no">Nope</a> </p>
    </div>

    <!-- HOME BG MUSIC -->
    <div id="play-music" class="play-music">
        <div id="music-animation" class="music-animation">
            <span class="music-bar bar1"></span>
            <span class="music-bar bar2"></span>
            <span class="music-bar bar3"></span>
            <span class="music-bar bar4"></span>
            <span class="music-bar bar5"></span>
        </div>
        <div class="music-toggle" id="music-toggle"><a id="toggle" data-on-text="Music on"
                data-off-text="Music off">Music off</a></div>
    </div>

    <audio id="bg-music" loop src="{{ asset('assets/audio/music2.mp3') }}"></audio>
    <!-- HOME BG MUSIC -->

    <!-- REMOVE THIS MARKUP TO DISABLE BG AUDIO -->

</div>
@endsection
