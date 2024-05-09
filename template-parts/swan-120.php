<?php
/* Template Name: swan 120 */
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
                            <div class="vrtcl-slider  vrtcl-sliders" data-aos="zoom-in">
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
                        <div class="spec-sec-ex">
                            <?php foreach (get_sub_field('lists') as $spec_box) :  ?>
                                <div class="spec-box" data-aos="zoom-in">
                                    <h4><?= $spec_box['heading_top']; ?></h4>
                                    <div class="spec-line">
                                        <ul>
                                            <?php foreach ($spec_box['lists_rep'] as $spec_list) :  ?>
                                                <li class="<?= !empty($spec_list['class']) ? $spec_list['class'] : ""; ?>"><span><?= $spec_list['title']; ?></span> <?= $spec_list['value']; ?></li>
                                            <?php endforeach; ?>
                                            <!-- <li class=""><span>Displacement (light):</span> 99.000 kg</li>
                       <li><span>LWL:</span> 32.84 mt</li>
                       <li class=""><span>Displacement (loaded):</span> 112.000 kg</li>
                       <li class=""><span>Beam max:</span> 8.12 mt</li>
                       <li class=""><span>Ballast:</span> 30.600 kg</li>
                       <li class=""><span>Draught (Standard keel):</span> 4.70 mt</li>
                       <li class="blank-li_mobile"><span></span> </li>
                       <li class=""><span>Draught (Telescopic keel, optional):</span> 5.50 / 3.50 mt</li>
                       <li class="blank-li_mobile"><span></span> </li> -->
                                            <!--li></li>-->
                                        </ul>



                                    </div>
                                <?php endforeach; ?>
                                <!--  <div class="spec-box" data-aos="zoom-in">
                    <h4>RIG AND SAIL DIMENSIONS</h4>
                    <div class="spec-line">
                    <ul>
                       
                       <li><span>Main sail (standard):</span> 360.5 sqm</li>
                       
                       <li><span>Top Square mainsail (optional):</span> 391.0 sqm</li>
                       
                       <li class=""><span>I:</span> 44.42 mt</li>
                       
                       <li class=""><span>I:</span> 44.42 mt</li>
                       
                       <li class=""><span>J:</span> 13.85 mt</li>
                       <li class=""><span>J:</span> 13.85 mt</li>

                       <li class=""><span>P:</span> 43.00 mt</li>                       
                       <li class=""><span>P:</span> 43.00 mt</li>

                       <li class=""><span>E:</span> 14.10 mt</li>                      
                       <li class=""><span>E:</span> 14.10 mt</li>
                      
                       <!--li></li>-->
                                <!--  </ul>
                    </div>
                </div> -->

                                <!-- <div class="spec-box no" data-aos="zoom-in">
                    <h4>POWER SOURCES</h4>
                    <div class="spec-line">
                    <ul>
                       
                       <li><span>Service battery:</span> 24 V 1980 Ah / 1 h</li>
                       
                       <li><span>Diesel generator:</span> 2 x 230/400 V 32 kW 3-phase</li>
                       
                       <li class=""><span>Radio battery: </span> 24 V 180 Ah / 1 h</li>
                       
                       <li class=""><span>Shore power:</span> 230/400 V 50A 3-phase</li>

                       <li class=""><span>Starting batteries:</span> 24 V 75 Ah / 20 h</li>

                       <li class="blank-li_mobile"><span></span> </li>

                       <li class=""><span> Engine:</span> Scadia DI13 081M 331 kW / 450Hp</li>

                       <li class="blank-li_mobile"><span></span> </li>
                      
                     <li></li>-->
                                <!-- </ul>
                    </div>
                </div> -->
                                <?php if (!empty(get_sub_field("brochure_button_link"))) : ?>
                                    <div class="download-the-brochure"> <a href="<?= get_sub_field('brochure_button_link'); ?>" target="_blank"><?= get_sub_field('brochure_button'); ?></a> </div>
                                <?php endif; ?>

                                </div>
                    </section>
                    <style type="text/css">
                        .page-template-swan-120 section.spec-sec-excss .spec-sec-ex {
                            background: #0c2169;
                            padding: 60px 70px;
                            border-radius: 145px;
                        }

                        @media (max-width:768px) {
                            .page-template-swan-120 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
                                margin-bottom: 0px;
                            }
                        }

                        @media (max-width: 1440px) {
                            .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
                                font-size: 17px;
                            }

                            .page-template-swan-120 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {

                                height: 265px;
                            }

                            .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
                                padding: 30px 30px;
                                justify-content: start;
                            }
                        }


                        @media (max-width: 1243px) {
                            .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
                                font-size: 17px;
                            }
                        }

                        @media (min-width: 1601px) and (max-width: 1919px) {
                            .page-template-swan-120 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
                                font-size: 23px;
                                line-height: 27px !important;
                            }
                        }
                    </style>


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
                                    <div class="col-md-6">
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
    </section>
