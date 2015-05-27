<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
    <title>Nosilence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="Oscar Larriega <larriega@gmail.com>">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" media="screen">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/blue.css') }}" title="blue" media="screen" />
</head>

<body>
    <div id="container">
        <div class="hidden-header"></div>
        <header class="clearfix">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <ul class="social-list">
                                <li>
                                    <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="https://instagram.com/nosilence_peru/" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="google itl-tooltip" data-placement="bottom" title="youtube" href="https://www.youtube.com/channel/UC_zeKv3iPIYkAU4Wzw79P2A" target="_blank"><i class="fa fa-youtube-square"></i></a>
                                </li>
                                <li>
                                    <a class="facebook itl-tooltip" data-placement="bottom" title="facebook" href="https://www.facebook.com/nosilenceperu" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img alt="Logo Nosilence" src="images/nosilence.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <?php $currentUrl = Route::current()->uri(); ?>
                            <li><a {{ $currentUrl === '/' ? 'class=active' : '' }} href="{{ url('/') }}">Inicio</a></li>
                            <li>
                                <a href="#">Nosotros</a>
                                <ul class="dropdown">
                                    <li><a href="#">Muy Pronto</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Eventos</a>
                                <ul class="dropdown">
                                    <li><a href="#">Muy Pronto</a></li>
                                    <!-- <li><a href="#">Quinciañeros</a></li>
                                    <li><a href="#">Fiestas Privadas</a></li>
                                    <li><a href="#">Fiesta de Prom</a></li> -->
                                </ul>
                            </li>
                            <li><a {{ $currentUrl === 'servicios' ? 'class=active' : '' }} href="{{ url('servicios') }}">Servicios</a></li>
                            <li><a {{ $currentUrl == 'testimonios' ? 'class=active' : '' }} href="{{ url('testimonios') }}">Testimonios</a></li>
                            <li><a {{ $currentUrl === 'contacto' ? 'class=active' : '' }} href="{{ url('contacto') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @section('content')
        @show
        <footer>
            <div class="container">
                <div class="row footer-widgets">
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-widget social-widget">
                            <h4>Síguenos<span class="head-line"></span></h4>
                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="https://www.facebook.com/nosilenceperu" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                </li>
                                <li style="margin: 0 10px;">
                                    <a class="instgram" href="https://instagram.com/nosilence_peru/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                </li>
                                <li>
                                    <a class="google" href="https://www.youtube.com/channel/UC_zeKv3iPIYkAU4Wzw79P2A" target="_blank"><i class="fa fa-youtube-square fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <address>
                                <p>Av. Dos de Mayo 516 of. 201 - Miraflores</p>
                                <p>Av. Manuel Olgín 335 of. 1205 - Surco</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <ul class="footer-widget">
                            <li><span><i class="fa fa-phone fa-lg"></i> Central:</span> 708 4101</li>
                            <li><span><i class="fa fa-mobile-phone fa-lg"></i> RPC:</span> 992346162</li>
                            <li><span><i class="fa fa-envelope-o"></i> Correo:</span> eventos@nosilenceperu.com</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <h4><img src="images/nosilence.png" class="img-responsive pull-right" alt="Footer Logo" /></h4>
                    </div>
                </div>
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; {{ (new DateTime())->format('Y') }} Nosilence Perú - Todos los derechos reservados</p>
                        </div><!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="{{ url('contacto') }}">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <!-- Margo JS  -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.migrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizrr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <!--<script type="text/javascript" src="js/jquery.fitvids.js"></script>-->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.isotope.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="{{ asset('js/count-to.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.textillate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.lettering.js') }}"></script>
    <!--<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>-->
    <script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script>
    <!--<script type="text/javascript" src="js/mediaelement-and-player.js"></script>-->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    @include('vendor.script_contact')

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>