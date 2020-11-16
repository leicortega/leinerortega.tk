@extends('layouts.app')

@section('title') Portafolio @endsection

@section('content')

<div id="page" class="hfeed site">
    <!-- .site-main -->
    <main id="main" class="site-main cd-main">

        <!-- site-middle -->
        <div class="site-middle">
            <div class="layout-medium">
                <div id="primary" class="content-area">
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main">
                        <!-- .page-single -->
                        <div class="page-single page-layout">
                            <!-- .hentry -->
                            <article class="page hentry">
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    <h1 class="entry-title">Portafolio</h1>
                                </header>
                                <!-- .entry-header -->

                                <!-- .entry-content -->
                                <div class="entry-content">
                                    <!--FILTERS-->
                                    {{-- <ul id="filters" class="filters">
                                        <li class="current">
                                            <a href="#" data-filter="*">all</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".media">Media</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".illustration">Illustration</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".video">Video</a>
                                        </li>
                                    </ul> --}}
                                    <!--FILTERS-->

                                    <!-- PORTFOLIO -->
                                    <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="360">
                                        <!-- portfolio-item - lightbox gallery -->
                                        <div class="media-cell media format-gallery hentry">
                                            <div class="media-box">
                                                <img src="{{ asset('assets/images/portfolio/cootranshuila.png') }}" alt="Cootranshuila LTDA" />
                                                <div class="mask"></div>
                                                <!-- lightbox - gallery -->
                                                <a href="{{ asset('assets/images/portfolio/cootranshuila.png') }}" class="lightbox" data-title="Pagina Web Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/cootranshuila_01.png') }}" class="lightbox" data-title="Pagina Web Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/cootranshuila_02.png') }}" class="lightbox" data-title="Pagina Web Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/cootranshuila_03.png') }}" class="lightbox" data-title="Pagina Web Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/cootranshuila_04.png') }}" class="lightbox" data-title="Pagina Web Cootranshuila LTDA"></a>
                                                <!-- lightbox - gallery -->
                                            </div>
                                            <div class="media-cell-desc">
                                                <h3>Pagina Web Cootranshuila LTDA</h3>
                                                <p class="category"><a href="https://cootranshuila.com/" target="_blank">https://cootranshuila.com/</a></p>
                                            </div>
                                        </div>
                                        <!-- portfolio-item - lightbox gallery -->

                                        <!-- portfolio-item - lightbox gallery -->
                                        <div class="media-cell media format-gallery hentry">
                                            <div class="media-box">
                                                <img src="{{ asset('assets/images/portfolio/amazonia.png') }}" alt="Amazonia C&L" />
                                                <div class="mask"></div>
                                                <!-- lightbox - gallery -->
                                                <a href="{{ asset('assets/images/portfolio/amazonia.png') }}" class="lightbox" data-title="Pagina Web Amazonia C&Ls"></a>
                                                <a href="{{ asset('assets/images/portfolio/amazonia_01.png') }}" class="lightbox" data-title="Pagina Web Amazonia C&Ls"></a>
                                                <a href="{{ asset('assets/images/portfolio/amazonia_02.png') }}" class="lightbox" data-title="Pagina Web Amazonia C&Ls"></a>
                                                <a href="{{ asset('assets/images/portfolio/amazonia_03.png') }}" class="lightbox" data-title="Pagina Web Amazonia C&Ls"></a>
                                                <a href="{{ asset('assets/images/portfolio/amazonia_04.png') }}" class="lightbox" data-title="Pagina Web Amazonia C&Ls"></a>
                                                <!-- lightbox - gallery -->
                                            </div>
                                            <div class="media-cell-desc">
                                                <h3>Pagina Web Amazonia C&L</h3>
                                                <p class="category"><a href="https://amazoniacl.com" target="_blank">https://amazoniacl.com</a></p>
                                            </div>
                                        </div>
                                        <!-- portfolio-item - lightbox gallery -->

                                        <!-- portfolio-item - lightbox gallery -->
                                        <div class="media-cell media format-gallery hentry">
                                            <div class="media-box">
                                                <img src="{{ asset('assets/images/portfolio/terminal_florencia.png') }}" alt="Terminal Florencia" />
                                                <div class="mask"></div>
                                                <!-- lightbox - gallery -->
                                                <a href="{{ asset('assets/images/portfolio/terminal_florencia.png') }}" class="lightbox" data-title="Pagina Web Terminal de Florencia"></a>
                                                <a href="{{ asset('assets/images/portfolio/terminal_florencia_01.png') }}" class="lightbox" data-title="Pagina Web Terminal de Florencia"></a>
                                                <a href="{{ asset('assets/images/portfolio/terminal_florencia_02.png') }}" class="lightbox" data-title="Pagina Web Terminal de Florencia"></a>
                                                <a href="{{ asset('assets/images/portfolio/terminal_florencia_03.png') }}" class="lightbox" data-title="Pagina Web Terminal de Florencia"></a>
                                                <a href="{{ asset('assets/images/portfolio/terminal_florencia_04.png') }}" class="lightbox" data-title="Pagina Web Terminal de Florencia"></a>
                                                <!-- lightbox - gallery -->
                                            </div>
                                            <div class="media-cell-desc">
                                                <h3>Pagina Web Terminal Florencia</h3>
                                                <p class="category"><a href="https://terminalflorencia.com" target="_blank">https://terminalflorencia.com</a></p>
                                            </div>
                                        </div>
                                        <!-- portfolio-item - lightbox gallery -->

                                        <!-- portfolio-item - lightbox gallery -->
                                        <div class="media-cell media format-gallery hentry">
                                            <div class="media-box">
                                                <img src="{{ asset('assets/images/portfolio/ob_admin.png') }}" alt="Admin ObConsultores" />
                                                <div class="mask"></div>
                                                <!-- lightbox - gallery -->
                                                <a href="{{ asset('assets/images/portfolio/ob_admin.png') }}" class="lightbox" data-title="Dashboard Juridico ObConsultores"></a>
                                                <a href="{{ asset('assets/images/portfolio/ob_admin_01.png') }}" class="lightbox" data-title="Dashboard Juridico ObConsultores"></a>
                                                <a href="{{ asset('assets/images/portfolio/ob_admin_02.png') }}" class="lightbox" data-title="Dashboard Juridico ObConsultores"></a>
                                                <a href="{{ asset('assets/images/portfolio/ob_admin_03.png') }}" class="lightbox" data-title="Dashboard Juridico ObConsultores"></a>
                                                <!-- lightbox - gallery -->
                                            </div>
                                            <div class="media-cell-desc">
                                                <h3>Dashboard Juridico</h3>
                                                <p class="category"><a href="https://admin.obconsultores.com" target="_blank">https://admin.obconsultores.com</a></p>
                                            </div>
                                        </div>
                                        <!-- portfolio-item - lightbox gallery -->

                                        <!-- portfolio-item - lightbox gallery -->
                                        <div class="media-cell media format-gallery hentry">
                                            <div class="media-box">
                                                <img src="{{ asset('assets/images/portfolio/dashboard_cootranshuila.png') }}" alt="Dashboard Cootranshuila" />
                                                <div class="mask"></div>
                                                <!-- lightbox - gallery -->
                                                <a href="{{ asset('assets/images/portfolio/dashboard_cootranshuila.png') }}" class="lightbox" data-title="Dashboard Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_cootranshuila_01.png') }}" class="lightbox" data-title="Dashboard Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_cootranshuila_02.png') }}" class="lightbox" data-title="Dashboard Cootranshuila LTDA"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_cootranshuila_03.png') }}" class="lightbox" data-title="Dashboard Cootranshuila LTDA"></a>
                                                <!-- lightbox - gallery -->
                                            </div>
                                            <div class="media-cell-desc">
                                                <h3>Dashboard Cootranshuila LTDA</h3>
                                                <p class="category"><a href="http://admin.cootranshuila.com" target="_blank">https://admin.cootranshuila.com</a></p>
                                            </div>
                                        </div>
                                        <!-- portfolio-item - lightbox gallery -->

                                        <!-- portfolio-item - lightbox gallery -->
                                        <div class="media-cell media format-gallery hentry">
                                            <div class="media-box">
                                                <img src="{{ asset('assets/images/portfolio/dashboard_amazonia.png') }}" alt="Dashboard Amazonia" />
                                                <div class="mask"></div>
                                                <!-- lightbox - gallery -->
                                                <a href="{{ asset('assets/images/portfolio/dashboard_amazonia.png') }}" class="lightbox" data-title="Dashboard Amazonia C&L"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_amazonia_01.png') }}" class="lightbox" data-title="Dashboard Amazonia C&L"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_amazonia_02.png') }}" class="lightbox" data-title="Dashboard Amazonia C&L"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_amazonia_03.png') }}" class="lightbox" data-title="Dashboard Amazonia C&L"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_amazonia_04.png') }}" class="lightbox" data-title="Dashboard Amazonia C&L"></a>
                                                <a href="{{ asset('assets/images/portfolio/dashboard_amazonia_05.png') }}" class="lightbox" data-title="Dashboard Amazonia C&L"></a>
                                                <!-- lightbox - gallery -->
                                            </div>
                                            <div class="media-cell-desc">
                                                <h3>Dashboard Amazonia C&L</h3>
                                                <p class="category"><a href="https://admin.amazoniacl.com" target="_blank">https://admin.amazoniacl.com</a></p>
                                            </div>
                                        </div>
                                        <!-- portfolio-item - lightbox gallery -->
                                    </div>
                                    <!-- PORTFOLIO -->
                                </div>
                                <!-- .entry-content -->
                            </article>
                            <!-- .hentry -->
                        </div>
                        <!-- .page-single -->
                    </div>
                    <!-- site-content -->
                </div>
                <!-- primary -->
            </div>
            <!-- layout -->
        </div>
        <!-- site-middle -->

    </main>
    <!-- .site-main -->

    <!-- ALERT : used for contact form mail delivery alert -->
    <div class="site-alert animated"></div>
</div>
<!-- PAGE -->

<a href="#" id="back-to-top" class="show">↑ <span>Volver arriba</span></a>


@endsection
