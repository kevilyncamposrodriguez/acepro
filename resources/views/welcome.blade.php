<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ACEPRO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/dodgerblue.css" rel="stylesheet">
    <meta content="educación, academia, cursos,Academia Costarricense de Estudios Profesionales" name="keywords">
    <meta content="Academia Costarricense de Estudios Profesionales" name="description">
    <meta property="og:image" content="https://aceprocr.com/acepro-logo.png" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="images/acepro-icono.png" type="image/x-icon">
    <link rel="icon" href="images/acepro-icono.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-four">
            <!-- Header top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="top-left">
                            <ul class="contact-list clearfix">
                                <li><i class="flaticon-hospital-1"></i>Grandilla Norte 400 metros este de la Iglesia Católica, sobre calle principal, Curridabat, San José</li>
                                <li><i class="flaticon-back-in-time"></i>Dom - Vie 8.00 - 17.00. </li>
                            </ul>
                        </div>
                        <div class="top-right">
                            <ul class="social-icon-one">
                                <li><a href="https://www.facebook.com/profile.php?id=100089618540424" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="https://wa.me/+50688161320" target="_blank"><span class="fab fa-whatsapp"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <!-- Main box -->
                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo"><a href="/"><img src="images/acepro-logo-b.png" alt="" title=""></a></div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer">
                            <nav class="nav main-menu">
                                <ul class="navigation" id="navbar">
                                    <li><a href="#">INICIO</a></li>
                                    <li><a href="#about">NOSOTROS</a></li>
                                    <li><a href="#courses">CURSOS</a></li>
                                    <li><a href="#seminars">SEMINARIOS</a></li>
                                    <li><a href="#contact">CONTACTO</a></li>


                                </ul>
                            </nav>
                            <!-- Main Menu End-->

                            <div>
                                <a href="{{route('login')}}" class="theme-btn btn-style-one"><span class="btn-title">PORTAL ACADÉMICO</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">

                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="images/acepro-logo-b.png" alt="" title=""></a></div>
                        </div>

                        <!--Keep This Empty / Menu will come through Javascript-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="index.html"><img src="images/acepro-logo-b.png" alt="" title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">

                        <!-- Cart btn -->
                        <a href="{{route('login')}}" class="btn-style-one rounded-sm"><span class="btn-title">PORTAL ACADÉMICO</span></a>

                        <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>

            <!-- Header Search -->
            <div class="search-popup">
                <span class="search-back-drop"></span>
                <button class="close-search"><span class="fa fa-times"></span></button>

                <div class="search-inner">
                    <form method="post" action="blog-showcase.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Header Search -->
        </header>
        <!--End Main Header -->

        <!-- Bnner Section Three -->
        <section class="banner-section-four">
            <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(images/banner/1.png);">
                    <div class="auto-container">
                        <div class="content-outer">
                            <div class="content-box">
                                <span class="title">Combinamos virtualidad con presencialidad</span>
                                <h3>Modelo multimodal <br>de aprendizaje.</h3>
                                <div class="text">Mediante nuestro modelo de aprendizaje virtual y presencial, aplicando teoría y práctica en nuestra clínica estudiantil.</div>
                                <div class="btn-box"><a href="#courses" class="theme-btn btn-style-one bg-dodgerblue"><span class="btn-title">NUESTROS CURSOS</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(images/banner/2.png);">
                    <div class="auto-container">
                        <div class="content-outer">
                            <div class="content-box">
                                <span class="title">100% de garantía de satisfacción</span>
                                <h3>Grandes beneficios <br>y Garantías.</h3>
                                <div class="text">Nuestra academia cuenta con acreditaciones nacionales e internacionales que garantizan la calidad de nuestros cursos técnicos profesionales.</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Bnner Section -->


        @livewire('course.show-course-component')


        <!-- Welcome Section -->
        <section id="about" class="welcome-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="sec-title text-center">
                            <span class="title">Somos caracterizados por </span>
                            <h2>NUESTROS VALORES</h2>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <!-- Feature Block Two -->
                            <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="inner-box">
                                    <span class="icon fas fa-award"></span>
                                    <h4>CALIDAD</h4>
                                    <div class="text">Nuestro sistema de selección docente es único y garantizamos una metodología de aprendizaje completa.</div>
                                </div>
                            </div>

                            <!-- Feature Block Two -->
                            <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="inner-box">
                                    <span class="icon far fa-handshake"></span>
                                    <h4>RESPETO</h4>
                                    <div class="text">Todos podemos aportar mucho con cada punto de vista, siempre guardando los valores éticos y morales que rigen nuestra sociedad.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <!-- Feature Block Two -->
                            <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="inner-box">
                                    <span class="icon fas fa-user-friends"></span>
                                    <h4>EMPATÍA</h4>
                                    <div class="text">Nuestra academia está comprometida con crear estudiantes líderes de éxitos comprometidos con el bienestar social de nuestro país.</div>
                                </div>
                            </div>

                            <!-- Feature Block Two -->
                            <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="inner-box">
                                    <span class="icon fas fa-hand-holding-heart"></span>
                                    <h4>AMOR</h4>
                                    <div class="text">Todo lo que nuestros colaboradores hacen, lo hacen con amor y disposición para que usted como estudiante tenga la mejor experiencia con nosotros.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <!-- Feature Block Two -->
                            <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="inner-box">
                                    <span class="icon fas fa-lock-open"></span>
                                    <h4>LIBERTAD</h4>
                                    <div class="text">Los pensamientos involucran avances y cambios, en nuestra academia fomentamos el análisis y libertad de pensamientos para la mejor construcción.</div>
                                </div>
                            </div>

                            <!-- Feature Block Two -->
                            <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="inner-box">
                                    <span class="icon fas fa-user-graduate"></span>
                                    <h4>EXCELENCIA</h4>
                                    <div class="text">Nuestros alumnos tienen una incersion laboral del 99% al graduarse, gracias a la excelencia académica y la calidad de nuestros cursos técnicos.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome Section -->


        @livewire('seminar.show-seminar-component')


        <!-- Call to Action Two -->
        <div class="call-to-action-two">
            <!-- Info Box -->
            <div class="info-box">
                <div class="inner">
                    <span class="icon flaticon-call-2"></span>
                    <h3>Nosotros estamos aqui para ayudar</h3>
                    <div class="text">Simplemente llame a nuestra línea directa : <a href="tel:64177897">+506 8816 1320</a></div>
                </div>
            </div>
        </div>
        <!-- End Call to Action Two -->


        @livewire('comentary.comentary-component')



        <!-- Main Footer -->
        <footer id="contact" class="main-footer style-five">
            <!--Widgets Section-->
            <div class="widgets-section" style="background-image: url(images/background/7.jpg);">
                <div class="auto-container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="logo">
                                            <a href="/"><img src="images/acepro-logo-b.png" width="200px" alt="" /></a>
                                        </div>
                                        <div class="text">
                                            <p>Our Clinic has grown to provide a world class facility for the clinic advanced restorative dentistry. We are among the most qualified implant providers in the aus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                            <!--Footer Column-->
                            <div class="footer-column ">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contacto</h2>
                                    <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <a href="https://goo.gl/maps/a5oo5rbEVSUjybTKA" target="_blank">
                                                    <strong>Grandilla Norte 400 metros este de la Iglesia Católica, sobre calle principal<Br>Curridabat, San José</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <div class="text">Dom a Vie : 08:00 - 17:00</div>
                                                <a href="tel:88161320"><strong>+506 8816-1320</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text">¿Tienes una pregunta?<br>
                                                    <a href="mailto:info@aceprocr.com"><strong>info@aceprocr.com</strong></a>
                                                </div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text">Dom - Vie 8.00 - 17.00<br>
                                                    <strong></strong>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <!-- Scroll To Top -->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!-- 
                        <div class="footer-nav">
                            <ul class="clearfix">
                                <li><a href="index.html">Privacy Policy</a></li>
                                <li><a href="about-us.html">Contact</a></li>
                                <li><a href="services.html">Supplier</a></li>
                            </ul>
                        </div>
    -->
                        <div class="copyright-text">
                            <p>Copyright © {{ now()->year }} <a href="">ACEPRO</a> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
</body>

</html>