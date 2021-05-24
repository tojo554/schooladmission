<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sb School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">sbschool11.herokuapp.com</p>
						<p class="num">Call: +0481 2721869</p>
					    	<ul class="fh5co-social">
							<li><a href="/"><i class="icon-facebook2"></i></a></li>
							<li><a href="/"><i class="icon-twitter2"></i></a></li>
							<li><a href="/"><i class="icon-dribbble2"></i></a></li>
							<li><a href="/"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="/"><i class="icon-study"></i>SBHSS<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/facilities">Facilities</a></li>
							<li><a href="/teacher">Student Support</a></li>
							<li><a href="/about">About Us</a></li>
							<!-- <li><a href="/pricing">Pricing</a></li> -->
							<li><a href="/contact">Contact Us</a></li>
							<li class="has-dropdown">
								<a href="">Login</a>
								<ul class="dropdown">
									<li><a href="/student/slogin">Student Login</a></li>
									<li><a href="/auth/login">Faculty Login</a></li>
									<li><a href="/auth/login">Admin Login</a></li>
								</ul>
							</li>
						<li class="btn-cta"><a href="/student/admissionform"><span>Admission Form</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<form action=" {{ route('auth.check') }}" method="post">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail')}}
                    </div>
                @endif
                @csrf
    </form>
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(https://images.pexels.com/photos/5428264/pexels-photo-5428264.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
									<h2><a href="/" target="_blank"></a></h2>
									<p><a class="btn btn-primary btn-lg" href="/">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>"Education is the most powerful weapon which you can use to change the world."</h1>
									<h2>Nelson Mandela</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="/">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(https://images.pexels.com/photos/5211430/pexels-photo-5211430.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We Help You to Learn New Things</h1>
									<h2></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="/">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>
				
	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);"     data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="2500" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Library Book Collection</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3500" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Students </span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-bulb"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Add On Courses</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-head"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="110" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Teachers</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Highlights</h2>
					<p>To offer excellent amenities to our students we have been frequently introducing innovative and improved facilities in the school</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="/" class="course-img" style="background-image: url(https://images.pexels.com/photos/1415810/pexels-photo-1415810.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500);">
						</a>
						<div class="desc">
							<h3><a href="/">Swimming</a></h3>
							<p>When we consider swimming as a competitive sport it regains another level of enthusiasm because of the versatility of the training programmes as well as competitions </p>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="/" class="course-img" style="background-image: url(https://images.pexels.com/photos/277572/pexels-photo-277572.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500);">
						</a>
						<div class="desc">
							<h3><a href="/">Hostel</a></h3>
							<p>The school is an institution within institutions. It has many institu­tions, but the hostel is an important institution, where the boarders develop many good qualities through its programme. </p>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="/" class="course-img" style="background-image: url(img/sciencelab2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="/">Science &amp; Technology</a></h3>
							<p>Installed with 27 computers, multimedia under network environment, the lab has laser printer, scanner, LCD projector and is manned by three teachers and connected with the world for the latest in information and technology.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="/" class="course-img" style="background-image: url(https://images.pexels.com/photos/2041540/pexels-photo-2041540.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500);">
						</a>
						<div class="desc">
							<h3><a href="/">Library</a></h3>
							<p>The school library is an active and well-equipped hub where the learner has maximum access and is catered to with diligent care. School is well connected with Wi-fi and the library is fully automated with AutoLib library software. Online web OPAC system is used for the searching of library resources.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Testimonials</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(https://i.pinimg.com/736x/be/9b/07/be9b07dba3cb61d407b7d400eea6b866.jpg);"></div>
									<span>Dulquer Salmaan<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;The courses offered at SB school meets international standards and are structured in the best possible way to benefit the students.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(https://www.fanfoot.org/wp-content/uploads/2020/08/35267/fahadh-faasil-wants-to-drive-uber-in-spain-post-his-retirement-who-would-like-to-board-this-ride.jpg);"></div>
									<span>Fahadh Faasil<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;learning for many generations. It has moulded the destiny of hundreds of people for a better tomorrow.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(https://th.bing.com/th/id/OIP.uedB2JtWdviHC2WC0XdjgwHaHa?pid=ImgDet&w=900&h=900&rs=1);"></div>
									<span>Sergio Marquina<br><small>professor</small></span>
									<blockquote>
										<p>&ldquo;The school works hard to develop the spritual, moral, intellectual, physical and aesthetic powers of its students so that they may be good citizens&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog &amp; Events</h2>
					<p>Check Here for latest events announcements and notices.</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>11<br>Feb.</span></div>
						<h3><a href="/">Mathematics Tournament</a></h3>
						<p>9th All Kerala Mathematics Tournament (11 & 12 Feb 2021)</p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>12<br>Aug.</span></div>
						<h3><a href="/student/admissionform">Admissions 2020</a></h3>
						<p> For Admissions to Plus One (2020)  vist <a href=https://hscap.kerala.gov.in/'>https://hscap.kerala.gov.in/</a></p><p>
						To Apply Online for Management Quota Admissions Click Here</p>
						<p><a href="/student/admissionform"></a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>22<br>Dec</span></div>
						<h3>Kite Victers</h3>
						<p><a href="https://victers.kite.kerala.gov.in/pages/">Victers Channel Live</a></p>
						<p><a href="https://play.google.com/store/apps/details?id=com.kite.victers&hl=en_IN">Download Victers App for Android</a></p>
						<p><a href="https://www.youtube.com/playlist?list=PLFMb-2_G0bMZ8CtVtNkxRT5wbsI-JZVR4">Class 12 Youtube Playlist of Online Classes</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="/" class="blog-img-holder" style="background-image: url(https://cdn3.vectorstock.com/i/1000x1000/31/87/teachers-day-greeting-card-back-to-school-vector-21873187.jpg);"></a>
						<div class="blog-text">
							<h3>Teachers' Day</h3>
							<span class="posted_on">Sep. 5th</span>
							<span class="comment"><a href="">25<i class="icon-speech-bubble"></i></a></span>
							<p>Teachers' Day is a special day for the appreciation of teachers, and may include celebrations to honor them for their special contributions in a particular field area, or the community in general.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="/" class="blog-img-holder" style="background-image: url(https://th.bing.com/th/id/Rc0125ff8adfe2a819007a1cab5fbfced?rik=qZeQPFCMe81jJQ&riu=http%3a%2f%2fwadi.tges.org%2fbeta%2fwp-content%2fuploads%2f2019%2f07%2fYoga_day_030-scaled.jpg&ehk=hzSIgqSs3Va3Vw8dOC6j1Y0U93vRc%2b4XKJKP2TQ3eCQ%3d&risl=&pid=ImgRaw);"></a>
						<div class="blog-text">
							<h3> International Yoga Day </h3>
							<span class="posted_on">June. 21st</span>
							<span class="comment">21<i class="icon-speech-bubble"></i></span>
							<p>International Yoga day at a glance The International Day of Yoga has been celebrated annually on 21 June since 2015 . Yoga is a physical, mental and spiritual practice which originated in India.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="/" class="blog-img-holder" style="background-image: url(https://static.vecteezy.com/system/resources/previews/000/192/380/non_2x/happy-international-women-s-day-vector.jpg);"></a>
						<div class="blog-text">
							<h3><a href="/">womens day
							</a></h3>
							<span class="posted_on">March. 8th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Women's Day 2020 Theme. The theme for International Women's Day of 2020 is "I am Generation Equality: Realizing Women's Rights, It is a day when Women are perceived for their accomplishments.</p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Instagram Gallery</span></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="/facilities" class="gallery" style="background-image: url(img/sciencelab3.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="/facilities" class="gallery" style="background-image: url(img/sport8.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="/facilities" class="gallery" style="background-image: url(img/sciencelab2.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="/facilities" class="gallery" style="background-image: url(img/sport6.jpg);"></a>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-5 fh5co-widget">
					<h3>About Education</h3>
					<p>St Berchmans Higher Secondary School is the first school of the Syrian Christians of Kerala. The school was founded in 1891, by Bishop Charles Levinge, the first Bishop of Changanacherry. It was established to impart sound education to students irrespective of caste or creed. It is the unique feature of S B that it was started as residential school.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Quick Links</h3>
					<ul class="fh5co-footer-links">
						<li><a href="/">home</a></li>
						<li><a href="/facilities">Facilities</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/about">About Us</a></li>
						<li><a href="/teacher">Student Support</a></li>
						
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Other Links</h3>
					<ul class="fh5co-footer-links">
						<li><a href="/student/slogin">Student Login</a></li>
						<li><a href="/auth/login">Faculty Login</a></li>
						<li><a href="/auth/login">Admin Login</a></li>
						<li><a href="/student/admissionform">Admission Form</a></li>
						<li><a href="/"></a></li>
					</ul>
				</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Tojo lawrence. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="/" target="_blank">Tojo lawrence</a> </small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="/" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

