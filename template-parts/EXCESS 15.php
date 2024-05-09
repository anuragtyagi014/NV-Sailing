<?php

/* 
Template Name: EXCESS 15 Template
*/

get_header();

?>
<section class="page-template-EXCESS14">
    <section class="page-template-EXCESS11">
        <?php
        if (have_rows('top_banner_area')) :
            while (have_rows('top_banner_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>

                    <section class="top-bann-sec">
                        <div class="img-are">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
                                <div class="bann-btm-right" data-aos="fade-down">
                                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                                    <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
                    <section class="excess-vdo" data-aos="zoom-in">

                        <div class="excess-sec-vdo">
                            <video src="<?= get_sub_field('video_file'); ?>" type="video/mp4" playsinline autoplay muted loop></video>
                            <!-- <div class="play-icn">
            <img src="https://nvsailing.com/wp-content/uploads/2022/12/play-icon.png" alt="">
        </div> -->
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
                            <div class="vrtcl-slider vrtcl-sliders">
                                <?php foreach (get_sub_field('slider_images') as $phone_slider) : ?>
                                    <div class="item">
                                        <img src="<?= $phone_slider['images']; ?>">
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
        if (have_rows('interior_design_area')) :
            while (have_rows('interior_design_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="exterior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading'); ?></h2>
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
        if (have_rows('exterior_design_area')) :
            while (have_rows('exterior_design_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="interior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="fade-up">
                                <h2><?= get_sub_field('heading'); ?></h2>
                            </div>

                            <div class="interior-img-are" data-aos="zoom-in">
                                <div class="intirior-in-img">
                                    <img src="<?= get_sub_field('image'); ?>">
                                </div>
                                <div class="img-ovr-cont">
                                    <h4><?= get_sub_field('image_heading'); ?></h4>
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
                    <section class="spec-sec-excss" data-aos="zoom-in">
                        <div class="sec-head">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="spec-sec-ex">
                            <?php foreach (get_sub_field('specification_boxes') as $specifications) : ?>
                                <div class="spec-box">
                                    <h4><img src="<?= $specifications['image']; ?>" alt=""> <?= $specifications['heading']; ?></h4>
                                    <div class="spec-line">
                                        <ul>
                                            <?php $count = 1;
                                            foreach ($specifications['lists'] as $lists) : ?>
                                                <?php if ($specifications['heading'] == "SAILS" && $count == 4) : ?>
                                                    <li><span class="except-span"><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                                <?php elseif ($specifications['heading'] == "EQUIPMENT" && $count == 1) : ?>
                                                    <li class="half-14"><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                                <?php elseif ($specifications['heading'] == "EQUIPMENT" && $count == 2) : ?>
                                                    <li class="half-14 halff"><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                                <?php else : ?>
                                                    <li><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                                <?php endif; ?>
                                            <?php $count++;
                                            endforeach; ?>
                                            <li class="blank-li"></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php if (!empty(get_sub_field("button_link"))) : ?>
                                <div class="download-the-brochure">
                                    <a href="<?php echo get_sub_field('button_link'); ?>" target="_blank"><?php echo get_sub_field('button_name'); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </section>
        <?php
                endif;
            endwhile;
        endif;
        ?>



        <?php
        if (have_rows('options_area')) :
            while (have_rows('options_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="boat-slider-sec">
                        <div class="sec-head">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="container-fluid">
                            <div class="boat-slider-new-excess">
                                <?php foreach (get_sub_field('option_slider_images') as $options_slider) : ?>
                                    <div class="item">
                                        <img src="<?= $options_slider['image']; ?>" alt="">
                                        <h4><?= $options_slider['heading']; ?></h4>
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

        <!-- <?php
                // if (have_rows('virtual_tour_area')) :
                //    while (have_rows('virtual_tour_area')) : the_row();
                //      if (get_row_layout() == 'all_content') :
                //        if (!empty(get_sub_field('iframe_source'))) :
                ?>
                         <section class="excess-360-view">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sec-head">
                                            <h2><?= get_sub_field('heading'); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="excess-iframe-sec">
                                            <?= get_sub_field('iframe_source'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
        <!-- <?php
                // endif;
                // endif;
                // endwhile;
                // endif;
                ?> -->

    </section>
</section>
<?php get_footer(); ?>