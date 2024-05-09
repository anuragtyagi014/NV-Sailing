<?php /* Template Name: first36 */
get_header();
?>
<style>
    .page-template-first36 .excess-360-view53 {
        padding-top: 50px;
    }

    .page-template-first36 section.excess-360-view53 .excess-iframe-sec iframe {
        overflow: hidden !important;
        height: 70vh;
        border: 0 !important;
        width: 100%;
    }

    .page-template-first36 .bann-btm-left {
        padding-right: 3%;
    }

    .page-template-first36 .video-main img {
        width: 100%;
    }

    /*@media (max-width: 3200px) {
        .page-template-first36 .specification-main-are {
            padding: 70px 240px 60px;
        }
    }

    @media (max-width: 2200px) {
        .page-template-first36 .specification-main-are {
            padding: 70px 240px 40px;
        }
    }

    @media (max-width: 1440px) {
        .page-template-first36 .specification-main-are {
            padding: 70px 120px 40px;
        }
    }

    @media (max-width: 1024px) {
        .page-template-first36 .specification-main-are {
            padding: 40px 90px 30px;
        }
    }

    @media (max-width: 768px) {
        .page-template-first36 .specification-main-are {
            padding: 30px 80px 10px;
        }
    }
*/
    @media (max-width: 767px) {

        /*.page-template-first36 .specification-main-are {
            padding: 60px 70px;
        }*/
        .download-the-brochure {
            padding: 2px 20px;
        }
    }

    @media (max-width:390px) {
        .download-the-brochure {
            padding: 2px 0px;
        }

        .page-template-first36 .specification-main-are {
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
                    <img src="https://nvsailing.com/wp-content/uploads/2023/02/headerfirst36m.png" alt="Phone" class="excess-phone">
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
                            <div class="profile_con-in2 upsec">
                                <img src="<?= get_sub_field('desktop_image'); ?>" class="desk36" alt="">
                                <img src="<?= get_sub_field('phone_image'); ?>" class="mobile36" alt="">
                            </div>
                        </div>
                        <div class="bann-btm-right" data-aos="zoom-in">
                            <div class="bann-btm-right-in">
                                <div class="lgo-are">
                                    <img src="<?= get_sub_field('logo'); ?>">
                                </div>
                                <div class="pro-dtl-are">
                                    <?php foreach (get_sub_field('right_banner_area') as $pro_det) : ?>
                                        <div class="pro-div">
                                            <div class="pro-div-cont">
                                                <h4><?= $pro_det['designation']; ?></h4>
                                                <p><?= $pro_det['name']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="profile_con-in2" data-aos="zoom-in">
                            <img src="<?= get_sub_field('mobile_image'); ?>" class="mobile36" alt="">
                        </div>
                    </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>


<?php
if (have_rows('video_area')) :
    while (have_rows('video_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="page-video-sec">
                <div class="container-fluid">
                    <div class="video-main" data-aos="zoom-in">
                        <!-- <video width="100%" height="100%" autoplay muted>
                <source src="https://nvsailing.com/wp-content/uploads/2022/12/First-36-by-BENETEAU.mp4" type="video/mp4">
            </video> -->
                        <?php if (get_sub_field('type') == "image") : ?>
                            <img src="<?= get_sub_field('file'); ?>" class="first36img">
                        <?php endif; ?>
                    </div>
                    <div class="sec-head videosec" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>

                        <?= get_sub_field('para_1'); ?>
                        <?= get_sub_field('para_2'); ?>
                    </div>

                    <div class="sec-head videosec" data-aos="zoom-in">
                        <h2>CRUISING LAYOUT</h2>

                        <p>When you remove your racing gear and take your family cruising or daysailing, the cockpit benches with cushions increase the seating area and add storage space and line organization. The cockpit table is big enough to accomodate a crew of six. Additionally, the design team developed an ultralight bathing platform to give sailors easy access to the water without affecting the boat's performance.</p>
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
        if (get_row_layout() == 'all_content') :
?>
            <section class="main-img-slider mob">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
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
        if (get_row_layout() == 'all_content') :
?>
            <section class="exterior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                        <?= get_sub_field('para_1'); ?>
                        <?= get_sub_field('para_2'); ?>
                        <?= get_sub_field('para_3'); ?>
                    </div>
                </div>
                <div class="ext-img-are" data-aos="zoom-in">
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
if (have_rows('exterior_main_section')) :
    while (have_rows('exterior_main_section')) : the_row();
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
if (have_rows('specification_area')) :
    while (have_rows('specification_area')) : the_row();
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

                                <?php if ($count == 5) : ?>
                                    <li style=""><span><?= !empty($specification['title']) ? $specification['title'] : ""; ?></span> <?= !empty($specification['value']) ? $specification['value'] : ""; ?></li>
                                <?php else : ?>
                                    <li><span><?= !empty($specification['title']) ? $specification['title'] : ""; ?></span> <?= !empty($specification['value']) ? $specification['value'] : ""; ?></li>
                                <?php endif; ?>
                            <?php $count++;
                            endforeach; ?>

                        </ul>
                        <!-- Adding Download the brochure -->
                        <?php if (!empty(get_sub_field('brochure_button_link'))) : ?>
                            <div class="download-the-brochure">
                                <a href="<?php the_sub_field('brochure_button_link'); ?>" target="_blank"><?php the_sub_field('download_broucher_button'); ?></a>
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

                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="profl-bx" data-aos="zoom-in">
                                <img src="<?= get_sub_field('profile_box_image'); ?>">
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