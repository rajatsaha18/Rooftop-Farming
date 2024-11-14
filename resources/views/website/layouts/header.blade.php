<nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container-xl">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container d-flex justify-content-between align-items-center">


        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('public/website/assets/img/logo.png') }}" class="logo" alt="Logo">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Main Nav -->
        <div class="main-nav-content">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{ asset('public/website/assets/img/logo.png') }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="#" class="" data-toggle="dropdown" >Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.html">Agriculture</a></li>
                            <li><a href="index-3.html">Farm Shop</a></li>
                            <li><a href="index-4.html">Organic Farm</a></li>
                            <li><a href="agriculture-shop.html">Agriculture Shop</a></li>
                            <li><a href="gardening.html">Home Gardening</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="" data-toggle="dropdown" >About</a>
                        <ul class="dropdown-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('shop') }}" class="" data-toggle="dropdown" >Shop</a>
                        <ul class="dropdown-menu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="" data-toggle="dropdown" >Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html">Services Version One</a></li>
                            <li><a href="services-2.html">Services Version Two</a></li>
                            <li><a href="services-details.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="" data-toggle="dropdown" >Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                            <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                            <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="" data-toggle="dropdown" >Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="contact">
                            <div class="call">
                                <div class="icon">
                                    <i class="fas fa-comments-alt-dollar"></i>
                                </div>
                                <div class="info">
                                    <p>Have any Questions?</p>
                                    <h5><a href="mailto:info@crysta.com">info@agrul.com</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

            </div>

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </div>
        <!-- Main Nav -->

    </div>
</nav>
