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
		<div class="fluid-container web-banner">
			<div class="text-center">
				<div id="web-tabs-billboard"  onclick="LISTING.listingSwitchTabs('billboard')" class="col-md-3 web-tabs <?= ($_GET['type']=='billboard')?'selected':'' ?>">
					<div class="circle">
						<img src="<?=base_url()?>assets/img/list-1.png" alt="">
					</div>
					<div class="title">
						Looking for a place to post your creative advertisements?
					</div>
				</div>
				<div  id="web-tabs-designer"  onclick="LISTING.listingSwitchTabs('designer')"  class="col-md-3 web-tabs <?= ($_GET['type']=='designer')?'selected':'' ?>">
					<div class="circle">
						<img src="<?=base_url()?>assets/img/list-2.png" alt="">
					</div>
					<div class="title">
						Looking for a designer who can ink your thoughts?
					</div>
				</div>
				<div id="web-tabs-printer"    onclick="LISTING.listingSwitchTabs('printer')" class="col-md-3 web-tabs">
					<div class="circle">
						<img src="<?=base_url()?>assets/img/list-3.png" alt="">
					</div>
					<div class="title">
						Looking for a printer who can print your designs?
					</div>
				</div>
				<div id="web-tabs-package"    onclick="LISTING.listingSwitchTabs('package')" class="col-md-3 web-tabs">
					<div class="circle">
						<img src="<?=base_url()?>assets/img/list-4.png" alt="">
					</div>
					<div class="title">
						Looking for a complete package of ad related consultants?
					</div>
				</div>
			</div>
		</div>
		<div class="container"  style="margin-top:50px;">
			<div class="row">
				<div id="listing-body" class="col-md-12">
				<?php foreach ($advertisement_list as $key => $ads){ ?>
					<?php $ads["type"]= (isset($_GET['type'])?$_GET['type']:'billboard'); ?>			
					<?php require('banner_card.php') ?>
				<?php } ?>

	<div class="text-center"><img src="http://localhost/bannerboy/assets/img/logo-2.png" alt="http://localhost/bannerboy/assets/img/logo-2.png" width="50px"></div>
				</div>
			</div>
		</div>
	</section>
</div>

<div id="mail-banner-card" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Send the card details to the below email</h4>
			</div>
			<div class="modal-body">
				<div class="form-group label-floating is-empty">
					<label for="111" class="control-label">email</label>
					<input type="email" class="form-control" id="mail-to-email">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="LISTING.listingEmailTheCard()">Save changes</button>
			</div>
		</div>
	</div>
</div>
<style>
	.web-banner{
	    margin-top: 50px;
	    background-color: #c42927;
	    height: 200px;
	    color: #fff;
	    padding-bottom: 16.4%;
	}
	.web-banner .web-tabs{
		padding: 4% 0;
		cursor: pointer;
	}
	.web-banner .web-tabs:hover{
		background-color: #9c1a18;
	}
	.web-banner .web-tabs.selected{
	    background: linear-gradient(to right bottom, #ad211f 50%, #8a1513 50%);
	}
	.web-banner .web-tabs .title{
		font-size: 14px;
		color: #fff;
		padding: 0 20px;
		margin-top: 8px;
	}
	.banner-cards{
		position: relative;
		padding: 20px; 
		margin-bottom: 10px; 
		cursor: pointer;
		background-color: #fff;
		box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.21);
	    border-left: 10px solid #c42927;
		transition: all 0.2s ease-in-out;
	}
	.banner-cards .verified{
		position: absolute;
		/*display: none;*/
	    top: -25px;
	    left: -7px; 
		width: 50px;
		height: 50px;
		z-index: -1;
	}
	.banner-cards:hover,.banner-cards.active{
		background-color: #fff;
		padding: 19px;
		margin-bottom: 20px;
		-webkit-box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);
		box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);
		transition: all 0.2s ease-in-out;
		border-radius: 2px;
		border: 0;
	    border-bottom: 5px solid #c42927;
	}
	.banner-cards h4{
		color: #333;
		font-size: 18px;
		font-weight: 500;
		line-height: 23px;
		margin-bottom: 7px;
		max-height: 46px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: normal;
		padding: 0px;
		margin-top: 0px;
	}
	.banner-cards .x-rows{
		border-right: 1px solid #eee;
	}
	.banner-cards .call-btn-row{
		text-align: center;
	    margin-top: 15%;
	}
	.banner-cards .call-btn-row a{
		background: #c42927;
	    border: none;
	    color: #fff;
	    font-size: 14px;
	    padding: 7px 50px;
	}
	.banner-cards .call-btn-row a i{
		vertical-align: bottom;
	}
	.banner-cards .x-label{
		color: #bebebe;
		font-size: 11px;
		letter-spacing: .3px;
		line-height: 20px;
		text-transform: uppercase;
	}
	.banner-images{
		/*position: fixed;*/
		padding: 60px;
		padding-top: 0px;
	}
	.banner-cards .x-value{
		color: #666;
		font-size: 16px;
		line-height: 20px;
		display: block;
	}
	.banner-cards .x-cta{
		text-align: center;
    	margin-top: -10px;
	}
	.banner-cards .x-value button{
	    background: #fbc423;
	    border: none;
	    color: #9c7a14;
	    font-size: 14px;
	    padding: 7px 50px;
	}
	.banner-cards .x-value button:hover{
	    background-color: #9c7a14!important;
		color: #fbc423;
	}
	.banner-cards .x-value button i{
		vertical-align: bottom;
	}
	.navbar-fixed-top{
		box-shadow: 0 1px 6px rgba(0,0,0,0.35);
	}
	body{
		background-color: #d8dfe2;
	}

	.carousel-control .glyphicon-menu-left, .carousel-control .glyphicon-menu-right{
		position: absolute;
	    top: 50%;
	    z-index: 5;
	    display: inline-block;
	}
</style>
<script>
	var BANNER_LIST={
		bannerListShowImages:function(){
			jQuery("#banner-images").toggleClass('show');
		}
	}
</script>
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
<script src="<?= base_url()?>assets/js/listing.js"></script>
<?php require_once('shared/central_footer.php'); ?>