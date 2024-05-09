<?php
/* Template Name: swan 58 */
get_header();
?>

<style type="text/css">
    .page-template-swan-58 section.spec-sec-excss .spec-sec-ex {
        background: #0c2169;
        padding: 60px 70px;
        border-radius: 145px;
    }

    @media (max-width:768px) {
        .page-template-swan-58 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            margin-bottom: 0px;
        }
    }

    @media (max-width: 1440px) {
        .page-template-swan-58 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 17px;
        }

        .page-template-swan-58 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            height: 265px;
        }

        .page-template-swan-58 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 30px 30px;
            justify-content: start;
        }

        .page-template-swan-58 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 30px !important;
        }

    }


    @media (max-width: 1243px) {
        .page-template-swan-58 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 17px;
        }

        .page-template-swan-58 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 30px !important;
        }

    }

    @media (max-width: 1199px) {
        .page-template-swan-58 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 22px !important;
        }

    }
    @media (max-width:768px){
        .download-the-brochure {
            margin-top: 40px;
        }
    }
    @media (max-width: 600px) {
        .page-template-swan-58 section.spec-sec-excss .spec-sec-ex {
            background: #0c2169;
            padding: 60px 70px;
            border-radius: 245px;
        }

        .page-template-swan-58 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 30px 30px 60px;
            justify-content: start;
        }

    }
    @media (max-width:480px){
        .page-template-swan-58 section.spec-sec-excss .spec-sec-ex {
            padding: 70px 40px;
        }
        .page-template-EXCESS11 .download-the-brochure {
            padding: 0 30px;
            margin-top: 0;
        }
    }
    @media (max-width:390px){
        .page-template-EXCESS11 .download-the-brochure {
            padding: 0 0px;
        }
        .download-the-brochure a {
            line-height: 22px;
        }
    }

    /*@media (max-width: 576px){
.download-the-brochure{
        width: 100%;
    }

.download-the-brochure a {
    display: inline-block;
    margin: 0 auto;
    font-size: 16px;
    width: 177px;
    line-height: 20px;
}

}*/
</style>

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
                                <div class="bann-btm-right" data-aos="zoom-in">
                                    <div class="bann-btm-right-in">
                                        <div class="lgo-are">
                                            <img src="<?= get_sub_field('profile_logo'); ?>">
                                        </div>
                                        <div class="pro-dtl-are">
                                            <?php if (have_rows('profile')) :
                                                while (have_rows('profile')) : the_row();
                                            ?>
                                                    <div class="pro-div">
                                                        <div class="pro-img-mn">
                                                            <img src="<?= get_sub_field('pic'); ?>">
                                                        </div>
                                                        <div class="pro-div-cont">
                                                            <h4><?= get_sub_field('designation'); ?></h4>
                                                            <p><?= get_sub_field('name'); ?></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                            <!-- <div class="pro-div">
                                    <div class="pro-img-mn">
                                        <img src="https://nvsailing.com/wp-content/uploads/2023/01/profile_2.png">
                                    </div>
                                    <div class="pro-div-cont">
                                        <h4>THE INTERIOR DESIGNER:</h4>
                                        <p>Misa Poggi</p>
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
        if (have_rows('desktop_slider_section')) :
            while (have_rows('desktop_slider_section')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="main-img-slider desk">
                        <div class="container-fluid">
                            <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                                <?php foreach (get_sub_field('slider_image') as $desk_images) : ?>
                                    <div class="item">
                                        <img src="<?= $desk_images['image']; ?>">
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
        if (have_rows('mobile_slider_images')) :
            while (have_rows('mobile_slider_images')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="main-img-slider mob">
                        <div class="container-fluid">
                            <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                                <?php foreach (get_sub_field('slider_image') as $phone_images) : ?>
                                    <div class="item">
                                        <img src="<?= $phone_images['image']; ?>">
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
        if (have_rows('exterior_main_section_area')) :
            while (have_rows('exterior_main_section_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="interior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading_exter'); ?></h2>
                                <?= get_sub_field('content_extra'); ?>
                            </div>

                            <div class="interior-img-are" data-aos="zoom-in">
                                <div class="intirior-in-img">
                                    <img src="<?= get_sub_field('image'); ?>">
                                </div>
                                <div class="img-ovr-cont">
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
                    <section class="spec-sec-excss">
                        <div class="sec-head" data-aos="zoom-in">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="spec-sec-ex" data-aos="zoom-in">
                            <?php foreach (get_sub_field('lists') as $spec_box) :  ?>
                                <div class="spec-box">
                                    <h4><?= $spec_box['heading_top']; ?></h4>
                                    <div class="spec-line">
                                        <ul>
                                            <? //php if(have_rows('lists_rep')): 
                                            //while(have_rows('lists_rep')): the_row();
                                            ?>
                                            <?php foreach ($spec_box['lists_rep'] as $spec_list) :  ?>
                                                <li><span><?= $spec_list['title']; ?></span> <?= $spec_list['value']; ?></li>
                                            <?php endforeach; ?>

                                            <!-- <li><span>Draught (light) Std keel:</span> 2.70 m 8.86 ft</li>
                            <li><span>LOA:</span> 19.11 m 62.70 ft</li>
                            <li><span> &nbsp; &#8226; Shallow:</span> 2.20 m 7.22 ft</li>
                            <li><span>LWL:</span> 17.09 m 56.07 ft</li>
                            <li><span>&nbsp; &#8226; Performance keel:</span> 3.80 m 12.47 ft</li>
                            <li><span>Beam max:</span> 5.27 m 17.29 ft</li>
                            <li><span>Ballast, standard keel:</span> 7500 kg 16540 lbs</li>
                            <li><span>Displacement (light):</span> 25400 kg 56000 lbs</li>
                            <li><span>Engine Volvo:</span> D3-150 110 kW 150 Hp</li> -->
                                        </ul>

                                    </div>



                                </div>
                            <?php endforeach; ?>
                            <!--   <div class="spec-box">
                    <h4>RIG AND SAIL DIMENSIONS</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>IG:</span> 25.50 m 83.66 ft</li>
                            <li><span>E:</span> 7.70 m 25.26 ft</li>
                            <li><span>J:</span> 7.21 m 23.65 ft</li>
                            <li><span>TPS:</span> 8.75 m 28.71 ft</li>
                            <li><span>P:</span> 24.30 m 79.72 ft</li>
                            <li class="blank-li"></li>
                        </ul>
                    </div>
                </div>
                <div class="spec-box">
                    <h4>SAIL AREAS</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>Fore triangle:</span> 91.93 m² 990 sq.ft</li>
                            <li><span>100% Jib:</span> 97.48 m² 1051 sq.ft</li>
                            <li><span>Main sail:</span> 116.52 m² 1253 sq.ft</li>
                            <li><span>Gennaker:</span> 334 m² 3595 sq.ft</li>
                        </ul>
                    </div>
                </div>
                <div class="spec-box">
                    <h4>TANK CAPACITY</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>Fuel:</span> 1080 | 285 Usg</li>
                            <li><span>Hot water:</span> 60 | 15.8 Usg</li>
                            <li><span>Water:</span> 946 |
                             250 Usg</li>
                            <li><span>Holding tanks:</span> 150 | 39.6 USg</li>
                            <li><span>Hot water:</span> 80 | 21 USg</li>
                            <li class="blank-li"></li>
                        </ul>
                    </div>
                </div>
                <div class="spec-box">
                    <h4>BATTERY</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>Service battery, AGM:</span> 24 V 460 Ah/20h</li>
                            <li><span>Shore power:</span> 230 V 32 A 50 Hz</li>
                            <li><span>Starting battery, AGM:</span> 12 V 50 Ah/20h</li>
                            <li><span>Battery charger:</span> 70 A</li>
                        </ul>
                    </div>
                </div> -->
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
        if (have_rows('profile_area')) :
            while (have_rows('profile_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="spec-sec-excss excss">
                        <div class="sec-head" data-aos="zoom-in">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="container-fluid" data-aos="zoom-in">
                            <div class="row">
                                <?php foreach (get_sub_field('images') as $profie_box) : ?>

                                    <div class="col-md-4">
                                        <div class="two-im-in">
                                            <img src="<?= $profie_box['image']; ?>">
                                            <div class="textcont-in">
                                                <h4><?= $profie_box['title_cong']; ?></h4>
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