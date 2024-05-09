<?php
/* 
   Template Name: Hobie Mirage Template
   */

get_header();

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
    .page-template-hobie-mirage .bann-btm-right {
        width: 360px;
        margin-top: -140px;
    }

    .page-template-hobie-mirage section.top-bann-sec img {
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


    section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:last-child {
        border-bottom: 0px;
    }

    section.bann-btm-sec {
        padding-bottom: 30px;
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

        .page-template-hobie-mirage .bann-btm-right {
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

        .page-template-hobie-mirage .bann-btm-right {
            width: 530px;
        }

    }

    @media(min-width: 1440px) and (max-width: 1680px) {
        .page-template-hobie-mirage .bann-btm-right {
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

    @media(max-width: 1919px){
        section.excess-vdo .excess-sec-vdo video {
    height: 700px;
}
    }

    @media(max-width: 1600px) {
        .page-template-hobie-mirage .bann-btm-right {
            padding-left: 30px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 20px;

        }

        section.spec-sec-excss .spec-sec-ex {
            padding: 60px 60px 30px;
        }

        .page-template-hobie-mirage .bann-btm-left br {
            display: none;
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

        section.excess-vdo .excess-sec-vdo video {
    height: 400px;
}

    }

    @media(max-width: 992px) {

        .mirage_page h3 {
            font-size: 80px;
            text-align: center;
            line-height: 0.4;
        }

        .page-template-hobie-mirage .bann-btm-right {
            padding-left: 0px !important;
        }

        .page-template-hobie-mirage .bann-btm-right {
            margin-top: 50px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
            font-size: 13px;
            font-weight: 600;
        }

        section.bann-btm-sec .row-in {
            display: flex;
            flex-direction: column-reverse;
        }

        br.for_fon_none {
            display: block !important;
        }

        img.excess-desk {
            width: 400px;
            margin: 0 auto;
        }

        section.excess-vdo .excess-sec-vdo video {
    height: 350px;
}


    }

    @media(max-width: 767px) {
        .mirage_page h3 {
            font-size: 60px;
            line-height: 0.3;
        }

        .new_mirage h1 {
            font-size: 24px;
        }

        h1.fon_none {
            display: none;
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

        img.excess-phone {
            display: block;
            width: 60%;
            text-align: center;
            margin: 0 auto;
        }

        section.excess-vdo .excess-sec-vdo video {
    height: 182px;
}


    }

    @media(max-width: 576px) {
        .sec-head h2 {
            font-size: 22px;
        }

        .new_mirage h1 {
            font-size: 18px;
        }

        img.excess-phone {
            display: block;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

        section.excess-vdo .excess-sec-vdo video {
    height: 140px;
}

    }
</style>

<?php
if (have_rows('banner_section_area')) :
    while (have_rows('banner_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk">
                    <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
                </div>
                <div class="mirage_page">
                    <h3 class="head_page_mirage"><?= get_sub_field('title'); ?></h3>
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
                        <div class="bann-btm-left new_mirage">
                            <h1 class="fon_none"><?= get_sub_field('heading'); ?></h1>
                            <?= get_sub_field('paragraph'); ?>
                        </div>
                        <div class="bann-btm-right" data-aos="fade-up">
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
if (have_rows('desk_slider_area')) :
    while (have_rows('desk_slider_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="main-img-slider desk">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('slider_images') as $slider_images) : ?>
                            <div class="item">
                                <img src="<?= $slider_images['image']; ?>">
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
<!-- <section class="main-img-slider mob">
   <div class="container-fluid">
      <div class="vrtcl-slider vrtcl-sliders">
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/02/4-1.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/02/2-1-1.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2022/12/10-1.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/02/12-1.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2022/12/13-1.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/02/14-1.png">
         </div>
      </div>
   </div>
</section> -->

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
                                            <?php foreach (get_sub_field('lists') as $list) : ?>
                                                <li><span><?= $list['key']; ?> </span> <?= !empty($list['value']) ? $list['value'] : ""; ?></li>
                                            <?php endforeach; ?>
                                            <!-- <li><span>COLORS: </span> a red square with a black</li>
                                <li><span>backgrounda white square with a black </span> </li>
                                <li><span>background</span> </li>
                                <li><span>CREW: 1-2 </span> </li>
                                <li><span>DRIVE: (2) MD 180 TURBO W/ KICK-UP FINS + </span></li>
                                <li><span> ARC CRANKS</span> </li>
                                <li><span>LENGTH: </span> 18’ 6” / 5.64 M</li>
                                <li><span>BEAM (AMAS FOLDED IN): </span> 4’ / 1.22 M</li>
                                <li><span>BEAM (AMAS OUT): </span> 10’ / 3.05 M</li>
                                <li><span>CAPACITY: </span> 600 LBS / 272 KG</li> -->
                                        </div>

                                        <div class="col-md-6">
                                            <?php foreach (get_sub_field('lists1') as $list1) : ?>
                                                <li><span><?= $list1['key']; ?> </span> <?= !empty($list1['value']) ? $list1['value'] : ""; ?></li>
                                            <?php endforeach; ?>
                                            <!-- <li><span>VANTAGE CT SEAT CAPACITY: </span> 275 LBS / </li>
                                <li><span>124.74 KG</span></li>
                                <li><span>FITTED HULL WEIGHT: </span>130 LBS / 59 KG</li>
                                <li><span>FULLY RIGGED WEIGHT: </span> 240 LBS / 109 KG</li>
                                <li><span>MAST LENGTH: </span> 18’ / 5.49 M</li>
                                <li><span>SAIL AREA: </span> 90 FT² / 8.4 M²</li>
                                <li><span>HULL CONSTRUCTION: </span> ROTOMOLDED</li>
                                <li><span>POLYETHYLENE</span> </li>
                                <li><span>FLOOR TO AKA BARS: </span> 16.75” / 42.54 CM</li>
                                <li><span>FLOOR TO BOW: </span> 15” / 38.1 CM</li>
                                <li><span>FLOOR TO RUDDER: </span> 29.5” / 74.93 CM</li> -->
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