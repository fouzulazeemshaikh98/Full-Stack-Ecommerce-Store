<?php
include("header.php");
?>

<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 ">
					<form id="contact-form" method="post" action="" role="form">

						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>

						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>

						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>

						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
						</div>

						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>

						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>

					</form>
				</div>
				<!-- ./End Contact Form -->

				<!-- Contact Details -->
				<div class="contact-details col-md-6 ">
					<div class="google-map">
						<div id="map"></div>
					</div>
					<ul class="contact-short-info">
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Riyadh Street 18 - Madina Solutions</span>
						</li>
						<li>
							<i class="tf-ion-android-globe"></i>
							<span><?php echo '+966 74993344' ?></span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: fouzulazeem98@gmail.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a>
							</li>
							<li><a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li><a href="#">
									<i class="tf-ion-social-dribbble-outline"></i>
								</a>
							</li>
							<li><a href="#">
									<i class="tf-ion-social-googleplus-outline"></i>
								</a>
							</li>
							<li><a href="#">
									<i class="tf-ion-social-pinterest-outline"></i>
								</a>
							</li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->



			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
<?php
include("footer.php");
?>