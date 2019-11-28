<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'css.php'; ?>
</head>
<body>
	<div class="contact">
		<?php include 'header.php';?>
		<section class="contact-header">
			<h1>Contact Us</h1>
		</section>
		<section class="contact-body">
			<div class="container">
				<div class="row mt-50 mb-35">
					<div class="col-md-7">
						<!--The div element for the map -->
						<!-- <div id="map"></div> -->
						<div class="contact-details mt-50">
							<div class="row">
								<div class="col-md-4 text-center">
									<span class="icon-phone-call"></span>
									<p class="mt-25"><a href="tel:+91 9739714051">+91 94-4973-4040</a></p>
								</div>
								<div class="col-md-4 text-center">
									<span class="icon-envelope"></span>
									<p class="mt-25"><a href="mailto:info@motostore.com">info@motostore.in</a></p>
								</div>
								<div class="col-md-4 text-center">
									<span class="icon-shop"></span>
									<p class="mt-25">Mon - Sat <br/> 09:00 - 18:30</p>
								</div>																
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="contact-form">
							<h3 class="text-center">Leave a Message</h3>
							<p class="text-center"><span class="icon-motorcycle"></span></p>
							<form id="motostoreContactForm" action="#" method="post" data-url="">

								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name" id="name" name="name" >
									<small class="text-danger form-control-msg">Your Name is Required</small>
								</div>

								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email" id="email" name="email" >
									<small class="text-danger form-control-msg">Your Email is Required</small>
								</div>

								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Phone" id="email" name="email" >
									<small class="text-danger form-control-msg">Your Phone Number is Required</small>
								</div>

								<div class="form-group">
									<textarea name="message" id="message" class="form-control" placeholder="Message" rows="5"></textarea>
									<small class="text-danger form-control-msg">A Message is Required</small>
								</div>

								<button type="submit" class="btn btn-default float-right">Send</button>
								<small class="text-info form-control-msg js-form-submission">Submission in process, please wait..</small>
								<small class="text-success form-control-msg js-form-success">Message Successfully submitted, thank you!</small>
								<small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</small>

							</form>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<?php include 'footer.php'; ?>
	</div>
<?php include 'js.php';?>
</body>
</html>