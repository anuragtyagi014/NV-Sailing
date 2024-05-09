<?php
/* 
   Template Name: TIWAL 2 Template
   */

get_header();

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
    .bann-btm-right {
        width: 360px;
        margin-top: -140px;
    }

    section.top-bann-sec img {
        width: 100%;
        height: auto;
        object-fit: cover;
        object-position: center;
    }

    .new_mirage h1 {
        font-family: jost;
        font-weight: bold;
        font-size: 30px;
        color: #F26715;
    }

    .mirage_page .bann-btm-left {
        padding-top: 0px;
    }

    .mirage_page h3 {
        font-size: 10vw;
        color: #fff;
        line-height: 0.5;
        font-family: 'jost';
    }

    .mirage_page {
        position: absolute;
        bottom: 0;
    }

    section.top-bann-sec {
        position: relative;
    }

    .mirage_page {
        position: absolute;
        bottom: 0;
        width: 100%;
        max-width: 71%;
        margin: 0 auto;
        left: 50%;
        transform: translateX(-50%);
    }

    section.spec-sec-excss .spec-sec-ex {
        background: #0c2169;
        padding: 60px 140px;
        border-radius: 145px;
    }

    section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
        color: white;
        list-style-type: none;
        width: 50%;
        font-family: "Avenir";
        border-bottom: 2px solid white;
        font-weight: lighter;
        font-size: 25px;
        margin-bottom: 14px;
        padding-bottom: 12px;
    }



    .new_mirage_tech ul li {
        width: 100% !important;
    }

    .new_sec_mirage {
        padding: 60px 0px;
    }

    section.spec-sec-excss .spec-sec-ex {
        padding: 60px 100px;
    }


    .new_mirage_tech ul li {
        width: 100% !important;
        font-weight: 600;

    }

    li.fon_we {
        border-bottom: 2px solid #ffffff00 !important;
    }

    li.fon_we_new {
        visibility: hidden;
    }

    section.bann-btm-sec {
        padding-bottom: 30px;
    }

    .tech_img_new {
        padding: 40px 0px 0px;
    }

    .tech_img_new img {
        width: 90% !important;
        margin: 0 auto;
        text-align: center;
    }


    .main_box_head h1 {
        color: #F26715;
        border-bottom: 2px solid #0c2169;
        font-family: var(--font-secondary);
        width: 36%;
        margin: 0 auto;
        padding: 0px 0px 10px;
    }

    .main_box_head {
        padding-bottom: 30px;
    }

    .bt_download {
        padding-top: 30px;
        font-family: 'Avenir';
    }

    .bt_download p b a {
        color: var(--color-primary);
        text-decoration: none;
    }

    .award_in {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        column-gap: 10px;
    }

    .award_img {
        width: 50%;
    }

    .award_content {
        width: 50%;
        text-align: left;
    }

    .award_img img {
        width: 100%;
    }

    .award_new {
        padding: 50px 0px;
    }

    section.excess-vdo {
    padding: 0px 0px 50px;
    position: relative;
}

.container-fluid {
    padding: 0 12%;
}

