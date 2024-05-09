<?php
/* Template Name: Sailboat Template */
get_header();
?>
<style>
    .page-template-sailboat .freedom_heading {
        max-width: 100%;
    }

    .page-template-sailboat .hero_section video {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }

    .page-template-sailboat .hero_section {
        position: relative;
        overflow: hidden;
    }

    @media (max-width: 3200px) {
        .page-template-sailboat .freedom_heading-wrapper {
            width: 600px;
        }

        .page-template-sailboat .direction_img-title {
            font-size: 92px;
            line-height: 100px;
        }
    }

    @media (max-width: 2700px) {
        .page-template-sailboat .direction_img-title {
            font-size: 72px;
            line-height: 80px;
        }
    }

    @media (max-width: 2200px) {
        .page-template-sailboat .freedom_heading-wrapper {
            width: 500px;
        }

        .page-template-sailboat .direction_img-title {
            font-size: 55px;
            line-height: 75px;
        }
    }

    @media (max-width: 1919px) {
        .page-template-sailboat .freedom_heading-wrapper {
            width: 430px;
        }
    }

    @media (max-width: 1599px) {
        .page-template-sailboat .freedom_heading-wrapper {
            width: 370px;
        }
    }

    @media (max-width: 1440px) {
        .page-template-sailboat .freedom_heading {
            font-size: 42px;
        }

        .page-template-sailboat .freedom_heading-wrapper {
            width: 350px;
        }

        .page-template-sailboat .direction_img-title {
            font-size: 34px;
            line-height: 40px;
        }
    }

    @media (max-width: 1024px) {
        .page-template-sailboat .freedom_heading {
            font-size: 32px;
        }

        .page-template-sailboat .freedom_heading-wrapper {
            width: 290px;
        }
    }

    @media (max-width: 768px) {
        .page-template-sailboat .freedom_heading {
            font-size: 28px;
        }

        .page-template-sailboat .freedom_heading-wrapper {
            width: 260px;
        }

        .page-template-sailboat .direction_img-title {
            font-size: 22px;
            line-height: 30px;
        }

        .page-template-sailboat section.sectionpur {
            padding-top: 100px !important;
        }
    }

    @media (max-width: 767px) {
        .page-template-sailboat .hero_section video {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .page-template-sailboat .direction_img-title {
            font-size: 22px;
            line-height: 26px;
        }

        .page-template-sailboat section.sectionpur {
            padding-top: 90px !important;
        }
    }

    @media (max-width: 576px) {
        .page-template-sailboat section.sectionpur {
            padding-top: 0px !important;
        }
    }
</style>
<!-- Hero Section Start -->
<?php
if (have_rows('hero_area')) :
    while (have_rows('hero_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="hero_section">
                <!-- <img src="<?= get_sub_field('image'); ?>" alt="" class="hero_bg-image" /> -->
                <video width="100%" height="100%" autoplay="" muted="" playsinline="" loop="">
                    <source src="<?= get_sub_field('video'); ?>" type="video/mp4">
                </video>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<!-- Hero Section End -->

<!-- Freedom Section Start -->
<?php
if (have_rows('freedom_area')) :
    while (have_rows('freedom_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="freedom_section">
                <div class="freedom_container">
                    <div class="freedom_row">
                        <div class="freedom_heading-wrapper">
                            <h2 class="freedom_heading"><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="freedom_content">
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
<!-- Freedom Section End -->

<!-- Logo Strip section Start -->
<?php
if (have_rows('logo_strip_area')) :
    while (have_rows('logo_strip_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="logo-strip_section" data-aos="zoom-in">
                <div class="logo-strip_container">
                    <div class="logo-strip_row" data-aos="zoom-in">
                        <?php foreach (get_sub_field('logo_strip') as $logo_strip_item) : ?>
                            <div class="logo-strip_item">
                                <a href="<?= $logo_strip_item['link']; ?>">
                                    <img src="<?= $logo_strip_item['image']; ?>" alt="" />
                                </a>
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
<!-- Logo Strip section End -->

<!-- Direction Section Start -->
<?php
if (have_rows('direction_area')) :
    while (have_rows('direction_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="direction_section deskro" data-aos="zoom-in">
                <div class="direction_container" style="background-image:url('<?= get_sub_field('background_image'); ?>')">
                    <div class="direction_row">
                        <div class="direction_content" data-aos="zoom-in">
                            <h2 class="direction_title">
                                <?= get_sub_field('direction_title'); ?>.
                            </h2>
                            <div class="direction-graphic-wrapper">
                                <div class="direction_graphic">
                                    <?= get_sub_field('para'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="direction_img" data-aos="zoom-in">
                            <img src="<?= get_sub_field('image'); ?>" alt="" class="deskcircleimg">
                            <h2 class="direction_img-title">
                                <?= get_sub_field('image_title'); ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>

<?php
        endif;
    endwhile;
endif;
?>
<!-- Direction Section End -->

<!-- Direction Section Start -->
<?php
if (have_rows('direction_area')) :
    while (have_rows('direction_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="direction_section deskro for-mbl">
                <div class="direction_container" style="background-image:url('https://nvsailing.com/wp-content/uploads/2023/02/Mask-Group-17-min-1.png')">
                    <div class="direction_row">
                        <div class="direction_content" data-aos="fade-up">
                            <h2 class="direction_title">
                                <?= get_sub_field('direction_title'); ?>.
                            </h2>
                            <div class="direction-graphic-wrapper">
                                <div class="direction_graphic">
                                    <?= get_sub_field('para'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="direction_img" data-aos="fade-down">
                            <img src="<?= get_sub_field('image_mobile'); ?>" alt="" class="mobilecircleimg">
                            <h2 class="direction_img-title">
                                <?= get_sub_field('image_title'); ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>

<?php
        endif;
    endwhile;
endif;
?>
<!-- Direction Section End -->

<!-- Passage Section Start -->

<!-- Change Your Course Section Start -->
<?php
if (have_rows('change_your_course_area')) :
    while (have_rows('change_your_course_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="choose_section">
                <div class="freedom_container">
                    <div class="freedom_row">
                        <div class="freedom_heading-wrapper" data-aos="fade-up">
                            <h2 class="freedom_heading"><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="freedom_content" data-aos="fade-down">
                            <?= get_sub_field('para1'); ?>
                            <?= get_sub_field('para2'); ?>
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
                    <div class="imagesdemooldslider">
                        <img src="https://nvsailing.com/wp-content/uploads/2023/02/fcc.png" class="deskimgslide">
                        <img src="https://nvsailing.com/wp-content/uploads/2023/02/ddfsw.png" class="mobimgslide">
                    </div>
                    <!-- <div class="vrtcl-slider vrtcl-sliders">  -->
                    <?php // foreach (get_sub_field('desktop_swiper_images') as $desk_items_home) : 
                    ?>
                    <div class="item">
                        <!-- <img src="<?= $desk_items_home['desktop_image_sliderarea']; ?>"> -->
                    </div>
                    <?php // endforeach; 
                    ?>
                    <!--  </div> -->
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<?php
// if (have_rows('mobile_slider_area')) :
// while (have_rows('mobile_slider_area')) : the_row();
//   if (get_row_layout() == 'all_content') :
?>

<!-- <section class="main-img-slider mob">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders" >
                        <?php // foreach (get_sub_field('mobile_swiper_images') as $mobile_items_home) : 
                        ?>
                            <div class="item">
                                <img src="<?= $mobile_items_home['mobile_image_sliderarea']; ?>">
                            </div>
                        <?php // endforeach; 
                        ?>
                    </div>
                </div>
            </section> -->
<?php
// endif;
//endwhile;
// endif;
?>


<?php
if (have_rows('direction_area_2')) :
    while (have_rows('direction_area_2')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="direction_section direction2 mid-manner2">
                <div class="right-interior" data-aos="zoom-in">
                    <img src="<?= get_sub_field('image_1_area'); ?>" class="for_dec" data-aos="fade-up">
                    <div class="container">
                        <img src="<?= get_sub_field('image_2_area'); ?>" class="for_fon">
                    </div>
                </div>
                <div class="container">
                    <div class="direction-graphic-wrapper-white" data-aos="zoom-in">
                        <div class="direction_graphic-white" data-aos="fade-down">
                            <?= get_sub_field('para_area'); ?>
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<!-- Direction Section End -->
<?php
if (have_rows('indescribable_peace_area')) :
    while (have_rows('indescribable_peace_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="pt-5 sectionpur">
                <div class="container container2">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="content" data-aos="fade-up">
                                <h2 class="freedom_heading"><?= get_sub_field('heading'); ?></h2>
                                <?= get_sub_field('para'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in">
                            <img src="<?= get_sub_field('image'); ?>" class="img-indescribable-peace" alt="">
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
if (have_rows('mid_banner_area')) :
    while (have_rows('mid_banner_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="mid-manner wrapsec">
                <img src="<?= get_sub_field('banner_image'); ?>" class="w-100" alt="" data-aos="zoom-in">
                <div class="md-tp-cnt position-absolute top-0 start-0 w-100 text-right">
                    <div class="position-relative container">
                        <div class="direction-graphic-wrapper-white" data-aos="fade-down">
                            <div class="direction_graphic-white">
                                <h2 class="text-end"><?= get_sub_field('heading_text'); ?></h2>
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
if (have_rows('uncompromising_enjoyment_area')) :
    while (have_rows('uncompromising_enjoyment_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="py-5 all-cnt-sec" data-aos="fade-down">
                <div class="container">
                    <h2 class="text-center smaller-heading mb-5"><?= get_sub_field('heading'); ?></h2>
                    <?= get_sub_field('para'); ?>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<?php
if (have_rows('contact_card_area')) :
    while (have_rows('contact_card_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="pb-5 cont">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="card p-0 me-1 border-0 h-100">
                                <img class="desk-img" src="<?= get_sub_field('image'); ?>">
                                <img src="<?= site_url(); ?>/wp-content/uploads/2022/12/Mask-Group-23-1.png" class="mobile-img">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="card p-0 ms-1 border-0 h-100 blue-side-pill">
                                <div class="content-center">
                                    <h3><?= get_sub_field('heading'); ?></h3>
                                    <a class="rounded-pill btn-contact" href="<?= get_sub_field('get_in_touch_url'); ?>"><?= get_sub_field('get_in_touch'); ?></a>
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
get_footer();
?>