<?php
/* Template Name: oceanis yacht 54 */
get_header(); ?>

<section class="page-template-EXCESS14">
    <section class="page-template-EXCESS11">

        <?php
        if (have_rows('top_banner_section')) :
            while (have_rows('top_banner_section')) : the_row();
                if (get_row_layout() == "all_content") :
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
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="bann-btm-sec">
                        <div class="container-fluid">
                            <div class="row-in">
                                <div class="bann-btm-left">
                                    <h1><?= get_sub_field('heading'); ?></h1>
                                    <h2><?= get_sub_field('sub_heading'); ?></h2>
                                    <?= get_sub_field('para'); ?>
                                </div>
                                <div class="bann-btm-right" data-aos="zoom-in">
                                    <div class="bann-btm-right-in">
                                        <div class="lgo-are">
                                            <img src="<?= get_sub_field('logo'); ?>">
                                        </div>
                                        <div class="pro-dtl-are">
                                            <?php foreach (get_sub_field('profile_details') as $pro_det) : ?>
                                                <div class="pro-div">
                                                    <div class="pro-img-mn">
                                                        <img src="<?= $pro_det['image'] ?>">
                                                    </div>
                                                    <div class="pro-div-cont">
                                                        <h4><?= $pro_det['designation'] ?></h4>
                                                        <p><?= $pro_det['name'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            <!-- <div class="pro-div">
                                                <div class="pro-img-mn">
                                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/swan48pf.png">
                                                </div>
                                                <div class="pro-div-cont">
                                                    <h4>DESIGNER:</h4>
                                                    <p>Lorenzo Argento</p>
                                                </div>
                                            </div> -->
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
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="abt_main_video">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="abt_video ctb-video-in" data-aos="zoom-in">
                                        <video width="100%" height="100%" autoplay="" muted="" playsinline>
                                            <source src="<?= get_sub_field('video_file'); ?>" type="video/mp4">
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

        <?php
        if (have_rows('exterior_design_area')) :
            while (have_rows('exterior_design_area')) : the_row();
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="interior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
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
                            <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                                <?php foreach (get_sub_field('slider_image') as $desk_area) : ?>
                                    <div class="item">
                                        <img src="<?= $desk_area['image']; ?>">
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54d2.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54d3.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54d4.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54d5.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54d6.png">
                                </div> -->
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
                            <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                                <?php foreach (get_sub_field('slider_image') as $mob_area) : ?>
                                    <div class="item">
                                        <img src="<?= $mob_area['image']; ?>">
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54m2.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54m3.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54m4.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54m5.png">
                                </div>
                                <div class="item">
                                    <img src="https://nvsailing.com/wp-content/uploads/2023/01/sliderocsn54m6.png">
                                </div> -->
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
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="exterior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading'); ?></h2>
                                <?= get_sub_field('para'); ?>
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
        if (have_rows('exceptionally_detailed_craftmanship_section')) :
            while (have_rows('exceptionally_detailed_craftmanship_section')) : the_row();
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="interior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading'); ?></h2>
                                <?= get_sub_field('para_1'); ?>
                                <?= get_sub_field('para_2'); ?>
                            </div>

                            <div class="interior-img-are" data-aos="zoom-in">
                                <div class="intirior-in-img">
                                    <img src="<?= get_sub_field('image'); ?>">
                                </div>
                                <div class="img-ovr-cont">
                                    <h4><?= get_sub_field('heading_2'); ?></h4>
                                    <?= get_sub_field('para_3'); ?>
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
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="spec-sec-excss">
                        <div class="sec-head" data-aos="zoom-in">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="spec-sec-ex">
                            <?php foreach (get_sub_field('specification_box') as $specifications) : ?>
                                <div class="spec-box">
                                    <div class="spec-line" data-aos="zoom-in">
                                        <ul>
                                            <?php $count = 1;
                                            foreach ($specifications['lists'] as $lists) : ?>
                                                <li <?= ($count == count($specifications['lists']) || $count == count($specifications['lists']) - 1) ? 'style="border-bottom: 0; padding:0; margin: 0;"' : ""; ?>><span><?= !empty($lists['title']) ? $lists['title'] : ""; ?></span> <?= !empty($lists['value']) ? $lists['value'] : ""; ?></li>
                                            <?php $count++;
                                            endforeach; ?>
                                            <!-- <li><span>Fresh water capacity:</span> 190 US GAL</li>
                                        <li><span>Hull Length:</span> 52'5"</li>
                                        <li><span>Engine Power (Hp):</span> 80 HP</li>
                                        <li><span>Hull Beam:</span> 16'5'</li>
                                        <li><span>Propulsion:</span> Sail drive</li>
                                        <li><span>Light displacement:</span> 36,586 lbs</li>
                                        <li><span>CE Certification:</span> A10/B12/C14</li>
                                        <li style="border-bottom: 0; padding:0; margin: 0;"><span>Fuel tank capacity:</span> 106 US GAL </li>
                                        <li style="border-bottom: 0; padding:0; margin: 0;"><span>Air Draft:</span> 78'9"</li> -->
                                        </ul>
                                        <?php if (!empty(get_sub_field('brochure_button_link'))) { ?>
                                            <div class="download-the-brochure">
                                                <a target="_blank" href="<?php the_sub_field('brochure_button_link'); ?>"><?php the_sub_field('brochure_button'); ?></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>
        <?php
                endif;
            endwhile;
        endif;
        ?>

        <?php
        if (have_rows('profiles_area')) :
            while (have_rows('profiles_area')) : the_row();
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="profiles-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading'); ?></h2>
                            </div>

                            <div class="row" data-aos="zoom-in">
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
        if (have_rows('boat_slider_area')) :
            while (have_rows('boat_slider_area')) : the_row();
                if (get_row_layout() == "all_content") :
        ?>
                    <section class="boat-slider-sec">
                        <div class="container-fluid">
                            <div class="boat-slider" data-aos="zoom-in">
                                <?php foreach (get_sub_field('slider_content') as $slider_content) : ?>
                                    <div class="item">
                                        <div class="boat-slide-bx">
                                            <div class="boat-slide-left">
                                                <img src="<?= $slider_content['image']; ?>">
                                            </div>
                                            <div class="boat-slide-right">
                                                <h2 class="tagline"><?= $slider_content['heading']; ?></h2>
                                                <ul>
                                                    <?php foreach ($slider_content['lists'] as $list_slider) : ?>
                                                        <li><?= $list_slider['content']; ?></li>
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
                if (get_row_layout() == "all_content") :
                    if (!empty(get_sub_field('iframe_source'))) :
        ?>

                        <section class="excess-360-view">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sec-head" data-aos="zoom-in">
                                            <h2><?= get_sub_field('heading'); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="excess-iframe-sec" data-aos="zoom-in">
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
</section>



<?php get_footer(); ?>