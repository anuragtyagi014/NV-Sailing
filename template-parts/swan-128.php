<?php
/* Template Name: swan 128 */
get_header(); ?>


<section class="page-template-EXCESS14">
	<section class="page-template-EXCESS11">
		<?php
		if (have_rows('top_banner_area')) :
			while (have_rows('top_banner_area')) : the_row();
				if (get_row_layout() == 'all_content') :
		?>

					<section class="top-bann-sec">
						<div class="img-are">
							<img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk">
							<img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
						</div>
					</section>
		<?php
				endif;
			endwhile;
		endif;
		?>
		<?php
		if (have_rows('about_section_area')) :
			while (have_rows('about_section_area')) : the_row();
				if (get_row_layout() == 'all_content') :
		?>
					<section class="bann-btm-sec">
						<div class="container-fluid">
							<div class="row-in">
								<div class="bann-btm-left">
									<h1><?= get_sub_field('heading'); ?></h1>
									<h2><?= get_sub_field('heading_2'); ?></h2>
									<?= get_sub_field('para'); ?>
								</div>
								<div class="bann-btm-right" data-aos="zoom-in">
									<div class="bann-btm-right-in">
										<div class="lgo-are">
											<img src="<?= get_sub_field('profile_logo'); ?>">
										</div>
										<div class="pro-dtl-are">
											<?php if (have_rows('profile')) :
												while (have_rows('profile')) : the_row();
											?>
													<div class="pro-div">
														<div class="pro-img-mn">
															<img src="<?= get_sub_field('pic'); ?>">
														</div>
														<div class="pro-div-cont">
															<h4><?= get_sub_field('designation'); ?>:</h4>
															<p><?= get_sub_field('name'); ?></p>
														</div>
													</div>
											<?php
												endwhile;
											endif;
											?>
										</div>
									</div>
								</div>
							</div>
					</section>
		<?php
				endif;
			endwhile;
		endif;
		?>

		<section class="main-img-slider desk">
			<div class="container-fluid">
				<div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
					<?php
					if (have_rows('desktop_slider_section')) :
						while (have_rows('desktop_slider_section')) : the_row();
							if (get_row_layout() == 'all_content') :
					?>
								<?php foreach (get_sub_field('slider_image') as $desk_images) : ?>
									<div class="item">
										<img src="<?= $desk_images['image']; ?>">
									</div>
								<?php endforeach; ?>
				</div>
			</div>
		</section>
<?php
							endif;
						endwhile;
					endif;
?>

<?php
if (have_rows('mobile_slider_images')) :
	while (have_rows('mobile_slider_images')) : the_row();
		if (get_row_layout() == 'all_content') :
?>

			<section class="main-img-slider mob">
				<div class="container-fluid">
					<div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
						<?php foreach (get_sub_field('slider_image') as $phone_images) : ?>
							<div class="item">
								<img src="<?= $phone_images['image']; ?>">
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
<?php
		endif;
	endwhile;
endif;
?>
<?php
if (have_rows('interior_main_area')) :
	while (have_rows('interior_main_area')) : the_row();
		if (get_row_layout() == 'all_content') :
?>
			<section class="exterior-main-sec">
				<div class="container-fluid">
					<div class="sec-head" data-aos="zoom-in">
						<h2><?= get_sub_field('heading'); ?></h2>
						<?= get_sub_field('para_1'); ?>
					</div>
				</div>
				<div class="ext-img-are" data-aos="zoom-in">
					<img src="<?= get_sub_field('main_image'); ?>" class="main">
					<img src="<?= get_sub_field('phone_image'); ?>" class="phn-img">
				</div>
			</section>
<?php
		endif;
	endwhile;
endif;
?>
<?php
if (have_rows('exterior_main_section_area')) :
	while (have_rows('exterior_main_section_area')) : the_row();
		if (get_row_layout() == 'all_content') :

