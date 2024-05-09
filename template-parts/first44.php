<?php /* Template Name: first44 */
get_header();
?>



<style type="text/css">
    .page-template-first44 .bann-btm-right .lgo-are {
        padding: 30px 40px 30px;
    }
    @media (max-width:767px){
        .download-the-brochure {
            padding: 2px 20px;
        }
    }
    @media (max-width:390px){
        .download-the-brochure {
            padding: 2px 0;
        }
        .page-template-first44 .specification-main-are {
            padding: 70px 26px;
        }
    }

</style>

<?php
if (have_rows('top_banner_area')) :
    while (have_rows('top_banner_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" alt="Desktop" class="excess-desk">
                    <img src="<?= get_sub_field('phone_image'); ?>" alt="Phone" class="excess-phone">
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
                                    <img src="<?= get_sub_field('banner_bottom_right_image'); ?>">
                                </div>
                                <div class="pro-dtl-are" data-aos="zoom-in">
                                    <?php foreach (get_sub_field('profile') as $pro_det) : ?>
                                        <div class="pro-div">
                                            <div class="pro-img-mn">
                                                <img src="<?= $pro_det['pic']; ?>">
                                            </div>
                                            <div class="pro-div-cont">
                                                <h4><?= $pro_det['designation']; ?></h4>
                                                <p><?= $pro_det['name']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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
            <section class="abt_main_video">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="abt_video ctb-video-in" data-aos="zoom-in">
                                <video width="100%" height="100%" autoplay="" muted="" playsinline>
                                    <source src="<?= get_sub_field('video_file'); ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="sec-head videosec" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading'); ?></h2>

                                <?= get_sub_field('para_1'); ?>
                                <?= get_sub_field('para_2'); ?>
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
            <section class="main-img-slider desk" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
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
                        <?= get_sub_field('para_2'); ?>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="zoom-in">
                    <img src="<?= get_sub_field('main_image'); ?>" class="main">
                    <img src="<?= get_sub_field('phone_image'); ?>" class="phn-img">
                </div>
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading_2'); ?> </h2>

                        <?= get_sub_field('para_3'); ?>

                    </div>
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
                    <div class="interior-img-are">
                        <div class="intirior-in-img" data-aos="zoom-in">
                            <img src="<?= get_sub_field('image'); ?>">
                        </div>
                        <div class="img-ovr-cont" data-aos="zoom-in">
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
            <section class="specificatio-sec">
                <div class="container-fluid">
                    <div class="sec-head specificationne" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="specification-main-are" data-aos="zoom-in">
                        <ul>
                            <?php $count = 1;
                            foreach (get_sub_field('lists') as $specification) : ?>
                                <?php if ($count == 1 || $count == 15) : ?>
                                    <li ><span><?= !empty($specification['title']) ? $specification['title'] : ""; ?></span> <?= !empty($specification['value']) ? $specification['value'] : ""; ?></li>
                                <?php else : ?>
                                    <li><span><?= !empty($specification['title']) ? $specification['title'] : ""; ?></span> <?= !empty($specification['value']) ? $specification['value'] : ""; ?></li>
                                <?php endif; ?>
                            <?php $count++;
                            endforeach; ?>
                        </ul>
                        <!-- Adding Download the brochure -->
                        <?php if (!empty(get_sub_field('brochure_button_link'))) : ?>
                            <div class="download-the-brochure">
                                <a href="<?php the_sub_field('brochure_button_link'); ?>" target="_blank"><?php the_sub_field('brochure_button'); ?></a>
                            </div>
                        <?php endif; ?>
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
                        <?php foreach (get_sub_field('images') as $profile_box) : ?>
                            <div class="col-md-3">
                                <div class="profl-bx">
                                    <img src="<?= $profile_box['image']; ?>">
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
if (have_rows('boat_slider_area')) :
    while (have_rows('boat_slider_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

            <section class="boat-slider-sec">
                <div class="container-fluid">
                    <div class="boat-slider" data-aos="zoom-in">
                        <?php foreach (get_sub_field('slider_images') as $boat_slider) : ?>
                            <div class="item">
                                <div class="bx44img">
                                    <img src="<?= $boat_slider['image']; ?>">
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
                                <h2 class="tagline"><?= get_sub_field('heading') ?></h2>
                            </div>
                            <div class="col-md-12" data-aos="zoom-in">
                                <div class="virtual_img">
                                    <?= get_sub_field('iframe_source') ?>
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