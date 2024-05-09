<?php
/*
Template Name: Beneteau oceanis Template
*/
get_header();
?>
<!-- Hero Section Start -->

<section class="hero_section">
  <img src="<?= the_field('banner_image'); ?>" alt="" class="hero_bg-image" />
</section>

<!-- Hero Section End -->

<div class="social-media">
  <?php if (get_field('social_media', 'options')) : ?>
    <?php while (the_repeater_field('social_media', 'options')) : ?>
      <a class="mb-2" href="<?= the_sub_field('link'); ?>"><i class="fa-brands <?= the_sub_field('icon'); ?>"></i></a>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<!-- all boats under category start -->
<section class="all-boats pb-5">
  <div class="container">
    <div class="main-category-img">
      <img class="img-fluid" src="<?= the_field('beneteau_oceanis_logo'); ?>" alt="" />
    </div>
    <div class="main-category-text">
      <h2><?= the_field('main_heading'); ?></h2>
      <?= the_field('content'); ?>
    </div>
    <div class="row m-0">
      <?php
      if (have_rows('oceanis_list')) :
        while (have_rows('oceanis_list')) : the_row();
          if (get_row_layout() == 'all_content') :
      ?>
              <div class="col-lg-6 col-md-12">
                <div class="item-wrapper">
                    <div class="swan-list-each">
                      <a href="<?= !empty(get_sub_field('button_link')) ? get_sub_field('button_link') : "#"; ?>">
                        <img src="<?= get_sub_field('image'); ?>">
                      </a>
                    </div>
                </div>
              </div>
      <?php
          endif;
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>



<style type="text/css">

.all-boats .col-lg-6.mb-5 {
    padding: 0 24px;
    text-align: left;
}

.swan-list-each {
    margin-bottom: 40px !important;
}
.swan-list-each {
    margin-bottom: 40px !important;
    padding: 0;
}
.swan-list-each img {
    width: 100%;
}
.all-boats .col-lg-6.col-md-12 {
    padding: 0 24px;
    text-align: left;
}

</style>


<?php get_footer(); ?>