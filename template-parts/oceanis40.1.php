<?php /* Template Name: oceains40.1 */
get_header();
?>
<?php
if (have_rows('banner_section_area')) :
    while (have_rows('banner_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?php echo get_sub_field('desktop_banner_image') ?>">
                    <!-- <img src="<?php echo get_sub_field('mobile_banner_image') ?>"> -->
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
                            <h1><?php echo get_sub_field('heading_one'); ?></h1>
                            <h2><?php echo get_sub_field('heading_two'); ?></h2>
                            <?php echo get_sub_field('paragraph'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="zoom-in">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?php echo get_sub_field('desktop_top_logo'); ?>">
                                    <!-- <img src="<?php echo get_sub_field('mobile_about_logo'); ?>"> -->
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('profile_detail') as $profile_detail) : ?>
                                        <div class="pro-div">
                                            <div class="pro-img-mn">
                                                <img src="<?php echo $profile_detail['image']; ?>">
                                            </div>
                                            <div class="pro-div-cont">
                                                <h4><?php echo $profile_detail['name']; ?></h4>
                                                <p><?php echo $profile_detail['designation']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="profile_con-in" data-aos="zoom-in">
                                <img src="<?php echo get_sub_field('about_bottom_logo'); ?>" class="pro_img2" alt="">
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
                            <source src="<?php echo get_sub_field('video'); ?>" type="video/mp4">
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
                                <img src="<?php echo $desktop_slider['slider_image'] ?>">
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
                                <img src="<?php echo $mobile_slider['slider_image']; ?>">
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
                <div class="container-fluid" data-aos="zoom-in">
                    <div class="sec-head">
                        <h2><?php echo get_sub_field('heading'); ?></h2>

                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="zoom-in">
                    <img src="<?php echo get_sub_field('desktop_image'); ?>" class="main">
                    <img src="<?php echo get_sub_field('mobile_image'); ?>" class="phn-img">
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

                        <?php echo get_sub_field('paragraph'); ?>
                    </div>

                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in-img">
                            <img src="<?php echo get_sub_field('image'); ?>">
                        </div>
                        <div class="img-ovr-cont">
                            <h4><?php echo get_sub_field('heading_two'); ?></h4>
                            <?php echo get_sub_field('paragraph_two'); ?>
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<section class="specificatio-sec">
    <div class="container-fluid">

        <?php
        if (have_rows('forty_feet_area')) :
            while (have_rows('forty_feet_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?php echo get_sub_field('heading'); ?></h2>

                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
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
                    <div class="sec-head specificationne" data-aos="zoom-in">
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="specification-main-are" data-aos="zoom-in">
                        <ul>
                            <?php $count = 1;
                            foreach (get_sub_field('specification_list') as $specification_list) : ?>
                                <li <?php if ($count == 5) : echo ' style=""';
                                    endif; ?>><span><?php echo $specification_list['list_tiltle']; ?></span> <?php echo $specification_list['list_value']; ?></li>
                            <?php $count++;
                            endforeach; ?>
                        </ul>
                        <?php if (!empty(get_sub_field('brochure_button_link'))) { ?>
                            <div class="download-the-brochure">
                                <a href="<?php the_sub_field('brochure_button_link'); ?>" target="_blank"><?php the_sub_field('brochure_button'); ?></a>
                            </div>
                        <?php } ?>
                    </div>
        <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>
</section>

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
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="profl-bx">
                                <img src="<?php echo get_sub_field('profile_image'); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
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
if (have_rows('main_deck_area')) :
    while (have_rows('main_deck_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="boat-slider-sec">
                <div class="container-fluid">
                    <div class="boat-slider">
                        <?php foreach (get_sub_field('main_deck_slider') as $main_deck_slider) : ?>
                            <div class="item" data-aos="zoom-in">
                                <div class="boat-slide-bx">
                                    <div class="boat-slide-left">
                                        <img src="<?php echo $main_deck_slider['image']; ?>">
                                    </div>
                                    <div class="boat-slide-right headleft">
                                        <h2 class="tagline"><?php echo $main_deck_slider['heading']; ?></h2>
                                        <ul>
                                            <?php foreach ($main_deck_slider['main_deck_list'] as $main_deck_list) : ?>
                                                <li><?php echo $main_deck_list['list_text']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;  ?>
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
        if (get_row_layout() == "all_content") :
            if (!empty(get_sub_field('iframe_source'))) :
?>
                <section class="virtual_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            </div>
                            <div class="col-md-12">
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