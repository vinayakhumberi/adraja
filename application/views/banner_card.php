<div id="banner-card-<?= $key ?>" class="banner-cards">
	<div data-toggle="collapse" data-target="#banner-card-more-<?= $key ?>">
		<?php if($key==0){ ?><img class="verified" src="<?= base_url() ?>assets/img/verified.png" alt="<?= base_url() ?>assets/img/verified.png"> <?php } ?>
		<div>
			<!-- Title of the card start -->
			<?php if($ads['type']=='printer'){ ?>
				<h4><?= $ads["print_name"] ?></h4>
				<?php }else if($ads['type']=='designer'){ ?>
					<h4><?= $ads["designer_name"] ?></h4>
					<?php }else{ ?>
						<h4><?= $ads["bill_name"] ?></h4>
						<?php } ?>
						<!-- Title of the card end -->
					</div>
					<div class="row">
						<!-- Main properties start -->
						<?php if($ads['type']=='printer'){ ?>
							<h4><?= $ads["print_name"] ?></h4>
							<?php }else if($ads['type']=='designer'){ ?>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-label">Happy customers</span> <span class="x-value"><?= $ads["happy_customers"] ?>+</span></div>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-label">Avg. time</span> <span class="x-value"><?= $ads["avg_time"] ?> hrs</span></div>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-label">Avg Price</span> <span class="x-value"><?= ($ads["price"])?number_format($ads["price"]):'N/A' ?></span></div>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-value x-cta"><button class="btn btn-raised" data-toggle="modal" data-target="#mail-<?= $key?>"><i class="material-icons">mail</i> Email</button></span></div>
								<?php }else{ ?>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-label">Dimensions</span> <span class="x-value"><?= $ads["dimensions"] ?> m</span></div>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-label">Direction</span> <span class="x-value"><?= $ads["direction"] ?></span></div>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-label">Avg Price</span> <span class="x-value"><?= ($ads["price"])?number_format($ads["price"]):'N/A' ?></span></div>
									<div class="col-md-3 col-sm-3 col-lg-3 x-rows"><span class="x-value x-cta"><button class="btn btn-raised"onclick="LISTING.listingOpenEmailPopup(event,'<?= $key ?>')"><i class="material-icons">mail</i> Email</button></span></div>
									<?php } ?>
									<!-- Main properites end -->
								</div>
							</div>

							<div  id="banner-card-more-<?= $key ?>" class="collapse">
								<div class="row" style="margin-top:100px;">
									<div class="col-md-4">
										<div id="banner-images-<?= $key?>" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#banner-images-<?= $key?>" data-slide-to="0" class="active"></li>
												<li data-target="#banner-images-<?= $key?>" data-slide-to="1"></li>
												<li data-target="#banner-images-<?= $key?>" data-slide-to="2"></li>
												<li data-target="#banner-images-<?= $key?>" data-slide-to="3"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<?php foreach ($ads["images"] as $img_key => $ad_img){ ?>
													<div class="item <?= ($img_key==0)?'active':' '; ?>">
														<img src="<?= $ad_img ?>" alt="<?= $ad_img ?>">
													</div>
													<?php } ?>
												</div>

												<!-- Left and right controls -->
												<!-- Left and right controls -->
												<a class="left carousel-control" href="#banner-images-<?= $key?>" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>										
													<span class="sr-only">Previous</span>
												</a>
												<a class="right carousel-control" href="#banner-images-<?= $key?>" role="button" data-slide="next">
													<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>										
													<span class="sr-only">Next</span>
												</a>
											</div>
										</div>
										<div class="col-md-8">
											<div class="col-md-6 col-sm-6 col-lg-6"><span class="x-label">Traffic</span> <span class="x-value">Moderate</span></div>
											<div class="col-md-6 col-sm-6 col-lg-6"><span class="x-label">Lighting</span> <span class="x-value">Front Light(3 nos)</span></div>

											<div class="col-md-6 col-sm-6 col-lg-6"><span class="x-label">Direction</span> <span class="x-value">Towards Bhanshankri</span></div>
											<div class="col-md-6 col-sm-6 col-lg-6"><span class="x-label">Average View Time</span> <span class="x-value">1-4 mins</span></div>

											<div class="col-md-12 col-sm-12 col-lg-12 call-btn-row"><span class="x-label"><a onclick="tel:+6494461709"><i class="material-icons">call</i> Call</a></div>

										</div>
									</div>
								</div>
							</div>