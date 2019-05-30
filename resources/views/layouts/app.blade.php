<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> @section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>BAPKM ITS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('force/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/jquery-ui/jquery-ui.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('force/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/responsive.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('force/bower_components/semantic-ui-calendar/dist/calendar.min.css') }}" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <meta charset="utf-8">

    <!--asset2-->

    @show
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>

<body>
    <header class="header-area">
        @section('navbar') @include('include.navbar') @show
    </header>

    @yield('content')

    <footer class="footer-area">
        <div class="container">
            <div class="row f_widgets_inner">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget ab_widgets">
                        <h2 style="color: white; padding:0;">BAPKM ITS</h2>
                        <hr style="border: 1.5px solid #F4BA23; width: 40%;">
                        <p style="color: #f4f4f4;">Technology and gadgets Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones you’re most comfortable with. It has an iPhone-compatible jack at one end and a microphone module with an Answer/End/Pause button and a female 3.5mm audio jack for connectingheadphones</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="f_title">
                            <h3>Kontak Kami</h3>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <ul class="contact">
                                    <li><i class="ficon fa fa-envelope-o"></i><a href="mailto:baakcare@its.ac.id" class="mail">baakcare@its.ac.id</a></li>
                                    <li><i class="ficon fa fa-phone"></i>(031) 5923619</li>
                                    <li><i class="ficon fa fa-home"></i>Jalan Raya ITS, Kampus ITS Sukolilo, Surabaya 60117</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <!-- <div class="col-lg-12">
                            <div class="f_boder"></div>
                        </div> -->
                <p class="col-lg-8 col-md-8 footer-text m-0" style="color: #dddddd;">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved <!-- | This template is made with <i class="fa fa-heart-o" aria-hidden="true" style="color: #F4BA23;"></i> by <a href="https://colorlib.com" target="_blank" style="color: #F4BA23;"> --><!-- Colorlib --></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('force/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('force/js/popper.js') }}"></script>
    <script src="{{ asset('force/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('force/js/stellar.js') }}"></script>
    <script src="{{ asset('force/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('force/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('force/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('force/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('force/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('force/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('force/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('force/js/mail-script.js') }}"></script>
    <script src="{{ asset('force/js/theme.js') }}"></script>
    <script src="{{ asset('force/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('force/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('force/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('force/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('force/js/active.js') }}"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    @section('js') @show
</body>

</html>