?>
			<section class="interior-main-sec">
				<div class="container-fluid">
					<div class="sec-head" data-aos="zoom-in">
						<h2><?= get_sub_field('heading_exter'); ?></h2>
						<?= get_sub_field('content_extra'); ?>
					</div>

					<div class="interior-img-are" data-aos="zoom-in">
						<div class="intirior-in-img">
							<img src="<?= get_sub_field('image'); ?>">
						</div>
						<div class="img-ovr-cont">
							<?= get_sub_field('para'); ?>
						</div>
					</div>
				</div>
			</section>
<?php
		endif;
	endwhile;
endif;

?>

<?php
if (have_rows('specifications_area')) :
	while (have_rows('specifications_area')) : the_row();
		if (get_row_layout() == 'all_content') :
?>

			<section class="spec-sec-excss">

				<div class="sec-head" data-aos="zoom-in">
					<h2><?= get_sub_field('heading'); ?></h2>
				</div>
				<div class="spec-sec-ex" data-aos="zoom-in">
					<?php foreach (get_sub_field('lists') as $spec_box) :  ?>
						<div class="spec-box">
							<h4><?= $spec_box['heading_top']; ?></h4>
							<div class="spec-line">
								<ul>
									<?php foreach ($spec_box['lists_rep'] as $spec_list) :  ?>
										<li><span><?= $spec_list['title']; ?> <?php if ($spec_list['title']) {
																					echo ':';
																				} else {
																				} ?> </span> <?= $spec_list['value']; ?></li>
									<?php endforeach; ?>

									<?php if ($spec_box['heading_top'] == 'BATTERY') { ?>
										<li class="blank-li"><span></span> </li>
									<?php  } ?>

									<!-- <li><span>Length of hull: </span> 38.98 m 127.89 ft</li>
								<li><span>Displacement (loaded) estimate: </span></li>
								<li><span>LWL: </span> 35.94 m 117.91 ft</li>
								<li><span></span>136.200 kg 300.200 lbs</li>
								<li><span>Beam max: </span> 8.65 m 28.38 ft</li>
								<li><span>Ballast estimate: </span> 39.500 kg 87.000 lbs</li>
								<li><span>Draught (Standard keel): </span> 4.7 m 15.42 ft</li>
								<li><span>Propulsion: </span> Sail drive/Shaft drive (option)</li>
								<li><span>Displacement(light) estimate:</span> </li>
								<li><span>Main engine:</span> 405 kW (550 hp)</li>
								<li><span></span>122.800 kg 270.700 lbs</li>
								<li><span>Estimated gross tonnage:</span> 175</li> -->
								</ul>
							</div>
						</div>
					<?php endforeach; ?>
					<?php if (!empty(get_sub_field("brochure_button_link"))) : ?>
						<div class="download-the-brochure"> <a href="<?= get_sub_field('brochure_button_link'); ?>" target="_blank"><?= get_sub_field('brochure_button'); ?></a> </div>
					<?php endif; ?>
					<!-- 					<div class="spec-box">
						<h4>RIG AND SAIL DIMENSIONS</h4>
						<div class="spec-line">
							<ul>
								<li><span>IG : </span> 48.00 m 157.05 ft</li>
								<li><span>P : </span> 47.50 m 155.8 ft</li>
								<li><span>J : </span> 15.37 m 50.4 ft</li>
								<li><span>E : </span> 14.60 m 47.9 ft</li>
							</ul>
						</div>
					</div>

					<div class="spec-box">
						<h4>SAIL AREAS</h4>
						<div class="spec-line">
							<ul>
								<li><span>Fore triangle : </span>  3368.9 m<sup>2</sup> 3970 sq.ft</li>
								<li><span>Jib (ORC): </span> 3401.5 m<sup>2</sup> 4321 sq.ft</li>
								<li><span>MMain Sail (ORC):</span> 3415.9 m<sup>2</sup> 4477 sq.ft</li>
								<li><span>MAsymmetric spinnaker:</span></li>
								<li><span></span></li>
								<li><span></span>31180 m<sup>2</sup> 12700 sq.ft TBC</li>
							</ul>
						</div>
					</div>
					<div class="spec-box">
						<h4>TANK CAPACITY</h4>
						<div class="spec-line">
							<ul>
								<li><span>Fuel : </span> 5500 | 1452 USg</li>
								<li><span>Hot water : </span> 200 | 53 USg</li>
								<li><span>AdBlue : </span> 550 | 145 USg</li>
								<li><span>Grey water : </span> 600 | 158 USg</li>
								<li><span>Water : </span> 2650 | 700 USg</li>
								<li><span>Black water : </span> 600 | 158 USg</li>
							</ul>
						</div>
					</div>
					<div class="spec-box">
						<h4>BATTERY</h4>
						<div class="spec-line">
							<ul>
								<li><span>Service battery : </span> 24 V 2530 Ah / 1h</li>
								<li><span>Diesel Generator : </span> 2 x 230/400 V 32 kW 3-phase</li>
								<li><span>Radio battery : </span> 24 V 230 Ah / 1 h</li>
								<li><span>Starting batteries : </span> 24 V 75 Ah / 20h</li>
								<li><span>Shore Power : </span> 230/400 V 50 A 3-phase</li>
								<li class="blank-li"><span></span> </li>
							</ul>
						</div>
					</div> -->

				</div>
			</section>

			<style type="text/css">
				.page-template-swan-128 section.spec-sec-excss .spec-sec-ex {
					background: #0c2169;
					border-radius: 145px;
				}
				.page-template-swan-128 .spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(2),
				.page-template-swan-128 .spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(9),
				.page-template-swan-128 .spec-sec-excss .spec-sec-ex .spec-box:nth-child(3) .spec-line ul li:nth-child(4) {
    				border-bottom: 0 !important;
				}
				@media (max-width:768px) {
					.page-template-swan-128 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
						margin-bottom: 0px;
					}
				}

				@media (max-width: 1199px) {
					.page-template-swan-128 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
						font-size: 16px;
						line-height: 27px !important;
					}

				}


				@media (max-width: 1440px) {
					.page-template-swan-128 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
						font-size: 17px;
					}

					.page-template-swan-128 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
						height: 240px;
					}

					.page-template-swan-128 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
						padding: 30px 30px;
						justify-content: start;
						align-items: center;
						display: grid;
					}

					.page-template-swan-128 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
						font-size: 16px;
						line-height: 24px !important;
					}
				}


				@media (max-width: 1243px) {
					.page-template-swan-128 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
						font-size: 17px;
					}

					.page-template-swan-128 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
						justify-content: start;
						align-items: center;
						display: grid;
					}
				}

				@media (min-width: 1601px) and (max-width: 1919px) {
					.page-template-swan-128 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
						font-size: 23px;
						line-height: 27px !important;
					}

					.page-template-swan-128 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
						justify-content: start;
						align-items: center;
						display: grid;
					}
				}
			</style>


<?php
		endif;
	endwhile;
endif;
?>
<?php
if (have_rows('profile_area')) :
	while (have_rows('profile_area')) : the_row();
		if (get_row_layout() == 'all_content') :
?>
			<section class="spec-sec-excss">
				<div class="sec-head" data-aos="zoom-in">
					<h2><?= get_sub_field('heading'); ?></h2>
				</div>
				<div class="container-fluid" data-aos="zoom-in">
					<div class="row">
						<?php foreach (get_sub_field('images') as $profie_box) : ?>
							<div class="col-md-6">
								<div class="two-im-in">
									<img src="<?= $profie_box['image']; ?>">
									<div class="textcont-in">
										<h4><?= $profie_box['title_cong']; ?></h4>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
<?php
		endif;
	endwhile;
endif;
?>
	</section>
</section>



<?php get_footer(); ?>