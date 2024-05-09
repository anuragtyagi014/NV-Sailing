<?php

/* 
Template Name: EXCESS 14 Template
*/

get_header();

?>

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
                        <video src="<?= get_sub_field('video_source_file'); ?>" type="video/mp4" playsinline autoplay muted loop></video>
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
                            <?php foreach (get_sub_field('slider_images') as $desk_images) : ?>
                                <div class="item">
                                    <img src="<?= $desk_images['image'] ?>">
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
                            <?php foreach (get_sub_field('slider_images') as $phone_images) : ?>
                                <div class="item">
                                    <img src="<?= $phone_images['image'] ?>">
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
                            <p>The Excess 14 is a cruising catamaran that also offers comfort and modularity of its living spaces. The goal was to maintain volume and good headroom, all this in a warm and as bright as ever interior design. In the hulls, you'll find wide, very comfortable beds, and heads featuring a separate shower. For setting off on your adventure, large and subdivided storage spaces and a retractable chart table have been created. The Excess 14 is available in several layout versions. In the innovative 3-cabin version, the main characteristics are a large private dressing area with optional bunk beds. The 4-cabin version includes 4 cabins, 4 heads & 4 separate showers. On both versions, an optional skipper cabin can be added in each hull, as well as skylounge option offering a lounging space on the coachroof.</p>
                            
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
                            <p>Innovative Architecture
                                Thanks to Excess’s collaboration with VPLP design, the lines of the Excess 14 have benefited from an understanding of ocean racing. Enriched by their Expertise and cutting-edge software, this model is designed with a forward-set rig, a square-top mainsail, and a large overlapping genoa (as standard) to optimize the sail area to displacement ratio. Bridgedeck clearance was increased for better passage through the water, and the hulls designed asymmetrically to reduce interference drag. A lower center of gravity, an optimized structure (foam sandwich, carbon reinforcements, etc.), and a new longitudinal volume optimizes the Excess 14 capabilities.</p>
                        </div>
                        <div class="sec-head" data-aos="zoom-in">
                            <h2>Instantly recognizable design</h2>
                            <p>The Excess 14 has a distinctive look with its low boom, reduced windage thanks to lower freeboard, taut lines and redesigned hull windows. Its aft set coachroof, forward stepped mast and composite bowsprit combined with an inverted inclined bows and exposed forefoot makes it a dynamic catamaran that's ready for adventure. For added sensation, the helm stations right at the stern is in direct contact with the rudders and has a good view of the sails, as inspired by monohulls. The visibility from the helm is optimal on board the Excess 14, through untinted windows - this is an Excess exclusive on the market!</p>
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
    if (have_rows('specifications_area')) :
        while (have_rows('specifications_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <section class="spec-sec-excss" data-aos="zoom-in">
                    <div class="sec-head">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="spec-sec-ex">
                        <?php $arr = get_sub_field('specification_boxes');
                        foreach ($arr as $specification) : ?>
                            <div class="spec-box">
                                <h4><img src="<?= $specification['image']; ?>" alt=""> <?= $specification['heading']; ?></h4>
                                <div class="spec-line">
                                    <ul>
                                        <?php $count = 1;
                                        foreach ($specification['lists'] as $lists) :  if ($specification['heading'] == "DIMENSIONS" && ($count == 1 or $count == 2)) : ?>
                                                <li class="half-14"><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                            <?php elseif ($specification['heading'] == "EQUIPMENT" && $count == count($specification['lists'])) : ?>
                                                <li class="full-w-14"><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                            <?php else : ?>
                                                <li><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                            <?php endif; ?>
                                        <?php $count++;
                                        endforeach; ?>
                                        <?php if ($specification['heading'] == "SAILS") : ?>
                                            <li class="blank-li"></li>
                                        <?php endif; ?>
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
    if (have_rows('options_slider_area')) :
        while (have_rows('options_slider_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <section class="boat-slider-sec">
                    <div class="sec-head">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="container-fluid">
                        <div class="boat-slider-new-excess">
                            <?php foreach (get_sub_field('slider_content') as $option_slider) : ?>
                                <div class="item">
                                    <img src="<?= $option_slider['image']; ?>" alt="">
                                    <h4><?= $option_slider['heading']; ?></h4>
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
                    </section>
    <?php
                endif;
            endif;
        endwhile;
    endif;
    ?>

</section>
<?php get_footer(); ?>