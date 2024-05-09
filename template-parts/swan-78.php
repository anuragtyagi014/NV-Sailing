<?php
/* 
Template Name: Swan 78 Template
*/
get_header(); ?>

<style type="text/css">
    .page-template-swan-78 section.spec-sec-excss .spec-sec-ex {
        background: #0c2169;
        padding: 60px 70px;
        border-radius: 145px;
    }

    @media (max-width:390px) {
        .download-the-brochure {
            padding: 0 0px !important;
        }
    }

    @media (max-width:480px) {
        .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
            padding: 70px 40px;
        }

    }

    @media (max-width: 767px) {
        .page-template-EXCESS11 .download-the-brochure {
            padding: 0 30px;
        }

        .page-template-swan-78 section.spec-sec-excss .spec-sec-ex {
            border-radius: 210px;
        }
    }

    @media (max-width:768px) {
        .page-template-swan-78 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            margin-bottom: 0px;
        }

    }

    @media (max-width:992px) {
        .page-template-swan-78 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            margin-bottom: 0px;
        }

        .page-template-swan-78 section.bann-btm-sec .row-in>div {
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width: 1440px) {
        .page-template-swan-78 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 32px !important;
        }

        .page-template-swan-78 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            height: 265px;
        }

        .page-template-swan-78 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 30px 30px;
            justify-content: start;
        }
    }


    @media (max-width: 1243px) {

        .page-template-swan-78 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 17px;
            line-height: 24px !important;
        }

    }

    @media (max-width: 1200px) {
        .page-template-swan-78 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 26px !important;
        }


    }
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
                                    <!-- <p>All of Nautor's know-how and experience in racing and cruising yachts have been incorporated into this new blue-water Swan 78, a direct descendant of the original Swan 80 and 82 models of the past. She is slightly shorter overall - in order to meet the EC 24.00 metre length overall limitation - beamier and more powerful. </p> -->
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
                                                            <h4><?= get_sub_field('designation'); ?>:</h4>
                                                            <p><?= get_sub_field('name'); ?></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                            <!--  <div class="pro-div">
                                    <div class="pro-img-mn">
                                        <img src="https://nvsailing.com/wp-content/uploads/2023/01/profile_2.png">
                                    </div>
                                    <div class="pro-div-cont">
                                        <h4>INTERIOR<br>DESIGNER:</h4>
                                        <p>Heini Gustafsson</p>
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
                                <!-- <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/01/275077-2.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/01/833419-3.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/01/225383-1.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/01/126249-4.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/01/126249-4.png">
                        </div>
                        <div class="item">
                             <img src="https://nvsailing.com/wp-content/uploads/2023/01/808742-6.png">
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
                                <!-- <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Neeraj-1-12.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Neeraj-1-9.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Neeraj-1-8.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Neeraj-1-7.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Neeraj-1-11.png">
                        </div>
                        <div class="item">
                            <img src="https://nvsailing.com/wp-content/uploads/2022/12/Neeraj-1-10.png">
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
        if (have_rows('interior_main_area')) :
            while (have_rows('interior_main_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <section class="exterior-main-sec">
                        <div class="container-fluid">
                            <div class="sec-head" data-aos="zoom-in">
                                <h2><?= get_sub_field('heading'); ?></h2>
                                <!--  <p>The deck is the one area of the yacht where owners, guests and crew spend the most time. Here is where the yacht is handled under sail, and here is where guests enjoy the seascapes at anchor. The Swan 78 deck layout is the most recent evolution of the "S" concept (Semi-raised Saloon), with the celebrated Swan coachroof, discreet and streamlined, with panoramic views from inside, due to the raised saloon. On the 78 Frers signature lines have given their very best, with sleek curves that create a volume capable of protecting the cockpit and creating more space below. The coachroof design is a masterly mix of curved lines and multifaceted surfaces, with 360 degree windows and a generous roof that doubles up as a sunbathing area. The recessed sprayhood and the full beam bimini keep guests always well protected in a cockpit/ lounge that features two C shaped settees each with its own table. </p> -->
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
                                <!-- <p>To provide the most flexibility and satisfy any possible owners' requirement, in the interiors configuration the Owner has a large suite forward, cooler and quieter. It is 4.5 m long, with an island bed that is completely accessible on three sides. A desk and dedicated bathroom, with large separate shower compartment, complete this luxurious apartment. </p> -->
                                <?= get_sub_field('content_extra'); ?>
                            </div>

                            <div class="interior-img-are" data-aos="zoom-in">
                                <div class="intirior-in-img">
                                    <img src="<?= get_sub_field('image'); ?>">
                                </div>
                                <div class="img-ovr-cont">
                                    <!-- <p>Sailing a Swan 78 is an experience that instantly explains the latest design trends for sailing yachts. The first feature that emerges is her extreme stability during sailing, made possible through her twin rudders.</p> -->
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
                                            <?php $count = 1;
                                            foreach ($spec_box['lists_rep'] as $spec_list) :  ?>

                                                <li <?php if ($spec_box['heading_top'] == 'RIG AND SAIL DIMENSIONS' && $count == count($spec_box['lists_rep'])) {
                                                        echo 'style="border-bottom: 2px solid #fff0; padding-bottom: 0; margin-bottom: 0;"';
                                                    } ?>><span><?= $spec_list['title']; ?></span> <?= $spec_list['value']; ?></li>
                                            <?php $count++;
                                            endforeach; ?>
                                            <?php if ($spec_box['heading_top'] == 'RIG AND SAIL DIMENSIONS') { ?>
                                                <li class="blank-li" style="border-bottom: 2px solid #fff0; padding-bottom: 0; margin-bottom: 0;"></li>
                                            <?php  } else { ?>
                                                <li class="blank-li"></li>
                                            <?php } ?>
                                            <!-- <li><span>Length Overall:</span> 25,55 m 83.82 ft</li>
                            <li><span>Draft lifting keel (opt):</span>9.84 ft / 14.11 ft</li>
                            <li><span>Length of waterline:</span> 22,18 m 72.77 ft</li>
                            <li><span>Displacement:</span> 42.600 kg 93,916 lbs</li>
                            <li><span>Beam max:</span> 6,40 m 21.00 ft</li>
                            <li><span>Ballast:</span> 11.600 kg 25,573 lbs </li>
                            <li><span>Draft:</span> 4.00 m 13.12 ft</li>
                            <li><span>Engine:</span> 129 kW 175 Hp</li>
                            <li><span>Draft shallow (opt):</span> 3.00 m 9.84 ft</li>
                            <li class="blank-li"></li> -->

                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!--                 <div class="spec-box">
                    <h4>RIG AND SAIL DIMENSIONS</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>IG:</span> 31,60 m 103.67 ft</li>
                            <li><span>Main sail:</span> 196,0 m2 2110 sq.ft</li>
                            <li><span>J:</span> 9,77 m 32.05 ft</li>
                            <li><span>Fore triangle:</span> 154,4 m2 1662 sq.ft</li>
                            <li><span>P:</span> 31,00 m 101.71 ft</li>
                            <li><span>Jib:</span> 174,3 m2 1876 sq.ft</li>
                            <li style="border-bottom: 2px solid #fff0; padding-bottom: 0; margin-bottom: 0;"><span>E:</span> 10,25 m 33.63 ft</li>
                            <li class="blank-li" style="border-bottom: 2px solid #fff0; padding-bottom: 0; margin-bottom: 0;"></li>
                        </ul>
                    </div>
                </div>
                <div class="spec-box">
                    <h4>TANK CAPACITY</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>Fuel:</span> 2.000 | 528 gal</li>
                            <li><span>Hot water:</span> 100 | 26 gal</li>
                            <li><span>Water:</span> 1.300 | 343 gal</li>
                            <li class="blank-li"></li>
                        </ul>
                    </div>
                </div> -->
                            <?php if (!empty(get_sub_field("button_link"))) : ?>
                                <div class="download-the-brochure">
                                    <a href="<?php echo get_sub_field('button_link') ?>" target="_blank">
                                        <?php echo get_sub_field('button_name') ?>
                                    </a>
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
                    <section class="spec-sec-excss">
                        <div class="sec-head" data-aos="zoom-in">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="container-fluid" data-aos="zoom-in">
                            <div class="row">
                                <?php foreach (get_sub_field('images') as $profie_box) : ?>
                                    <div class="col-md-12">
                                        <div class="two-im-in">
                                            <img src="<?= $profie_box['image']; ?>">
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