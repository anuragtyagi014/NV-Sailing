<?php
/* Template Name: swan 54 */
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
											<!-- <div class="pro-div">
									<div class="pro-img-mn">
										<img src="https://nvsailing.com/wp-content/uploads/2023/01/prffsssl.png">
									</div>
									<div class="pro-div-cont">
										<h4>INTERIOR <br> DESIGNER:</h4>
										<p>Heini Gustafsson</p>
									</div>
								</div> -->

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
		<?php
		if (have_rows('desktop_slider_section')) :
			while (have_rows('desktop_slider_section')) : the_row();
				if (get_row_layout() == 'all_content') :
		?>
					<section class="main-img-slider desk">
						<div class="container-fluid">
							<div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
								<?php foreach (get_sub_field('slider_image') as $desk_images) : ?>
									<div class="item">
										<img src="<?= $desk_images['image']; ?>">
									</div>
								<?php endforeach; ?>
								<!-- <div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54d2.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54d3.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54d4.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54d5.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54d6.png">
						</div> -->
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
								<!-- <div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54m1.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54m3.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54m4.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54m5.png">
						</div>
						<div class="item">
							<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54m6.png">
						</div> -->
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
								<!-- <p>The deck layout has been developed to meet two fundamental objectives: ensure corn- fortable sailing with limited crew and provide areas designed to best enjoy life onboard. The transom opens fully into a wide swim platform allowing direct access to the sea. The positioning of the mainsheet on the coachroof, rather than in the cockpit, allows the use of the wide bimini while sailing. The bimini, together with the sprayhood which is recessed and retractable, provides complete protection from the elements. The four standard electric winches in the cockpit, close to the helmsman, facilitate easy sailing with limited crew. The generous stowage volumes, including the sail locker in the bow and full lazarette in the stern area, enable all equipment, such as a RIB (inflatable), fenders and sails to be safely stowed yet remain easily accessible.</p> -->
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
								<!-- <p>Similar to the deck layout, the interior has been designed to ensure maximum comfort for long periods, both under sail and at anchor. This original configuration offers three double cabins, with the owner's cabin forward and two guest cabins, one central and the other aft. There is also a fourth cabin dedicated to systems and storage, including the generator and washing machine, with the possibility to add a work table so as to convert it into a crew cabin. A configuration perfectly suited for extended bluewater cruising and lengthy stays aboard. The saloon has a 'c' shaped sofa, which is three metres long, with a central table and two stylish chairs.</p> -->
								<?= get_sub_field('content_extra'); ?>
							</div>

							<div class="interior-img-are">
								<div class="intirior-in-img" data-aos="zoom-in">
									<img src="<?= get_sub_field('image'); ?>">
								</div>
								<div class="img-ovr-cont" data-aos="zoom-in">
									<!-- <p>This is the second generation of blue water cruising yachts, designed for Nautor. She has been refined in all departments and stands out in the crowd because of her design and the inherent quality of her construction.</p> -->
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
											<?php if ($spec_box['heading_top'] == 'RIG AND SAIL DIMENSIONS' || $spec_box['heading_top'] == 'SAIL AREAS' || $spec_box['heading_top'] == 'BATTERY') { ?>
												<!-- <li class="blank-li"><span></span> </li> -->
											<?php  } ?>
											<!-- <li><span>LOA: </span> 16.48 m 54.07 ft</li>
								<li><span>LWL: </span> 14.40 m 47.24 ft</li>
								<li><span>Beam max: </span> 4.75 m 15.58 ft </li>
								<li><span>Draught(light): </span> 2.44 m 8.01 ft</li>
								<li><span>Displacement(light):</span> 48.500 lbs</li>
								<li><span>Displacement(loaded): </span> 57.300 lbs</li>
								<li><span>Ballast,standard keel:</span> 8.200 kg 18.100 lbs</li>
								<li><span>Optional dagger board keel weight: </span> 22.400 lbs</li>
								<li><span>with twin rudders drought()light: </span> 4.59 ft/12.14 ft kg</li>
								<li><span>Engine Yanmar with folding propeller:</span> 81 kW 110 Hp</li> -->
										</ul>
									</div>
								</div>
							<?php endforeach; ?>
							<?php if (!empty(get_sub_field("download_brochure_link"))) : ?>
								<div class="download-the-brochure"> <a href="<?= get_sub_field('download_brochure_link'); ?>" target="_blank"><?= get_sub_field('download_brochure'); ?></a> </div>
							<?php endif; ?>
						</div>
					</section>


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
									<div class="col-md-4">
										<div class="two-im-in">
											<img src="<?= $profie_box['image']; ?>">
											<div class="textcont-in">
												<h4><?= $profie_box['title_cong']; ?></h4>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
								<!-- 						<div class="col-md-4">
							<div class="two-im-in">
								<img src="https://nvsailing.com/wp-content/uploads/2023/01/swan54-interior-01.png">
								<div class="textcont-in">
									<h4>STANDARD</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="two-im-in">
								<img src="https://nvsailing.com/wp-content/uploads/2023/01/1yytttchh.png">
								<div class="textcont-in">
									<h4>OPTIONS A</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="two-im-in">
								<img src="https://nvsailing.com/wp-content/uploads/2023/01/2yyytttchh.png">
								<div class="textcont-in">
									<h4>OPTIONS B</h4>
								</div>
							</div>
						</div> -->
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


