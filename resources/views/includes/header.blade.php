<div class="header-top header-top-2 section">
        <div class="container">
            <div class="row">
               
                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-9 col-6">
                    
                    <!-- Header Links -->
                    <ul class="header-links header-links-2">
                        <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i> Sunday, March 25, 2023</a></li>
                        <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Sydney</span></a></li>
                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Sign Up</a></li>
                        <li><a href="contact-us.blade.php"><i class="fa fa-headphones"></i>Contact</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                    
                </div><!-- Header Top Links End -->
                
                <!-- Header Top Social Start -->
                <div class="header-top-social col-md-3 col-6">
                    
                    <!-- Header Social -->
                    <div class="header-social header-social-2">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    
                </div><!-- Header Top Social End -->
                
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    
    <!-- Breaking News Section Start -->
    <div class="breaking-news-section breaking-news-section-2 section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <!-- Breaking News Wrapper Start -->
                    <div class="breaking-news-wrapper breaking-news-wrapper-2">

                        <!-- Breaking News Title -->
                        <h5 class="breaking-news-title float-start">Breaking News</h5>

                        <!-- Breaking Newsticker Start -->
                        <ul class="breaking-news-ticker float-start">
                            <li><a href="#">Tell me what you today, And i ‘ll tell you who you are!!!</a></li>
                            <li><a href="#">Fashion is about some thing that comes from with in you.</a></li>
                            <li><a href="#">Australia announced squad for Bangladesh tour.</a></li>
                            <li><a href="#">How group of rebel are talking on Banasree epidemic.</a></li>
                        </ul><!-- Breaking Newsticker Start -->

                        <!-- Breaking News Nav -->
                        <div class="breaking-news-nav">
                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                        
                    </div><!-- Breaking News Wrapper End -->
                    
                </div>
            </div>
        </div>
    </div><!-- Breaking News Section End -->
    
    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">
               
                <!-- Header Logo -->
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="index.blade.php" class="logo"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                
                <!-- Header Banner -->
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#"><img src="assets/img/banner/header-banner-2.jpg" alt="Header Banner"></a></div>
                </div>
                
            </div>
        </div>
    </div><!-- Header End -->
    
    <!-- Menu Section Start -->
    <div class="menu-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <!-- Main Menu Start -->
                        <div class="main-menu float-start d-none d-md-block">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.blade.php">Home</a></li>
                                    @foreach($data as $val)
                                    <li><a href="{{ route('news_category', $val->slug) }}">{{ $val->name }}</a></li>
                                    @endforeach

                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-md-none"><a href="index.blade.php"><img src="assets/img/logo-white.png" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-end">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search Here">
                                </form>
                            </div>

                        </div>
                        
                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
                                <ul>

                                    <li class="active"><a href="index.blade.php">Home</a>
                                        
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="index.blade.php">Home One</a></li>
                                            <li class="active"><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                            <li><a href="index-4.html">Home Four</a></li>
                                        </ul><!-- Submenu End -->
                                        
                                    </li>
                                    <li><a href="category-lifestyle.blade.php">News</a></li>
                                    <li><a href="category-sports.blade.php">Sports</a></li>
                                    <li><a href="category-lifestyle.blade.php">Lifestyle</a>
                                           
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="category-fashion.blade.php">Beauty</a></li>
                                            <li><a href="category-lifestyle.blade.php">travel</a></li>
                                            <li><a href="category-sports.blade.php">Interior Design</a></li>
                                            <li><a href="category-lifestyle.blade.php">Photography</a></li>
                                            <li><a href="category-fashion.blade.php">fashion</a></li>
                                            <li><a href="category-sports.blade.php">music</a></li>
                                        </ul><!-- Submenu End -->
                                        
                                    </li>
                                    <li><a href="category-fashion.blade.php">Fashion</a></li>
                                    <li><a href="category-politic.blade.php">politic</a></li>
                                    <li><a href="#">pages</a>
                                        
                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact-us.blade.php">contact</a></li>
                                            <li><a href="post-details.blade.php">post details</a></li>
                                        </ul><!-- Submenu End -->
                                        
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>