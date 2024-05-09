<?php
/* Template Name: SailBoat */

get_header(); ?>

<style>
    @media(max-width:767px) {

        .page-template-beneteau-template .specification-main-are ul li:nth-child(1) {
            order: unset !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(2) {
            order: 1 !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(3) {
            order: unset !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(4) {
            order: 2 !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(5) {
            order: unset !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(6) {
            order: 3 !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(7) {
            order: unset !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(8) {
            order: 4 !important;
            padding-bottom: 0 !important;
        }

        .page-template-beneteau-template .specification-main-are ul li:nth-child(9) {
            order: unset !important;
            padding-bottom: 20px !important;
        }

    }
</style>

<?php
if (have_rows('hero_section_area')) :
    while (have_rows('hero_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" alt="" class="excess-desk" />
                    <img src="<?= get_sub_field('mobile_image'); ?>" alt="" class="excess-phone" />
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
                            <h1><?= get_sub_field('about_content_heading'); ?></h1>
                            <h2><?= get_sub_field('about_content_heading_2'); ?></h2>
                            <p><?= get_sub_field('para'); ?></p>
                        </div>
                        <div class="bann-btm-right" data-aos="zoom-in">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?= get_sub_field('desktop_logo_image'); ?>" alt="">
                                    <!-- <img src="<?= get_sub_field('mobile_logo_image'); ?>" alt=""> -->
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('profile_details') as $profile_details) : ?>
                                        <div class="pro-div">
                                            <div class="pro-img-mn">
                                                <img src="<?php echo $profile_details['image']; ?>" class="pro_img" alt="">
                                            </div>

                                            <div class="pro-div-cont">
                                                <h4><?php echo $profile_details['name']; ?></h4>
                                                <p><?php echo $profile_details['designation']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="profile_con-in">
                                    <img src="<?php echo get_sub_field('bottom_imageone'); ?>" class="pro_img2" alt="">
                                    <img src="<?php echo get_sub_field('bottom_image_two'); ?>" class="pro_img" alt="">
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

<?php
if (have_rows('video_section_area')) :
    while (have_rows('video_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="page-video-sec">
                <div class="container-fluid">
                    <div class="video-main" data-aos="zoom-in">
                        <video width="100%" height="100%" autoplay muted playsinline loop>
                            <source src="<?= get_sub_field('video_source_link'); ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('desktop_slider_area')) :
    while (have_rows('desktop_slider_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="main-img-slider desk">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('image_list') as $image_list) : ?>
                            <div class="item">
                                <img src="<?php echo $image_list['images']; ?>">
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
if (have_rows('mobile_slider_area')) :
    while (have_rows('mobile_slider_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

            <section class="main-img-slider mob">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('image_list') as $image_list) : ?>
                            <div class="item">
                                <img src="<?php echo $image_list['images'] ?>">
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
if (have_rows('interior_section_area')) :
    while (have_rows('interior_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="exterior-main-sec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="sec-head" data-aos="zoom-in">
                            <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            <p> <?= get_sub_field('para'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="zoom-in">
                    <img src="<?= get_sub_field('image_desktop'); ?>" class="for_dec">
                    <img src="<?= get_sub_field('image_phone'); ?>" class="for_fon">
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('exterior_section_area')) :
    while (have_rows('exterior_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                        <p> <?= get_sub_field('para'); ?></p>
                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in-img">
                            <img src="<?= get_sub_field('left_interior_image'); ?>">
                        </div>
                        <div class="img-ovr-cont">
                            <p><?= get_sub_field('left_interior_content'); ?></p>
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
if (have_rows('specification_area')) :
    while (have_rows('specification_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="specificatio-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="specification-main-are">
                        <ul>
                            <?php foreach (get_sub_field('specification_list') as $specification_list) : ?>
                                <li><span><?= $specification_list['text']; ?></span> <?= $specification_list['value']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (!empty(get_sub_field('brochure_button_link'))) { ?>
                            <div class="download-the-brochure">
                                <a href="<?php the_sub_field('brochure_button_link'); ?>" target="_blank"><?php the_sub_field('brochure_button'); ?></a>
                            </div>
                        <?php } ?>
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
if (have_rows('profile_area')) :
    while (have_rows('profile_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="profiles-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>


                    <div class="row" data-aos="zoom-in">
                        <?php foreach (get_sub_field('main_profile_images') as $profile_images) : ?>
                            <div class="col-md-3">
                                <div class="profl-bx">
                                    <img src="<?= $profile_images['image']; ?>">
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

<?php
if (have_rows('deck_swiper_area')) :
    while (have_rows('deck_swiper_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="boat-slider-sec">
                <div class="container-fluid">
                    <div class="boat-slider" data-aos="zoom-in">
                        <?php foreach (get_sub_field('deck_slider') as $deck_slider) : ?>
                            <div class="item">
                                <div class="boat-slide-bx">
                                    <div class="boat-slide-left">
                                        <img src="<?php echo $deck_slider['image']; ?>">
                                    </div>
                                    <div class="boat-slide-right headleft">
                                        <h2 class="tagline"><?php echo $deck_slider['heading']; ?></h2>
                                        <ul>
                                            <?php foreach ($deck_slider['deck_list'] as $deck_list) : ?>
                                                <li><?php echo $deck_list['text']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('virtual_tour_area')) :
    while (have_rows('virtual_tour_area')) : the_row();
        if (get_row_layout() == 'all_content') :
            if (!empty(get_sub_field('iframe_source'))) :
?>
                <section class="virtual_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" data-aos="zoom-in">
                                <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            </div>
                            <div class="col-md-12" data-aos="zoom-in">
                                <div class="virtual_img">
                                    <?php echo get_sub_field('iframe_source'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<?php
            endif;
        endif;
    endwhile;
endif;
?>
<?php

get_footer();
?>