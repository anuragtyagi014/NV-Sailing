<?php /* Template Name: first24se */
get_header();
?>
<style>
    .page-template-first-se-24 .excess-360-view53 {
        padding-top: 50px;
    }

    .page-template-first-se-24 section.excess-360-view53 .excess-iframe-sec iframe {
        overflow: hidden !important;
        height: 70vh;
        border: 0 !important;
        width: 100%;
    }

    .page-template-first-se-24 .specification-main-are ul li:nth-child(7) {
        border-color: white !important;
    }

    .page-template-first-se-24 .profile_con-in2.upsec {
        display: block;
        padding: 20px 0 20px;
    }

    .page-template-first-se-24 .profile_con-in2 img {
        display: inline-block;
        width: 60%;
    }

    .page-template-first-se-24 .bann-btm-left {
        width: 70%;
        padding-left: 3%;
        padding-right: 3%;
    }

    .page-template-first-se-24 .sec-head.\32 4 {
        padding-top: 50px;
    }

    .page-template-first-se-24 section.main-img-slider ul.slick-dots {
        margin-top: 20px;
        margin-bottom: 20px;
    }



    @media (min-width: 2100px) {
        .page-template-first-se-24 .specification-main-are {
            border-radius: 450px;
            padding: 150px 250px 70px;
        }
    }


    @media(min-width:2500px) and (max-width:2600px) {
        .page-template-first-se-24 .pro-div-cont h4 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .page-template-first-se-24 .pro-div-cont p {
            font-size: 24px;
        }

    }

    @media(max-width:768px) {

        .page-template-first-se-24 .profile_con-in2 img {
            width: 40%;
        }

        .page-template-first-se-24 .specification-main-are ul {
            flex-wrap: wrap;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(1) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(2) {
            order: 1 !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(3) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(4) {
            order: 2 !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(5) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(6) {
            order: 3 !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(7) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(8) {
            order: 4 !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(9) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(10) {
            order: 5 !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(11) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(12) {
            order: 6 !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(13) {
            order: unset !important;
        }

        .page-template-first-se-24 .specification-main-are ul li:nth-child(14) {
            order: 7 !important;
        }

        .page-template-first-14 .specification-main-are ul {
            display: grid;
            margin: 0px;
            padding: 0px;
        }

    }

    @media (max-width: 767px) {
        .page-template-first-se-24 .profile_con-in2 img {
            width: 80%;
        }

        .page-template-first-se-24 .profile_con-in2.upsec {
            padding: 20px 0 0px;
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
                    <img src="<?php echo get_sub_field('desktop_image'); ?>" class="excess-desk">
                    <img src="https://nvsailing.com/wp-content/uploads/2023/02/first24sem.png" class="excess-phone">
                </div>
            </section>
<?php endif;
    endwhile;
endif; ?>
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
                            <p><?php echo get_sub_field('para'); ?></p>

                            <div class="profile_con-in2 upsec">
                                <img src="<?php echo get_sub_field('logo_left_image'); ?>" class="desk36" alt="">
                            </div>
                        </div>
                        <div class="bann-btm-right" data-aos="fade-down">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <!-- <img src="https://nvsailing.com/wp-content/uploads/2022/12/Group-307.png"> -->
                                    <h2><?php echo get_sub_field('logo_text'); ?></h2>
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('profile_details') as $profile_details) : ?>

                                        <div class="pro-div">
                                            <div class="pro-div-cont">
                                                <h4><?php echo $profile_details['name']; ?></h4>
                                                <p><?php echo $profile_details['designation']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="profile_con-in2">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Group-476.png" class="mobile36" alt="">
                        </div>
                    </div>
            </section>
<?php endif;
    endwhile;
endif; ?>
<?php
if (have_rows('video_section_area')) :
    while (have_rows('video_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="page-video-sec" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="video-main">
                        <video width="100%" height="100%" playsinline autoplay muted loop>
                            <source src="<?php echo get_sub_field('video_source_link'); ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </section>
<?php endif;
    endwhile;
endif; ?>
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
<?php endif;
    endwhile;
endif; ?>
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
                                <img src="<?php echo $image_list['images']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
<?php endif;
    endwhile;
endif; ?>
<?php
if (have_rows('interior_section_area')) :
    while (have_rows('interior_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="exterior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?php echo get_sub_field('heading'); ?> </h2>

                        <p><?php echo get_sub_field('para'); ?></p>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="fade-up">
                    <img src="<?php echo get_sub_field('image_desktop'); ?>" class="main">
                    <img src="<?php echo get_sub_field('image_phone'); ?>" class="phn-img">
                </div>
    <?php endif;
    endwhile;
endif; ?>
    <?php
    if (have_rows('exterior_section_area')) :
        while (have_rows('exterior_section_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <div class="container-fluid">
                    <div class="sec-head 24" data-aos="fade-up">
                        <h2><?php echo get_sub_field('heading'); ?></h2>

                        <p><?php echo get_sub_field('para'); ?></p>
                    </div>
                </div>
            </section>

            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="interior-img-are 324" data-aos="zoom-in">
                        <div class="intirior-in-img">
                            <img src="<?php echo get_sub_field('left_interior_image'); ?>">
                        </div>
                        <div class="img-ovr-cont">
                            <h2 class="tagline-tra"><?php echo get_sub_field('left_interior_heading'); ?></h2>
                            <p><?php echo get_sub_field('left_interior_content'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
<?php endif;
        endwhile;
    endif; ?>

<?php
if (have_rows('specification_area')) :
    while (have_rows('specification_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="specificatio-sec 424" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="sec-head specificationne">
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="specification-main-are">
                        <ul>
                            <?php $count = 1;
                            foreach (get_sub_field('specification_list') as $specification_list) : ?>
                                <li <?php if ($count == 15) {
                                        echo ' style="border-color: transparent;"';
                                    } ?>><span><?php echo $specification_list['text']; ?></span> <?php echo $specification_list['value']; ?></li>
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

<?php endif;
    endwhile;
endif; ?>

<?php
if (have_rows('profile_area')) :
    while (have_rows('profile_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="profiles-main-sec" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="sec-head">
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="profl-bx">
                                <img src="<?php echo get_sub_field('logo_image'); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
            </section>
<?php endif;
    endwhile;
endif; ?>

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