<?php

/* 
Template Name: EXCESS 11 Template
*/

get_header();

?>

<?php
if (have_rows('top_banner_section_area')) :
    while (have_rows('top_banner_section_area')) : the_row();
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
                            <h1><?= get_sub_field('heading_1'); ?></h1>
                            <h2><?= get_sub_field('heading_2'); ?></h2>
                            <?= get_sub_field('para'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="fade-up">
                            <img src="<?= get_sub_field('desk_image'); ?>" class="excess-desk" alt="">
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
            <section class="main-img-slider desk">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('all_items') as $desk_slider) : ?>
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
if (have_rows('mobile_slider_section')) :
    while (have_rows('mobile_slider_section')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="main-img-slider mob">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('all_items') as $desk_slider) : ?>
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
if (have_rows('exterior_design_area')) :
    while (have_rows('exterior_design_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="exterior-main-sec" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2><?= get_sub_field('heading'); ?></h2>
                        <p>The Excess 11 has an assertive personality that breaks with the codes of traditional sailboats. The exterior design by Patrick le Quément, embodies this new philosophy, both modern and sporty. The Excess 11 is a boat with refined lines, elegant proportions, and perfect balance. On deck, she offers the comfort and friendliness of a large open cockpit and twin helm stations, offering both real steering sensations and direct contact with the rest of the crew. From one helm station to the other, the Excess 11 offers an ideal view of the sails, the sea and the bows. The control is direct, you are connected to the boat and sail trimming is right there, at your fingertips. Thanks to her sporty rig offering a super advantageous aspect ratio and the optional Pulse line rig, which offers more than 10% of sail area/displacement ratio, the promise of thrills is guaranteed. Maneuvering is simplified with titanium-style aluminum stanchions and cleats, and Dyneema steering cables to improve responsiveness and sensitivity of the helm feel. This catamaran even adopts the aesthetics of racing boats, with fluorescent fiber guardwires with the Excess signature.</p>
                    </div>
                </div>
                <div class="ext-img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="main">
                    <img src="<?= get_sub_field('phone_image'); ?>" class="phn-img">
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
            <section class="interior-main-sec" data-aos="zoom-in">
                <div class="container-fluid">
                    <div class="sec-head">
                        <h2><?= get_sub_field('heading'); ?></h2>
                        <p>The interior, designed by Nauta Design, has benefited from the experience of her elders, without sacrificing all the comfort attributes needed for enjoyable cruising to meets your expectations. The Excess 11 has been designed to offer you a lively atmosphere on board your boat. An interior energized by brilliant light, a perfect design of simplicity, interior woodwork in Cedar & White Touch with a choice from three designs proposed for customizing your catamaran. The interior volume and headroom are worthy of a larger boat, whether in the saloon or in the cabins. It has a 79”x79” king size bed in the owner's cabin and 2 heads with separate showers.</p>
                    </div>

                    <div class="interior-img-are">
                        <div class="intirior-in-img">
                            <img src="<?= get_sub_field('image'); ?>">
                        </div>
                        <div class="img-ovr-cont">
                            <h4><?= get_sub_field('heading_2'); ?></h4>
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

                    <?php foreach (get_sub_field('specification_box') as $specification) : ?>
                        <div class="spec-box">
                            <h4><img src="<?= $specification['image']; ?>" alt=""> <?= $specification['heading']; ?></h4>
                            <div class="spec-line">
                                <ul>
                                    <?php foreach ($specification['list'] as $lists) : ?>
                                        <li><span><?= $lists['title']; ?></span> <?= $lists['value']; ?></li>
                                    <?php endforeach; ?>
                                    <?php if ($specification['heading'] == "SAILS" or $specification['heading'] == "DIMENSIONS") : ?>
                                        <li class="blank-li"></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php if (!empty(get_sub_field("download_brochure_link"))) : ?>
                        <div class="download-the-brochure">
                            <a href="<?= get_sub_field('download_brochure_link'); ?>" target="_blank"><?= get_sub_field('download_brochure'); ?></a>
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
if (have_rows('option_area')) :
    while (have_rows('option_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="boat-slider-sec">
                <div class="sec-head">
                    <h2><?= get_sub_field('heading'); ?></h2>
                </div>
                <div class="container-fluid">
                    <div class="boat-slider-new-excess">
                        <?php foreach (get_sub_field('option_boat_slider') as $options_boat) : ?>
                            <div class="item">
                                <img src="<?= $options_boat['items_image']; ?>" alt="">
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
//        if (get_row_layout() == 'all_content') :
//            if (!empty(get_sub_field('iframe_source'))) :
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
//            endif;
//        endif;
//    endwhile;
// endif;
?> -->

</section>
<?php get_footer(); ?>