<style type="text/css">
.page-template-swan-54 section.spec-sec-excss .spec-sec-ex {
	background: #0c2169;
	padding: 60px 70px;
	border-radius: 145px;
}

/*.page-template-swan-54 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) {
	height: 400px;
}*/


@media (min-width: 1601px) and (max-width: 1919px) {
.page-template-swan-54 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
	font-size: 23px;
	line-height: 27px !important;
}

.page-template-swan-54 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
	padding: 60px 40px;
}

.page-template-swan-54 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
	justify-content: start;
	align-items: center;
	display: grid;
}
}
@media (max-width: 1440px) {
.page-template-swan-54 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
	font-size: 14px;
}

.page-template-swan-54 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
	height: 240px;
}

/*.page-template-swan-54 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
	padding: 30px 30px;
	justify-content: start;
	align-items: center;
	display: grid;
}*/

/*.page-template-swan-54 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
	font-size: 16px;
	line-height: 24px !important;
}*/
}

@media (max-width: 1340px) {
/*.page-template-swan-54 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
	font-size: 15px;
	line-height: 23px !important;
}*/
}
@media (max-width: 1243px) {
/*.page-template-swan-54 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
	font-size: 17px;
}*/

/*.page-template-swan-54 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
	justify-content: start;
	align-items: center;
	display: grid;
}*/
}
@media (max-width: 1199px) {
/*.page-template-swan-54 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
	font-size: 16px;
	line-height: 27px !important;
}*/

}
@media (max-width:768px) {
.page-template-swan-54 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
	margin-bottom: 0px;
	font-size: 12px;
}
.page-template-swan-54 .page-template-EXCESS11 section.spec-sec-excss {
    padding: 40px 50px;
}

.page-template-swan-54 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) {
	height: auto !important;
}

.page-template-swan-54 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(1) span {
	display: inline-block !important;
}

.page-template-swan-54 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(2) span {
	display: inline-block !important;
}
}
@media (max-width: 767px){
.page-template-swan-54 .download-the-brochure {
    padding: 2px 30px;
}
.page-template-swan-54 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 17px;
}
}
@media (max-width: 390px){
.download-the-brochure {
    padding: 0 0px !important;
}
}
@media (max-width: 320px){
.page-template-swan-54 .download-the-brochure {
    padding: 2px 0px;
}
.page-template-swan-54 .download-the-brochure a {
    font-size: 14px !important;
    line-height: 20px;
}
}







</style>


<?php get_footer(); ?>