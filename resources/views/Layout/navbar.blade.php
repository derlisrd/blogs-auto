<header class="site-header site-header--menu-left landing-11-menu site-header--absolute site-header--sticky">
    <div class="container">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href={{ route("HomePage") }}>
                    <!-- light version logo (logo must be black)-->
                    <img src="{{ url('assets') }}/image/logo/logo-black.png" alt="" class="light-version-logo">
                    <!-- Dark version logo (logo must be White)-->
                    <img src="{{ url('assets') }}/image/logo/logo-white.png" alt="" class="dark-version-logo">
                </a>
            </div>
            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item">
                            <a href={{ route("HomePage") }} class="nav-link-item">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://api.whatsapp.com/send?phone=5516982018838&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20ADX%20Propriet%C3%A1ria.%20" class="nav-link-item">Suporte</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-btns  header-btn-l11 ms-auto d-none d-xs-inline-flex align-items-center">
                <a class="download-trail-btn btn focus-reset" href="https://api.whatsapp.com/send?phone=5516982018838&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20ADX%20Propriet%C3%A1ria.%20">
        Fale Conosco
    </a>
            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
