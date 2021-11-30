<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="html5, garden, landscape, corporate, responsive, clean" />
        <meta name="description" content="Foundstrap Studio Kebonkueh Template" />
        <meta name="author" content="foundstrap.com" />

        <title>Kebonkueh</title>

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/foundstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/iconcrafts.css') }}" />

        <!-- css plugin -->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/smartmenu.min.css') }}" />

        <!-- theme stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    </head>

    <body>
        
        <header id="header">
            <!-- header-top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="header-info pull-left">
                                {{-- <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: +62 856-4561-3576</li> --}}
                                <li>
                                    <a href="mailto:hello@kebonkueh.com"><i class="fa fa-envelope" aria-hidden="true"></i> hello@kebonkueh.com</a>
                                </li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri: 7:00 - 18:00</li>
                            </ul>
                            {{-- <div class="pull-right">
                                <ul class="header-social social-icon">
                                    <li>
                                        <a class="facebook-color" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter-color" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a class="google-color" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a class="instagram-color" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top end here -->

            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-logo">
                                <a href="/">
                                    {{-- <img src="{{ asset('img/favicon.ico alt="logo" />
                                    <img class="logo-responsive" src="{{ asset('img/logo.png" alt="logo" />
                                    <img class="logo-sticky" src="{{ asset('img/logo-black.png" alt="logo" /> --}}
                                    <h3 style="color:white">Keboenkoeh.id</h3>
                                </a>
                            </div>
                            <nav class="menu-container">
                                <ul id="menu" class="sm me-menu">
                                    <li>
                                        <a href="services.html">Layanan</a>
                                        <ul>
                                            <li><a href="lawn-garden-maintenance.html">Pemesanan tembakau</a></li>
                                            <li><a href="lawn-garden-maintenance.html">Pemesanan cabai</a></li>
                                            <li><a href="lawn-garden-maintenance.html">Pemesanan ubi</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Tentang</a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="gallery-2column.html">Gallery 2 Column</a></li>
                                            <li><a href="gallery-3column.html">Gallery 3 Column</a></li>
                                            <li><a href="gallery-4column.html">Gallery 4 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Hubungi kami</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            {{ $slot }}
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-3">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('img/logo.png') }}" alt="Footer Logo" />
                            </a>
                        </div>
                        <p>Kebonkueh is Garden and Landscape Company, provides all you need about Garden and Landscape Design for get better garden decorations.</p>
                    </div>

                    <div class="col-md-3 col-lg-2">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul class="me-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Project</a></li>
                            <li><a href="#">Term &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <h5 class="footer-title">Contact Us</h5>
                        <p>
                            <strong>General Contact :</strong> <br />
                            <a class="text-color" href="mailto:hello@kebonkueh.com">hello@kebonkueh.com</a> <br />
                            <strong>Information :</strong> <br />
                            <a class="text-color" href="mailto:info@kebonkueh.com">info@kebonkueh.com</a>
                        </p>
                    </div>

                    <div class="col-md-12 col-lg-5">
                        <h5 class="footer-title">Subscribe For Great Promo</h5>
                        <p>Join with our subscribers and get special price,<br />free garden magazine, promo product announcements and much more!</p>

                        <form class="subscribe-form">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Email Address" aria-label="Enter Email Address" aria-describedby="button-subscribe" />
                                <div class="input-group-append">
                                    <button class="btn btn-default" type="button" id="button-subscribe">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="copyright pull-left">&copy; All rights reserved 2016, <strong>Kebonkueh - Foundstrap Studio</strong> | Envato</div>
                            <ul class="footer-social social-icon pull-right">
                                <li>
                                    <a class="facebook-color" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter-color" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google-color" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a class="dribbble-color" href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin-color" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="instagram-color" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- javascript here -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('https://maps.google.com/maps/api/js?key=AIzaSyBJ7vR7u5Tw1Ii8qA0mAsKVUvSnoidOkhE') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.smartmenus.min.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>

        <!-- javascript plugin -->
        <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('js/jquery.parallax.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/jquery.maps.js') }}"></script>

        <!-- javascript configuration -->
        <script src="{{ asset('js/config.js') }}"></script>
        <script>
            $(document).ready(function () {
                var map = new GMaps({
                    el: "#map",
                    lat: 40.776883,
                    lng: -73.982504,
                    zoom: 17,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: "SMALL",
                        position: "TOP_LEFT",
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });

                map.addMarker({
                    lat: 40.776883,
                    lng: -73.982504,
                    icon: "{{ asset('img/map-marker.png",
                });

                var styles = [
                    {
                        featureType: "road",
                        elementType: "geometry",
                        stylers: [
                            {
                                lightness: 100,
                            },
                            {
                                visibility: "simplified",
                            },
                        ],
                    },
                    {
                        featureType: "road",
                        elementType: "labels",
                        stylers: [
                            {
                                visibility: "off",
                            },
                        ],
                    },
                ];

                map.addStyle({
                    styledMapName: "Styled Map",
                    styles: styles,
                    mapTypeId: "map_style",
                });

                map.setStyle("map_style");
            });
        </script>
    </body>
</html>
