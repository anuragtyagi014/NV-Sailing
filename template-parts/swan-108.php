<?php
/* Template Name: swan 108 */
get_header(); ?>
<style>



@media (max-width: 767px){
	.page-template-swan-108 .download-the-brochure {
	    padding: 2px 30px;
	}
	.page-template-swan-108 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 22px !important;
    line-height: 30px;
    padding: 0px 10px 0px;
}
.page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
    background: #0c2169;
    padding: 70px 60px;
    border-radius: 210px;
    text-align: center;
}
}





@media (max-width: 480px){
	.page-template-swan-108 .download-the-brochure a {
	    width: 100% !important;
	}
	.page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
	    padding: 70px 40px;
	}
}
@media (max-width: 390px){
	.page-template-swan-108 .download-the-brochure {
	    padding: 0 0px !important;
	}
}
@media (max-width: 375px){
	.page-template-swan-108 .download-the-brochure a {
	    width: 80%;
	}
}
@media (max-width: 320px){
	.page-template-swan-108 .download-the-brochure {
	    padding: 2px 0px;
	}
	.page-template-swan-108 .download-the-brochure a {
	    line-height: 22px;
	}
}
</style>

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
												<li><span><?= $spec_list['title']; ?> : </span> <?= $spec_list['value']; ?></li>
											<?php endforeach; ?>
											<?php if ($spec_box['heading_top'] == 'RIG AND SAIL DIMENSIONS' || $spec_box['heading_top'] == 'BATTERY') { ?>
												<li class="blank-li"><span></span> </li>
											<?php  } ?>

										</ul>
									</div>
								</div>
							<?php endforeach; ?>
							<?php if (!empty(get_sub_field("brochure_button_link"))) : ?>
								<div class="download-the-brochure"> <a href="<?= get_sub_field('brochure_button_link'); ?>" target="_blank"><?= get_sub_field('brochure_button'); ?></a> </div>
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

<style type="text/css">
	@media (max-width: 1440px) {
		.page-template-swan-108 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
			font-size: 17px;
		}

		.page-template-swan-108 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {

			height: 265px;
		}

		.page-template-swan-108 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
			padding: 30px 30px;
			justify-content: start;
		}
	}


	@media (max-width: 1243px) {
		.page-template-swan-108 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
			font-size: 17px;
		}
	}

	@media (max-width:768px) {
		.page-template-swan-108 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
			margin-bottom: 0px;
		}

		.page-template-swan-128 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(3) span {
			display: contents;
		}

		.page-template-swan-108 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
			font-size: 14px;
		}
	}

	@media (min-width: 1601px) {
		.page-template-swan-108 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
			font-size: 29px;
			line-height: 36px !important;
		}
	}
</style>

<?php get_footer(); ?>