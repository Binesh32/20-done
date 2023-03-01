 
@extends('master');

@section('content');

<!-- Main Wrapper -->
<div id="main-wrapper">
    
 
    
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
                <div class="col-12">
                    <div class="page-banner" style="background-image: url(assets/img/bg/page-banner-fashion.jpg)">
                        <h2>Contact us</h2>
                        <ol class="page-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div><!-- Page Banner End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    
    <!-- Post Section Start -->
    <div class="post-section section">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">Contact Information.</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="contact-info row">
                                
                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-home"></i>
                                    <p>House No 08, Ro ad No 08 Din Bari, Dhaka, Bangladesh</p>
                                </div>
                                
                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-envelope-open"></i>
                                    <p>Username@gmail.com <br>Damo@gmail.com</p>
                                </div>
                                
                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-headphones"></i>
                                    <p>(+660 256 24857) <br>(+660 256 24857)</p>
                                </div>
                                
                            </div>
                            
                        </div><!-- Post Block Body End -->
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">Send us a Message.</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php" method="post">
                                <div class="contact-form row">

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input type="text" id="name" name="con_name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="text" id="email" name="con_email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="website">Website <sup>*</sup></label>
                                        <input type="text" id="website" name="con_website">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="message">Message <sup>*</sup></label>
                                        <textarea id="message" name="con_message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="send message">
                                    </div>

                                </div>
                            </form>
                            <div class="form-message"></div>
                            
                        </div><!-- Post Block Body End -->
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">find us on map.</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="contact-map-wrap">
                                <!-- Google Map Area Start -->
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224905.8379164026!2d-63.27089988050263!3d-2.8569688249815943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1635401091721!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <!-- End of Google Map Area -->
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
                            <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

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
                
                <a href="#" class="instagram-item"><img src="img/instagram/1.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/2.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/3.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/4.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/5.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/6.jpg" alt="instagram"></a>
                
            </div><!-- Full Width Instagram Carousel End -->
        </div>
    </div><!-- Instagram Section End -->
    
 
   
     
    
    
</div>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{url('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{url('assets/js/plugins.js')}}"></script>
<!-- ycp JS -->
<script src="{{url('assets/js/ycp.js')}}"></script>
<!-- Main JS -->
<script src="{{url('assets/js/main.js')}}"></script>

@endsection