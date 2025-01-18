<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== BOXICONS ===============-->
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link
        rel="stylesheet"
        href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    @stack('style-alt')
    <title>Wisata Gili Permai</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('homepage') }}" class="nav__logo">GILI PERM<i class="bx bxs-rocket"></i>I</a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                            <i class="bx bx-home-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                            <i class="bx bx-building-house"></i>
                            <span>Package Travel</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                            <i class="bx bx-award"></i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                            <i class="bx bx-phone"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- theme -->
            <i class="bx bx-moon change-theme" id="theme-button"></i>

            <a target="_blank" href="https://api.whatsapp.com/send?phone=088111444&text=I want to booking" class="button nav__button">Booking Now</a>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        @yield('content')
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
    <section class="contact section" id="contact">
                <div class="contact__container container grid">
                    <div class="contact__images">
                    <div>
                <a href="{{ route('homepage') }}" class="footer__logo">GILI PERM<i class="bx bxs-rocket"></i>I</a>
                <p class="footer__description">
                    Our vision is to help people find the <br />
                    best places to travel with high security
                </p>
            </div>
                    </div>

                    <div class="contact__content">
                        <div class="contact__data">
                            <span class="section__subtitle">Contact Us</span>
                            <h2 class="section__title">
                            <a href="{{ route('homepage') }}" class="footer__logo">GILI PERM<i class="bx bxs-rocket"></i>I</a>
                            </h2>
                            <p class="contact__description">
                                Is there a problem finding places for yout next
                                trip? Need a guide in first trip or need a
                                consultation about traveling? just contact us.
                            </p>
                        </div>

                        <div class="contact__card">
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-phone-call"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Call
                                        </h3>
                                        <p class="contact__card-description">
                                            022.321.165.19
                                        </p>
                                    </div>
                                </div>

                                <button class="button contact__card-button">
                                    Call Now
                                </button>
                            </div>
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-message-rounded-dots"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Whatsapp
                                        </h3>
                                        <p class="contact__card-description">
                                            022.321.165.19
                                        </p>
                                    </div>
                                </div>

                                <button class="button contact__card-button">
                                    Chat Now
                                </button>
                            </div>
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-video"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Video Call
                                        </h3>
                                        <p class="contact__card-description">
                                            022.321.165.19
                                        </p>
                                    </div>
                                </div>

                                <button class="button contact__card-button">
                                    Video Call Now
                                </button>
                            </div>
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-phone-call"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Message
                                        </h3>
                                        <p class="contact__card-description">
                                            022.321.165.19
                                        </p>
                                    </div>
                                </div>

                                <button class="button contact__card-button">
                                    Message Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <div class="footer__container container grid">
            <div>
                <a href="{{ route('homepage') }}" class="footer__logo">GILI PERM<i class="bx bxs-rocket"></i>I</a>
                <p class="footer__description">
                    Our vision is to help people find the <br />
                    best places to travel with high security
                </p>
            </div>


            <div class="footer__content" style="border: 1px solid #000000!important;">
                <div style="border: 1px solid #000000!important;">
                    <h3 class="footer__title">About</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Features </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">News & Blog</a>
                        </li>
                    </ul>
                </div>
                <div style="border: 1px solid #000000!important;">
                    <h3 class="footer__title">Company</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">How We Work?
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Capital </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link"> Security</a>
                        </li>
                    </ul>
                </div>
                <div style="border: 1px solid #000000!important;">
                    <h3 class="footer__title">Support</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">FAQs </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Support center
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer__link"> Contact Us</a>
                        </li>
                    </ul>
                </div style="border: 1px solid #000000!important;">
                <div>
                    <h3 class="footer__title">Follow us</h3>

                    <ul class="footer__social">
                        <a href="#" class="footer__social-link">
                            <i class="bx bxl-facebook-circle"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="bx bxl-instagram-alt"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="bx bxl-pinterest"></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__info container">
            <span class="footer__copy">
                &#169; Wisata Gili Permai. All rigths reserved
            </span>
            <div class="footer__privacy">
                <a href="#">Terms & Agreements</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-chevrons-up"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('script-alt')
</body>

</html>