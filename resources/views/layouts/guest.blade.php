<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Multi-purpose Saas landing page" />
    <meta name="author" content="ThemeEaster" />

    <title>SaasDesk | Saas Startup HTML Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" />
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="/frontend/css/themify-icons.css" />
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="/frontend/css/elegant-line-icons.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" />
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="/frontend/css/slicknav.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="/frontend/css/animate.min.css" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="/frontend/css/slick.css" />
    <!-- Slick Theme CSS -->
    <link rel="stylesheet" href="/frontend/css/slick-theme.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="/frontend/css/main.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/frontend/css/responsive.css" />

    <script src="/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navmenu" data-offset="70">




    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="navbar-brand"><img src="/backend/images/app-logo.png" height="70"
                        width="120" alt="150x50" /></a>
                <div class="d-flex menu-wrap">
                    <div id="navmenu" class="mainmenu">
                        <ul class="nav">
                            <li>
                                <a data-scroll class="nav-link active" href="#home">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a data-scroll class="nav-link" href="#features">Features</a>
                            </li>
                            <li>
                                <a data-scroll class="nav-link" href="#pricing">Pricing</a>
                            </li>
                            <li>
                                <a data-scroll class="nav-link" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="{{ route('register') }}" class="signup-btn">Signup Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- /.header-section -->
    {{ $slot }}
    <!--================================= COPYRIGHT-1 START ==========================================-->

    <footer class="footer-section align-center">
        <div class="container">
            <p>
                &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Powered by Vallfield
            </p>
        </div>
    </footer>
    <!-- /.footer-section -->

    <a data-scroll href="#header" id="scroll-to-top"><i class="ti-arrow-up"></i></a>

    <!-- jQuery Lib -->
    <script src="/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/frontend/js/vendor/bootstrap.min.js"></script>
    <!-- Tether JS -->
    <script src="/frontend/js/vendor/tether.min.js"></script>
    <!-- Slicknav JS -->
    <script src="/frontend/js/vendor/jquery.slicknav.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="/frontend/js/vendor/slick.min.js"></script>
    <!-- Smooth Scroll JS -->
    <script src="/frontend/js/vendor/smooth-scroll.min.js"></script>
    <!-- Wow JS -->
    <script src="/frontend/js/vendor/wow.min.js"></script>
    <!-- Main JS -->
    <script src="/frontend/js/main.js"></script>
</body>

</html>