section.excess-vdo .excess-sec-vdo video {
    width: 100%;
    border-radius: 1000px;
    height: 907px;
    object-fit: cover;
}



    @media(min-width: 1920px) {

        .new_mirage br {
            display: none;
        }

        .bann-btm-left {
            padding-right: 4%;
            padding-bottom: 4%;
        }

        .new_mirage h1 {
            font-size: 50px;
        }

        .bann-btm-right {
            width: 430px;
            margin-top: -140px;

        }

        .new_sec_mirage {
            padding: 80px 0px;
        }

        .ft-bt_mirage p br {
            display: none;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 28px;
            margin-bottom: 18px;
            padding-bottom: 18px;
        }

        br.for_align {
            display: block;
        }

    }


  


    @media(min-width: 2500px) {
        .new_mirage h1 {
            font-size: 60px;
        }

        .new_sec_mirage {
            padding: 100px 0px 80px 0px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 34px;
            margin-bottom: 24px;
            padding-bottom: 24px;
        }

        .footer-text {
            padding-bottom: 12%;
        }

        .sec-head h2 {
            font-size: 42px;
        }

        .main_box_head h1 {     
            font-size: 50px;
        }

        .sec-head p br {
            display: none;
        }

    .bann-btm-left {
    padding-bottom: 2%;
}

    section.excess-vdo .excess-sec-vdo video {
    height: 1300px;
}

    }

    @media(min-width: 2700px) {
        .new_mirage h1 {
            font-size: 65px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 38px;
            margin-bottom: 30px;
            padding-bottom: 30px;
        }

        section.spec-sec-excss .spec-sec-ex {
            padding: 80px 100px 60px;
        }

        .bann-btm-right {
            width: 530px;
        }

        .main_box_head h1 {
            font-size: 65px;
        }

        .sec-head h2 {
            font-size: 60px;
            margin-bottom: 35px;
        }

        .award_in {
            column-gap: 20px;
        }

    }

    @media(min-width: 1440px) and (max-width: 1680px) {
        .bann-btm-right {
            padding-left: 30px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 22px;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        section.spec-sec-excss .spec-sec-ex {
            padding: 70px 70px 50px;
        }

        .ft-bt_mirage p br {
            display: none;
        }

    }


    @media(max-width: 2599px) {
        .mirage_page {
            max-width: 76%;
        }


    }

    @media(max-width: 1920px) {
        .main_box_head h1 {
            padding: 0px 0px 10px;
            font-size: 40px;
        }

        .last_main h4 {
            font-size: 30px;
            padding: 15px 0 0px;
        }

        .sec-head h2 {
            font-size: 38px;
        }

        br.for_align {
            display: block;
        }

    }

    @media(max-width: 1919px) {
        .sec-head p br {
            display: none;
        }

section.excess-vdo .excess-sec-vdo video {
    height: 700px;
}
    }

    @media(max-width: 1600px) {
        .bann-btm-right {
            padding-left: 30px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 20px;

        }

        section.spec-sec-excss .spec-sec-ex {
            padding: 60px 60px 30px;
        }

        .bann-btm-left br {
            display: none;
        }

        .main_box_head h1 {
            font-size: 38px;
        }

        .sec-head h2 {
            font-size: 38px;
        }

        br.for_align {
            display: block;
        }

    section.excess-vdo .excess-sec-vdo video {
    height: 600px;
}

    }

    @media(max-width: 1400px) {
        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 18px;
            margin-bottom: 10px;
            padding-bottom: 8px;
        }

        .main_box_head h1 {
            font-size: 30px;
        }

        .sec-head h2 {
            font-size: 30px;
        }

        .award_in {
            align-items: flex-start;
            column-gap: 10px;
        }

        section.interior-main-sec {
            padding-top: 40px;
        }

        .main_box_head {
            padding-bottom: 20px;
        }


        section.excess-vdo .excess-sec-vdo video {
    height: 500px;
}

    }

    @media(max-width: 1200px) {
        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 16px;
            margin-bottom: 10px;
            padding-bottom: 8px;
        }

        .new_sec_mirage {
            padding: 40px 0px;
        }

        .ft-bt_mirage p br {
            display: none;
        }

        .mirage_page {
            max-width: 82%;
        }

        .mirage_page h3 {
            font-size: 90px;
        }

        .main_box_head h1 {
            font-size: 28px;
        }

        .sec-head h2 {
            font-size: 28px;
        }

        .award_new {
            padding: 30px 0px;
        }

        section.excess-vdo .excess-sec-vdo video {
    height: 400px;
}

    }

    @media(max-width: 992px) {

        .mirage_page h3 {
            font-size: 80px;
            line-height: 0.4;
        }

        .bann-btm-right {
            padding-left: 0px !important;
        }

        .bann-btm-right {
            margin-top: 50px;
        }

        section.spec-sec-excss .spec-sec-ex {
            padding: 60px 30px 30px;
            text-align: center;
        }

        .slick-slide img {
            display: block;
            width: 66% !important;
            margin: 0 auto;
        }

        /*.fon_none {
            display: none;
        }*/

        img.excess-desk {
    width: 400px;
    margin: 0 auto;
}


        section.bann-btm-sec .row-in {
    display: flex;
    flex-direction: column-reverse;
}

     /*   .bann-btm-right img.excess-phone {
            display: block;
            width: 60%;
            text-align: center;
            margin: 0 auto;
        }*/

        .main_box_head h1 {
            width: 100%;
        }

        li.fon_we_new {
            display: none;
        }

        .award_img img {
            width: 300px;
            margin: 0 auto;
            margin-bottom: 16px;
        }

        section.excess-vdo .excess-sec-vdo video {
    height: 350px;
}

    }


    @media(max-width: 767px){
        section.excess-vdo .excess-sec-vdo video {
    height: 182px;
}


     .bann-btm-right img.excess-phone {
            display: block;
            width: 60%;
            text-align: center;
            margin: 0 auto;
        }


.fon_none {
            display: none;
        }

        .container-fluid {
    padding: 0 10%;
}

    }

    @media(max-width: 576px) {
        .sec-head h2 {
            font-size: 22px;
        }

        .new_mirage h1 {
            font-size: 18px;
        }

        .bann-btm-right img.excess-phone {
            display: block;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

        .award_img img {
            width: 130px;
        }

        .award_new {
            padding: 10px 0px;
        }

        section.excess-vdo .excess-sec-vdo video {
    height: 140px;
}

    }
</style>

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
                <div class="mirage_page">
                    <h3 class="head_page_mirage">2</h3>
                </div>
            </section>

<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('about_section')) :
    while (have_rows('about_section')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="bann-btm-sec">
                <div class="container-fluid">
                    <div class="row-in">
                        <div class="bann-btm-left new_mirage">
                            <h1 class="fon_none"><?= get_sub_field('heading_1'); ?></h1>
                            <?= get_sub_field('heading_2'); ?>
                            <?= get_sub_field('para'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="fade-up">
                            <img src="<?= get_sub_field('banner_right_desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('banner_right_phone_image'); ?>" class="excess-phone" alt="">
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
if (have_rows('video_section')) :
    while (have_rows('video_section')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="excess-vdo" data-aos="zoom-in">
                <div class="excess-sec-vdo">
                    <div class="container-fluid">
                        <video src="<?= get_sub_field('video'); ?>" playsinline="" autoplay="" muted="" loop=""></video>
                    </div>
                </div>
</section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('slider_image_area')) :
    while (have_rows('slider_image_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="main-img-slider desk">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('images') as $slider) : ?>
                            <div class="item">
                                <img src="<?= $slider['image']; ?>">
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="item">
                <img src="https://nvsailing.com/wp-content/uploads/2023/06/tiwal-slide2.png">
            </div>
            <div class="item">
                <img src="https://nvsailing.com/wp-content/uploads/2023/06/tiwal-slide3.png">
            </div>

            <div class="item">
                <img src="https://nvsailing.com/wp-content/uploads/2023/06/tiwal-slide4.png">
            </div>
            <div class="item">
                <img src="https://nvsailing.com/wp-content/uploads/2023/06/tiwal-slide5.png">
            </div>
            <div class="item">
                <img src="https://nvsailing.com/wp-content/uploads/2023/06/tiwal-slide6.png">
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
if (have_rows('transport_section_area')) :
    while (have_rows('transport_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <div class="main_box_head">
                            <h1><?= get_sub_field('heading'); ?></h1>
                        </div>
                        <h2 class="tagline"><?= get_sub_field('heading_2'); ?> </h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
if (have_rows('sailing_section_area')) :
    while (have_rows('sailing_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <div class="main_box_head">
                            <h1><?= get_sub_field('heading'); ?></h1>
                        </div>
                        <h2 class="tagline"><?= get_sub_field('heading_2'); ?> </h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
if (have_rows('assembly_section_area')) :
    while (have_rows('assembly_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <div class="main_box_head">
                            <h1><?= get_sub_field('heading'); ?></h1>
                        </div>
                        <h2 class="tagline"><?= get_sub_field('heading_2'); ?></h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
                        </div>
                    </div>

                    <div class="bt_download sec-head">
                        <p><b><a href="<?= get_sub_field('download_link'); ?>"><?= get_sub_field('download_text'); ?></a></b></p>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('ergonomics_section_area')) :
    while (have_rows('ergonomics_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <div class="main_box_head">
                            <h1><?= get_sub_field('heading'); ?></h1>
                        </div>
                        <h2 class="tagline"><?= get_sub_field('heading_2'); ?></h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
if (have_rows('onboard_section_area')) :
    while (have_rows('onboard_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <div class="main_box_head">
                            <h1><?= get_sub_field('heading'); ?></h1>
                        </div>
                        <h2 class="tagline"><?= get_sub_field('heading2'); ?></h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
if (have_rows('design_section_area')) :
    while (have_rows('design_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <div class="main_box_head">
                            <h1><?= get_sub_field('heading'); ?></h1>
                        </div>
                        <h2 class="tagline"><?= get_sub_field('heading_2'); ?></h2>
                        <?= get_sub_field('para'); ?>

                    </div>
                    <div class="interior-img-are" data-aos="zoom-in">
                        <div class="intirior-in">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
            <section class="spec-sec-excss bann-btm-sec new_sec_mirage">
                <div class="container-fluid">
                    <div class="sec-head">
                        <h2><?= get_sub_field('heading'); ?></h2>
                    </div>
                    <div class="spec-sec-ex new_mirage_tech">
                        <div class="spec-box">
                            <div class="spec-line">
                                <ul>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php foreach (get_sub_field('lists') as $lists) : ?>
                                                <li <?= $lists['class_exist'] ? 'class="fon_we"' : '' ?>><span><?= !empty($lists['key']) ? $lists['key'] : ''; ?> </span><?= !empty($lists['value']) ? $lists['value'] : ''; ?></li>
                                            <?php endforeach; ?>
                                            <!-- <li><span></span>16′ 1” – 5 parts</li>
                                <li><span>Framework: </span>anodized aluminum</li>
                                <li class="fon_we"><span>Sail: </span>North Sails Dacron (Dacron, and Monofilm </li>
                                <li><span></span> depending on the model) </li>
                                <li><span>Blocks: </span> Harken</li>
                                <li><span>Boat weight (empty): </span> 90 lbs</li>
                                <li><span>Maximum load: </span> 330 lbs</li> -->

                                        </div>

                                        <div class="col-md-6">
                                            <?php foreach (get_sub_field('lists2') as $lists) : ?>
                                                <li <?= $lists['class_exist'] ? 'class="fon_we"' : '' ?>><span><?= !empty($lists['key']) ? $lists['key'] : ''; ?> </span><?= !empty($lists['value']) ? $lists['value'] : ''; ?></li>
                                            <?php endforeach; ?>
                                            <!-- <li class="fon_we_new"><span>Boat weight (empty): </span> </li>
                                <li><span>Boat weight (empty): </span> 90 lbs</li>
                                <li><span>Maximum load: </span>330 lbs</li>
                                <li><span>(1 adult + 1 child)Tiwal 2 onboard capacity</span></li>
                                <li><span>Draft: 2’ 5”</span></li>
                                <li><span>2 carrying bags:</span></li>
                                <li><span></span>Hull bag: 4′9″ × 16″ × 14″ / 55lbs</li>
                                <li><span></span>2nd bag: 3′7″ x 16″ x 10″ / 45lbs</li> -->
                                        </div>


                                        <div class="tech_img_new">
                                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                                            <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
                                        </div>

                                    </div>


                                </ul>
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
if (have_rows('award_section_area')) :
    while (have_rows('award_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="interior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head" data-aos="zoom-in">
                        <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                    </div>

                    <div class="award_new">
                        <div class="row">
                            <?php foreach (get_sub_field('awards') as $awards) : ?>
                                <div class="col-md-6 col-sm-12">
                                    <div class="award_in">
                                        <div class="award_img">
                                            <img src="<?= $awards['image']; ?>" alt="">
                                        </div>
                                        <div class="award_content sec-head">
                                            <?= $awards['para']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
if (have_rows('uncommon_discoveries_area')) :
    while (have_rows('uncommon_discoveries_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="ft-bt_mirage bann-btm-sec">
                <div class="container-fluid">
                    <div class="sec-head">
                        <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                </div>
            </section>

<?php
        endif;
    endwhile;
endif;
?>
<?php get_footer(); ?>