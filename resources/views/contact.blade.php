@extends('layouts.app')

@section('title') Contacto @endsection

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
                                    <h1 class="entry-title">Contact</h1>
                                </header>
                                <!-- .entry-header -->

                                <!-- .entry-content -->
                                <div class="entry-content">
                                    <!-- SOCIAL -->
                                    <p class="center">
                                        <a class="social-link github h2" href="https://github.com/leicortega/" target="_blank"></a>
                                    </p>
                                    <!-- SOCIAL -->

                                    <!-- .boxed -->
                                    <div class="boxed">
                                        <!-- row -->
                                        <div class="row">
                                            <!-- column 3/12 -->
                                            <div class="col-xs-6 col-sm-3">
                                                <!-- fun-fact -->
                                                <div class="fun-fact">
                                                    <!--<i class="pe-7s-map-marker"></i>-->
                                                    <img src="{{ asset('assets/images/site/icon-location.svg') }}" alt="image" />
                                                    <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                                    <h4>Neiva - Huila, Colombia</h4>
                                                </div>
                                                <!-- fun-fact -->
                                            </div>
                                            <!-- column 3/12 -->

                                            <!-- column 3/12 -->
                                            <div class="col-xs-6 col-sm-3">
                                                <!-- fun-fact -->
                                                <div class="fun-fact">
                                                    <!--<i class="pe-7s-call"></i>-->
                                                    <img src="{{ asset('assets/images/site/icon-phone.svg') }}" alt="image" />
                                                    <h4>Tel : +57 3123482021</h4>
                                                </div>
                                                <!-- fun-fact -->
                                            </div>
                                            <!-- column 3/12 -->

                                            <!-- column 3/12 -->
                                            <div class="col-xs-6 col-sm-3">
                                                <!-- fun-fact -->
                                                <div class="fun-fact">
                                                    <!--<i class="pe-7s-mail"></i>-->
                                                    <img src="{{ asset('assets/images/site/icon-mail.svg') }}" alt="image" />
                                                    <h4>leicortega@ gmail.com</h4>
                                                </div>
                                                <!-- fun-fact -->
                                            </div>
                                            <!-- column 3/12 -->

                                            <!-- column 3/12 -->
                                            <div class="col-xs-6 col-sm-3">
                                                <!-- fun-fact -->
                                                <div class="fun-fact">
                                                    <!--<i class="pe-7s-check"></i>-->
                                                    <img src="{{ asset('assets/images/site/icon-check.svg') }}" alt="image" />
                                                    <h4>FreeLancer</h4>
                                                </div>
                                                <!-- fun-fact -->
                                            </div>
                                            <!-- column 3/12 -->
                                        </div>
                                        <!-- row -->
                                    </div>
                                    <!-- .boxed -->

                                    <!-- section-title -->
                                    <div class="section-title center">
                                        <h2>
                                            <i>Contáctame</i>
                                        </h2>
                                    </div>
                                    <!-- section-title -->

                                    <h2 class="center fw-300">
                                        Recuerda que soy Leiner Ortega <strong>Desarrollador Web</strong> y
                                        <br />
                                        estoy para ayudarte.
                                    </h2>

                                    <!-- .contact-form -->
                                    <div class="contact-form">
                                        <form id="contact-form" class="validate-form" method="post" action="#">
                                            <!-- enter mail subject here -->
                                            <input type="hidden" name="subject" id="subject" value="Mensaje enviado desde https://leinerortega.tk/" />

                                            <p>
                                                <input placeholder="Nombre" type="text" name="name" id="name" class="required" />
                                            </p>

                                            <p>
                                                <input placeholder="Correo" type="text" name="email" id="email" class="required email" />
                                            </p>

                                            <p class="antispam">
                                                Leave this empty if you are a human : <br />
                                                <input name="url" />
                                            </p>

                                            <p>
                                                <textarea placeholder="Escriba el mensaje" name="message" id="message" class="required"></textarea>
                                            </p>

                                            <p>
                                                <button class="submit button primary">Enviar</button>
                                            </p>
                                        </form>
                                    </div>
                                    <!-- .contact-form -->
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
