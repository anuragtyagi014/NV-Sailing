<?php
$a = get_data_from_api();
$data1['boat_listing'] = array_filter($a, function ($item) {
    return strtolower($item['documentid']) == $_GET['q'];
});

foreach ($data1['boat_listing'] as $lists) {
    foreach ($lists as $key => $value) {
        $product_page[$key] = $value;
    }
}
if (array_key_exists('VehicleRemarketingEngineLineItem', (array)$product_page['images'])) {
    $count_engines = count((array)(((array)$product_page['images'])['VehicleRemarketingEngineLineItem']));
}
?>
<?php
/* Template Name: product page api */
get_header(); ?>

<style type="text/css">
    .col-md-4.dots {
        display: none;
    }

    .second {
        position: absolute;
        right: 35px;
        top: 51px;
        font-weight: 900;
        font-family: 'Avenir';
        font-size: 24px;
    }

    .col-md-4.dots:nth-child(1) {
        display: block;
    }

    .col-md-4.dots:nth-child(2) {
        display: block;
    }

    .col-md-4.dots:nth-child(3) {
        display: block;
    }

    .col-md-4.dots:nth-child(4) {
        display: block;
    }

    .col-md-4.dots:nth-child(5) {
        display: block;
    }

    .col-md-4.dots:nth-child(6) {
        display: block;
    }

    .col-md-4.dots:nth-child(7) {
        display: block;
    }

    .col-md-4.dots:nth-child(8) {
        display: block;
    }

    .col-md-4.dots:nth-child(9) {
        display: block;
    }

    #more {
        display: none;
    }

    .page-id-3950 .box_titles span span {
        text-transform: uppercase;
    }

    .boat-slide-center img {
        height: 600px;
        border-radius: 2000px;
        object-fit: cover;
    }

    .gallery_img img {
        border-radius: 2000px;
        height: 240px;
        object-fit: cover;
    }

    .page-id-3950 p {
        padding-right: 0px !important;
    }

    .FAQ p {
        width: 100%;
        text-align: center;
    }

    .FAQ p strong {
        background-color: #EBEAEA;
        width: 100%;
        border-radius: 20px;
        float: left;
        padding: 4px 0 4px;
        font-family: 'Avenir';
        margin-bottom: 10px;
    }

    .FAQ h2.tagline {
        margin-bottom: 0px;
        font-family: 'Carla Sans';
        padding-bottom: 10px !important;
    }

    .page-id-3950 .btn_contact {
        border-radius: 52px;
        background: #f26715;
        color: white;
        font-weight: 700;
        cursor: pointer;
        border: none;
        font-family: 'Avenir';
        padding: 13px 0px 10px 0px;
        width: 100%;
        text-align: center;
    }



    .page-id-3950 .total_count {
        position: relative;
    }

    .page-id-3950 .contact p {
        margin-bottom: 10px !important;
        margin-top: 7px;
    }

    .page-id-3950 .main_text_contact {
        color: #ffffff !important;
        background: #0c2169 !important;
        border-radius: 38px;
        font-size: 25px;
        font-weight: 400;
        text-align: center;
        padding: 17px 0px 15px 0px;
        margin-bottom: 15px;
    }

    .page-id-3950 .contact_message {
        border-color: #0c2169;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 6px 14px 14px 14px;
        margin-bottom: 20px;
        line-height: 100px;
    }

    .page-id-3950 .freedom_contents p {
        margin-bottom: 0px;
    }

    .page-id-3950 .box_title {
        border-radius: 38px;
        background: #ebeaea;
        color: #0C2169;
        font-size: 25px;
        font-weight: 400;
        text-align: center;
        padding: 10px 0px 7px 0px;
        margin-bottom: 15px;
        margin-top: 10px;
    }

    .page-id-3950 .contact_address {
        border-color: #0c2169;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 6px 14px 14px 14px;
        margin-bottom: 20px;
        line-height: 45px;
    }

    .page-id-3950 input::placeholder {
        color: #0c2169 !important;
        font-size: 20px;
    }

    .page-id-3950 textarea::placeholder {
        color: #0c2169 !important;
        font-size: 20px;
    }

    .page-id-3950 .contact_form {
        border-color: #0c2169;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 12px 14px 8px 14px;
        margin-bottom: 20px;
    }

    .page-id-3950 .box_titles span {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .page-id-3950 .box_title {
        border-radius: 38px;
        background: #ebeaea;
        color: #0C2169;
        font-size: 25px;
        font-weight: 400;
        text-align: center;
        padding: 10px 0px 7px 0px;
        margin-bottom: 15px;
    }

    .page-id-3950 .freedom_contents {
        text-align: center;
    }

    .page-id-3950 .main_text_contact span {
        font-size: 25px;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .page-id-3950 .box_title span {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .page-id-3950 .FAQ h2.tagline {
        margin-bottom: 0px;
        padding-bottom: 0px;
    }

    .page-id-3950 .contact {
        border-color: #ebeaea;
        border-width: 3px;
        border-style: solid;
        border-radius: 50px;
        padding-top: 25px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
    }

    .page-id-3950 .FAQ {
        border-color: #ebeaea;
        border-width: 3px;
        border-style: solid;
        border-radius: 50px;
        padding-top: 25px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 15px;
    }


    .page-id-3950 .gallery_img {
        margin-bottom: 30px;
    }

    .page-id-3950 .move_after:after {
        content: "";
        border-left: 40px solid #f10b0b00;
        border-right: 40px solid transparent;
        border-top: 30px solid #F26715;
    }

    .page-id-3950 .gallery_img img {
        width: 100%;
    }

    .page-id-3950 .move_after h2.tagline {
        padding-bottom: 25px;
    }

    .page-id-3950 .move_after {
        width: 100%;
        position: relative;
        height: auto;
        text-align: center;
    }

    .page-id-3950 .speci_con_new ul li span {
        font-weight: 700;
        font-family: 'Avenir';
    }

    .page-id-3950 .speci_con_new h4 {
        color: white;
        display: none;
    }

    .page-id-3950 .mobile_img_gallery {
        display: none;
    }

    .page-id-3950 section.freedom_section {
        padding: 42px 75px;
    }

    input.wpcf7-form-control.has-spinner.wpcf7-submit {
        width: 100%;
    }

    .rc-anchor-normal {
        height: 74px;
        width: 99%;
    }

    #cf7sr-63e127bc85e58 iframe {
        margin: 0 auto !important;
        display: flex !important;
    }

    label.month_first span.month {
        font-size: 19px !important;
    }

    .month_first {
        position: relative !important;
        top: 51px;
        width: 100%;
        left: 17px;
    }

    @media (max-width:3200px) {
        .boat-slide-center img {
            height: 1000px;
            object-fit: cover;
        }

        .gallery_img img {
            height: 600px;
            object-fit: cover;
        }
    }

    @media (max-width:2700px) {
        .boat-slide-center img {
            height: 900px;
        }

        .gallery_img img {
            height: 500px;
        }
    }

    @media (max-width:2500px) {
        .boat-slide-center img {
            height: 800px;
        }

        .gallery_img img {
            height: 400px;
        }
    }

    @media (max-width:2200px) {
        .boat-slide-center img {
            height: 750px;
        }

        .gallery_img img {
            height: 350px;
        }
    }

    @media (max-width:1920px) {
        .boat-slide-center img {
            height: 700px;
        }

        .gallery_img img {
            height: 300px;
        }
    }

    @media (max-width:1919px) {
        .boat-slide-center img {
            height: 680px;
        }

        .gallery_img img {
            height: 280px;
        }
    }

    @media (max-width:1699px) {
        .boat-slide-center img {
            height: 650px;
        }

        .gallery_img img {
            height: 250px;
        }
    }

    @media (max-width:1599px) {
        .boat-slide-center img {
            height: 640px;
        }

        .gallery_img img {
            height: 240px;
        }
    }

    @media (max-width:1440px) {
        .boat-slide-center img {
            height: 630px;
        }

        .gallery_img img {
            height: 230px;
        }
    }

    @media (max-width: 1400px) {
        .page-id-3950 .speci_con_new ul li {
            font-size: 18px;
            margin: 0 -4px;
            margin-bottom: 5px;
            padding-bottom: 5px;
        }
    }

    @media (max-width:1200px) {
        .boat-slide-center img {
            height: 600px;
        }

        .gallery_img img {
            height: 220px;
        }
    }

    @media (max-width:1024px) {
        div#cf7sr-63e0f484b4989 div {
            max-width: 100% !important;
        }

        input.wpcf7-form-control.has-spinner.wpcf7-submit {
            padding: 12px 35px;
        }

        .boat-slide-center img {
            height: 500px;
        }

        .gallery_img img {
            height: 200px;
        }

        .page-id-3950 input::placeholder {
            font-size: 15px;
        }





        /* .page-id-3950 .total_count .second {
            right: 20px;
            font-size: 19px;
            background: white;
            padding-left: 2px;
        } */

        .page-id-3950 .main_text_contact span {
            font-size: 23px;
            font-weight: 600;
            font-family: 'Avenir';
        }

    }

    @media(min-width:1024px) {
        label.month_first span.month {
            font-size: 13px !important;
        }
    }

    @media(min-width:1103px) {
        label.month_first span.month {
            font-size: 17px !important;
        }
    }

    @media (min-width:1441px) {
        .second {
            position: absolute;
            right: 35px;
            top: 65px;
            font-weight: 900;
            font-family: 'Avenir';
            font-size: 24px;
        }

        .month_first {
            position: relative !important;
            top: 63px;
            width: 100%;
            left: 17px;
        }



    }



    @media (max-width: 450px) {
        .main_input_data {
            position: absolute;
            top: -35px;
            width: 100%;
        }
    }

    @media(max-width:768px) {
        .boat-slide-center img {
            height: 400px;
        }

        .gallery_img img {
            height: 150px;
        }

        .page-id-3950 section.boat-slider-sec {
            display: block !important;
        }

        .freedom_contents p {
            text-align: center !important;
        }

        .page-id-3950 section.freedom_section {
            padding: 30px 15px;
        }

        .page-id-3950 .btn_contact {
            border-radius: 52px;
            background: #f26715;
            color: white;
            font-weight: 700;
            border: none;
            font-family: 'Avenir';
            padding: 10px 10px 9px 10px;
            width: 100%;
            text-align: center;
            font-size: 15px;
        }

        .page-id-3950 .box_titles {
            text-align: center;
        }

        .page-id-3950 .col-md-4 .freedom_contents p {
            text-align: center !important;
        }

        .page-id-3950 section.footer_top {
            display: none;
        }

        .page-id-3950 .speci_con_new ul li {
            border-bottom: 2px solid #fff !important;
            padding: 0px 10px;
        }

        .page-id-3950 .speci_con_new {
            padding: 70px 0px;
            border-radius: 210px;
        }

        .page-id-3950 .speci_con_new ul {
            display: grid;
            margin: 0px;
            padding: 0px;
        }

        .page-id-3950 .order_1 {
            order: 1;
        }

        .page-id-3950 .order_2 {
            order: 2;
        }

        .page-id-3950 .order_3 {
            order: 3;
        }

        .page-id-3950 .order_4 {
            order: 4;
        }

        .page-id-3950 .box_title {
            padding: 10px 15px 7px 15px;
        }

        .page-id-3950 .gallery_disk {
            display: none;
        }

        .page-id-3950 .box_title span {
            font-size: 18px;
        }

        .page-id-3950 .main_text_contact span {
            font-size: 22px;
            font-weight: 600;
            font-family: 'Avenir';
            padding: 0px 10px;
        }

        .page-id-3950 .total_count .month_first {
            right: 18px;
            font-size: 18px;
            background: #ffffff00;
            padding-left: 2px;
            top: 51px !important;
        }

        .page-id-3950 .specification .tagline {
            display: none;
        }

        .page-id-3950 .mobile_img_gallery {
            display: block;
        }

        .page-id-3950 .speci_con_new h4 {
            color: white;
            display: block;
            padding-bottom: 20px;
        }


        .page-id-3950 .FAQ {
            margin-bottom: 10px;
        }

        .page-id-3950 section.boat-slider-sec {
            display: none;
        }

        .page-id-3950 .speci_con_new ul li span {
            font-weight: bold;
            margin-bottom: 0;
            line-height: 31px;
            display: inline-block;
        }

    }

    @media (max-width:767px) {
        .boat-slide-center img {
            height: 240px;
        }

        .gallery_img img {
            height: 150px;
        }
    }

    @media (max-width: 600px) {
        .page-id-3950 section.specification {
            padding: 20px 0px 30px;
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width:396px) {
        .page-id-3950 input::placeholder {
            color: #0c2169 !important;
            font-size: 15px !important;
        }

        .page-id-3950 textarea::placeholder {
            color: #0c2169 !important;
            font-size: 15px !important;
        }

        .page-id-3950 .total_count label {
            right: 12px !important;
        }

        .page-id-3950 .contact {
            padding-left: 15px;
            padding-right: 15px;
        }

        .page-id-3950 .FAQ {
            padding-left: 15px;
            padding-right: 15px;

        }
    }

    @media (max-width:375px) {
        .boat-slide-center img {
            height: 200px;
        }
    }

    @media (max-width:320px) {
        .boat-slide-center img {
            height: 150px;
        }

        .container {
            padding: 0 10px;
        }

        .page-id-3950 .total_count label {
            font-size: 20px;
            padding: 0px 3px;
        }

        .rc-anchor-normal {
            width: 260px !important;
            ;
        }

        .rc-anchor-normal .rc-anchor-content {
            width: 170px !important;
            ;
        }

        .rc-anchor-checkbox-label {
            font-size: 10px !important;
        }
    }
</style>


<?php
if (have_rows('top_banner_section')) :
    while (have_rows('top_banner_section')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="top-bann-sec">
                <div class="img-are">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk">
                    <!-- <img src="https://nvsailing.com/wp-content/uploads/2023/01/Grupo-de-desplazamiento-22-1.png" class="excess-phone" alt=""> -->
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>


<?php foreach ($data1['boat_listing'] as $prod_det) : ?>
    <section class="freedom_section">
        <div class="container">
            <div class="freedom_row">
                <div class="freedom_heading-wrapper">
                    <h2 class="freedom_heading"><?= $prod_det['year'] . " " . $prod_det['saleclasscode'] . " " . $prod_det['model'] . " " . $prod_det['make']; ?></h2>
                </div>
                <div class="freedom_content">
                    <p><?= $prod_det['description']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------- -->

    <?php
    if (have_rows('specification_section')) :
        while (have_rows('specification_section')) : the_row();
            if (get_row_layout() == "all_content") :
    ?>
                <section class="specification">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="tagline"><?= get_sub_field('tagline'); ?></h2>
                                <div class="speci_con_new">
                                    <h4><?= get_sub_field('heading'); ?></h4>
                                    <ul>
                                        <li><span><?= get_sub_field('list_text_1'); ?></span> <?= $prod_det['location']; ?></li>
                                        <li class="order_1"><span><?= get_sub_field('list_text_2'); ?></span> <?php $bexp = explode('.', $prod_det['length']);
                                                                                                                if (!empty($bexp)) {
                                                                                                                    $ff = $bexp[0];
                                                                                                                    $fin = isset($bexp[1]) ? $bexp[1] : 0;
                                                                                                                    $fin = floatval('.' . $fin);
                                                                                                                    $fin = floor(($fin * 12));
                                                                                                                    echo $nlength = $ff . "'" . ' ' . $fin . '"';
                                                                                                                } else {
                                                                                                                    echo $prod_det['length'];
                                                                                                                } ?></li>
                                        <li><span><?= get_sub_field('list_text_3'); ?></span> <?= $prod_det['saleclasscode']; ?> </li>
                                        <li class="order_2"><span><?= get_sub_field('list_text_4'); ?></span> <?= !empty($count_engines) ? $count_engines : "N/A"; ?></li>
                                        <li><span><?= get_sub_field('list_text_5'); ?> </span> <?= $prod_det['year']; ?></li>
                                        <li class="order_3"><span><?= get_sub_field('list_text_6'); ?></span> <?= $prod_det['images']->VehicleRemarketingEngineLineItem->VehicleRemarketingEngine->MakeString; ?> </li>
                                        <li class="border_none"><span><?= get_sub_field('list_text_7'); ?></span> <?= $prod_det['make']; ?></li>
                                        <li class="border_none order_4"><span><?= get_sub_field('list_text_8'); ?></span> <?= $prod_det['fuelcapacity']; ?></li>
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
    <!-- ---------------------------------------- -->

    <section class="boat-slider-sec pt-2">
        <div class="container-fluid">
            <div class="boat-slider">
                <?php foreach ($prod_det['images']->ImageAttachmentExtended as $images) : ?>
                    <div class="item">
                        <div class="boat-slide">
                            <div class="boat-slide-center">
                                <img width="100%" src="<?= $images->URI; ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- -------------------------- -->

    <section class="nv_gallery">
        <div class="container">
            <div class="row">
                <?php foreach ($prod_det['images']->ImageAttachmentExtended as $images) : ?>
                    <div class="col-md-4 dots">
                        <div class="gallery_img">
                            <img class="gallery_disk" src="<?= $images->URI; ?>">
                            <img class="mobile_img_gallery more" src="<?= $images->URI; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="move_after" id="myBtn">
                        <?php
                        if (have_rows('more_photos_text')) :
                            while (have_rows('more_photos_text')) : the_row();
                                if (get_row_layout() == "all_content") :
                        ?>
                                    <h2 class="tagline"><?= get_sub_field('text'); ?></h2>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (have_rows('contact_section_area')) :
        while (have_rows('contact_section_area')) : the_row();
            if (get_row_layout() == "all_content") :
    ?>
                <section class="query_contact pt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-8">
                                <div class="FAQ">
                                    <h2 class="tagline"><?= $prod_det['images']->AdditionalDetailDescription[0]->Title; ?></h2>
                                    <?= $prod_det['images']->AdditionalDetailDescription[0]->Description; ?>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4">
                                <div class="contact">
                                    <div class="main_text_contact mb-3">
                                        <span><?php if (isset($prod_det['price'])) {
                                                    echo '$' . number_format($prod_det['price'], 2);
                                                } else {
                                                    echo "N/A";
                                                } ?></span>
                                    </div>
                                    <div class="box_titles">
                                        <span><span><?= get_sub_field('box_title_1'); ?></span><br> <?= get_sub_field('box_title_2'); ?></span>
                                    </div>
                                    <div class="freedom_contents">

                                        <p style="text-align:justify"><?= get_sub_field('location'); ?> <br>
                                            <a href="<?= get_sub_field('address_map_link'); ?>" target="_blank"><?= get_sub_field('address_part_1'); ?><br>
                                                <?= get_sub_field('address_part_2'); ?> </a><br>
                                            <a href="tel:<?= get_sub_field('phone_number'); ?>"><?= get_sub_field('phone_text'); ?></a><br>
                                            <a href="fax:<?= get_sub_field('fax_number'); ?>"><?= get_sub_field('fax_text'); ?></a>
                                        </p>
                                    </div>
                                    <div class="form_faq">
                                        <?= do_shortcode(get_sub_field('shortcode_for_contact_seller')); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="contact">
                                    <div class="main_text_contact mb-4">
                                        <span class=""><?= get_sub_field('loan_calculator_text'); ?></span>
                                    </div>
                                    <!-- <div class="form_faq">
                                        <?php //do_shortcode('[contact-form-7 id="4447" title="Loan Calculator Form"]'); 
                                        ?>
                                    </div> -->
                                    <form action="javascript:void(0)" class="form_faq">
                                        <input class="contact_form boat_price" type="text" name="boat_price" placeholder="Boat Price" onkeyup="calculate_loan();">
                                        <input class="contact_form monthly_budget" type="text" name="monthly_budget" placeholder="Monthly Budget">
                                        <input class="contact_form down_payment" type="text" name="down_payment" placeholder="Down Payment" onkeyup="calculate_loan();">
                                        <input class="contact_form interest" type="text" name="interest" placeholder="Interest" onkeyup="calculate_loan();">
                                        <input class="contact_form term_years" type="text" name="term_years" placeholder="Term Years" onkeyup="calculate_loan();">
                                        <div class="total_count">
                                            <div class="main_input_data">
                                                <label class="month_first"><span class="month" style="font-weight:300">Monthly Payment:</span></label>
                                                <label class="second"><span class="monthly_emi">$0.00</span></label>
                                            </div>
                                            <input class="contact_form mb-5 monthly_payment" type="text" name="monthly_payment" readonly>

                                        </div>
                                        <input class="btn_contact mt-5" type="button" name="submit" value="Apply for Financing">
                                    </form>

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

<?php endforeach; ?>

<?php
if (have_rows('uncommon_discoveries_area')) :
    while (have_rows('uncommon_discoveries_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>

            <section class="footer_top pt-5">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-text_data">
                                <div class="sec-head">
                                    <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                                    <?= get_sub_field('para'); ?>
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

<?php get_footer(); ?>

<script>
    function calculate_loan() {
        let boat_price = $(".boat_price").val();
        let down_payment = $(".down_payment").val();
        let interest = $(".interest").val();
        let term_years = $(".term_years").val();
        let rate = ((boat_price - down_payment) * (interest / 100)) / 12;
        let months = term_years * 12;
        let monthly_emi = (((boat_price - down_payment) / months) + rate).toFixed(2);
        $(".monthly_emi").text("$" + monthly_emi);
        $(".monthly_payment").attr("data-val", monthly_emi);
        if (boat_price == 0) {
            $(".monthly_emi").text("$0.00");
        }
    }
</script>

<script>
    jQuery(document).ready(function() {

        jQuery('#myBtn').click(function() {
            jQuery('.dots').show();
        })

    })
</script>