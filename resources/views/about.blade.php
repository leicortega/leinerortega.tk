@extends('layouts.app') @section('title') Sobre Mi @endsection @section('content')
<!-- PAGE -->
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
                                    <h1 class="entry-title">Sobre Mi</h1>
                                </header>
                                <!-- .entry-header -->

                                <!-- .entry-content -->
                                <div class="entry-content">
                                    <div class="boxed is-dark">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="{{ asset('assets/images/site/about.png') }}" alt="about image" />
                                            </div>

                                            <div class="col-sm-9">
                                                <h2 class="fw-300">
                                                    Hola, soy Leiner Ortega, un <strong>Desarrollador de software </strong> orgullosamente Colombiano. Me apasiona la <strong>tecnología</strong> y en mi tiempo libre trabajo como
                                                    <strong>FreeLancer</strong>, conozca mis servicios y contáctame.
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- SERVICES -->

                                    <!-- section-title -->
                                    <div class="section-title center">
                                        <h2>
                                            <i>servicios</i>
                                        </h2>
                                    </div>
                                    <!-- section-title -->

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-6 col-lg-3">
                                            <!-- service -->
                                            <div class="service">
                                                <img src="{{ asset('assets/images/site/service-01.svg') }}" alt="image" />
                                                <h3>Asesorías</h3>
                                                <p>Brindo asesorías en el área de TI, te acompaño en tus procesos para que tomes las mejores decisiones.</p>
                                            </div>
                                            <!-- service -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-sm-6 col-lg-3">
                                            <!-- service -->
                                            <div class="service">
                                                <img src="{{ asset('assets/images/site/service-02.svg') }}" alt="image" />
                                                <h3>Pautas</h3>
                                                <p>Te acompaño en pautas acertadas en redes sociales, date a conocer y vende tus productos al mundo entero.</p>
                                            </div>
                                            <!-- service -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-sm-6 col-lg-3">
                                            <!-- service -->
                                            <div class="service">
                                                <img src="{{ asset('assets/images/site/service-03.svg') }}" alt="image" />
                                                <h3>Desarrollo Web</h3>
                                                <p>Desarrollo de software a medida, desarrollo y creación de páginas web y aplicaciones moviles.</p>
                                            </div>
                                            <!-- service -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-sm-6 col-lg-3">
                                            <!-- service -->
                                            <div class="service">
                                                <img src="{{ asset('assets/images/site/service-04.svg') }}" alt="image" />
                                                <h3>Clases</h3>
                                                <p>Clases de programación personalizadas, presenciales y/o virtuales. Ánimo, la primera es gratis.</p>
                                            </div>
                                            <!-- service -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <!-- row -->
                                    <!-- SERVICES -->

                                    <!-- PROCESS -->

                                    <!-- section-title -->
                                    <div class="section-title center">
                                        <h2>
                                            <i>proceso de trabajo</i>
                                        </h2>
                                    </div>
                                    <!-- section-title -->

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4 col-sm-2">
                                            <!-- process -->
                                            <div class="process">
                                                <img src="{{ asset('assets/images/site/process-01.svg') }}" alt="image" />
                                                <h4>ANALIZAR</h4>
                                            </div>
                                            <!-- process -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-4 col-sm-2">
                                            <!-- process -->
                                            <div class="process">
                                                <img src="{{ asset('assets/images/site/process-02.svg') }}" alt="image" />
                                                <h4>IDEA</h4>
                                            </div>
                                            <!-- process -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-4 col-sm-2">
                                            <!-- process -->
                                            <div class="process">
                                                <img src="{{ asset('assets/images/site/process-03.svg') }}" alt="image" />
                                                <h4>DISEÑAR</h4>
                                            </div>
                                            <!-- process -->
                                        </div>

                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-4 col-sm-2">
                                            <!-- process -->
                                            <div class="process">
                                                <img src="{{ asset('assets/images/site/process-04.svg') }}" alt="image" />
                                                <h4>DESARROLLAR</h4>
                                            </div>
                                            <!-- process -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-4 col-sm-2">
                                            <!-- process -->
                                            <div class="process">
                                                <img src="{{ asset('assets/images/site/process-05.svg') }}" alt="image" />
                                                <h4>PRUEBAS</h4>
                                            </div>
                                            <!-- process -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-4 col-sm-2">
                                            <!-- process -->
                                            <div class="process">
                                                <img src="{{ asset('assets/images/site/process-06.svg') }}" alt="image" />
                                                <h4>PRODUCCIÓN</h4>
                                            </div>
                                            <!-- process -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <!-- row -->
                                    <!-- PROCESS -->

                                    <!-- CLIENTS -->

                                    <!-- section-title -->
                                    <div class="section-title center">
                                        <h2>
                                            <i>herramientas de trabajo</i>
                                        </h2>
                                    </div>
                                    <!-- section-title -->

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/laravel.png') }}" alt="Laravel" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/aws.png') }}" alt="AWS" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/gcp.png') }}" alt="Google Cloud Platform" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/ubuntu.svg') }}" alt="Ubuntu" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/htmlcssjs.png') }}" alt="HTML, CSS y JavaScript" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/vue.png') }}" alt="Vue JS" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/apache.png') }}" alt="Apache" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- client -->
                                            <div class="client">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('assets/images/site/ionic.png') }}" alt="Ionic" />
                                                </a>
                                            </div>
                                            <!-- client -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <!-- row -->
                                    <!-- CLIENTS -->
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
