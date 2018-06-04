<?php require_once('shared/central_header.php'); $bb_page_name='CONTACT_US';?>
<?php   $this->minify->css(array('banners_style.css'));  $this->minify->deploy_css(TRUE,'minified_css/banners_style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/minified_css/banners_style.min.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<!-- Header -->
<?php require_once('shared/header.php'); ?>
<script type="text/javascript">
	var BB_PAGE_NAME='CONTACT_US';
</script>
<section>
	<!-- Sidebar -->
</section>
<!-- <div id="page-content-wrapper"> -->
<div style="background-color:#eeeded;">
<section class="red-background contact-details"  style="padding-top: 100px;">
	<div class="container">
		<div class="row top">
			<div class="col-md-12 col-lg-12 cl-sm-12 text-center">
				<h2>Our Marketing Team</h2>
			</div>
		</div>
		<div class="row bottom">
			<div class="col-md-8 contact-detail-card">
				<div><h5>Dhananjay.K</h5></div>
				<div class="contact-design">Marketing Manager (Banglore)</div>
				<div class="contact-tel">+95 7204561237</div>
			</div>
			<div class="col-md-4 contact-detail-card">
				<div><h5>Vinayak.H</h5></div>
				<div class="contact-design">Marketing Lead (Hubli)</div>
				<div class="contact-tel">+95 9195306975</div>
			</div>
			<div class="col-md-8 contact-detail-card">
				<div><h5>Abhay.O</h5></div>
				<div class="contact-design">Marketing Manager (Mangalore)</div>
				<div class="contact-tel">+95 9481927983</div>
			</div>
			<div class="col-md-4 contact-detail-card">
				<div><h5>Naveen.K</h5></div>
				<div class="contact-design">Marketing Lead (Belgaum)</div>
				<div class="contact-tel">+95 9844200849</div>
			</div>
			<div class="col-md-8 contact-detail-card">
				<div><h5>Rahul.H</h5></div>
				<div class="contact-design">Marketing Lead (Davangere)</div>
				<div class="contact-tel">+95 9480187592</div>
			</div>
		</div>
	</div>
	<style>
		.contact-details{
			color: #fff;
		}
		.contact-details .top{
			margin-bottom: 30px; 
		}
		.contact-details .contact-detail-card{
			margin-bottom: 20px;
		}
		.contact-details .contact-detail-card .contact-design{
			color: #ddd;
		}
		.contact-details .contact-detail-card .contact-tel{
			font-size: 16px;
		}
		.contact-details h5{
			font-size: 17px;
			font-weight: 500;
			color: yellow;
		}
		.contact-details .bottom{
			padding: 0 10%;
		}
		.survey .cta-btn button{
			background-color: rgba(0, 0, 0, 0.42);
		    color: #fff;
		    border: 1px solid #fff;
		    padding: 7px 50px;
		    font-size: 20px;
		}
	</style>
</section>
<section>
	<div class="black-background">
		<div class="contaier survey">	
			<h2 class="text-center">For more information check out our website</h2>
			<div class="cta-btn text-center">
				<button>adraja.in</button>
			</div>
		</div>
	</div>
</section>
	<section>
		<div class="container pad-30"> &nbsp;</div>
		<div class="container we-offer">
			<div class="row top">
			</div>
			<div class="bottom">
				<section id="section4" style="margin-bottom: 100px;">
					<div class="container" style="padding:30px;"> &nbsp;</div>
					<div class="container contact-us">
						<div class="card registration-card">
							<div class="row top">
								<div class="col-md-12 col-lg-12 cl-sm-12 text-center">
									<h2>Write to us</h2>
								</div>
							</div>
							<div class="bottom">
								<img id="loader" class="hidden" src="http://www.adraja.in/assets/img/loader.gif" alt="">
								<div id="after-submit" class="hidden">
									<img src="http://www.adraja.in/assets/img/logo-2.png" alt="" width="100px">
									<h3>Thank You..! Our Experts will get back to you soon...!!</h3>
								</div>
								<form id="patient_registration_form" class="form-horizontal">
									<fieldset>
										<div class="col-md-6 col-lg-6 col-sm-6 text-center">
											<div class="form-group is-empty">
												<!-- <label for="inputFirstName" class="col-md-2 control-label">First Name</label> -->
												<div class="col-md-10">
													<input type="text" class="form-control" name="first_name" id="inputFirstName" placeholder="First Name">
												</div>
												<span class="material-input"></span></div>
												<div class="form-group is-empty">
													<!-- <label for="inputPhone" class="col-md-2 control-label">Phone</label> -->
													<div class="col-md-10">
														<input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Phone">
													</div>
													<span class="material-input"></span></div>
												</div>
												<div class="col-md-6 col-lg-6 col-sm-6 text-center">
													<div class="form-group is-empty">
														<!-- <label for="inputEmail" class="col-md-2 control-label">Email</label> -->
														<div class="col-md-10">
															<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
														</div>
														<span class="material-input"></span></div>
														<div class="form-group">
															<!-- <label for="inputFirstName" class="col-md-2 control-label">Venture Name</label> -->
															<div class="col-md-10">
																<!-- <input type="text" class="form-control" name="subject_name" id="inputSubject" placeholder="Subject : Click here.."> -->
																<select onchange="HOME.loadSubjectContent(this.value)" class="form-control" name="subject_name" id="inputSubject" placeholder="Subject : Click here.."><option id="title">Subject : Click here..</option><option id="title-0" value="0">Hi guys, I’m an investor and would love to meet you!!</option><option id="title-1" value="1">I’m a billboard owner and I would love to share my details with you…</option><option id="title-2" value="2">I’m an webpage owner and I would like to share you details to put up ads…</option><option id="title-3" value="3">I’m a TV channel owner and note my details…</option><option id="title-4" value="4">I’m an owner of numerous poster boards, jot my details down…</option><option id="title-5" value="5">I’m print owner and I would like to take orders from your page…</option><option id="title-6" value="6">Im a designer and I design ads…</option><option id="title-7" value="7">Hi guys, I would love to hang out with you guys!!</option><option id="title-8" value="8">Hi, I’m a business owner and I’m searching for boards…</option><option id="title-9" value="9">I would love to meet you guys!! Let’s catch up over cup a coffee</option><option id="title-10" value="10">Others</option></select>
															</div>
															<span class="material-input"></span></div>
														</div>
														<div class="col-md-12">
															<div class="form-group is-empty">
																<!-- <label for="textArea" class="col-md-2 control-label">feedback</label> -->
																<div class="col-md-10">
																	<textarea class="form-control" rows="3" id="feedback" name="feedback" placeholder="Feedback"></textarea>
																	<span class="help-block">Please complete the pre filled form.</span>
																</div>
																<span class="material-input"></span></div>
															</div>
															<div class="col-md-12 col-xs-12 text-center submit-buttons">
																<button type="button" class="btn btn-default">Cancel</button>
																<button type="button" class="btn btn-primary" onclick="HOME.submitContactUs()">Submit</button>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
										</div>
										<div class="container" style="padding:30px;"> &nbsp;</div>
									</section>
								</div>
							</section>
							<section id="section5">
								<div class="container follow-us">
									<div class="row top">
										<div class="col-md-12 col-lg-12 cl-sm-12 text-center">
											<h3>Follow Us</h3>
										</div>
									</div>
									<div class="bottom">
										<div class="social-icons text-center"><a href="https://www.instagram.com/adraja.in"><img src="<?= base_url()?>assets/img/instagram.png" alt="<?= base_url()?>assets/img/instagram.png"></a></div>
										<div class="social-icons text-center"><a href="https://www.facebook.com/adraja.in"><img src="<?= base_url()?>assets/img/facebook.png" alt="<?= base_url()?>assets/img/facebook.png"></a></div>
										<div class="social-icons text-center"><a href="https://www.twitter.com/adraja_in"><img src="<?= base_url()?>assets/img/twitter.png" alt="<?= base_url()?>assets/img/twitter.png"></a></div>
									</div>
								</div>
							</section>
						</section>

						<footer class="text-center">
							adraja.in © 2016<br>
							<p> <address>
								Mail To: <a href="mailto:info@adraja.in">adraja team</a> (info@adraja.in).<br> 
							</address>
						</p>
						<p class="message">This website is still under development. Please follow us of facebook, twitter, instagram to keep you posted.</p>
						<p class="message">We are open to your suggestions and feedback.</p>
					</footer>
				</div>
				<?php require_once('shared/central_footer.php'); ?>

				<script>
					jQuery(document).ready(function(){
						jQuery('[data-toggle="tooltip"]').tooltip(); 
					});
				</script>