</section>
<?php
                endif;
            endwhile;
        endif;
?>
<style type="text/css">
    .page-template-swan-120 .textcont-in h4 {
        width: 100% !important;
        text-align: center;
    }



    .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
        font-size: 24px;
        line-height: 35px !important;
    }

    .page-template-swan-120 .page-template-EXCESS11 h2 {
        font-weight: 600;
        font-size: 50px;
        text-transform: uppercase;
    }

    .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1,
    .page-template-swan-58 .page-template-EXCESS11 .bann-btm-left h1 {
        font-size: 60px;
        margin-bottom: 15px;
        font-weight: 300;
    }

    .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
        display: block;
        text-align: center;
        font-weight: bold;
        font-family: 'Avenir';
    }

    .page-template-swan-58 .textcont-in h4,
    .page-template-clubswan-36 .textcont-in h4,

    .page-template-swan-58 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-clubswan-36 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-clubswan-50 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-clubswan-80 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-78 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-120 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-clubswan-125 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-48 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-oceanis-yacht-54 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-108 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-oceanis-yacht-60 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-128 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-88 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
    .page-template-swan-54 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right {
        width: 23% !important;
        margin-top: 0;
    }


    .page-template-swan-120 .page-template-EXCESS11 .pro-div .pro-div-cont p {
        line-height: 40px !important;
        font-size: 22px;
        margin-bottom: 0px;
    }






    @media(min-width:1920px) {



        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }


        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 30px;
            line-height: 30px;
        }

        .page-template-swan-120 .sec-head {
            text-align: center;
            margin-bottom: 50px;
        }

    }





    @media (max-width:2799px) {


        .page-template-swan-58 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-36 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-50 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-80 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-120 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-78 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-125 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-48 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-oceanis-yacht-54 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-108 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-oceanis-yacht-60 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-128 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-88 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-54 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right {
            width: 30% !important;
            margin-top: 0;
        }


    }



    @media (max-width:2599px) {

        .page-template-swan-120 .textcont-in h4 {
            font-size: 34px;
            margin: 20px 0;
        }


    }






    @media (max-width:2199px) {


        .page-template-swan-120 .page-template-EXCESS11 .pro-div .pro-div-cont p {
            line-height: 20px !important;
            font-size: 20px;
            margin-bottom: 0px;
        }

    }



    @media (max-width:1919px) {



        .page-template-swan-120 .page-template-EXCESS11 .pro-div .pro-div-cont p {
            font-size: 18px;
        }

    }



    @media (max-width:1599px) {

        .page-template-swan-120 .textcont-in h4 {
            font-size: 24px;
            margin: 20px 0;
        }




    }





    @media(min-width:2100px) {



        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 30px;
            line-height: 40px !important;
        }



        .page-template-swan-120 section.exterior-main-sec,
        .page-template-clubswan-36 section.exterior-main-sec,
        .page-template-clubswan-50 section.exterior-main-sec,
        .page-template-clubswan-80 section.exterior-main-sec,
        .page-template-swan-58 section.exterior-main-sec {
            padding-top: 1%;
        }

        .page-template-swan-120 section.interior-main-sec,
        .page-template-swan-58 section.interior-main-sec {
            padding-top: 60px;
        }

    }



    @media(min-width:2300px) {


        .page-template-swan-120 .page-template-EXCESS11 p,
        .page-template-swan-58 .page-template-EXCESS11 p {
            line-height: 50px !important;
            font-size: 30px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            justify-content: start;
            padding: 80px 60px;
        }



        .page-template-swan-120 .img-ovr-cont,
        .page-template-swan-58 .img-ovr-cont {
            height: 46%;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 29px;
            line-height: 45px !important;
        }





    }



    @media(min-width:2500px) {

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 34px;
            line-height: 50px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 70px;
            margin-bottom: 0px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            justify-content: start;
            padding: 100px 60px;
        }


    }



    @media(min-width:2700px) {

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 34px;
            line-height: 60px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 110px 40px 40px 60px;
        }

        .page-template-swan-120 .page-template-EXCESS11 p {
            font-size: 40px;
            line-height: 60px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1,
        .page-template-swan-58 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 80px;
            margin-bottom: 0px;
        }

        .page-template-swan-120 .img-ovr-cont {
            height: 46%;
        }

    }



    @media(min-width:2900px) {


        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 35px;
            line-height: 65px !important;
        }

        .page-template-swan-120 .img-ovr-cont {
            height: 46% !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 110px 40px 40px 60px;
            justify-content: start;
        }


    }






    @media (min-width: 1699px) {

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 24px;
            line-height: 40px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding-left: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box {
            margin-bottom: 30px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 20px;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .page-template-swan-120 section.interior-main-sec,
        .page-template-swan-58 section.interior-main-sec {
            padding-top: 40px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 50px;
            margin-bottom: 0px;
        }

    }


    @media (min-width:991px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 14px;
            line-height: 22px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 20px 30px;
            justify-content: start;
            display: flex;
        }


    }


    @media (min-width:1399px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 19px;
            line-height: 28px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 40px 30px;
            justify-content: start;
            display: flex;
        }


    }


    @media (min-width:1499px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 21px;
            line-height: 30px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 40px 30px;
            justify-content: start;
            display: flex;
        }

        .page-template-swan-120 .sec-head {
            margin-bottom: 50px;
        }

    }

    @media (min-width: 1599px) {

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 22px;
            line-height: 31px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-size: 34px;
            margin-bottom: 25px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box {
            margin-bottom: 30px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 20px;
            font-size: 22px;
        }

        .page-template-swan-120 section.exterior-main-sec,
        .page-template-swan-58 section.exterior-main-sec,
        .page-template-clubswan-36 section.exterior-main-sec,
        .page-template-clubswan-80 section.exterior-main-sec {
            padding-top: 10px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 40px 30px;
            justify-content: start;
            display: flex;
        }




    }

    @media (max-width: 1399px) {
        .page-template-swan-120 .page-template-EXCESS11 .pro-div .pro-div-cont p {
            line-height: 20px !important;
            font-size: 14px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 17px 40px;
            justify-content: start;
            height: 255px;
            display: flex;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 25px !important;
        }



    }


    @media (max-width: 1440px) {
        .page-template-clubswan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 16px;
            line-height: 20px !important;
        }
    }

    @media (max-width: 390px) {
        .page-template-clubswan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 14px;
        }
    }

    @media (max-width:426px) {
        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 16px;
        }

        .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
            background: #0c2169;
            padding: 70px 22px;
            border-radius: 210px;
            text-align: center;
        }
    }




    @media (max-width: 1499px) {



        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box {
            margin-bottom: 30px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 30px;
            font-size: 22px;
        }



        .page-template-swan-120 .page-template-EXCESS11 h2,
        .page-template-swan-58 .page-template-EXCESS11 h2 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1,
        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 50px;
            margin-bottom: 4px;
        }

        .page-template-swan-120 section.spec-sec-excss .spec-sec-ex {
            background: #0c2169;
            padding: 60px 70px 20px;
            border-radius: 145px;
        }

    }

    @media (max-width: 1200px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 27px 40px;
            justify-content: start;
            display: flex;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 14px;
            line-height: 22px !important;
        }


    }


    @media (max-width: 1024px) {


        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1,
        .page-template-swan-58 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 40px;
            margin-bottom: 5px;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2,
        .page-template-swan-58 .page-template-EXCESS11 h2 {
            font-size: 26px;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2,
        .page-template-swan-58 .page-template-EXCESS11 h2,
        .page-template-clubswan-36 .page-template-EXCESS11 h2,
        .page-template-clubswan-50 .page-template-EXCESS11 h2,
        .page-template-swan-48 .page-template-EXCESS11 h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

    }

    @media(max-width:991px) {

        .page-template-swan-120 .bann-btm-right {
            margin: 0 auto !important;
            padding-top: 0px !important;
        }

    }

    @media(max-width:768px) {


        li.blank-li_mobile {
            display: none;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box.no:after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #fff;
            left: 0;
            right: 0;
            display: none !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul {
            flex-wrap: wrap;
            padding-top: 15px;
            padding-bottom: 15px;
        }



        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li span {
            margin-bottom: 0px;
            line-height: 40px;
            display: inline-block !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            line-height: 35px;
            margin-bottom: 0px !important;
            padding-bottom: 0px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(1) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(2) {
            order: 1 !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(3) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(4) {
            order: 2 !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(5) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(6) {
            order: 3 !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(7) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(8) {
            order: 4 !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(9) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(10) {
            order: 5 !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(11) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(12) {
            order: 6 !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(13) {
            order: unset !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:nth-child(14) {
            order: 7 !important;
        }

        .page-template-swan-120 .page-template-swan-120 .speci_con_new ul {
            display: grid;
            margin: 0px;
            padding: 0px;
        }

        /*------------------------*/


        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 5px;
            font-size: 14px;
            padding-top: 15px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box {
            margin-bottom: 10px;
        }

        .page-template-swan-120 .page-template-EXCESS11 p {
            line-height: 32px !important;
            font-size: 18px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1,
        .page-template-swan-58 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 40px;
            margin-bottom: 5px;
            font-family: 'Carla Sans';
        }

        .page-template-swan-120 .page-template-EXCESS14 .page-template-EXCESS11 h2,
        .page-template-swan-58 .page-template-EXCESS14 .page-template-EXCESS11 h2 {
            font-size: 31px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 19px;
            line-height: 28px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            width: 100%;
            padding-bottom: 23px;
        }

        .page-template-swan-120 .textcont-in h4,
        .page-template-swan-58 .textcont-in h4 {
            font-size: 20px;
            margin: 30px 0;
        }

        .page-template-swan-58 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-36 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-50 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-80 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-120 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-78 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-clubswan-125 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right,
        .page-template-swan-48 .page-template-EXCESS14 .page-template-EXCESS11 .bann-btm-right {
            width: 100% !important;
            margin-top: 0;
            padding: 0;
        }



    }



    @media(max-width:767px) {

        .page-template-swan-120 .page-template-EXCESS11 section.bann-btm-sec .container-fluid {
            padding: 0 20px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 32px;
            margin-bottom: 5px;
            font-family: 'Carla Sans';
        }

        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-family: 'Carla Sans';
            font-weight: 500;
            font-size: 32px;
        }

        /*.page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li span,*/

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding-left: 10px;
            padding-bottom: 40px;
            height: auto;
            padding-right: 10px;
            padding-top: 20px;
        }

        .page-template-swan-120 .textcont-in h4,
        .page-template-swan-58 .textcont-in h4 {
            font-size: 24px;
            margin: 30px 0;
        }


    }


    @media (min-width:1920px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 50px 60px;
            justify-content: start;
            display: flex;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 26px;
            line-height: 36px !important;
        }

        /*.page-template-swan-120 .page-template-EXCESS11 p {
    padding-right: 5%;
}*/

    }

    @media (min-width:2100px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 50px 60px;
            justify-content: start;
            display: flex;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 26px;
            line-height: 43px !important;
        }

        .page-template-swan-120 .two-im-in img {
            display: block;
            margin: auto;
            width: 80%;
        }

        .page-template-swan-120 section.exterior-main-sec {
            padding-top: 40px;
        }

        /*.page-template-swan-120 .page-template-EXCESS11 p {
    padding-right: 5%;
}*/

    }

    @media (min-width:2300px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 70px 60px;


        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 26px;
            line-height: 43px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .page-template-swan-120 section.exterior-main-sec {
            padding-top: 40px;
        }

        /*.page-template-swan-120 .page-template-EXCESS11 p {
    padding-right: 5%;
}*/

    }


    @media (min-width:2500px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 70px 60px;


        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 31px;
            line-height: 54px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 57px;
            font-size: 35px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box {
            margin-bottom: 60px;
        }

        .page-template-swan-120 .sec-head {
            text-align: center;
            margin-bottom: 70px;
        }

        .page-template-swan-120 section.exterior-main-sec {
            padding-top: 60px;
        }

        /*.page-template-swan-120 .page-template-EXCESS11 p {
    padding-right: 5%;
}*/

    }

    @media (min-width:2700px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 70px 60px;


        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 36px;
            line-height: 60px !important;
        }

        .page-template-swan-120 .textcont-in h4 {
            font-size: 38px;
        }

        .page-template-swan-120 .page-template-EXCESS11 h2,
        .page-template-swan-54 .page-template-EXCESS11 h2 {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .page-template-swan-120 .page-template-EXCESS11 .bann-btm-left h1 {
            font-size: 80px;
            margin-bottom: 0px;
        }

        .page-template-swan-120 .sec-head {
            text-align: center;
            margin-bottom: 70px;
        }

        /*.page-template-swan-120 .page-template-EXCESS11 p {
    padding-right: 5%;
}*/

        .page-template-swan-120 section.exterior-main-sec {
            padding-top: 70px;
        }

    }

    @media (min-width:2800px) {
        .page-template-swan-120 .page-template-EXCESS11 p {
            padding-right: 5%;
        }

    }

    @media (min-width:2900px) {
        .page-template-swan-120 .page-template-EXCESS11 p {
            padding-right: 5%;
        }

    }

    @media (min-width:3000px) {
        .page-template-swan-120 .page-template-EXCESS11 p {
            padding-right: 5%;
        }

    }

    @media (min-width:3100px) {
        .page-template-swan-120 .page-template-EXCESS11 p {
            padding-right: 5%;
        }

    }



    @media (min-width:3200px) {
        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
            padding: 100px 60px;


        }

        .page-template-swan-120 section.exterior-main-sec {
            padding-top: 80px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
            font-size: 36px;
            line-height: 60px !important;
        }

        .page-template-swan-120 .page-template-EXCESS11 p {
            padding-right: 5%;
        }

    }

    @media(max-width:1600px) {

        .page-template-swan-120 .page-template-EXCESS11 p {
            padding-right: 3%;
        }

    }

    @media(max-width:576px) {

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #fff;
            left: 0;
            right: 0;
            display: none;
        }

        .page-template-swan-120 section.spec-sec-excss .spec-sec-ex {
            padding: 60px 40px 20px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(5):after {
            position: relative;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
            position: relative;
        }

        .page-template-swan-120 .textcont-in h4,
        .page-template-swan-58 .textcont-in h4 {
            font-size: 20px;
            margin: 30px 0;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box {
            margin-bottom: 30px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss,
        .page-template-swan-58 .page-template-EXCESS11 section.spec-sec-excss {
            padding: 40px 30px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box h4 {
            margin-bottom: 5px;
            font-size: 19px;
        }

        .page-template-swan-120 .page-template-EXCESS11 section.interior-main-sec .container-fluid {
            padding: 0 30px;
        }

    }



    @media (max-width:375px) {

        .page-template-swan-120 .page-template-EXCESS14 .page-template-EXCESS11 h2,
        .page-template-swan-58 .page-template-EXCESS14 .page-template-EXCESS11 h2 {
            font-size: 26px;
        }


    }
</style>

<?php get_footer(); ?>