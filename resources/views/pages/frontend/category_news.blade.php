@extends('master')

@section ('content')
  


<!-- Breaking News Section Start -->
<div class="breaking-news-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
               
                <!-- Breaking News Wrapper Start -->
                <div class="breaking-news-wrapper">

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

<!-- Page Banner Section Start -->
<div class="page-banner-section section mt-30 mb-30">
    <div class="container">
        <div class="row row-1">
           
            <!-- Page Banner Start -->
            <div class="col-lg-8 col-12">
                <div class="page-banner" style="background-image: url(assets/img/bg/page-banner-fashion.jpg)">
                    <h2>Category: <span class="category-fashion">Fashion</span></h2>
                    <ol class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Fashion</li>
                    </ol>
                </div>
            </div><!-- Page Banner End -->
            
            <div class="page-banner-image col-lg-4 col-12 d-none d-lg-block"><img src="assets/img/banner/page-banner-fashion.jpg" alt="Page Banner Image"></div>
            
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Popular Section Start -->
<div class="popular-section section bg-dark pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <!-- Popular Post Slider Start -->
                <div class="popular-post-slider">

                    @foreach($info as $val)
                    <!-- Overlay Post Start -->
                    <div class="post post-overlay">
                        <div class="post-wrap">

                            <!-- Image -->
                            <div class="image"><img src="assets/img/post/post-100.jpg" alt="post"></div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h4 class="title"><a href="post-details.html">The 10 Best Beauty Looks: Week of September 11, 2022.</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                </div>

                            </div>

                        </div>
                    </div><!-- Overlay Post End -->
                    @endforeach

                    

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay">
                        <div class="post-wrap">

                            <!-- Image -->
                            <div class="image"><img src="assets/img/post/post-101.jpg" alt="post"></div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h4 class="title"><a href="post-details.html">The top 7 collections of New York fashion week.</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                </div>

                            </div>

                        </div>
                    </div><!-- Overlay Post End -->

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay">
                        <div class="post-wrap">

                            <!-- Image -->
                            <div class="image"><img src="assets/img/post/post-102.jpg" alt="post"></div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h4 class="title"><a href="post-details.html">The greatest Royal wedding dress ever. . . . .</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                </div>

                            </div>

                        </div>
                    </div><!-- Overlay Post End -->

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay">
                        <div class="post-wrap">

                            <!-- Image -->
                            <div class="image"><img src="assets/img/post/post-109.jpg" alt="post"></div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h4 class="title"><a href="post-details.html">The greatest Royal wedding dress ever. . . . .</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                </div>

                            </div>

                        </div>
                    </div><!-- Overlay Post End -->
                    
                </div><!-- Popular Post Slider End -->
                
            </div>
        </div>
    </div>
</div><!-- Popular Section End -->

<!-- Post Section Start -->
<div class="post-section section mt-50">
    <div class="container">
        
        <!-- Feature Post Row Start -->
        <div class="row">
            
            <div class="col-lg-8 col-12 mb-50">
                
                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">
                    
                    <!-- Post Block Body Start -->
                    <div class="body">
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-103.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">A woman for us tobe until we finger it out.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-104.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">The top 7 collections of New York fashion week.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-105.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Marilyn Monroe’s beauty secrets the most . . . .</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-72.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">A woman for us tobe until we finger it out.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-106.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Moto and Apptech settle patent dispute.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-107.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Rahanna Shune bright at the diamond Finger rings.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <!-- Post Start -->
                        <div class="post fashion-post post-default-list post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="post-details.html"><img src="assets/img/post/post-108.jpg" alt="post"></a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">How our action change who . . . . . .</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                    </div>

                                    <!-- Description -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  Curabitur venenatis suscipit rhoncus. Phasellus fermentum a nec finibus lacus bibendum non. Duis pulvinar lacus.</p>

                                    <!-- Read More -->
                                    <a href="post-details.html" class="read-more">continue reading</a>

                                </div>

                            </div>
                        </div><!-- Post End -->
                        
                        <div class="page-pagination text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        
                    </div><!-- Post Block Body End -->
                    
                </div><!-- Post Block Wrapper End -->
                
            </div>
            
            <!-- Sidebar Start -->
            <div class="col-lg-4 col-12 mb-50">
                <div class="row">
                   
                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head feature-head">

                                <!-- Title -->
                                <h4 class="title">Follow Us</h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="sidebar-social-follow">
                                    <div>
                                        <a href="#" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                            <h3>40,583</h3>
                                            <span>Fans</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="google-plus">
                                            <i class="fa fa-google-plus"></i>
                                            <h3>36,857</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                            <h3>50,883</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="dribbble">
                                            <i class="fa fa-dribbble"></i>
                                            <h3>4,743</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="assets/img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="assets/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <div class="sidebar-subscribe">
                            <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                            <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                            <!-- Newsletter Form -->
                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    
                </div>
            </div><!-- Sidebar End -->
            
        </div><!-- Feature Post Row End -->
        
    </div>
</div><!-- Post Section End -->

<!-- Instagram Section Start -->
<div class="instagram-section section">
    <div class="container-fluid ps-0 pe-0">
            
        <!-- Full Width Instagram Carousel Start -->
        <div class="fullwidth-instagram-carousel instagram-carousel">
            
            <a href="#" class="instagram-item"><img src="assets/img/instagram/1.jpg" alt="instagram"></a>
            <a href="#" class="instagram-item"><img src="assets/img/instagram/2.jpg" alt="instagram"></a>
            <a href="#" class="instagram-item"><img src="assets/img/instagram/3.jpg" alt="instagram"></a>
            <a href="#" class="instagram-item"><img src="assets/img/instagram/4.jpg" alt="instagram"></a>
            <a href="#" class="instagram-item"><img src="assets/img/instagram/5.jpg" alt="instagram"></a>
            <a href="#" class="instagram-item"><img src="assets/img/instagram/6.jpg" alt="instagram"></a>
            
        </div><!-- Full Width Instagram Carousel End -->
    </div>
</div><!-- Instagram Section End -->

@endsection