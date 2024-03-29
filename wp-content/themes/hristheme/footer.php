

<!-- footer section -->
<footer class="container-fluid">
	<section class="container ft" style="background: linear-gradient(105deg,rgba(246, 93, 104, 0.9) 0%,rgba(248, 172, 25, 0.9) 30% ,rgba(255,0,255, 0.9		) 76%); box-shadow: -1px 1px 5px -2px rgba(7, 1, 1, 0.352); border-radius:25px; ">
		<div class="ft-col container" style="max-width: 510px">
			<ul class="contacts">
				<li class="ft-logo"><a href="#" aria-label="footerlogo"><img src="<?php echo get_template_directory_uri(); ?>/img/d1logow.svg" alt="logo"
							style="width: 6rem;"></a>
				</li>
				<li >
					<p class="footer-company-about" >
					Day1 is an end-to-end HRIS solution designed to provide effective and efficient management of employee activities and over all performance. It not only ensures present, day to day operations run smoothly, but likewise positions the organization towards sustainable growth by ensuring a productive and highly motivated workforce.
					</p>
				</li>
			</ul>
		</div>
		<div class="ft-col container">
			<span class="ft-title col-space">What We Do</span>
			<ul class="contacts col-space">
				<li><a class="ft-ahr" href="<?=bloginfo('url');?>/#features" aria-label="about">Features</a></li>
				<li><a class="ft-ahr" href="https://in1gotech.com/partners/" aria-label="s" target="_blank" >Partners</a></li>
				<li><a class="ft-ahr" href="https://in1gotech.com/patrons/"  aria-label="s" target="_blank" >Clients</a></li>
				<li><a class="ft-ahr" href="https://in1gotech.com/blogs/"  aria-label="s" target="_blank" >Blogs</a></li>
				<li><a class="ft-ahr" href="<?=bloginfo('url');?>/demo/"  aria-label="contact us">Contact Us</a></li>
			</ul>

		</div>
		<div class="ft-col container">
			<span class=" ft-title">Connect With Us</span>
			<ul >
				<li>
					<div class="contacts ft-contacts " style="justify-content:flex-start;">
						<a class="ft-ahr" href="https://www.google.com/maps/place/In1Go+Technologies+Inc./@14.4481538,120.9922245,17z/data=!4m12!1m6!3m5!1s0x3397cf04d69589b7:0x378e5251d103adb7!2sLAS+PINAS+CARGO+COMPLEX!8m2!3d14.4481486!4d120.9944132!3m4!1s0x0:0x4b64607b8f930152!8m2!3d14.447798!4d120.9948852" id="map" aria-label="map" target="_blank" style="margin-top:.4rem;"><i class="fa fa-map-marker social-icons"
								style="border-radius: 20px; text-align: center;"></i></a>
						<a class="map-address ft-ahr" href="https://www.google.com/maps/place/In1Go+Technologies+Inc./@14.4481538,120.9922245,17z/data=!4m12!1m6!3m5!1s0x3397cf04d69589b7:0x378e5251d103adb7!2sLAS+PINAS+CARGO+COMPLEX!8m2!3d14.4481486!4d120.9944132!3m4!1s0x0:0x4b64607b8f930152!8m2!3d14.447798!4d120.9948852" id="address" aria-label="address" target="_blank">
							Las Pinas Cargo Complex J. Aguilar Avenue<br>Talon Uno,
							Las Pinas City, 1747,
							Philippines
						</a>
					</div>
				</li>
				<li>
					<div class="contacts ft-contacts" style="display:block">
						<a class="ft-ahr" href="tel:+63288143209" aria-label="phone" style="margin-top:.5rem;"> <i class="fa fa-phone social-icons"
								style="border-radius: 20px; padding: .7em"></i></a>
							<a class="ft-ahr" href="tel:+63288143209" id="number1" aria-label="contact number1" >+63 2 8814 3209</a>
							<br>
							<a class="number-left ft-ahr" href="tel:+63285118618" id="number2" aria-label="contact number2">+63 2 8511 8618</a>
					</div>
					<div class="contacts ft-contacts" style="justify-content:flex-start;">
						<a class="ft-ahr" href="mailto:customercare@in1go.com.ph" aria-label="email address" id="email"> <i class="fa fa-envelope social-icons"
								style="border-radius: 20px; padding: .7em; "></i></a>
						<a class="ft-ahr" href="mailto:customercare@in1go.com.ph" id="email" style="margin-left:2%; ">customercare@in1go.com.ph</a>
					</div>
				</li>
				<li>
					<div class="contacts ft-contacts solicons solicon">
						<a class="ft-ahr"  href="https://www.facebook.com/in1gotech/" aria-label="facebook profile"  target="_blank"  ><i class="fab fa-facebook-f social-icons"></i></a>
						<a class="ft-ahr" href="https://www.linkedin.com/company/in1gotech" target="_blank" aria-label="linkedin profile" >
							<i class=" fab fa-linkedin-in social-icons"></i></a>
						<a class="ft-ahr" href="https://www.youtube.com/channel/UCWu79HfXHYax8e-wnLhJU3g/videos"  target="_blank" aria-label="youtube profile"><i class="fab fa-youtube social-icons"></i></a>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<h6 class="toc"><span style=" font-weight: 500;">Copyright © 2022 day1.ph</span> | <a class="ft-ahr" href="https://in1gotech.com/privacy-policy/"target="_blank">Privacy Policy</a>
</h6>
</footer>
</body>
<?php wp_footer()?>
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "100677485664957");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v14.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</html>
<!-- footer section -->
