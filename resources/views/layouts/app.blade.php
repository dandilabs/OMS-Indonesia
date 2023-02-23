
<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->
<head>
@include('layouts.head')
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Butuh Bantuan? Telp kami : <a href="tel:1800-456-7890" class="number">0896 9945 1818</a></div>
					
                </div>
                <div class="top-right clearfix">
					@auth
						<!-- Info List -->
					<ul class="info-list">
                        <li><a href="{{route('admin.dashboard')}}">{{Auth::user()->name }}</a></li>
						<li class="quote">
							<form action="{{route('logout')}}" method="post">
								@csrf
								<a href="{{route('logout')}}"onclick="event.preventDefault();
								this.closest('form').submit();">Logout</a>
							</form>
						</li>
                    </ul>
					@else
					<ul class="info-list">
						<li class="quote"><a href="{{route('login')}}">Login</a></li>
                    </ul>
					@endif
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="{{asset('assets/images/oms-.png')}}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home page 01</a></li>
                                            <li><a href="index-3.html">Home page 02</a></li>
                                            <li><a href="index-4.html">Home page 03</a></li>
											<li><a href="index-5.html">Home page 04</a></li>
                                            <li><a href="index-6.html">Home page 05</a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
													<li><a href="index-5.html">Header Style Four</a></li>
                                                    <li><a href="index-6.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="about.html">Category</a>
                                        <ul>
                                            <li><a href="about.html">Our Introduction</a></li>
											<li><a href="team.html">Our Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
									<li><a href="{{route('admin.dashboard')}}">About me</a></li>
									<li><a href="contact.html">Contact</a></li>
									@auth
										@if(Auth::user()->utype == 'ADM')
											<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
										@else
											
										@endif
									@endif

                                    {{-- <li class="dropdown"><a href="#">My Account</a>
									@auth
											@if(Auth::user()->utype == 'ADM')
											<ul>
												<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
											</ul>
											@else
                                        <ul>
                                            <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                            <li><a href="projects-masonry.html">Project Masonry</a></li>
                                            <li><a href="projects-fullwidth.html">Project Full Screen</a></li>
                                        </ul>
										@endif
									@endif
                                    </li> --}}
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
						
						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="{{asset('assets/images/oms-.png')}}" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    @include('layouts.slider')
	
	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Awesome place & what improves <br> explore radiance.</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="residental-interior.html"><img src="{{asset('assets/images/resource/service-1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Residential Interiors</a></h3>
							<div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies.</div>
							<a href="residental-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="office-interior.html"><img src="{{asset('assets/images/resource/service-2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="office-interior.html">Office Designs</a></h3>
							<div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies. Seam lessly visualize quality intellectual.</div>
							<a href="office-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="commercial-interior.html"><img src="{{asset('assets/images/resource/service-3.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="commercial-interior.html">Commercial Interiors</a></h3>
							<div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies. Seam lessly visualize quality intellectual.</div>
							<a href="commercial-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Our Services</h2>
				<div class="text">Kami melayani Jasa Service & Jasa Modifikasi All Varian motor</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-desk-1"></span>
							</div>
							<h3><a href="office-interior.html">Office Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<h3><a href="office-interior.html">House Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-shop"></span>
							</div>
							<h3><a href="office-interior.html">Restaurant Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-hospital"></span>
							</div>
							<h3><a href="office-interior.html">Hospital Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-apartment-1"></span>
							</div>
							<h3><a href="office-interior.html">Appartment Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-hotel"></span>
							</div>
							<h3><a href="office-interior.html">Hospitality Interior</a></h3>
							<div class="text">Lorem Ipsum is  simply my text of the printing and Ipsum is the Ipsum is simply.</div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Project Section -->
	<section class="project-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Latest Projects</h2>
			</div>
		</div>
		
		<div class="outer-container">
			
			<!--Isotope Galery-->
            <div class="sortable-masonry">
                
                <!--Filter-->
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
						<li class="filter" data-role="button" data-filter=".residential">Residential</li>
						<li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
						<li class="filter" data-role="button" data-filter=".hospital">Hospitality</li>
						<li class="filter" data-role="button" data-filter=".office">Office</li>
                    </ul>
                    
                </div>
                
				<div class="items-container row clearfix">
				
					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/2.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/2.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential office commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/3.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/3.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/4.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/4.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital office residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/7.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/7.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/5.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/5.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital office">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/6.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{asset('assets/images/gallery/6.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				</div>
				
			</div>
		
			<!-- More Projects -->
			<div class="more-projects">
				<a href="projects-classic.html" class="projects">View All Projects</a>
			</div>
		
		</div>
	</section>
	<!-- End Project Section -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	
			<!--Content Column-->
			<div class="content-column">
				<div class="content-box">
					<h2>Home design made easy</h2>
					<div class="text">To give you a home that lasts, we bring you only the best in everything — quality raw materials, state-of-the-art manufacturing, rigorous quality checks, professional installations and transparent prices.</div>
					<ul class="list-style-one">
						<li>Whole Home Interior</li>
						<li>Modular Kitchen and Wardrobe</li>
						<li>Furniture, Decore and more</li>
						<li>Post-surgery, including cosmetic, joint replacement, or heart surgery</li>
						<li>Chronic conditions, such as diabetes, COPD, or cancer</li>
						<li>On Site Expertiset</li>
					</ul>
					<div class="bold-text">Design your home, right here at Stella Orr'e <br> <a href="contact.html">Talk to a designer</a></div>
				</div>
			</div>
			
			<!--Image Column-->
        	<div class="image-column" style="background-image: url({{asset('assets/images/resource/video-img.jpg')}})">
				<div class="inner-column">
					<div class="image">
						<img src="{{asset('assets/images/resource/video-img.jpg')}}" alt="">
					</div>
					<a href="https://www.youtube.com/watch?v=SXZXtD60t2g" class="overlay-link lightbox-image">
						<div class="icon-box">
							<span class="icon flaticon-play-button"></span>
                            <i class="ripple"></i>
						</div>
					</a>
				</div>
            </div>
            <!--End Image Column-->
			
		</div>
	</section>
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				<h2>What our customers says</h2>
				<div class="title-text">Thousands of people done interior</div>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Featured Section -->
	<section class="featured-section" style="background-image: url({{asset('assets/images/background/2.jpg')}})">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Work Process</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake"></span>
							</div>
							<div class="feature-number">1</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Meet Customers</a></h3>
							<div class="text">Pertemuan pertama hanya membahas kebutuhan pada customer / client.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-answer"></span>
							</div>
							<div class="feature-number">2</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Automotive Discussion</a></h3>
							<div class="text">Membahas tentang kebutuhan customer mengenai jasa.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-sketch"></span>
							</div>
							<div class="feature-number">3</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Drafting Automotive</a></h3>
							<div class="text">Menyusun anggaran yg di perlukan terhadap kebutuhan customer.</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<img src="{{asset('assets/images/spark.png')}}" width="75" height="60" alt="">
							</div>
							<div class="feature-number">4</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Implimentation</a></h3>
							<div class="text">setting Kendaraan ketika service maupun modif.</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Perlu perbaikan untuk kendaraan Anda? Baca majalah kami</h2>
				<div class="text">Tetap perbarui dengan tren terbaru, inspirasi, ahli dan banyak lagi</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('assets/images/resource/news-1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Modular Kitchen</li>
							</ul>
							<h3><a href="blog-detail.html">15 Vastu ideas for the main door emphasizes on every par ...</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('assets/images/resource/news-2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Interior, awesome</li>
							</ul>
							<h3><a href="blog-detail.html">Storage ideas for the bedroom by interior designers ...</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('assets/images/resource/news-3.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Interior, awesome</li>
							</ul>
							<h3><a href="blog-detail.html">Kids bedroom design ideas by interior designers in NY</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{asset('assets/images/background/1.jpg')}})">
		<div class="auto-container">
			<h2>Think Interior. Think Stella Orr'e</h2>
			<div class="text">Interiors for all styles and budgets, Choose from thousands of <br> designs. Heart your favorites to shortlist.</div>
			<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index-2.html"><img src="{{asset('assets/images/oms-.png')}}" alt="" /></a>
                                    </div>
                                    <div class="text">Stella Orr'e is a WordPress theme to build Interior websites. It has good features and you will love.</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    </ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li><a href="#">About Gaille</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditionis</a></li>
                                            <li><a href="#">Faq</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
						
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact Info</h2>
									<div class="widget-content">
										<a href="tel:1800-574-9687" class="contact-number">(1800) 574 9687</a>
										<ul>
											<li>256, Stella Orr'e, New York 24</li>
											<li>Email :<a href="mailto:info@stellaorre.com"> info@stellaorre.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Newsletter</h2>
									<div class="text">Get Special offers & Discounts</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div class="copyright"><a href="templateshub.net">Templates Hub</a></div>
                </div>
                <div class="pull-right">
                    <a href="templateshub.net">Templates Hub</a>
                </div>
            </div>
			
		</div>
	</footer>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

@include('layouts.js')

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
</html>