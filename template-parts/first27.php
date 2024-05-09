<?php /* Template Name: first27 */
get_header();
?>
<style>
    .page-template-first27 .excess-360-view53 {
        padding-top: 50px;
    }

    .page-template-first27 section.excess-360-view53 .excess-iframe-sec iframe {
        overflow: hidden !important;
        height: 70vh;
        border: 0 !important;
        width: 100%;
    }
    @media (max-width:767px){
        .download-the-brochure {
            padding: 2px 20px;
        }
    }
    @media (max-width:390px){
        .download-the-brochure {
            padding: 2px 6px;
        }
    }
</style>
<?php
if (have_rows('top_banner_section')) :
    while (have_rows('top_banner_section')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" alt="desktop" class="excess-desk">
                    <img src="https://nvsailing.com/wp-content/uploads/2023/02/headerfirst27m.png" alt="phone" class="excess-phone">
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
        if (get_row_layout() == "all_content") :
?>
            <section class="bann-btm-sec">
                <div class="container-fluid">
                    <div class="row-in">
                        <div class="bann-btm-left">
                            <h1><?= get_sub_field('heading'); ?></h1>
                            <h2><?= get_sub_field('heading_2'); ?></h2>
                            <?= get_sub_field('para'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="fade-down">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?= get_sub_field('logo'); ?>">
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('right_banner') as $pro_det) : ?>
                                        <div class="pro-div">
                                            <div class="pro-div-cont">
                                                <h4><?= $pro_det['designation']; ?></h4>
                                                <p><?= $pro_det['name']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="profile_con-in" data-aos="fade-down">
                                <img src="<?= get_sub_field('image_1') ?>" class="">
                                <img src="<?= get_sub_field('image_2') ?>" class="">
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
        if (get_row_layout() == "all_content") :
?>
            <section class="abt_main_video">
                <div class="container">
                    <div class="abt_video ctb-video-in" data-aos="zoom-in">
                        <video width="100%" height="100%" autoplay muted playsinline loop>
                            <source src="<?= get_sub_field('file'); ?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="sec-head videosec" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>

                        <?= get_sub_field('para'); ?>
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
        if (get_row_layout() == "all_content") :
?>
            <section class="main-img-slider desk">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('slider_images') as $desk_slider) : ?>
                            <div class="item">
                                <img src="<?= $desk_slider['image']; ?>">
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
        if (get_row_layout() == "all_content") :
?>
            <section class="main-img-slider mob">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('slider_images') as $phone_slider) : ?>
                            <div class="item">
                                <img src="<?= $phone_slider['image']; ?>">
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
        if (get_row_layout() == "all_content") :
?>
            <section class="exterior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="fade-up">
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
if (have_rows('exterior_main_area')) :
    while (have_rows('exterior_main_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="interior-img-are 324" data-aos="zoom-in">
                        <div class="intirior-in-img">
                            <img src="<?= get_sub_field('image'); ?>">
                        </div>
                        <div class="img-ovr-cont" data-aos="fade-up">
                            <h2 class="tagline-tra"><?= get_sub_field('heading'); ?></h2>
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
if (have_rows('specification_area')) :
    while (have_rows('specification_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="specificatio-sec 424" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="sec-head specificationne">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="specification-main-are">
                        <ul>
                            <?php $count = 1;
                            foreach (get_sub_field('lists') as $specifications) : ?>
                                <li <?php if ($count == 10 || $count == 15 || $count == count(get_sub_field('lists'))) : echo 'style="border-color: transparent;"';
                                    endif; ?>><span><?= !empty($specifications['title']) ? $specifications['title'] : ""; ?></span> <?= !empty($specifications['value']) ? $specifications['value'] : ""; ?></li>
                            <?php $count++;
                            endforeach; ?>
                        </ul>
                        <?php if (!empty(get_sub_field('button_link'))) : ?>
                            <div class="download-the-brochure">
                                <a href="<?php echo get_sub_field('button_link'); ?>" target="_blank"><?php echo get_sub_field('button_name'); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>


            <style type="text/css">
                @media(max-width:767px) {


                    .page-template-first27 .specification-main-are ul li {
                        flex-wrap: wrap;
                        padding-top: 0;
                        padding-bottom: 0;
                    }


                    .page-template-first27 .specification-main-are ul li:nth-child(1) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(2) {
                        order: 1 !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(3) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(4) {
                        order: 2 !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(5) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(6) {
                        order: 3 !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(7) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(8) {
                        order: 4 !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(9) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(10) {
                        order: 5 !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(11) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(12) {
                        order: 6 !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(13) {
                        order: unset !important;
                    }

                    .page-template-first27 .specification-main-are ul li:nth-child(14) {
                        order: 7 !important;
                    }

                    .page-template-first27 .specification-main-are ul {
                        display: flex;
                        margin: 0px;
                        padding: 0px;
                    }

                }
            </style>


<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('profile_area')) :
    while (have_rows('profile_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="profiles-main-sec" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="sec-head">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="profl-bx">
                                <img src="<?= get_sub_field('image'); ?>">
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
if (have_rows('virtual_tour')) :
    while (have_rows('virtual_tour')) : the_row();
        if (get_row_layout() == 'all_content') :
            if (!empty(get_sub_field('iframe_source'))) :
?>
                <section class="excess-360-view53">
                    <div class="container">
                        <div class="sec-head" data-aos="zoom-in">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="excess-iframe-sec" data-aos="zoom-in">
                            <?= get_sub_field('iframe_source'); ?>
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