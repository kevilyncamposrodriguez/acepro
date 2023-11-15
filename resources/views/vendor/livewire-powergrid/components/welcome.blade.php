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
                            <li><i class="flaticon-hospital-1"></i>300 mtrs este Municipalidad de Paraíso, Paraíso, Cartago</li>
                            <li><i class="flaticon-back-in-time"></i>Dom - Vie 8.00 - 18.00. </li>
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
                                <li><a href="contact.html">INICIO</a></li>
                                <li><a href="contact.html">NOSOTROS</a></li>
                                <li><a href="contact.html">CURSOS</a></li>
                                <li><a href="contact.html">CONTACTO</a></li>


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
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                    </div>

                    <!-- Cart btn -->
                    <button class="cart-btn"><i class="icon flaticon-shopping-cart"></i><span class="count">3</span></button>

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
                            <span class="title">Family Care Specialist</span>
                            <h3>Providing Care For <br>Future Family.</h3>
                            <div class="text">I realized that becoming a doctor, I can only help <br>a small community.</div>
                            <div class="btn-box"><a href="#" class="theme-btn btn-style-one bg-dodgerblue"><span class="btn-title">Our Services</span></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/banner/2.png);">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">
                            <span class="title">Family Care Specialist</span>
                            <h3>Providing Care For <br>Future Family.</h3>
                            <div class="text">I realized that becoming a doctor, I can only help <br>a small community.</div>
                            <div class="btn-box"><a href="#" class="theme-btn btn-style-one bg-dodgerblue"><span class="btn-title">Our Services</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services Section Five -->
    <section class="services-section-five">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Dispuestos a aumentar tu conocimiento</span>
                <h2>Nuestros Cursos</h2>
                <span class="divider"></span>
            </div>

            <div class="carousel-outer">
                <!-- Services Carousel -->
                <div class="services-carousel owl-carousel owl-theme default-dots">
                    @livewire('course.show-course-component')
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section Five -->

    <!-- Welcome Section -->
    <section class="welcome-section">
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
                                <div class="text">Buscamos los mejores profesores para dar la mejor educación.</div>
                            </div>
                        </div>

                        <!-- Feature Block Two -->
                        <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                            <div class="inner-box">
                                <span class="icon far fa-handshake"></span>
                                <h4>RESPETO</h4>
                                <div class="text">Concideramos el respeto un valor escencial en el crecimiento personal.</div>
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
                                <div class="text">Inculcamos este valor para mejorar la relación Profesor-estudiante.</div>
                            </div>
                        </div>

                        <!-- Feature Block Two -->
                        <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                            <div class="inner-box">
                                <span class="icon fas fa-hand-holding-heart"></span>
                                <h4>AMOR</h4>
                                <div class="text">Enhancing Your Vision sit ametcon sec tetur adipisicing eiusmod tempor.</div>
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
                                <div class="text">Enhancing Your Vision sit ametcon sec tetur adipisicing eiusmod tempor.</div>
                            </div>
                        </div>

                        <!-- Feature Block Two -->
                        <div class="feature-block-six col-lg-6 col-md-6 col-sm-12 text-center">
                            <div class="inner-box">
                                <span class="icon fas fa-user-graduate"></span>
                                <h4>EXCELENCIA</h4>
                                <div class="text">Enhancing Your Vision sit ametcon sec tetur adipisicing eiusmod tempor.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Team Section Two -->
    <section class="team-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title uppercase">SIGUE CAPACITANDOTE CON NOSOTROS</span>
                <h2 class="uppercase">SEMINARIOS</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                @livewire('seminar.show-seminar-component')
            </div>
    </section>
    <!--End Team Section -->

    <!-- Call to Action Two -->
    <div class="call-to-action-two">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title text-center">
                            <span class="sub-title">UNEXPECTED PREGNANCY</span>
                            <h2>I Am Pregnant, What Now?.</h2>
                            <span class="divider"></span>
                        </div>
                        <!-- Feature block -->
                        <div class="feature-block-seven">
                            <div class="inner-box">
                                <span class="count">1</span>
                                <h4>Take a pregnancy test.</h4>
                                <div class="text">To get the most accurate result, we recommend you wait at least a week after you’ve missed your period to take the test.</div>
                            </div>
                        </div>
                        <!-- Feature block -->
                        <div class="feature-block-seven">
                            <div class="inner-box">
                                <span class="count">2</span>
                                <h4>Confide in those you trust.</h4>
                                <div class="text">To get the most accurate result, we recommend you wait at least a week after you’ve missed your period to take the test.</div>
                            </div>
                        </div>
                        <div class="feature-block-seven">
                            <div class="inner-box">
                                <span class="count">3</span>
                                <h4>Confide in those you trust.</h4>
                                <div class="text">To get the most accurate result, we recommend you wait at least a week after you’ve missed your period to take the test.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <figure class="image"><img src="images/subiedo.webp" alt=""></figure>
                </div>
            </div>
        </div>
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

    <!-- Info Section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="sec-title">
                        <span class="sub-title">FIND USEFUL INFORMATION</span>
                        <h2>Prenatal Care and Tests.</h2>
                        <span class="divider"></span>
                        <div class="text">Find information on choosing an obstetrician and gynecologist, prenatal checkups, prenatal tests, including Rh status testing, and more.</div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-block">
                        <div class="inner">
                            <span class="icon flaticon-medicine"></span>
                            <h4>Emergency Contraception</h4>
                            <div class="text"> The morning-after pill is a very safe and effective emergency contraceptive that can be taken after unprotected sex.</div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-block">
                        <div class="inner">
                            <span class="icon flaticon-vitamin"></span>
                            <h4>Birth Control Pills & Condoms</h4>
                            <div class="text">The Pill is 91% effective. It doesn’t protect you from STDs. Use a condom with your pill to help stop pregnancy and STDs.</div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-block">
                        <div class="inner">
                            <span class="icon flaticon-uterus"></span>
                            <h4>IUD & Implant</h4>
                            <div class="text">The implant is 99% effective. It doesn’t protect you from STDs. Use a condom with your implant to help stop pregnancy.</div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image"><img src="images/resource/image-12.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info Section -->
    @livewire('comentary.comentary-component')
    <!-- News Section Three -->
    <section class="news-section-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <span class="title">OUR latest BLOG</span>
                <h2>Articles and News</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><a href="blog-post-image.html"><img src="images/resource/news-4.jpg" alt=""></a></figure>
                        <div class="overlay-content">
                            <div class="inner">
                                <span class="date">December 2, 2020</span>
                                <h4><a href="blog-post-image.html">Increasing Your Chance of Reproductive <br>Success for Ana</a></h4>
                                <a href="blog-post-image.html" class="read-more">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><a href="blog-post-image.html"><img src="images/resource/news-5.jpg" alt=""></a></figure>
                        <div class="overlay-content">
                            <div class="inner">
                                <span class="date">December 2, 2020</span>
                                <h4><a href="blog-post-image.html">8 Ways for Men to Supercharge <br>Their Fertility</a></h4>
                                <a href="blog-post-image.html" class="read-more">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Clients Section -->
    <section class="clients-section alternate">
        <div class="auto-container">

            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/2.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/3.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/4.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/5.png" alt=""></a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section -->

    <!-- Main Footer -->
    <footer class="main-footer style-five">
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
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Nuevos Cursos</h2>
                                    <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="blog-post-image.html">
                                                    <img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                            <h4><a href="blog-post-image.html">Integrative Medicine <Br>& Cancer Treatment.</a></h4>
                                            <span class="date">July 11, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-post-image.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                            <h4><a href="blog-post-image.html">Achieving Better <br>Health Care Time.</a></h4>
                                            <span class="date">August 1, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-post-image.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                            <h4><a href="blog-post-image.html">Great Health Care <br>For Patients.</a></h4>
                                            <span class="date">August 1, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contacto</h2>
                                    <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <a href="https://goo.gl/maps/a5oo5rbEVSUjybTKA" target="_blank">
                                                    <strong>300 mtrs este Municipalidad de Paraíso<Br>Paraíso, Cartago</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <div class="text">Dom a Vie : 08:00 - 18:00</div>
                                                <a href="tel:64177897"><strong>+506 6417 7897</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text">¿Tienes una pregunta?<br>
                                                    <a href="mailto:info@aceprocr.com"><strong>info@aceprocr.com</strong></a>
                                                </div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text">Dom - Vie 8.00 - 18.00<br>
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