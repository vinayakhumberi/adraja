<?php require_once('shared/central_header.php'); $bb_page_name='HOME';?>
<?php   $this->minify->css(array('banners_style.css'));  $this->minify->deploy_css(TRUE,'minified_css/banners_style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/minified_css/banners_style.min.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<!-- Header -->
<?php require_once('shared/header.php'); ?>
<script type="text/javascript">
	var BB_PAGE_NAME='HOME';
</script>
<section>
	<!-- Sidebar -->
</section>
<!-- <div id="page-content-wrapper"> -->
<div>
	<section class="main-content">
		<!-- Main Content  -->
		<section id="section1" class="top">  
			<div class="fluid-container">
				<div class="jumbotron text-center">
					<div class="image-part">
						<img src="<?= base_url()?>assets/img/logo.png" alt="<?= base_url()?>assets/img/logo.png">
					</div>
					<div class="text-part">
						<h1 class="">Are you ready to plan <br>your outdoor advertisements? </h1>
						<div  class="switch-tabs">
							<div class="prime-content">
								<div class="dropdown">
									<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
									<button class="btn city-button dropdown-toggle" type="button" data-toggle="dropdown">Banglore
										<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">Hubli</a></li>
											<li><a href="#">Bangalore</a></li>
											<li><a href="#">Manglore</a></li>
										</ul>
									</div>
<!--                 <select name="city" id="city_select">null<option value="1">Bengaluru</option><option value="2">Hubli</option></select>
	<ul id="city-list"><option value="1">Bengaluru</option><option value="2">Hubli</option></ul> -->
	<div>
		<input type="text" class="text" placeholder="Type a Location: eg: Silkboard" onmouseover ="HOME.homeDisplaySearchAreaResults(true)" onmouseout ="HOME.homeDisplaySearchAreaResults(false)" onkeydown="HOME.homeLoadAreaSearchResults(this.value)">
		<ul id="search-result" onmouseover ="HOME.homeDisplaySearchAreaResults(true)" onmouseout ="HOME.homeDisplaySearchAreaResults(false)"></ul>
	</div>
</div>
</div>
</div>
<div class="scroll-down hide"><img src="<?= base_url()?>assets/img/cheveron-down.png" alt="<?= base_url()?>assets/img/cheveron-down.png" width="5%"></div>
<div class="main-cta"><button id="scrollDown">Explore</button></div>
</div>
</div>
</div>      
</section>
<section id="section2"  >
	<div class="container pad-30"> &nbsp;</div>
	<div class="container we-offer">
		<div class="row top">
			<div class="col-md-12 col-lg-12 cl-sm-12 text-center">
				<h2>Why Us?</h2>
			</div>
		</div>
		<div class="bottom">
			<div>
				<p>
					Adraja is borne out of a desire to simplify the buying process of outdoor advertisement and make it accessible to all business and at all locations. We are developing a unified platform where you will have the opportunity to access the multi environment billboard locations across the city. We offer you the best artwork designers and better analytics along with affordable and high quality commercial printing services to plan for an successful outdoor advertising campaign. We will be your on the go solution providers for all your advertising needs. <br><br>

					Our mission is to make the planning, purchase and execution of booking ad-spaces easier and more accessible. our vision is to be the single largest online platform to provide customized effective outdoor advertising campaign solutions.<br><br>

					In this age of internet, everyone desires to have a simple and hassle free solution at their fingertips. From ordering food online till booking a hotel for the night, everything has an online presence and is ease free. Our journey started, when we wanted to do an outdoor advertising campaign for a restaurant. It was a disastrous experience since no information was available online and the advertising agencies costed a hefty amount to manage. It was a very hard journey to find and manage billboard space, designers and printers. Thus, we started this journey to provide the helpful information and avoid the bumpy ride for all potentials to advertise.
				</p>
			</div>
		</div>
	</div>
	<div class="fluid-container">
		<div class="black-background">
			<div class="contaier survey">
				<div class="row">
					<div class="col-md-12">
						<h2>What do you think?</h2>
						<div id="survey-questions-1-ans" class="hide"><p>83%- People said yes, outdoor advertising does have a lasting impact on a brand and service<br>17%- People said No, outdoor advertising does not have any impact on a brand and service</p></div>
						<div id="survey-questions-1" class="survey-questions">
							<div><p id="question-survey-questions-1">Does outdoor advertising impact a brand and service?</p></div>
							<div class="">
							<button onclick="HOME.submitSurveyForm('survey-questions-1','yes')">Yes</button>
							<button onclick="HOME.submitSurveyForm('survey-questions-1','no')">No</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="four-points">
			<div class="col-md-6 pad-0 image">
				<img src="<?=base_url()?>assets/img/search.jpg" alt="<?=base_url()?>assets/img/search.jpg">
			</div>
			<div class="col-md-6 pad-0 description">
				<div class="info">
					<div class="title"><h3>Find what you want</h3></div>
					<div class="content">
						<p>The right advertising campaign starts by locating right regions to advertise. Our inventory of information helps you to find the right region with highest footfalls to advertise your service and brand.</p>
					</div>
				</div>
				<div id="survey-questions-11" class="query hidden-xs  hidden-sm"> <span id="question-survey-questions-11"> Does addressing the right customer help you in growth? </span>
				<button onclick="HOME.submitSurveyForm('survey-questions-11','yes')">Yes</button>
				<button onclick="HOME.submitSurveyForm('survey-questions-11','no')">No</button>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 pad-0 image hidden-sm hidden-md hidden-lg">
				<img src="<?=base_url()?>assets/img/analyze.jpg" alt="<?=base_url()?>assets/img/analyze.jpg">
			</div>
			<div class="col-md-6 pad-0 description"> 
				<div class="info">
					<div class="title"><h3>Know what your choosing</h3></div>
					<div class="content"><p>It is a good option to know where you are heading for. our statistical analysis helps you to create the right impact on your campaign.<br>&nbsp;</p></div>
				</div>
				<div id="survey-questions-12" class="query hidden-xs  hidden-sm"><span  id="question-survey-questions-12">Is it a good option to invest money into analytics?</span>
				<button onclick="HOME.submitSurveyForm('survey-questions-12','yes')">Yes</button>
				<button onclick="HOME.submitSurveyForm('survey-questions-12','no')">No</button>
				</div>
			</div>
			<div class="col-md-6 pad-0 image hidden-xs">
				<img src="<?=base_url()?>assets/img/analyze.jpg" alt="<?=base_url()?>assets/img/analyze.jpg">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 pad-0 image">
				<img src="<?=base_url()?>assets/img/print.jpg" alt="<?=base_url()?>assets/img/print.jpg">
			</div>
			<div class="col-md-6 pad-0 description">
				<div class="info">
					<div class="title"><h3>Forget all your micro works</h3></div>
					<div class="content"><p>Choose from  variety of designers based on their experience and specialties to create an everlasting impression for your advertising campaign. You can communicate with them to get your idea on to work.</p></div>
				</div>
				<div id="survey-questions-13"  class="query hidden-xs  hidden-sm"><span id="question-survey-questions-13">Do you agree that first impression is the last impression?</span>
				<button onclick="HOME.submitSurveyForm('survey-questions-13','yes')">Yes</button>
				<button onclick="HOME.submitSurveyForm('survey-questions-13','no')">No</button>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 pad-0 image   hidden-sm hidden-md hidden-lg">
				<img src="<?=base_url()?>assets/img/advertize.jpg" alt="<?=base_url()?>assets/img/advertize.jpg">
			</div>
			<div class="col-md-6 pad-0 description">
				<div class="info">
					<div class="title"><h3>Lets face the world together</h3></div>
					<div class="content"><p>Bring life to your advertising campaign, by printing the advertisement from a number of print houses available around you at a less cost and in less time. Ease yourself from waiting and just get it done.</p></div>
				</div>
				<div id="survey-questions-14"  class="query hidden-xs  hidden-sm"><span  id="question-survey-questions-14">Is it necessary option to keep changing your advertisements?</span>
				<button onclick="HOME.submitSurveyForm('survey-questions-14','yes')">Yes</button>
				<button  onclick="HOME.submitSurveyForm('survey-questions-14','no')">No</button>
				</div>
			</div>
			<div class="col-md-6 pad-0 image  hidden-xs">
				<img src="<?=base_url()?>assets/img/advertize.jpg" alt="<?=base_url()?>assets/img/advertize.jpg">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="black-background subscribe-main">
			<div class="contaier">
				<div class="subscribe">
					<div class="col-md-4 left">
						<h2>Get in touch with us !</h2>
						<p>Subscribe to unviel exciting offers, deals and much more.</p>
					</div>
					<div class="col-md-8 right"><input id="subscribe-email" type="text" placeholder="Enter your email"><button onclick="HOME.submitSubscribe()">Subscribe</button></div>
				</div>
			</div>
		</div>
		<div class="more-on">
			<div class="top col-md-12 col-lg-12 cl-sm-12 text-center">
				<h2>What you'll find in adraja</h2>
			</div>
			<div class="bottom col-md-12">
				<div class="col-md-6">
					<div class="points-card">
						<div id="point-1" class="points">
							<div>
								<img src="<?=base_url()?>assets/img/61.png" alt="">
							</div>
						</div>
						<div>
							<div class="title">
								Prespective Branding Analysis
							</div>
							<div class="content">We gather statistical data of every locality along with average peak time in the region, different segments of population, popular foot falls so that you can make your choice easily and wisely.</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="points-card">
						<div id="point-2" class="points">
							<div>
								<img src="<?=base_url()?>assets/img/62.png" alt="">
							</div>
						</div>
						<div>
							<div class="title">
								All in one place
							</div>
							<div class="content">
								Get all the information for your Ad needs. Updated contact details of billboard owners, designers and print houses.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="points-card">
						<div id="point-3" class="points">
							<div>
								<img src="<?=base_url()?>assets/img/63.png" alt="">
							</div>
						</div>
						<div>
							<div class="title">
								Real-time Alert System
							</div>
							<div class="content">
								Get personalized alerts for the validity of advertisement on your desired billboard and when you can avail it.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="points-card">
						<div id="point-4" class="points">
							<div>
								<img src="<?=base_url()?>assets/img/64.png" alt="">
							</div>
						</div>
						<div>
							<div class="title">
								Best price
							</div>
							<div class="content">
								Our customized and transparent pricing helps you to plan your outdoor campaign well within your budget.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="points-card">
						<div id="point-5" class="points">
							<div>
								<img src="<?=base_url()?>assets/img/65.png" alt="">
							</div>
						</div>
						<div>
							<div class="title">
								Ease of management
							</div>
							<div class="content">
								Coordinate, communicate and commit your campaign stress free. Easily find billboard owner, designers and printer contact details and book your campaign.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="points-card">
						<div id="point-6" class="points">
							<div>
								<img src="<?=base_url()?>assets/img/66.png" alt="">
							</div>
						</div>
						<div>
							<div class="title">
								Designer Portal
							</div>
							<div class="content">
								Have special requirements for your Ads? Talk to the designer directly from our dedicated portal. Share your creative ideas with the designers and bring them to live.
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
		<div class="black-background">
			<div class="contaier survey">
				<div class="row">
					<div class="col-md-12">
						<h2>What do you think?</h2>
						<div id="survey-questions-2-ans" class="hide"><p>68%- People said yes, it is good to have a customizable solution or an non-customizable solution<br>32%- People said No, it is not good to have a customizable solution or an non-customizable solution</p></div>
						<div  id="survey-questions-2" class="survey-questions">
							<div><p  id="question-survey-questions-2">Is it good to have a customizable solution or an non-customizable solution?</p></div>
							<div class="">
								<button onclick="HOME.submitSurveyForm('survey-questions-2','yes')">Yes</button>
								<button onclick="HOME.submitSurveyForm('survey-questions-2','no')">No</button
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="section4" style="margin-bottom: 100px;">
	<div class="container pad-30"> &nbsp;</div>
	<div class="container we-offer">
		<div class="row top">
			<div class="col-md-12 col-lg-12 cl-sm-12 text-center">
				<h2>Have Questions?</h2>
			</div>
		</div>
		<div class="bottom">
			<div class="container contact-us pad-30">
			<div id="htmltagcloud"> <span id="0" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">accessible</a></span> <span id="1" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">ad</a></span> <span id="2" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">ad-space</a></span> <span id="3" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">adraja</a></span> <span id="4" class="wrd tagcloud10"><a href="<?= base_url() ?>contact_us">advertising</a></span> <span id="5" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">along</a></span> <span id="6" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">analysis</a></span> <span id="7" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">available</a></span> <span id="8" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">best</a></span> <span id="9" class="wrd tagcloud4"><a href="<?= base_url() ?>contact_us">billboard</a></span> <span id="10" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">booking</a></span> <span id="11" class="wrd tagcloud4"><a href="<?= base_url() ?>contact_us">brand</a></span> <span id="12" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">bring</a></span> <span id="13" class="wrd tagcloud8"><a href="<?= base_url() ?>contact_us">campaign</a></span> <span id="14" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">choose</a></span> <span id="15" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">contact</a></span> <span id="16" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">cost</a></span> <span id="17" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">customized</a></span> <span id="18" class="wrd tagcloud6"><a href="<?= base_url() ?>contact_us">designers</a></span> <span id="19" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">desire</a></span> <span id="20" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">details</a></span> <span id="21" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">ease</a></span> <span id="22" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">easily</a></span> <span id="23" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">experience</a></span> <span id="24" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">houses</a></span> <span id="25" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">idea</a></span> <span id="26" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">impact</a></span> <span id="27" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">impression</a></span> <span id="28" class="wrd tagcloud3"><a href="<?= base_url() ?>contact_us">information</a></span> <span id="29" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">journey</a></span> <span id="30" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">locations</a></span> <span id="31" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">manage</a></span> <span id="32" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">marketing</a></span> <span id="33" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">needs</a></span> <span id="34" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">offer</a></span> <span id="35" class="wrd tagcloud3"><a href="<?= base_url() ?>contact_us">online</a></span> <span id="36" class="wrd tagcloud5"><a href="<?= base_url() ?>contact_us">outdoor</a></span> <span id="37" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">plan</a></span> <span id="38" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">platform</a></span> <span id="39" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">portal</a></span> <span id="40" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">price</a></span> <span id="41" class="wrd tagcloud3"><a href="<?= base_url() ?>contact_us">print</a></span> <span id="42" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">printer</a></span> <span id="43" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">provide</a></span> <span id="44" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">region</a></span> <span id="45" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">sales</a></span> <span id="46" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">service</a></span> <span id="47" class="wrd tagcloud4"><a href="<?= base_url() ?>contact_us">solution</a></span> <span id="48" class="wrd tagcloud2"><a href="<?= base_url() ?>contact_us">started</a></span> <span id="49" class="wrd tagcloud0"><a href="<?= base_url() ?>contact_us">statistical</a></span> </div>

			</div>
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

<!-- Modal -->
<div id="submit-subscribe-success" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>
      <div class="modal-body text-center">
      <img src="<?= base_url()?>assets/img/verified.png" alt="">
        <h4>Thank you for subscribing.</h4>
      </div>
      <div class="modal-footer text-center" style="text-align:center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
      </div>
    </div>

  </div>
</div>

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