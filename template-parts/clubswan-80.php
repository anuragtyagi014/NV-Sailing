<?php
/* Template Name: clubswan 80 */
get_header();
?>

<section class="page-template-EXCESS14">
    <section class="page-template-EXCESS11">
        <?php
        if (have_rows('top_banner_section')) :
            while (have_rows('top_banner_section')) : the_row();
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
                                    <h2><?= get_sub_field('sub_heading'); ?></h2>
                                    <?= get_sub_field('para'); ?>
                                </div>
                                <div class="bann-btm-right" data-aos="fade-down">
                                    <div class="bann-btm-right-in">
                                        <div class="lgo-are">
                                            <img src="<?= get_sub_field('banner_right_image'); ?>">
                                        </div>
                                        <div class="pro-dtl-are">
                                            <?php foreach (get_sub_field('profile_data') as $pro_det) : ?>
                                                <div class="pro-div">
                                                    <div class="pro-img-mn">
                                                        <img src="<?= $pro_det['image']; ?>">
                                                    </div>
                                                    <div class="pro-div-cont">
                                                        <h4><?= $pro_det['designation']; ?></h4>
                                                        <p><?= $pro_det['name']; ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
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
                                <?php foreach (get_sub_field('slider_images') as $mob_slider) : ?>
                                    <div class="item">
                                        <img src="<?= $mob_slider['image']; ?>">
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
                                <?= get_sub_field('para_1'); ?>

                                <?= get_sub_field('para_2'); ?>
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
                                <?= get_sub_field('para_1'); ?>
                            </div>

                            <div class="interior-img-are" data-aos="zoom-in">
                                <div class="intirior-in-img">
                                    <img src="<?= get_sub_field('image'); ?>">
                                </div>
                                <div class="img-ovr-cont">
                                    <?= get_sub_field('para_2'); ?>
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
                            <?php foreach (get_sub_field('specification_box') as $specifications) : ?>
                                <div class="spec-box">
                                    <div class="spec-line">
                                        <ul>
                                            <?php $count = 1;
                                            foreach ($specifications['list'] as $lists) : ?>
                                                <li <?= ($count == count($specifications['list'])) ? 'class="blank-li" style="border-color: transparent;"' : "" ?>><span><?= !empty($lists['title']) ? $lists['title'] : "" ?></span> <?= !empty($lists['value']) ? $lists['value'] : "" ?></li>
                                            <?php $count++;
                                            endforeach; ?>
                                            <li class="blank-li" style="border-color: transparent;"></li>
                                        </ul>
                                        <?php if(!empty(get_sub_field('button_link'))){ ?>
                                        <div class="download-the-brochure">
                                            <a href="<?php echo get_sub_field('button_link'); ?>" target="_blank"><?php echo get_sub_field('button_name'); ?></a>
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
        if (have_rows('configuration_area')) :
            while (have_rows('configuration_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="spec-sec-excss" data-aos="zoom-in">
                        <div class="sec-head">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach (get_sub_field('configuration_details') as $config) : ?>
                                    <div class="col-md-12">
                                        <div class="two-im-in">
                                            <img src="<?= $config['image']; ?>">
                                            <div class="textcont-in">
                                                <h4><?= $config['heading']; ?></h4>
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
    </section>
</section>



<?php get_footer(); ?>