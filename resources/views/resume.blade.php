@extends('layouts.app')

@section('title') Curriculum @endsection

@section('content')

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
                                    <h1 class="entry-title">Curriculum</h1>
                                </header>
                                <!-- .entry-header -->

                                <!-- .entry-content -->
                                <div class="entry-content">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-6 col-lg-7">
                                            <div class="event">
                                                <h2>HISTORIAL LABORAL</h2>
                                                <p>
                                                    <i class="pw-icon-badge"></i>
                                                    {{-- <img src="{{ asset('assets/images/site/icon-03.png') }}" alt="image"/> --}}
                                                </p>
                                            </div>

                                            <div class="event">
                                                <h3>Marzo 2019 - Laborando</h3>
                                                <h4>Auxiliar de sistemas</h4>
                                                <h5>Cootranshuila LTDA</h5>
                                                <p>Administrar servidores de dominio y web, desarrollar un mantener página web, desarrollar herramientas de software para agilizar procesos internos de la empresa, realizar mantenimientos a los equipos de cómputo, brindar soporte técnico, administrar cámaras de seguridad y coordinador de GPS de los vehículos.</p>
                                            </div>

                                            <div class="event">
                                                <h3>Agosto 2020 - Laborando</h3>
                                                <h4>Administrador Tecnológico - Remoto</h4>
                                                <h5>Amazonia C&L</h5>
                                                <p>Brindar asesorías en el área de tecnología e informática, dar soporte técnico, realizar mantenimientos preventivos y/o correctivos a los equipos de cómputo, administrar servidor local y web, desarrollar aplicativo de los procesos internos de la empresa y desarrollar y mantener página web.</p>
                                            </div>

                                            <div class="event">
                                                <h3>2019 - 2020</h3>
                                                <h4>Desarrollador Web FullStack</h4>
                                                <h5>Terminal de transportes de Florencia.</h5>
                                                <p>Diseñar, desarrollar y administrar página web https://terminalflorencia.com/</p>
                                            </div>

                                            <div class="event">
                                                <h2>EDUCACIÓn</h2>
                                                <p>
                                                    <i class="pw-icon-education"></i>
                                                    {{-- <img src="{{ asset('assets/images/site/icon-03.png') }}" alt="image"/> --}}
                                                </p>
                                            </div>

                                            <div class="event">
                                                <h3>2015</h3>
                                                <h4>Bachiller académico</h4>
                                                <h5>I.E. Misael Pastrana Borreo</h5>
                                                <p>Bachiller académico promoción 2015, La Plata - Huila.</p>
                                            </div>

                                            <div class="event">
                                                <h3>2018</h3>
                                                <h4>Analisis y desarrollo de sistemas de información</h4>
                                                <h5>SENA</h5>
                                                <p>Analista y desarrollador de sistemas de informacion graduado en 2018.</p>
                                            </div>

                                            <div class="event">
                                                <h3>En Curso</h3>
                                                <h4>Tecnologia en desarrollo de software</h4>
                                                <h5>Universidad Surcolombiana</h5>
                                                <p>Estudiante de cuarto semestre de tecnologia en desarrollo de software de la universidad Surcolombiana.</p>
                                            </div>

                                            <p>
                                                <a href="{{ asset('assets/docs/Hoja de vida LEINER FABIAN ORTEGA V2.pdf') }}" download class="button primary"><i class="pw-icon-doc-alt"></i>Descargar CV</a>
                                            </p>
                                        </div>
                                        <!-- col -->

                                        <!-- col -->
                                        <div class="col-sm-6 col-lg-5">
                                            <!-- section-title -->
                                            <div class="section-title center">
                                                <h2>
                                                    <i>Skills</i>
                                                </h2>
                                            </div>
                                            <!-- section-title -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>HTML, CSS y JavaScript Vainilla</h4>
                                                <div class="bar" data-percent="80">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>PHP</h4>
                                                <div class="bar" data-percent="90">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>LINUX</h4>
                                                <div class="bar" data-percent="75">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>AWS y GCP</h4>
                                                <div class="bar" data-percent="50">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>Laravel</h4>
                                                <div class="bar" data-percent="70">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>React JS</h4>
                                                <div class="bar" data-percent="40">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>VUE JS</h4>
                                                <div class="bar" data-percent="40">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>JQuery</h4>
                                                <div class="bar" data-percent="85">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->

                                            <!-- .skill-unit -->
                                            <div class="skill-unit">
                                                <h4>SQL</h4>
                                                <div class="bar" data-percent="80">
                                                    <div class="progress"></div>
                                                </div>
                                            </div>
                                            <!-- .skill-unit -->
                                        </div>
                                        <!-- col -->
                                    </div>
                                    <!-- row -->
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
