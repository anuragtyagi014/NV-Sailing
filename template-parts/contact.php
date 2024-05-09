<?php
/* Template Name: contact */
get_header(); ?>

<?php
if (have_rows('top_banner_section')) :
	while (have_rows('top_banner_section')) : the_row();
		if (get_row_layout() == 'all_content') :
?>
			<section class="top-bann-sec" data-aos="fade-up">
				<div class="img-are">
					<img src="<?= get_sub_field('image'); ?>" class="excess-desk">
					<img src="<?= get_sub_field('image'); ?>" alt="phone" class="excess-phone">
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
			<section class="about-sec">
				<div class="about-img">
					<img src="<?= get_sub_field('image'); ?>" class="cicleimg" alt="" data-aos="zoom-in">
				</div>
				<div class="about-cont">
					<h3><?= get_sub_field('heading'); ?></h3>
					<?= get_sub_field('para'); ?>
				</div>
			</section>
<?php
		endif;
	endwhile;
endif;
?>

<?php
if (have_rows('contact_form_shortcode_area')) :
	while (have_rows('contact_form_shortcode_area')) : the_row();
		if (get_row_layout() == 'all_content') :
?>
			<section class="formsec" data-aos="fade-down">
				<?php echo do_shortcode(get_sub_field('shortcode')); ?>
			</section>
<?php
		endif;
	endwhile;
endif;
?>

<?php
if (have_rows('subscription_form_area')) :
	while (have_rows('subscription_form_area')) : the_row();
		if (get_row_layout() == 'all_content') :
?>
			<section class="formsec bgsec" data-aos="fade-up">
				<div class="row p-0">
					<div class="col-md-5 p-0"></div>
					<div class="col-md-7 p-0">
						<h2><?= get_sub_field('heading'); ?></h2>
						<?= get_sub_field('para'); ?>
						<?php echo do_shortcode(get_sub_field('subscribe_newsletter_form')); ?>
					</div>
				</div>
			</section>
<?php
		endif;
	endwhile;
endif;
?>


<section class="formsec content">
	<div class="row">
		<?php
		if (have_rows('location_detail_area')) :
			while (have_rows('location_detail_area')) : the_row();
				if (get_row_layout() == 'all_content') :
		?>
					<div class="col-md-6" data-aos="zoom-in">
						<div class="confinfo">
							<h3><?= get_sub_field('heading'); ?></h3>
							<div class="address">
								<a href="<?= get_sub_field('address_link'); ?>"><?= get_sub_field('address_text'); ?></a>
							</div>
							<div class="address">
								<a href="<?= get_sub_field('phone_number_link'); ?>"><?= get_sub_field('phone_number_with_text'); ?></a>
							</div>
							<div class="address">
								<a href="<?= get_sub_field('fax_number_link'); ?>"><?= get_sub_field('fax_number_with_text'); ?></a>
							</div>
							<div class="address googlemap">
								<a target="_blank" href="<?= get_sub_field('google_map_link'); ?>"><?= get_sub_field('google_map_text'); ?> </a>
							</div>
						</div>
					</div>
		<?php
				endif;
			endwhile;
		endif;
		?>

		<?php
		if (have_rows('sales_contact_area')) :
			while (have_rows('sales_contact_area')) : the_row();
				if (get_row_layout() == 'all_content') :
		?>
					<div class="col-md-6" data-aos="zoom-in">
						<div class="Salsecon">
							<h3><?= get_sub_field('heading'); ?></h3>
							<?php foreach (get_sub_field('profile') as $profile) : ?>
								<div class="profl">
									<div class="imgprl">
										<img src="<?= $profile['image']; ?>">
									</div>
									<div class="textinfo">
										<h4><?= $profile['name']; ?></h4>
										<span><?= $profile['designation']; ?></span>
									</div>
								</div>
							<?php endforeach; ?>
							<!-- <div class="profl">
								<div class="imgprl">
									<img src="https://nvsailing.com/wp-content/uploads/2023/02/Image-14.png">
								</div>
								<div class="textinfo">
									<h4>Nayla Yared</h4>
									<span>Sailboat + Catamaran Sales</span>
								</div>
							</div>
							<div class="profl">
								<div class="imgprl">
									<img src="https://nvsailing.com/wp-content/uploads/2023/02/Mask-Group-7.png">
								</div>
								<div class="textinfo">
									<h4>Mitchell Myers</h4>
									<span>Sailboat Specialist</span>
								</div>
							</div> -->
						</div>
					</div>
		<?php
				endif;
			endwhile;
		endif;
		?>
	</div>
</section>


<?php
if (have_rows('location_detail_area')) :
    while (have_rows('location_detail_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="contachanges">
    <div class="row">
        <div class="col-lg-12">
            <img src="<?= get_sub_field('footer_logo'); ?>" alt="Logo"
            title="Nv Sailboat" class="nvsailimg">
        </div>
        <div class="col-lg-12">
            <div class="cerclebx">
                <h4><?= get_sub_field('heading'); ?></h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="addr">
                            <a href="<?= get_sub_field('address_link'); ?>"><?= get_sub_field('address_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="con">
                            <a href="tel:<?= get_sub_field('phone_number_link'); ?>"><?= get_sub_field('phone_number_with_text'); ?></a>
                            <a href="fax:<?= get_sub_field('fax_number_link'); ?>"><?= get_sub_field('fax_number_with_text'); ?></a>
                        </div>
                    </div>
                    <div class="address googlemap">
                        <a target="_blank" href="<?= get_sub_field('google_map_link'); ?>"><?= get_sub_field('google_map_text'); ?> </a>
                    </div>
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





<?php get_footer(); ?>