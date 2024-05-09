<?php /* Template Name: oceains46.1 */
get_header();
?>
<style>
    .page-template-oceanis46-1 section.page-video-sec {
        padding-bottom: 40px;
    }


    @media(max-width:767px) {

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(1) {
            order: unset !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(2) {
            order: 1 !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(3) {
            order: unset !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(4) {
            order: 2 !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(5) {
            order: unset !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(6) {
            order: 3 !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(7) {
            order: unset !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(8) {
            order: 4 !important;
            padding-bottom: 0 !important;
        }

        .page-template-oceanis46-1 .specification-main-are ul li:nth-child(9) {
            order: unset !important;
            padding-bottom: 20px !important;
        }

        .page-template-oceanis46-1 .interior-main-sec .img-ovr-cont p {
            margin-top: -1px !important;
        }

    }
</style>
</style>
<?php
if (have_rows('banner_section_area')) :
    while (have_rows('banner_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_banner_image') ?>">
                    <!--<img src="<?= get_sub_field('mobile_banner_image') ?>">-->
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
                            <h1><?= get_sub_field('heading_one'); ?></h1>
                            <h2><?= get_sub_field('heading_two'); ?></h2>
                            <?= get_sub_field('paragraph'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="zoom-in">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?= get_sub_field('desktop_top_logo'); ?>">
                                    <!-- <img src="<?= get_sub_field('mobile_about_logo'); ?>"> -->
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('profile_detail') as $profile_detail) : ?>

                                        <div class="pro-div">
                                            <div class="pro-img-mn">
                                                <img src="<?= $profile_detail['image']; ?>">
                                            </div>
                                            <div class="pro-div-cont">
                                                <h4><?= $profile_detail['name']; ?></h4>
                                                <p><?= $profile_detail['designation']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="profile_con-in">
                                <img src="<?= get_sub_field('about_bottom_logo'); ?>" class="pro_img2" alt="">
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
                        <video width="100%" height="100%" autoplay muted playsinline>
                            <source src="<?= get_sub_field('video'); ?>" type="video/mp4">
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
                    <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                        <?php foreach (get_sub_field('desktop_slider') as $desktop_slider) : ?>
                            <div class="item">
                                <img src="<?= $desktop_slider['slider_image']; ?>">
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
                    <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                        <?php foreach (get_sub_field('mobile_slider') as $mobile_slider) : ?>
                            <div class="item">
                                <img src="<?= $mobile_slider['slider_image']; ?>">
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
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                        <?= get_sub_field('paragraph'); ?>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="zoom-in">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="main">
                    <img src="<?= get_sub_field('mobile_image'); ?>" class="phn-img">
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
                        <h2><?= get_sub_field('heading'); ?></h2>
                        <?= get_sub_field('paragraph'); ?>
                    </div>

                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in-img">
                            <img src="<?= get_sub_field('image'); ?>">
                        </div>
                        <div class="img-ovr-cont">
                            <h4><?= get_sub_field('heading_two'); ?></h4>
                            <?= get_sub_field('paragraph_two'); ?>
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
                    <div class="specification-main-are" data-aos="zoom-in">
                        <ul>
                            <?php $count = 1;
                            foreach (get_sub_field('specification_list') as $specification_list) : ?>

                                <li<?php if ($count == 5) : echo ' style=""';
                                    endif; ?>><span><?= $specification_list['list_tiltle']; ?></span> <?= $specification_list['list_value']; ?></li>
                                <?php $count++;
                            endforeach; ?>

                                <!-- <li style="border-color: transparent;"><span>Fuel tank capacity:</span> 52 US Gal</li> -->

                        </ul>
                        <!-- Adding Download the brochure -->
                        <?php if (!empty(get_sub_field('brochure_button_link'))) { ?>
                            <div class="download-the-brochure">
                                <a href="<?php the_sub_field('brochure_button_link'); ?>" target="_blank"><?php the_sub_field('brochure_button'); ?></a>
                            </div>
                        <?php } ?>
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

                    <div class="row">
                        <?php foreach (get_sub_field('profile_gallery') as $profile_gallery) : ?>
                            <div class="col-md-4">
                                <div class="profl-bx" data-aos="zoom-in">
                                    <img src="<?= $profile_gallery['image']; ?>">
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
if (have_rows('main_deck_area')) :
    while (have_rows('main_deck_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="boat-slider-sec">
                <div class="container-fluid">
                    <div class="boat-slider">
                        <?php foreach (get_sub_field('main_deck_slider') as $main_deck_slider) : ?>
                            <div class="item">
                                <div class="boat-slide-bx" data-aos="zoom-in">
                                    <div class="boat-slide-left">
                                        <img src="<?= $main_deck_slider['image']; ?>">
                                    </div>
                                    <div class="boat-slide-right headleft">
                                        <h2 class="tagline"><?= $main_deck_slider['heading']; ?></h2>
                                        <ul>
                                            <?php foreach ($main_deck_slider['main_deck_list'] as $main_deck_list) : ?>
                                                <li><?= $main_deck_list['list_text']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
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
                                    <?= get_sub_field('iframe_source'); ?>
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
<?php get_footer(); ?>