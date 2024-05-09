<?php /* Template Name: oceains38.1 */
get_header();
?>
<?php
if (have_rows('hero_section_area')) :
    while (have_rows('hero_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk">
                    <img src="<?= get_sub_field('mobile_image'); ?>" class="excess-phone">
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
                            <h1><?php echo get_sub_field('about_content_heading'); ?></h1>
                            <h2><?php echo get_sub_field('about_content_heading_2'); ?></h2>
                            <?php echo get_sub_field('para'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="zoom-in">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?php echo get_sub_field('desktop_logo_image'); ?>">
                                    <!-- <img src="<?php echo get_sub_field('mobile_logo_image'); ?>"> -->
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('profile_details') as $profile_details) : ?>
                                        <div class="pro-div">
                                            <div class="pro-img-mn">
                                                <img src="<?php echo $profile_details['image']; ?>">
                                            </div>
                                            <div class="pro-div-cont">
                                                <h4><?php echo $profile_details['name']; ?></h4>
                                                <p><?php echo $profile_details['designation']; ?></p>
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
            <section class="page-video-sec">
                <div class="container-fluid">
                    <div class="video-main" data-aos="zoom-in">
                        <video width="100%" height="100%" autoplay muted playsinline>
                            <source src="<?php echo get_sub_field('video_source_link'); ?>" type="video/mp4">
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
                    <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
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
if (have_rows('interior_section_area')) :
    while (have_rows('interior_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="exterior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?php echo get_sub_field('heading'); ?></h2>

                        <?php echo get_sub_field('para'); ?>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="zoom-in">
                    <img src="<?php echo get_sub_field('image_desktop'); ?>" class="main">
                    <img src="<?php echo get_sub_field('image_phone'); ?>" class="phn-img">
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
                        <h2><?php echo get_sub_field('heading'); ?></h2>

                        <?php echo get_sub_field('para'); ?>

                    </div>

                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in-img">
                            <img src="<?php echo get_sub_field('left_interior_image'); ?>">
                        </div>
                        <div class="img-ovr-cont">
                            <h4><?php echo get_sub_field('left_interior_heading'); ?></h4>
                            <?php echo get_sub_field('left_interior_content'); ?>
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
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="specification-main-are" data-aos="zoom-in">
                        <ul>
                            <?php $count = 1;
                            foreach (get_sub_field('specification_list') as $specification_list) : ?>
                                <li <?php if ($count == 5 || $count == count(get_sub_field('specification_list'))) : echo 'style=""';
                                    endif; ?>><span><?php echo $specification_list['text'] ?></span> <?php echo $specification_list['value'] ?></li>
                            <?php $count++;
                            endforeach; ?>
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
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                    </div>

                    <div class="row" data-aos="zoom-in">
                        <?php foreach (get_sub_field('main_profile_images') as $main_profile_images) : ?>
                            <div class="col-md-3">
                                <div class="profl-bx">
                                    <img src="<?php echo $main_profile_images['image']; ?>">
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
                    <div class="boat-slider">
                        <?php foreach (get_sub_field('deck_slider') as $deck_slider) : ?>
                            <div class="item" data-aos="zoom-in">
                                <div class="boat-slide-bx">
                                    <div class="boat-slide-left">
                                        <img src="<?php echo $deck_slider['image']; ?>">
                                    </div>
                                    <div class="boat-slide-right">
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
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<?php
if (have_rows('virtual_tour_section')) :
    while (have_rows('virtual_tour_section')) : the_row();
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