<?php
/* Template Name: oceanis yacht */
get_header(); ?>

<?php
if (have_rows('hero_section_area')) :
	while (have_rows('hero_section_area')) : the_row();
		if (get_row_layout() == "all_content") :
?>
			<section class="hero_section">
				<img src="<?= get_sub_field('image'); ?>" alt="" class="hero_bg-image" />
			</section>
<?php
		endif;
	endwhile;
endif;
?>

<style type="text/css">
	.page-template-oceanis-yacht a.findoutmore {
    background-color: #f7f7f7;
    color: #0c2169;
    text-transform: uppercase;
}

@media (max-width:767px){
	.page-template-oceanis-yacht a.findoutmore {
    background-color: #f7f7f7;
    color: #0c2169;
    margin: 10px 0px;
    display: inline-block;
}
}
</style>

<section class="all-boats pb-5">
	<div class="container">
		<?php
		if (have_rows('main_category_image_area')) :
			while (have_rows('main_category_image_area')) : the_row();
				if (get_row_layout() == "all_content") :
		?>
					<div class="main-category-img">
						<img class="img-fluid" src="<?= get_sub_field('image'); ?>" alt="" />
					</div>
		<?php
				endif;
			endwhile;
		endif;
		?>
		<?php
		if (have_rows('main_category_text_area')) :
			while (have_rows('main_category_text_area')) : the_row();
				if (get_row_layout() == "all_content") :
		?>
					<div class="main-category-text">
						<!-- <?= get_sub_field('image'); ?> -->
						<p style="margin-bottom: 0px;color: #10256c !important;"><?= get_sub_field('para'); ?>
</p>
					</div>
		<?php
				endif;
			endwhile;
		endif;
		?>
		<?php
		if (have_rows('oceanis_models_section')) :
			while (have_rows('oceanis_models_section')) : the_row();
				if (get_row_layout() == "all_content") :
		?>
					<div class="row m-0">
						<?php foreach (get_sub_field('model_details') as $oceanis_model) : ?>
							<div class="col-lg-6 mb-5">
								<div class="item-wrapper" data-aos="zoom-in">
									<div class="position-relative">
										<a href="<?= $oceanis_model['find_out_more_button_link']; ?>">
												<img src="<?= $oceanis_model['image']; ?>">
										</a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
		<?php
				endif;
			endwhile;
		endif;
		?>
	</div>
</section>
<!-- Main End -->







<style>

.item-wrapper img {
    margin-bottom: 20px;
    width: 100%;
}

.all-boats .col-lg-6.mb-5 {
    padding: 0 24px;
    text-align: left;
}

</style>



<?php get_footer(); ?>