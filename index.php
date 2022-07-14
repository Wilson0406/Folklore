<?php
  $con = mysqli_connect('127.0.0.1','root','','folklore');
  if(!$con)
  {
	echo 'Not connected to server!!';
  }
  if(!mysqli_select_db($con,'folklore'))
  {
	echo 'Database is not selected!!';
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<title>FolkLore</title>


	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/folklore.css">
	<link rel="stylesheet" href="assets/css/owl-carousel.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->


	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="#top" class="logo">
							FolkLore
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">


							<li class="scroll-to-section"><a href="#about">About</a></li>
							<li class="scroll-to-section"><a href="#projects">Services</a></li>
							<li class="scroll-to-section"><a href="#testimonials">FAQS</a></li>

							<li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
							<li class="scroll-to-section"><a href="form.html">Register</a></li>
							<li class="scroll-to-section"><a href="login.html">Admin</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ***** Main Banner Area Start ***** -->
	<div class="main-banner header-text" id="top">
		<div class="Modern-Slider">
			<!-- Item -->

			<!-- // Item -->
			<div class="item">
				<div class="img-fill">
					<img src="https://images.unsplash.com/photo-1478641300939-0ec5188d3802?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZmVhdGhlciUyMHBlbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" height="400px" width="1000px" alt="">
					<div class="text-content">
						<h3 style="color:white;text-shadow: 2px 2px #000;"><b>POETS</b></h3>
						<h5 style="color:white;text-shadow: 2px 2px #000;"><b>Poetry speaks to us.</b></h5>
					</div>
				</div>
			</div>
			<!-- // Item -->
			<!-- Item -->
			<div class="item">
				<div class="img-fill">
					<img src="https://images.pexels.com/photos/5471676/pexels-photo-5471676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"  height="600px" width="600px" alt="">
					<div class="text-content">
						<h3 style="color:white;text-shadow: 2px 2px #000;"><b>ART</b></h3>
						<h5 style="color:white;text-shadow: 2px 2px #000;"><b>Brings imagination to life.</b></h5>
					</div>
				</div>
			</div>
			<!-- // Item -->
			<!-- Item -->
			<div class="item">
				<div class="img-fill">
					<img src="https://images.pexels.com/photos/941869/pexels-photo-941869.jpeg?auto=format&fit=crop&w=600&q=60" height="500px" width="1000px" alt="">
					<div class="text-content">
						<h3 style="color:white;text-shadow: 2px 2px #000;"><b>CUISINE</b></h3>
						<h5 style="color:white;text-shadow: 2px 2px #000;"><b>De le bonne Bouffe et de le bons Amis.<br><font size=3>(Good food and Good Friends)</font></b></h5>
					</div>
				</div>
			</div>
			<!-- // Item -->
			<!-- Item -->
			<div class="item">
				<div class="img-fill">
					<img src="https://images.pexels.com/photos/8711448/pexels-photo-8711448.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height="400px" width="1000px" alt="">
					<div class="text-content">
						<h3 style="color:white;text-shadow: 2px 2px #000;"><b></b></h3>
						<h5 style="color:white;text-shadow: 2px 2px #000;"><b></b></h5>
					</div>
				</div>
			</div>
			<!-- // Item -->
		</div>
	</div>
	<div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
	<!-- ***** Main Banner Area End ***** -->

	<!-- ***** About Area Starts ***** -->
	<section class="section" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="left-text-content">
						<div class="section-heading">
							<h6>About Us</h6>
							<h2>FolkLore</h2><br>
							<h5><i>We brings cultures together.<br>Art unites them.</i></h5>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="service-item">
									<img src="assets/images/all.png" alt="">
									<h4>Portable</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="service-item">
									<img src="assets/images/ass.png" alt="">
									<h4>Accessible</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="service-item">
									<img src="assets/images/team.png" alt="">
									<h4>Direct</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="service-item">
									<img src="assets/images/tick.png" alt="">
									<h4>Verified</h4>
								</div>
							</div>
							<div class="col-md-12">
								<a href="#features" class="main-button-icon">
									Swipe down<i class="fa fa-arrow-down"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="right-text-content">
						<p>Folklore is aimed at touching the lives of millions of people who are severely affected by unemployment and poverty due to the pandemic and seeks to unearth and spot the energy and creativity of local folk talented in various artforms through the proceeds of the talent hunt
						<br><br>
						It is a two way system. The interested people will enroll themselves on the site by creating an account. In order to be verified as a talented artist. they will upload a sample video to be verified by a panel of experts. Then they'll be able to browse through organizations and establish connection who are in need of such talented people
						<br><br>
						On one hand it provides a platform for talented from the remotest part of the country, belonging to the rural and semi-urban areas who otherwise do not have access to showcase their talent to the public. On the other hand, it helps organizations looking for talented people to perform on stages and ceremonies On mutual agreement, they can collaborate with them</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** About Area Ends ***** -->

	<!-- ***** Features Big Item Start ***** -->
	<center>
		<section class="section" id="features">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 50px over 0.6s after 0.4s">
						<div class="features-item">

							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<br><br><br><br><br>
										<h1>OUR MISSION</h1>
									</div>
									<div class="flip-card-back">
										<p><br><br>Cultural artists are now a go to option for stage, event performances in our country, but the people in rural areas miss out on such an opportunity because. of lack of outreach. We wish to use our platform to increase their reach and make them recognize</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
						<div class="features-item">
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<br><br><br><br><br>
										<h1>OUR VISION</h1>
									</div>
									<div class="flip-card-back">
										<p><br><br><br><br>Our idea is to connect the talented artists and the organisers that want to have them in their events and provide everyone with the opportunity they deserve.</p>
									</div>
								</div>
							</div>
	</center>
	</div>
	</div>

	</div>
	</div>
	</section>




	<!-- ***** Services Area Starts ***** -->
	<section class="section" id="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-heading">
						<h6>Our Services</h6>
						<h2>Services we can help with</h2>
					</div>
					<div class="filters">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".des">Folk Musician</li>
							<li data-filter=".gra">Folk Dancers</li>
							<li data-filter=".tsh">Regional Poets</li>
							<li data-filter=".dev">Specials</li>
							<li data-filter=".tgh">Others</li>

						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="filters-content">
						<div class="row grid">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
								<div class="item">
									<a href="https://images.pexels.com/photos/4551174/pexels-photo-4551174.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="
										https://images.pexels.com/photos/4551174/pexels-photo-4551174.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
								<div class="item">
									<a href="https://images.pexels.com/photos/190589/pexels-photo-190589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="https://images.pexels.com/photos/190589/pexels-photo-190589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
								<div class="item">
									<a href="
										https://images.pexels.com/photos/1701209/pexels-photo-1701209.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="
										https://images.pexels.com/photos/1701209/pexels-photo-1701209.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
								<div class="item">
									<a href="https://images.pexels.com/photos/8610533/pexels-photo-8610533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="https://images.pexels.com/photos/8610533/pexels-photo-8610533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
								<div class="item">
									<a href="http://www.gulftoday.ae/-/media/gulf-today/images/articles/news/2021/7/14/tagore-last-poem.ashx?h=500&w=750&hash=A4E83986E540561851F4E22231AE7286" data-lightbox="image-1" data-title="Our Projects"><img src="
										http://www.gulftoday.ae/-/media/gulf-today/images/articles/news/2021/7/14/tagore-last-poem.ashx?h=500&w=750&hash=A4E83986E540561851F4E22231AE7286" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
								<div class="item">
									<a href="https://images.pexels.com/photos/2561432/pexels-photo-2561432.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="https://images.pexels.com/photos/2561432/pexels-photo-2561432.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
								<div class="item">
									<a href="
										https://images.pexels.com/photos/2477357/pexels-photo-2477357.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="
										https://images.pexels.com/photos/2477357/pexels-photo-2477357.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tgh">
								<div class="item">
									<a href="https://images.pexels.com/photos/4253609/pexels-photo-4253609.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="https://images.pexels.com/photos/4253609/pexels-photo-4253609.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tgh">
								<div class="item">
									<a href="https://images.pexels.com/photos/6089654/pexels-photo-6089654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-lightbox="image-1" data-title="Our Projects"><img src="https://images.pexels.com/photos/6089654/pexels-photo-6089654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" height=200 width=100 alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Projects Area Ends ***** -->




	<!-- ***** Testimonials Starts ***** -->
	<section class="section" id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xs-12">
					<div class="left-text-content">
						<div class="section-heading">
							<h3><strong>FAQs</strong></h3>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="service-item">
									<h5>How to use this Portal?</h5><br>
									<p>The organizers will register themselves ether as individual or as company. The artists who are willing to perform will also register on website.</p>
								</div>
							</div>


							<div class="col-md-6 col-sm-6">
								<div class="service-item">
									<h5>What services we offer?</h5><br>
									<p>We offer a wide range of services ranging from Folk Artist Musicians. Regional Poets. Other cultural Art forms & a few other cultural highlights.</p>
								</div>
							</div>

						</div>
					</div>

				</div>
				<div class="col-lg-6 col-md-12 col-xs-12">
					<div class="right-text-content">
						<br><br><br><br><br><br><br><br><br>
						<img src="assets/images/faq.jpeg" height="220px" width="500px">
					</div>
				</div>

			</div>

	</section>
	<!-- ***** Testimonials Ends ***** -->

	<!-- ***** Features Big Item Start ***** -->
	<section class="section" id="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="section-heading">
						<h2>Still got questions?</h2><br><br><br>
					</div>
					<div class="subscribe-content">

						<div class="subscribe-form">
							<form id="subscribe-now" action="" method="get">
								<div class="row">
									<div class="col-md-8 col-sm-12">
										<fieldset>
											<input name="text" type="text" name="query" id="email" placeholder="Enter your query..." required="">
										</fieldset>
									</div>
									<div class="col-md-4 col-sm-12">
										<fieldset>
											<button type="submit" id="form-submit" class="main-button">Post Query</button>
										</fieldset>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Big Item End ***** -->


	<!-- ***** Contact Us Area Starts ***** -->
	<section class="section" id="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="left-text-content">
						<div class="section-heading">
							<h6>Contact Us</h6>
							<h2>Feel free to keep in touch with us!</h2>
						</div>
						<ul class="contact-info">
							<li><img src="assets/images/contact-info-01.png" alt="010-020-0860">010-020-0860</li>
							<li><img src="assets/images/contact-info-02.png" alt="">FolkLore@gmail.com</li>
							<li><img src="assets/images/contact-info-03.png" alt="">www.FolkLore.com</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-xs-12">
					<div class="contact-form">
						<form id="contact" action="contactus.php" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<fieldset>
										<input name="name" type="text" id="name" placeholder="Your Name *" required="">
									</fieldset>
								</div>
								<div class="col-md-6 col-sm-12">
									<fieldset>
										<input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
									</fieldset>
								</div>
								<div class="col-md-6 col-sm-12">
									<fieldset>
										<input name="email" type="text" id="email" placeholder="Your Email *" required="">
									</fieldset>
								</div>
								<div class="col-md-6 col-sm-12">
									<fieldset>
										<input name="subject" type="text" id="subject" placeholder="Subject">
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<button type="submit" id="form-submit" class="main-button-icon" name="submit">Send Message Now <i class="fa fa-arrow-right"></i></button>
									</fieldset>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Contact Us Area Ends ***** -->

	<!-- ***** Footer Start ***** -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xs-12">
					<div class="left-text-content">

						<p><b><a href="https://wilsonvd.me" target="blank">Wilson VD</a></b> Founder and CEO<br>
							<b>Rishank Pratik</b> Chairman and CTO<br>
							<br> Copyright &copy; 2022 FolkLore Co. Ltd.


						</p>

					</div>
				</div>
				<div class="col-lg-6 col-xs-12">
					<div class="right-text-content">

						<ul class="social-icons">
							<p>
								<li>
									<br>Follow Us&nbsp;&nbsp;
								</li>
								<li><a rel="nofollow" href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
								<li><a rel="nofollow" href="https://twitter.com/?lang=en" target="blank"><i class="fa fa-twitter"></i></a></li>
								<li><a rel="nofollow" href="https://www.linkedin.com/feed/" target="blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a rel="nofollow" href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>
								<li><a rel="nofollow" href="https://www.github.com/wilson0406" target="blank"><i class="fa fa-github"></i></a></li>
							</p>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/owl-carousel.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/imgfix.min.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/lightbox.js"></script>
	<script src="assets/js/isotope.js"></script>

	<!-- Global Init -->
	<script src="assets/js/custom.js"></script>

	<script>
		$(function() {
			var selectedClass = "";
			$("p").click(function() {
				selectedClass = $(this).attr("data-rel");
				$("#portfolio").fadeTo(50, 0.1);
				$("#portfolio div").not("." + selectedClass).fadeOut();
				setTimeout(function() {
					$("." + selectedClass).fadeIn();
					$("#portfolio").fadeTo(50, 1);
				}, 500);

			});
		});
	</script>

</body>

</html>