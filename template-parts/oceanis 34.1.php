<?php /* Template Name: oceains34.1 */
get_header();
?>

<style>
    .page-template-oceanis34-1 .interior-insec {
        color: #0C2169;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .left-interior-con {
        clip-path: polygon(0 0, 100% 0%, 100% 80%, 0% 100%) !important;
        display: flex;
        align-items: center;
        padding: 66px 0px 40px;
    }

    .left-interior-con::after {
        clip-path: polygon(0 20%, 100% 0%, 100% 100%, 0% 100%);
        bottom: -75%;
    }

    .about_con h2 {
        font-weight: 300;
    }

    .about_con p {
        line-height: 1.75;
    }

    .con_right {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    .profile_con h4 {
        font-size: 20px;
    }

    .profile_con {
        height: auto;
        margin-bottom: 50px;
    }

    img.pro_img {
        float: left;
        max-width: 135px;
        width: auto;
    }

    .pro_con {
        padding-left: 20px;
    }

    .main_profile_sec {
        padding: 66px 0px 40px;
    }

    .abt_main_video {
        margin-bottom: 30px;
        margin-top: 30px;
    }

 /*   .speci_con_new ul li:nth-child(8) {
        display: none;
    }*/

    @media screen and (min-width: 3000px) and (max-width: 3400px) {
        .page-template-oceanis34-1 .interior-insec {
            font-size: 40px;
        }

        .left-interior-con {
            height: 50%;
            width: 32%;
        }

        .left-interior-con p {
            padding: 0px 100px 60px 64px;
            font-size: 45px !important;
            line-height: 60px !important;
        }

        section.direction_section p,
        section .about_con p,
        section.interior_section p {
            line-height: 55px;
            font-size: 40px;
        }

        section.abt {
            padding: 78px;
        }

        .abt_main_video {
            padding: 0;
            margin-bottom: 80px;
        }

        .con_right {
            margin-top: -24%;
            max-width: 80%;
            border-top: 10px solid #0c2169;
        }

        .main_logo {
            display: flex;
            justify-content: center;
            padding: 50px 20px 50px 20px;
        }

        .profile_con {
            margin-bottom: 65px;
        }

        img.pro_img {
            width: 170px;
            max-width: 100%;
        }

        .pro_con {
            padding-left: 40px;
        }

        .profile_con h4 {
            font-size: 32px !important;
        }

        .pro_con p {
            line-height: 50px !important;
            font-size: 34px;
            padding-top: 15px;
        }

        .about_con p {
            padding-right: 325px;
            line-height: 55px;
            padding-top: 30px;
            font-size: 32px;
        }

        .profile_con {
            height: auto;
        }

        .main_profile_sec {
            padding: 112px 0px 80px;
        }

        .about_con h3,
        .tagline {
            font-size: 70px;
            line-height: 75px;
        }
    }

    @media screen and (min-width: 2601px) and (max-width:2900px) {
        .left-interior-con {
            height: 50%;
            width: 32%;
        }

        .left-interior-con p {
            padding: 0px 100px 75px 60px;
            font-size: 35px !important;
        }

        .page-template-oceanis34-1 .interior-insec {
            font-size: 35px;
        }
    }

    @media screen and (min-width: 2301px) and (max-width:2600px) {
        .left-interior-con {
            height: 50%;
            display: flex;
            align-items: center;
        }

        .left-interior-con {
            width: 32%;
        }

        .left-interior-con p {
            padding: 24px 100px 60px 60px;
            font-size: 28px;
        }

        .page-template-oceanis34-1 .interior-insec {
            font-size: 27px;
        }
    }

    @media screen and (min-width: 2101px) and (max-width: 2300px) {
        .left-interior-con {
            height: 50%;
            display: flex;
            align-items: center;
        }

        .left-interior-con {
            width: 30%;
        }

        .left-interior-con p {
            padding: 24px 60px 60px 40px;
            font-size: 27px;
        }

        .page-template-oceanis34-1 .interior-insec {
            font-size: 27px;
        }
    }

    @media screen and (min-width: 1900px) and (max-width: 2100px) {
        .page-template-oceanis34-1 .interior-insec {
            font-size: 25px;
            line-height: 1.5;
        }

        .direction_con {
            width: 90%;
        }

        .left-interior-con {
            display: flex;
            align-items: center;
        }

        .left-interior-con p {
            padding: 0px 50px 55px 35px;
            font-size: 25px;
            margin: 0;
        }

        .left-interior-con {
            width: 32%;
        }
    }

    .interior_section .tagline br {
        display: none;
    }

    @media screen and (min-width: 1601px) and (max-width: 1800px) {
        .left-interior-con p {
            font-size: 22px;
            line-height: 1.5;
            padding-right: 50px;
            padding-bottom: 44px;
        }
    }

    @media screen and (min-width: 1330px) and (max-width: 1600px) {
        .left-interior-con {
            display: flex;
            align-items: center;
        }

        .left-interior-con p {
            font-size: 20px;
            line-height: 1.5;
            margin: 0;
            padding-bottom: 44px;
            padding-right: 50px;
        }

        .tagline {
            padding: 0px;
        }

        .main-img-slider.desk {
            padding-top: 20px;
        }

        .con_right {
            width: 100%;
        }
    }

    @media screen and (max-width: 1329px) {
        .con_right {
            width: 100%;
        }
    }

    @media (max-width: 1199px) {
        .pro-img-mn img {
            max-width: 65px;
            min-width: 65px;
            margin: 0;
            padding: 0;
        }
    }

    @media screen and (max-width: 576px) {
        .tagline {
            padding: 0;
        }

        .interior_section .tagline br {
            display: block;
        }

        .right-interior img {
            padding: 30px 0px 30px 0px;
        }

        .left-interior img {
            height: auto;
            border-radius: 0 0 90px 90px;
        }

        .left-interior {
            border-radius: 90px 90px 0px 0px;
            margin-top: 20px;
        }

        .left-interior-con p {
            font-size: 18px;
            padding-top: 30px;
            line-height: 1.6 !important;
        }

        .row {
            margin: 0;
        }

        .container {
            padding: 0 30px;
        }

        .direction_section {
            padding: 20px 15px;
        }

        .right-interior,
        .right-interior img {
            float: none;
        }

        .direction_con {
            padding: 0;
        }

        .profile_con h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .pro_con {
            padding-left: 0px;
        }

        .left-interior-con {
            padding: 0px;
        }

        .main_profile_sec {
            padding: 47px 20px 40px !important;
        }

        .con_right {
            width: 100%;
        }

        .pro_con {
            padding-left: 15px;
        }

        .con_right .main_logo {
            padding: 20px;
        }

        .profile_con {
            margin-bottom: 20px;
        }

        .pro_con p {
            font-size: 20px;
        }

        section.specification {
            padding: 20px 0px 0px;
        }

        .page-template-oceanis34-1 section.abt_main_video {
            padding: 0px 20px 0px;
        }

        /*.speci_con_new ul li:nth-child(8) {
            display: none;
        }*/

        header.main-header {
            position: relative;
            width: 100%;
            z-index: 9;
            background: #0c2169;
            box-shadow: 2px 6px 6px rgb(0 0 0 / 15%);
            border-radius: 0 0px 0px 0;
            padding: 0 0 0 0;
            overflow: hidden;
        }

        .mobile-header {
            object-position: top;
            max-height: 260px;
        }
    }



    @media screen and (max-width: 390px) {
        .pro_con p {
            font-size: 16px;
        }

        .mobile-header {
            max-height: 230px;
        }
    }

    @media screen and (max-width: 360px) {
        .mobile-header {
            max-height: 200px;
        }
    }
</style>

<?php
if (have_rows('top_banner_area')) :
    while (have_rows('top_banner_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="hero_section">
                <!-- desktop -->
                <img src="<?= get_sub_field('desktop_banner_image'); ?>" alt="" class="hero_bg-image d-sm-block d-none" />
                <!-- moblie -->
                <img src="<?= get_sub_field('mobile_banner_image'); ?>" alt="" class="hero_bg-image mobile-header d-sm-none d-block" />
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<?php
if (have_rows('about_us_area')) :
    while (have_rows('about_us_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="bann-btm-sec">
                <div class="container-fluid">
                    <div class="row-in">
                        <div class="bann-btm-left">
                            <h1><?= get_sub_field('top_heading'); ?></h1>
                            <h2><?= get_sub_field('heading'); ?></h2>
                            <?= get_sub_field('paragraph'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="zoom-in">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?= get_sub_field('desktop_about_logo') ?>" alt="">
                                    <!-- <img src="<?= get_sub_field('mobile_about_logo') ?>" alt=""> -->
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('profile_details') as $profile_details) : ?>
                                        <div class="pro-div">
                                            <div class="pro-img-mn">
                                                <img src="<?= $profile_details['image']; ?>" class="pro_img" alt="">
                                            </div>
                                            <div class="pro-div-cont">
                                                <h4><?= $profile_details['name']; ?></h4>
                                                <p><?= $profile_details['designation']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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
            <section class="abt_main_video">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="abt_video ctb-video-in" data-aos="zoom-in">
                                <video width="100%" height="100%" autoplay muted>
                                    <source src="<?= get_sub_field('video_link'); ?>" type="video/mp4">
                                    <!-- <source src="https://www.youtube.com/embed/tgbNymZ7vqY" type="video/mp4"> -->
                                </video>
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
<!-- Hero Section End -->

<!--     <div class="social-media">
        <a class="mb-2" href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a class="mb-2" href="#"><i class="fa-brands fa-instagram"></i></a>
        <a class="mb-2" href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
    </div> -->

<!-- <section class="slider-section">

        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://nvsailing.com/wp-content/themes/nv_sailboat/assets/images/sbhome-2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://nvsailing.com/wp-content/themes/nv_sailboat/assets/images/sbhome-2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://nvsailing.com/wp-content/themes/nv_sailboat/assets/images/sbhome-2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://nvsailing.com/wp-content/themes/nv_sailboat/assets/images/sbhome-2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://nvsailing.com/wp-content/themes/nv_sailboat/assets/images/sbhome-2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://nvsailing.com/wp-content/themes/nv_sailboat/assets/images/sbhome-2.jpg">
            </div>
          </div>

          <div class="swiper-pagination"></div>
        </div>
    </section> -->
<?php
if (have_rows('desktop_slider_area')) :
    while (have_rows('desktop_slider_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="main-img-slider desk">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                        <?php foreach (get_sub_field('slider_image') as $slider_image) : ?>
                            <div class="item">
                                <img src="<?= $slider_image['imageurl']; ?>">
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
                        <?php foreach (get_sub_field('slider_image') as $slider_image) : ?>
                            <div class="item">
                                <img src="<?= $slider_image['imageurl'] ?>">
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
if (have_rows('interior_area')) :
    while (have_rows('interior_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="direction_section">
                <div class="container">
                    <div class="row">
                        <div class="direction_con" data-aos="zoom-in">
                            <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            <?= get_sub_field('paragraph'); ?>
                        </div>
                    </div>
                </div>
                <div class="right-interior" data-aos="zoom-in">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="for_dec">
                    <div class="container">
                        <img src="<?= get_sub_field('phone_image'); ?>" class="for_fon">
                    </div>
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
            <section class="interior_section">
                <div class="container">
                    <div class="row">
                        <div class="direction_con" data-aos="zoom-in">
                            <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            <?= get_sub_field('paragraph'); ?>
                        </div>
                        <div class="left-interior" data-aos="zoom-in">
                            <img src="<?= get_sub_field('image'); ?>">
                            <div class="left-interior-con">
                                <?= get_sub_field('paragraph_two'); ?>
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
if (have_rows('perfect_combination_area')) :
    while (have_rows('perfect_combination_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior_section">
                <div class="container">
                    <div class="row">
                        <div class="direction_con" data-aos="zoom-in">
                            <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            <?= get_sub_field('paragraph'); ?>
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
if (have_rows('specification_section_area')) :
    while (have_rows('specification_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="specification">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" data-aos="zoom-in">
                            <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                            <div class="speci_con_new">
                                <ul>
                                    <?php $count = 1;
                                    foreach (get_sub_field('specification_list') as $specification_list) : ?>
                                        <?php if ($count == count(get_sub_field('specification_list'))) : ?>
                                            <!-- <li><span>&nbsp; </span></li> -->
                                            <li><span><?= $specification_list['list_title']; ?> </span> <?= $specification_list['list_value']; ?></li>
                                        <?php else : ?>
                                            <li><span><?= $specification_list['list_title']; ?></span><?= $specification_list['list_value']; ?></li>
                                        <?php endif; ?>
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
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<?php
if (have_rows('profile_section_area')) :
    while (have_rows('profile_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="profiles-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>

                    <div class="row" data-aos="zoom-in">
                        <?php foreach (get_sub_field('image_section') as $image_section) : ?>
                            <div class="col-md-4">
                                <div class="profl-bx">
                                    <img src="<?= $image_section['imageurl']; ?>">
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
<!-- <section class="deck_sec">
        <div class="container-fluid">
            <div class="swiper mySwiper-second">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="deck_slide">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="deckimg_slide">
                                <img src="https://nvsailing.com/wp-content/uploads/2022/12/slideshow-boat-two.png">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="deck_con">
                                <ul>
                                    <li>Large benches seating six guests, with a fold away table Tiller or twin <br> steering wheels on twin rudders Tilting mast</li>
                                    <li>Square-top mainsail</li>
                                    <li>Raymarine Electronic Pack</li>
                                    <li>EC certification: B6/C8/D10 (10 passengers aboard) 1215</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="deck_slide">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="deckimg_slide">
                                <img src="https://nvsailing.com/wp-content/uploads/2022/12/slideshow-boat-one.png">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="deck_con">
                                <ul>
                                    <li>L-shaped fitted galley: fridge, sink, two-ring hob, oven, storage and  <br> worktop Lounge bench seats that convert to extra berths</li>
                                    <li>Master cabin with double berth at the bow</li>
                                    <li>Aft cabin with twin berths</li>
                                    <li>Shower room, with shower compartment and marine toilet</li>
                                    <li>Gently sloping companionway (4 steps)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
               <div class="deck_slide">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="deckimg_slide">
                                <img src="https://nvsailing.com/wp-content/uploads/2022/11/deckimg.png">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="deck_con">
                                <h2 class="tagline">SPECIFICATIONS</h2>
                                <ul>
                                    <li>CE Certification A10/B11/C12 (12 passengers on board)</li>
                                    <li>Large benches seating eight guests, with a fold away table.</li>
                                    <li>Two steering wheel stations each with a comfortable seat.</li>
                                    <li>Two reclining sun loungers with drink holders.</li>
                                    <li>First Line version: extra-long mast and bigger draft.</li>
                                    <li>Standard version: in-mast furling system and self-tacking jib.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
         
          </div>
          <div class="swiper-pagination"></div>
        </div>
        </div>
    </section> -->

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
<script type="text/javascript">
    $('.vrtcl-slider').slick({
        slidesToShow: 1,
        arrows: true,
        infinite: false,
        fade: true,
        autoplay: false,
        touchMove: false,
        touchThreshold: false,
        draggable: false,
        focusOnSelect: false,
        speed: 2500,
        dots: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                vertical: false,
                verticalSwiping: false,
            }
        }]
    });
</script>