<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="css/style.css">

    {{-- SCRIPT BOOTSTARP --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

    <title>Pan Prototype</title>
</head>

<body>
    <!-- ===================================HEADER===================================== -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">SandBox</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Services
                        </a>
                    <li class="nav__item">
                        <a href="#contactme" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Contactme
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- ===================================================MAIN============================= -->
    <main>
        @yield('content')
    </main>

    <!-- =============================================FOOTER====================================== -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Pan</h1>
                    <span class="footer__subtitle">Illustrator</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contactme</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.facebook.com" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                    <a href="https://twitter.com" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; EPS. All right reserved</p>
        </div>
    </footer>
    <!-- =======================================SCROLL UP========================================= -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!-- SWIPER JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/lazysizes.min.js" async=""></script>
    <!-- jstest -->
    <script src="asssetss/js/build.js"></script>
    <script src="asssetss/js/lib.js"></script>

    <!--  -->
</body>

</html>