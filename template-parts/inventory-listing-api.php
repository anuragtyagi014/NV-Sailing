<?php
    error_reporting(E_ERROR | E_PARSE);
    if (!isset($_GET['q'])) {
        header('location:' . site_url() . '/inventory/');
    }
    $data1['boat_listing'] = array_filter($_SESSION['api_data'], function ($item) {
        return strtolower($item['documentid']) == $_GET['q'];
    });
    foreach ($data1['boat_listing'] as $lists) {
        foreach ($lists as $key => $value) {
            $prod_det[$key] = $value;
        }
    }
    if (array_key_exists('VehicleRemarketingEngineLineItem', (array)$prod_det['images'])) {
        $count_engines = count((array)(((array)$prod_det['images'])['VehicleRemarketingEngineLineItem']));
    }
?>
<?php
/* Template Name: Inventory listing API */
get_header(); ?>
<!-- Desktop Header Ends -->
<style type="text/css">
    .boat-slider .slick-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 99;
    }

    .boat-slider .slick-arrow.slick-left {
        left: 10%;
    }

    .boat-slider .slick-arrow.slick-right {
        right: 10%;
    }

    .page-template-inventory-listing-api .fea_an_option .faqno-main {
        width: 100%;
        column-count: 3;
        padding-left: 20px;
    }

    /*.page-template-inventory-listing-api #boats-video iframe{
        height: 100vh !important;
        width: 100%;
    }*/
    .page-template-inventory-listing-api section.top-bann-sec-new-page img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }

    .page-template-inventory-listing-api h2.tagline p {
        display: none;
    }

    .page-template-inventory-listing-api .lb-data .lb-close {
        position: relative;
        left: 4%;
        color: #fff;
        background: url(https://nvsailing.com/wp-content/uploads/2023/02/close.png) top right no-repeat;
    }

    .page-template-inventory-listing-api .lightbox {
        display: flex;
        flex-direction: column-reverse;
    }

    .page-template-inventory-listing-api .lb-data .lb-number {
        color: #fff;
    }

    .page-template-inventory-listing-api .move_after:after {
        content: "";
        border-left: 40px solid #f10b0b00;
        border-right: 40px solid transparent;
        border-top: 30px solid #F26715;
    }

    .page-template-inventory-listing-api .move_after {
        width: 100%;
        position: relative;
        height: auto;
        text-align: center;
    }

    .page-template-inventory-listing-api .col-md-4.dots {
        display: none;
    }

    .page-template-inventory-listing-api .boat-slider-sec ul.slick-dots li button {
        border: 1px solid #0c2169;
    }

    .page-template-inventory-listing-api .boat-slider-sec ul.slick-dots li button {
        background: #fff;
    }

    .page-template-inventory-listing-api .tagline {
        text-transform: inherit;
        font-family: 'Carla Sans';
    }

    .page-template-inventory-listing-api .second {
        position: absolute;
        right: 35px;
        top: 51px;
        font-weight: 900;
        font-family: 'Avenir';
        font-size: 24px;
    }

    .page-template-inventory-listing-api .slick-slider {
        -webkit-tap-highlight-color: transparent;
        background-image: unset !important;
        background-position: top center;
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
    }

    .page-template-inventory-listing-api .dots:nth-child(1) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(2) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(3) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(4) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(5) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(6) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(7) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(8) {
        display: block;
    }

    .page-template-inventory-listing-api .dots:nth-child(9) {
        display: block;
    }

    .page-template-inventory-listing-api .dots {
        display: none;
    }

    .page-template-inventory-listing-api #more {
        display: none;
    }

    .page-template-inventory-listing-api .box_titles span span {
        text-transform: uppercase;
    }

    .page-template-inventory-listing-api .boat-slide-center img {
        height: 600px;
        border-radius: 2000px;
        object-fit: cover;
        width: 90%;
    }

    .page-template-inventory-listing-api .tagline {
        font-size: 32px;
    }

    .page-template-inventory-listing-api .gallery_img img {
        border-radius: 2000px;
        height: 240px;
        object-fit: cover;
    }

    .page-template-inventory-listing-api p {
        padding-right: 0px !important;
    }

    .page-template-inventory-listing-api .FAQ p {
        width: 100%;
        text-align: center;
    }

    .page-template-inventory-listing-api .FAQ p strong {
        background-color: #EBEAEA;
        width: 100%;
        border-radius: 20px;
        float: left;
        padding: 4px 0 4px;
        font-family: 'Avenir';
        margin-bottom: 10px;
    }

    .page-template-inventory-listing-api .FAQ h2.tagline {
        margin-bottom: 0px;
        font-family: 'Carla Sans';
        padding-bottom: 10px !important;
    }

    .page-template-inventory-listing-api .btn_contact {
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

    .page-template-inventory-listing-api .total_count {
        position: relative;
    }

    .page-template-inventory-listing-api .contact p {
        margin-bottom: 10px !important;
        margin-top: 7px;
    }

    .page-template-inventory-listing-api .main_text_contact {
        color: #ffffff !important;
        background: #0c2169 !important;
        border-radius: 38px;
        font-size: 25px;
        font-weight: 400;
        text-align: center;
        padding: 17px 0px 15px 0px;
        margin-bottom: 15px;
    }

    .page-template-inventory-listing-api .contact_message {
        border-color: #0c2169;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 6px 14px 14px 14px;
        margin-bottom: 20px;
        line-height: 100px;
    }

    .page-template-inventory-listing-api .freedom_contents p {
        margin-bottom: 0px;
    }

    .page-template-inventory-listing-api .box_title {
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

    .page-template-inventory-listing-api .contact_address {
        border-color: #0c2169;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 6px 14px 14px 14px;
        margin-bottom: 20px;
        line-height: 45px;
    }

    .page-template-inventory-listing-api input::placeholder {
        color: #0c2169 !important;
        font-size: 20px;
    }

    .page-template-inventory-listing-api textarea::placeholder {
        color: #0c2169 !important;
        font-size: 20px;
    }

    .page-template-inventory-listing-api .contact_form {
        border-color: #0c2169;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 12px 14px 8px 14px;
        margin-bottom: 20px;
    }

    .page-template-inventory-listing-api .box_titles span {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .page-template-inventory-listing-api .box_title {
        border-radius: 38px;
        background: #ebeaea;
        color: #0C2169;
        font-size: 25px;
        font-weight: 400;
        text-align: center;
        padding: 10px 0px 7px 0px;
        margin-bottom: 15px;
    }

    .page-template-inventory-listing-api .freedom_contents {
        text-align: center;
    }

    .page-template-inventory-listing-api .main_text_contact span {
        font-size: 25px;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .page-template-inventory-listing-api .box_title span {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Avenir';
    }

    .page-template-inventory-listing-api .FAQ h2.tagline {
        margin-bottom: 0px;
        padding-bottom: 0px;
    }

    .page-template-inventory-listing-api .contact {
        border-color: #ebeaea;
        border-width: 3px;
        border-style: solid;
        border-radius: 50px;
        padding-top: 25px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
    }

    .page-template-inventory-listing-api .FAQ {
        border-color: #ebeaea;
        border-width: 3px;
        /*border-style: solid;*/
        border-radius: 50px;
        padding-top: 25px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 0px;
    }


    .page-template-inventory-listing-api .gallery_img {
        margin-bottom: 30px;
    }

    .page-template-inventory-listing-api .move_after:after {
        content: "";
        border-left: 40px solid #f10b0b00;
        border-right: 40px solid transparent;
        border-top: 30px solid #F26715;
    }

    .page-template-inventory-listing-api .gallery_img img {
        width: 100%;
    }

    .page-template-inventory-listing-api .move_after h2.tagline {
        padding-bottom: 25px;
    }

    .page-template-inventory-listing-api .move_after {
        width: 100%;
        position: relative;
        height: auto;
        text-align: center;
    }

    .page-template-inventory-listing-api .speci_con_new ul li span {
        font-weight: 700;
        font-family: 'Avenir';
    }

    .page-template-inventory-listing-api .speci_con_new h4 {
        color: white;
        display: none;
    }

    .page-template-inventory-listing-api .mobile_img_gallery {
        display: none;
    }

    .page-template-inventory-listing-api section.freedom_section {
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

    .page-template-inventory-listing-api .freedom_heading-wrapper {
        width: 100% !important;
        flex-shrink: 0;
    }

    .page-template-inventory-listing-api .listing_api_new_page {
        text-align: center;
        padding: 40px 0px 30px;
        width: 100%;
        max-width: 100% !important;
    }

    .page-template-inventory-listing-api .gallery_img img {
        margin-bottom: 30px;
        width: 100%;
    }

    .page-template-inventory-listing-api section.top-bann-sec-new-page img {
        width: 100%;
    }

    .page-template-inventory-listing-api .ventures_listing {
        padding: 34px 30px;
        border: 2px solid #000329;
        border-radius: 40px;
        height: 100%;
    }

    .page-template-inventory-listing-api .ventures_listing p {
        margin-bottom: 0px;
        font-family: 'Avenir';
        padding-top: 16px;
        font-size: 16px;
    }

    .page-template-inventory-listing-api .ventures_listing h3 {
        padding: 10px;
        background: #F26715;
        text-align: center;
        color: #fff;
        font-size: 22px;
        border-radius: 40px;
        font-family: 'Avenir';
        font-weight: 600;
    }

    .page-template-inventory-listing-api .ventures_listing p .bold_class a {
        color: #0C2169;
    }

    .page-template-inventory-listing-api .listing_new_sec_page {
        padding: 30px 100px 10px;
        border-radius: 40px;
        width: 100%;
    }

    .page-template-inventory-listing-api section.boat_information_page_new {
        padding-top: 30px;
    }

    .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
        margin-bottom: 40px;
        font-family: 'Carla Sans';
        background-color: #EBEAEA;
        width: 100%;
        border-radius: 40px;
        float: left;
        padding: 14px 15px !important;
    }

    .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
        background-color: transparent;
        width: 100%;
        padding: 4px 0 4px;
        font-family: 'Avenir';
        margin-bottom: 10px;
        color: #0c2169;
    }

    .page-template-inventory-listing-api .man_infor_con .FAQ p {
        width: 100%;
        text-align: left;
        padding-bottom: 16px;
    }

    .page-template-inventory-listing-api .man_infor_con {
        padding: 30px 80px;
        border: 4px solid #EF9536;
        border-radius: 40px;
    }

    .page-template-inventory-listing-api section.boat-slider-sec .slick-dots li.slick-active button {
        background: #F26715;
        position: relative;
    }

    .page-template-inventory-listing-api section.boat-slider-sec ul.slick-dots li.slick-active button:after {
        width: 95%;
        height: 95%;
        /*border: 4px solid #fff;*/
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        position: absolute;
    }

    .page-template-inventory-listing-api section.boat-slider-sec .item {
        padding: 0px 0 20px;

    }

    section.boat-slider-sec {
        margin-top: 55px;
    }

    .page-template-inventory-listing-api section.nv_gallery {
        padding: 30px 0px 0px;
    }

    .page-template-inventory-listing-api .tagline a img {
        width: 80px;
        margin: 0 auto;
        margin-top: 20px;
    }

    .page-template-inventory-listing-api h2.tagline a {
        color: #000;
    }

    .page-template-inventory-listing-api h2.more_new {
        text-transform: lowercase !important;
    }

    .page-template-inventory-listing-api .fea_an_option ul {
        width: 100%;
        column-count: 1;
        padding-left: 20px;
    }

    .page-template-inventory-listing-api .fea_an_option ul li {
        font-weight: 500;
        color: #0C2169;
        font-family: 'Avenir';
        margin-right: 30px;
        /*list-style: none;*/
    }

    .page-template-inventory-listing-api .vd_listing_page_new img {
        width: 100%;
        border-radius: 40px;
    }

    .page-template-inventory-listing-api section.vd_sec_new {
        padding: 50px 0 0px;
    }

    .page-template-inventory-listing-api .seconmore {
        padding-top: 30px;
    }

    .page-template-inventory-listing-api .pt-ak-30 {
        padding-top: 30px;
    }

    .page-template-inventory-listing-api .mainsingle_coun {
        column-count: 1 !important;
    }

    .page-template-inventory-listing-api .mainsingle_counse {
        column-count: 2 !important;
    }

    .page-template-inventory-listing-api ul.mainsingle_counse li {
        padding-bottom: 20px;
    }

    .page-template-inventory-listing-api .mainsingle_counse li {
        padding-bottom: 20px;
    }

    .page-template-inventory-listing-api ul.mainsingle_coun li {
        padding-bottom: 20px;
    }

    .two_buttsw .loanse {
        border-radius: 52px;
        background: #0c2169;
        color: white;
        font-weight: 700;
        cursor: pointer;
        border: none;
        font-family: 'Avenir';
        padding: 13px 0px 10px 0px;
        width: 100%;
        text-align: center;
        margin-bottom: 16px;
        text-decoration: none;
    }

    .two_buttsw .applysec {
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
        text-decoration: none;
    }

    .two_buttsw {
        display: grid;
        padding-top: 26px;
    }

    .lastw {
        font-size: 18px;
        color: #0c2169;
        font-family: var(--font-primary);
        color: var(--color-primary);
    }

    .page-template-inventory-listing-api .mainsingle_counsenew {
        column-count: 1 !important;
    }


    @media (max-width:3200px) {
        .page-template-inventory-listing-api .ventures_listing h3 {
            padding: 16px;
            font-size: 42px;
        }

        .page-template-inventory-listing-api .vd_sec_new iframe {
            border-radius: 40px;
            height: 1400px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 36px;
            line-height: 54px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 36px;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 92px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 26px 15px !important;
            font-size: 52px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 20px;
            font-size: 38px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 38px;
            line-height: 62px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 1000px;
            object-fit: cover;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 600px;
            object-fit: cover;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 55px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 38px;
            line-height: 90px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 38px;
            line-height: 62px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 46px;
            padding: 30px 0px 30px 0px;
            margin-bottom: 30px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 46px;
            padding: 30px 0px 30px 0px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 1000px;
            object-fit: cover;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 600px;
            object-fit: cover;
        }
    }

    @media (max-width:2700px) {
        .page-template-inventory-listing-api .vd_sec_new iframe {
            height: 1100px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 34px;
            line-height: 54px;
        }

        .boat-slide-center img {
            height: 900px;
        }

        .gallery_img img {
            height: 500px;
        }
    }

    @media (max-width:2560px) {
        .page-template-inventory-listing-api .gallery_img img {
            height: 900px;
            object-fit: cover;
        }
    }

    @media (max-width:2500px) {
        .page-template-inventory-listing-api .vd_sec_new iframe {
            height: 1100px;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 72px;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 38px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 32px;
            line-height: 52px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 32px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 22px 15px !important;
            font-size: 48px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 18px;
            font-size: 34px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 34px;
            line-height: 58px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 950px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 500px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 52px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 18px 15px !important;
            font-size: 44px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 36px;
            line-height: 80px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 42px;
            padding: 24px 0px 24px 0px;
            margin-bottom: 24px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 42px;
            padding: 24px 0px 24px 0px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 34px;
            line-height: 52px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 800px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 400px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 32px;
            padding: 13px 0;
        }
    }

    @media (max-width:2400px) {
        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 32px;
            padding: 13px 0;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 30px;
            line-height: 52px;
        }
    }

    @media (max-width:2200px) {
        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 62px;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 34px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 28px;
            line-height: 50px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 28px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 16px 15px !important;
            font-size: 40px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 14px;
            font-size: 30px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 30px;
            line-height: 52px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 750px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 350px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 46px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 30px;
            line-height: 70px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 30px;
            line-height: 46px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 30px;
            line-height: 46px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 30px;
            padding: 18px 0px 18px 0px;
            margin-bottom: 20px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 30px;
            padding: 18px 0px 18px 0px;
        }
    }

    @media (max-width:2100px) {
        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 26px;
            line-height: 50px;
        }
    }

    @media (max-width:2100px) {
        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 24px;
            line-height: 50px;
        }

        .page-template-inventory-listing-api .listing_new_sec_page {
            padding: 30px 60px 10px;
        }
    }

    @media (max-width:1920px) {
        .page-template-inventory-listing-api .vd_sec_new iframe {
            height: 1000px;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 52px;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 52px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 24px;
            line-height: 52px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 26px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 14px 15px !important;
            font-size: 38px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 10px;
            font-size: 28px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 28px;
            line-height: 46px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 700px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 300px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 42px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 10px 15px !important;
            font-size: 36px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 10px 15px !important;
            font-size: 36px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 28px;
            padding: 14px 0px 14px 0px;
            margin-bottom: 16px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 28px;
            padding: 14px 0px 14px 0px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 26px;
            line-height: 42px;
        }
    }

    @media (max-width:1919px) {
        .boat-slide-center img {
            height: 680px;
        }

        .gallery_img img {
            height: 280px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 22px;
            line-height: 52px;
        }
    }

    @media (max-width:1699px) {
        .page-template-inventory-listing-api .speci_con_new ul li {
            padding: 5px 0;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 42px;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 28px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 20px;
            line-height: 38px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 22px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 8px 15px !important;
            font-size: 32px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 6px;
            font-size: 24px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 24px;
            line-height: 38px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 650px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 250px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 36px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 20px;
            line-height: 50px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 6px 15px !important;
            font-size: 30px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 24px;
            padding: 8px 0px 8px 0px;
            margin-bottom: 12px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 24px;
            padding: 8px 0px 8px 0px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 22px;
            line-height: 36px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 22px;
            line-height: 36px;
        }
    }

    @media (max-width:1599px) {
        .page-template-inventory-listing-api .boat-slide-center img {
            height: 640px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 18px;
            line-height: 38px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 240px;
        }
    }

    @media (max-width:1440px) {
        .page-template-inventory-listing-api .vd_sec_new iframe {
            height: 500px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            padding: 8px 0;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 36px;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 22px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 630px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 17px;
            line-height: 34px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 19px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 3px 15px !important;
            font-size: 26px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 2px;
            font-size: 20px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 20px;
            line-height: 32px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 230px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 32px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            border-radius: 100px;
            padding: 0px 15px !important;
            font-size: 24px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 17px;
            line-height: 50px;
        }

        .page-template-inventory-listing-api ul.mainsingle_counse li {
            padding-bottom: 15px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 18px;
            line-height: 30px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 20px;
            padding: 10px 0px 10px 0px;
            margin-bottom: 12px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 20px;
            padding: 10px 0px 10px 0px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 18px;
            line-height: 30px;
        }
    }

    @media (max-width: 1400px) {
        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 18px;
            margin: 0 -4px;
            margin-bottom: 5px;
            padding-bottom: 5px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            padding: 5px 0;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 16px;
        }
    }

    @media (max-width: 1340px) {
        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 13px;
        }

        .page-template-inventory-listing-api .listing_new_sec_page {
            padding: 30px 30px 10px;
        }
    }

    @media (max-width:1200px) {
        .page-template-inventory-listing-api .vd_sec_new iframe {
            height: 400px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            padding: 3px 0;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 30px;
            padding: 20px 0px 20px;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 18px;
            padding: 12px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 550px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 220px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 13px;
            line-height: 30px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 14px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            font-size: 20px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 16px;
            line-height: 28px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 26px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 14px;
            line-height: 30px;
        }

        .page-template-inventory-listing-api .move_after h2.tagline {
            padding-bottom: 5px;
        }

        .page-template-inventory-listing-api .move_after h2.tagline {
            padding-bottom: 0;
        }

        .page-template-inventory-listing-api .move_after:after {
            content: "";
            border-left: 24px solid #f10b0b00;
            border-right: 24px solid transparent;
            border-top: 20px solid #F26715;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 15px;
            line-height: 26px;
        }

        .page-template-inventory-listing-api ul.mainsingle_coun li {
            padding-bottom: 10px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 18px;
            padding: 6px 0px 6px 0px;
            margin-bottom: 8px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 18px;
            padding: 6px 0px 6px 0px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 16px;
            line-height: 26px;
        }

        .page-template-inventory-listing-api .smaller-heading {
            font-size: 24px;
            margin-bottom: 10px !important;
        }

        .page-template-inventory-listing-api .content-center h3 {
            font-size: 18px;
            line-height: 26px;
        }

        .page-template-inventory-listing-api .btn-contact {
            font-size: 18px;
        }

        .page-template-inventory-listing-api .ventures_listing {
            padding: 34px 16px;
        }
    }

    @media (max-width:1024px) {
        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 28px;
            padding: 15px 0px 15px;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 16px;
            padding: 10px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 14px;
        }

        .page-template-inventory-listing-api .ventures_listing {
            padding: 20px 15px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 12px;
            line-height: 30px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            font-size: 18px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 450px;
        }

        .page-template-inventory-listing-api div#cf7sr-63e0f484b4989 div {
            max-width: 100% !important;
        }

        .page-template-inventory-listing-api input.wpcf7-form-control.has-spinner.wpcf7-submit {
            padding: 12px 35px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 180px;
        }

        .page-template-inventory-listing-api .tagline {
            font-size: 22px;
        }

        .page-template-inventory-listing-api .man_infor_con {
            padding: 20px 60px;
            border: 4px solid #EF9536;
            border-radius: 40px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 13px;
            line-height: 22px;
        }

        .page-template-inventory-listing-api .listing_new_sec_page {
            padding: 30px 30px 10px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            padding: 0px 0;
        }

        .page-template-inventory-listing-api .move_after:after {
            content: "";
            border-left: 18px solid #f10b0b00;
            border-right: 18px solid transparent;
            border-top: 18px solid #F26715;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 16px;
            padding: 4px 0px 4px 0px;
            margin-bottom: 6px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 16px;
            padding: 4px 0px 4px 0px;
        }

        .page-template-inventory-listing-api .smaller-heading {
            font-size: 22px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 14px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 16px;
        }

        .page-template-inventory-listing-api input::placeholder {
            font-size: 15px;
        }

        .page-template-inventory-listing-api .main_text_contact span {
            font-size: 23px;
            font-weight: 600;
            font-family: 'Avenir';
        }

        label.month_first span.month {
            font-size: 13px !important;
        }

    }

    @media(min-width:1103px) {
        label.month_first span.month {
            font-size: 17px !important;
        }
    }

    /*@media (min-width:1441px) {
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

    }*/
    @media(max-width:992px) {
        .mobileorede {
            padding-bottom: 30px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 16px;
            line-height: 26px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 16px;
            text-align: center;
        }
    }

    @media(max-width:768px) {
        .page-template-inventory-listing-api .speci_con_new ul {
            display: inline-block !important;
            padding: 10px 20px 10px !important;
        }

        .page-template-inventory-listing-api .mobileorede {
            order: 2;
            margin-top: 30px;
            padding-bottom: 0;
        }

        .page-template-inventory-listing-api .ventures_listing {
            padding: 30px 30px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 16px;
            text-align: center;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 18px;
            padding-bottom: 5px;
        }

        .page-template-inventory-listing-api .speci_con_new {
            margin-top: 30px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            font-size: 22px;
        }

        .boat-slide-center img {
            height: 400px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p strong {
            font-size: 18px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 16px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 400px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 150px;
        }

        .page-template-inventory-listing-api .man_infor_con {
            padding: 20px 30px;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 14px;
            padding: 4px 0px 4px 0px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 14px;
            padding: 4px 0px 4px 0px;
        }

        .page-template-inventory-listing-api .all-cnt-sec p {
            font-size: 14px;
            width: 90%;
            margin: 0 auto;
        }

        .page-template-inventory-listing-api section.boat-slider-sec {
            display: block !important;
        }

        .freedom_contents p {
            text-align: center !important;
        }

        .page-template-inventory-listing-api section.freedom_section {
            padding: 30px 15px;
        }

        .page-template-inventory-listing-api .btn_contact {
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

        .page-template-inventory-listing-api .box_titles {
            text-align: center;
        }

        .page-template-inventory-listing-api .col-md-4 .freedom_contents p {
            text-align: center !important;
        }

        .page-template-inventory-listing-api section.footer_top {
            display: none;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            border-bottom: 2px solid #fff !important;
            padding: 0px 10px;
        }

        .page-template-inventory-listing-api .speci_con_new {
            padding: 10px 0px;
            border-radius: 30px;
            margin-top: 0;
        }

        .page-template-inventory-listing-api .speci_con_new ul {
            display: grid;
            margin: 0px;
            padding: 0px;
        }

        .page-template-inventory-listing-api .order_1 {
            order: 1;
        }

        .page-template-inventory-listing-api .order_2 {
            order: 2;
        }

        .page-template-inventory-listing-api .order_3 {
            order: 3;
        }

        .page-template-inventory-listing-api .order_4 {
            order: 4;
        }

        .page-template-inventory-listing-api .box_title {
            padding: 10px 15px 7px 15px;
        }

        .page-template-inventory-listing-api .gallery_disk {
            display: none;
        }

        .page-template-inventory-listing-api .box_title span {
            font-size: 18px;
        }

        .page-template-inventory-listing-api .main_text_contact span {
            font-size: 22px;
            font-weight: 600;
            font-family: 'Avenir';
            padding: 0px 10px;
        }

        .page-template-inventory-listing-api .total_count .month_first {
            right: 18px;
            font-size: 18px;
            background: #ffffff00;
            padding-left: 2px;
            top: 51px !important;
        }

        .page-template-inventory-listing-api .specification .tagline {
            display: none;
        }

        .page-template-inventory-listing-api .mobile_img_gallery {
            display: block;
        }

        .page-template-inventory-listing-api .speci_con_new h4 {
            color: white;
            display: block;
            padding-bottom: 20px;
        }


        .page-template-inventory-listing-api .FAQ {
            margin-bottom: 10px;
        }

        .page-template-inventory-listing-api section.boat-slider-sec {
            display: none;
        }

        .page-template-inventory-listing-api .speci_con_new ul li span {
            font-weight: bold;
            margin-bottom: 0;
            line-height: 31px;
            display: inline-block;
        }

        .page-template-inventory-listing-api .lb-data .lb-close {
            left: 0%;
        }

    }

    @media (max-width:767px) {
        .page-template-inventory-listing-api .speci_con_new ul {
            display: grid;
        }

        .page-template-inventory-listing-api section.vd_sec_new {
            padding: 30px 0 0px;
        }

        .page-template-inventory-listing-api .speci_con_new ul li {
            font-size: 16px;
        }

        .page-template-inventory-listing-api img.excess-desk {
            display: block;
        }

        .page-template-inventory-listing-api .mobileorede {
            order: 2;
            margin-top: 30px;
            padding-bottom: 0;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 240px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 150px;
        }

        .page-template-inventory-listing-api .listing_api_new_page {
            font-size: 28px;
            padding: 30px 0px 0px;
        }

        .page-template-inventory-listing-api .speci_con_new {
            padding: 10px 0px;
            border-radius: 30px;
            margin-bottom: 0;
        }

        .page-template-inventory-listing-api .ventures_listing {
            padding: 20px 20px;
            border: 2px solid #000329;
            border-radius: 40px;
            height: 100%;
        }

        .page-template-inventory-listing-api .ventures_listing h3 {
            font-size: 32px;
            padding: 10px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 16px;
        }

        .page-template-inventory-listing-api .man_infor_con {
            padding: 10px 0px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ h2.tagline {
            font-size: 20px;
            padding: 10px 15px !important;
            margin-bottom: 20px;
            line-height: 24px;
        }

        .page-template-inventory-listing-api .man_infor_con .FAQ p {
            font-size: 16px;
            text-align: center;
        }

        .page-template-inventory-listing-api section.boat-slider-sec .item {
            padding: 0 0 11px;
        }

        .page-template-inventory-listing-api .gallery_img img {
            height: 200px;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 16px;
            line-height: 22px;
            padding-bottom: 10px;
            margin-right: 0;
        }

        .page-template-inventory-listing-api .fea_an_option ul li {
            font-size: 16px;
            line-height: 22px;
            padding-bottom: 10px;
        }

        .page-template-inventory-listing-api .mainsingle_counse {
            column-count: 1 !important;
        }

        .page-template-inventory-listing-api .fea_an_option ul {
            column-count: 1;
            text-align: center;
        }

        .two_buttsw {
            display: grid;
            padding-top: 0;
        }

        .page-template-inventory-listing-api .two_buttsw .loanse {
            font-size: 20px;
            padding: 12px 0px 12px 0px;
        }

        .page-template-inventory-listing-api .two_buttsw .applysec {
            font-size: 20px;
            padding: 12px 0px 12px 0px;
        }

        .page-template-inventory-listing-api .two_buttsw {
            display: grid;
            padding-top: 0;
            padding: 0 16px 20px;
        }

        .page-template-inventory-listing-api .fea_an_option ul {
            padding-left: 0;
            margin-bottom: 0;
        }
    }

    @media (max-width: 600px) {
        .page-template-inventory-listing-api section.specification {
            padding: 20px 0px 30px;
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width: 450px) {
        .main_input_data {
            position: absolute;
            top: -35px;
            width: 100%;
        }
    }

    @media (max-width:396px) {
        .page-template-inventory-listing-api input::placeholder {
            color: #0c2169 !important;
            font-size: 15px !important;
        }

        .page-template-inventory-listing-api textarea::placeholder {
            color: #0c2169 !important;
            font-size: 15px !important;
        }

        .page-template-inventory-listing-api .total_count label {
            right: 12px !important;
        }

        .page-template-inventory-listing-api .contact {
            padding-left: 15px;
            padding-right: 15px;
        }

        .page-template-inventory-listing-api .FAQ {
            padding-left: 15px;
            padding-right: 15px;

        }
    }

    @media (max-width:375px) {
        .page-template-inventory-listing-api section.vd_sec_new {
            padding: 10px 0 0px;
        }

        .page-template-inventory-listing-api .mobileorede {
            order: 2;
            margin-top: 30px;
            padding-bottom: 30px;
        }

        .page-template-inventory-listing-api .boat-slide-center img {
            height: 200px;
        }

        .page-template-inventory-listing-api .ventures_listing p {
            font-size: 13px;
        }

        .page-template-inventory-listing-api section.boat-slider-sec .item {
            padding: 0px 0 11px;
        }

        .boat-slide-center img {
            height: 200px;
        }

        .page-template-inventory-listing-api section.boat_information_page_new {
            padding-top: 0;
            padding-bottom: 30px;
        }
    }

    @media (max-width:320px) {
        .page-template-inventory-listing-api .boat-slide-center img {
            height: 200px;
        }

        .container {
            padding: 0 10px;
        }

        .page-template-inventory-listing-api .total_count label {
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

<section class="top-bann-sec-new-page">
    <div class="img-are">
        <img src="<?= $prod_det['images']->ImageAttachmentExtended[0]->URI; ?>" class="excess-desk">
    </div>
</section>
<div class="freedom_heading-wrapper ">
    <h2 class="freedom_heading listing_api_new_page">
        <?= $prod_det['year'] . " " . $prod_det['saleclasscode'] . " " . $prod_det['model'] . " " . $prod_det['make']; ?>
    </h2>
</div>
<!-- -------------------------- -->

<?php
if (have_rows('specification_section')) :
    while (have_rows('specification_section')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="venture_dolor_new">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mobileorede">
                            <div class="ventures_listing">
                                <h3><?= isset($prod_det['price']) ? "$" . number_format($prod_det['price'], 0) : 'N/A' ?></h3>
                                <p>For additional information please contact<br>
                                    <b class="bold_class"><?= $prod_det['images']->DealerParty->SpecifiedOrganization->CompanyName[0]; ?><br>
                                        At: <a href="tel:+19549265250">+1(954)-926-5250</a> or
                                        via email at<br> <a href="mailto:sales@nauticalventures.com">sales@nauticalventures.com</a></b>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-8">
                            <div class="speci_con_new listing_new_sec_page">
                                <ul>
                                    <li><span><?= get_sub_field('list_text_1'); ?></span> <?= $prod_det['location']; ?></li>
                                    <li class="order_1"><span><?= get_sub_field('list_text_2'); ?></span> <?= $prod_det['model']; ?>
                                    </li>
                                    <li><span><?= get_sub_field('list_text_4'); ?></span> <?= $prod_det['saleclasscode']; ?> </li>
                                    <li class="order_2"><span><?= get_sub_field('list_text_3'); ?></span> <?php $bexp = explode('.', $prod_det['length']);
                                                                                                            if (!empty($bexp)) {
                                                                                                                $ff = $bexp[0];
                                                                                                                $fin = isset($bexp[1]) ? $bexp[1] : 0;
                                                                                                                $fin = floatval('.' . $fin);
                                                                                                                $fin = floor(($fin * 12));
                                                                                                                echo $nlength = $ff . "'" . ' ' . $fin . '"';
                                                                                                            } else {
                                                                                                                echo $prod_det['length'];
                                                                                                            } ?>
                                    </li>
                                    <li><span><?= get_sub_field('list_text_6'); ?> </span> <?= $prod_det['year']; ?></li>
                                    <li class="order_3"><span><?= get_sub_field('list_text_5'); ?></span> <?php $bexp = explode('.', $prod_det['beam']);
                                                                                                            if (!empty($bexp)) {
                                                                                                                $ff = $bexp[0];
                                                                                                                $fin = isset($bexp[1]) ? $bexp[1] : 0;
                                                                                                                $fin = floatval('.' . $fin);
                                                                                                                $fin = floor(($fin * 12));
                                                                                                                echo $nlength = $ff . "'" . ' ' . $fin . '"';
                                                                                                            } else {
                                                                                                                echo $prod_det['beam'];
                                                                                                            } ?>
                                    </li>
                                    <li><span><?= get_sub_field('list_text_7'); ?></span>
                                        <?= $prod_det['make']; ?></li>
                                    <li class="order_4"><span><?= get_sub_field('list_text_8'); ?></span>
                                        <?= $prod_det['images']->VehicleRemarketingEngineLineItem->VehicleRemarketingEngine->MakeString; ?>
                                    </li>
                                    <li class="border_none"><span>HIN: </span>
                                        <?= $prod_det['hin']; ?></li>
                                    <li class="border_none order_4"><span>Category: </span>
                                        <?= $prod_det['category']; ?>
                                    </li>
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

<section class="listing-boat-information new-except">
    <div class="new-form-desk">
        <?= do_shortcode('[contact-form-7 id="5740" title="Inventory Listing Form"]'); ?>
    </div>
</section>


<section class="boat_information_page_new">
    <div class="container">
        <div class="man_infor_con">
            <div class="FAQ">
                <h2 class="tagline">BOAT INFORMATION</h2>
                <p><?= $prod_det['description']; ?></p>
            </div>
        </div>
    </div>
</section>



<section class="boat-slider-sec pt-2">
    <div class="container">
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
    </div>
</section>

<!-- -------------------------- -->

<section class="nv_gallery">
    <div class="container">
        <div class="row">
            <?php foreach ($prod_det['images']->ImageAttachmentExtended as $images) : ?>
                <div class="col-lg-4 col-md-6 dots">
                    <div class="gallery_img">
                        <a class="example-image-link" href="<?= $images->URI; ?>" data-lightbox="example-1">
                            <img class="example-image" src="<?= $images->URI; ?>" alt="image-1" /></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="move_after" id="myBtn">
                    <h2 class="tagline">more photos</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($prod_det['featuredata']) : ?>
    <section class="boat_information_page_new fea_an_option_sec">
        <div class="container">
            <div class="man_infor_con fea_an_option">
                <div class="FAQ">
                    <h2 class="tagline">FEATURES AND OPTIONS</h2>
                    <ul class="faqno-main">
                        <?php if (is_array($prod_det['featuredata'])) { ?>
                            <?php foreach ($prod_det['featuredata'] as $features) : ?>
                                <li><?= str_replace("_", " ", $features->DataNodeID); ?></li>
                            <?php endforeach; ?>
                        <?php } ?>
                        <?php if (is_object($prod_det['featuredata'])) { ?>
                            <?php foreach ($prod_det['featuredata'] as $key => $features) : ?>
                                <?php if ($key == "DataNodeID") : ?>
                                    <li><?= str_replace("_", " ", $prod_det['featuredata']->DataNodeID); ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$videothing = '';
if (isset($prod_det['images']->AdditionalMedia)) {
    if (isset($prod_det['images']->AdditionalMedia->EmbeddedData->DataString)) {
        $videothing = $prod_det['images']->AdditionalMedia->MediaSourceURI;
    } else if (isset($prod_det['images']->AdditionalMedia[0]->EmbeddedData->DataString)) {
        $videothing = $prod_det['images']->AdditionalMedia[0]->MediaSourceURI;
    } else if (isset($prod_det['images']->AdditionalMedia[1]->EmbeddedData->DataString)) {
        $videothing = $prod_det['images']->AdditionalMedia[1]->MediaSourceURI;
    }
}

$videoye = $videothing;
$video_url_part_arr = explode("/", $videoye);
$videoyes = $video_url_part_arr[count($video_url_part_arr) - 1];
if (substr($videoyes, 0, 5) == "watch") {
    $youtube_id_arr = explode("=", $videoyes);
    if (count($youtube_id_arr) == 3) {
        $videoyes = str_replace("&feature", "", $youtube_id_arr[1]);
    } else {
        $videoyes = $youtube_id_arr[1];
    }
}
if ($videoyes) :
?>
    <section class="vd_sec_new">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vd_listing_page_new" id="boats-video">
                        <iframe width="100%" height="650" src="https://www.youtube.com/embed/<?= !empty($videoyes) ? $videoyes : ""; ?>" title="<?= $prod_det['model'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" style="max-width: 100%; max-height: 6237px;"></iframe>
                        <style>
                            #boats-video object,
                            #boats-video embed {
                                width: 100% !important;
                                height: 720px !important;
                                border-radius: 2rem;
                            }

                            iframe {
                                height: 100;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <!-- <div class="row seconmore">
                <div class="col-md-12">
                    <div class="move_after" id="myBtn">
                        <h2 class="tagline">more VIDEOS</h2>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
<?php endif; ?>
<?php $count_total_items_in_additionaldetaildescription = count($prod_det['images']->AdditionalDetailDescription); ?>
<?php for ($count = 0; $count < $count_total_items_in_additionaldetaildescription - 2; $count++) :  ?>
    <?php if (strtolower($prod_det['images']->AdditionalDetailDescription[$count]->Title) == "status") : ?>
    <?php else : ?>
        <section class="boat_information_page_new fea_an_option_sec pt-ak-30">
            <div class="container">
                <div class="man_infor_con fea_an_option">
                    <div class="FAQ">
                        <h2 class="tagline"><?= $prod_det['images']->AdditionalDetailDescription[$count]->Title; ?></h2>
                        <p>
                            <?= $prod_det['images']->AdditionalDetailDescription[$count]->Description; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endfor; ?>

<section class="boat_information_page_new fea_an_option_sec pt-ak-30">
    <div class="container">
        <div class="man_infor_con fea_an_option">
            <div class="FAQ">
                <h2 class="tagline">
                    <?= $prod_det['images']->AdditionalDetailDescription[$count_total_items_in_additionaldetaildescription - 2]->Title; ?>
                </h2>
                <ul class="mainsingle_coun">
                    <p><?= $prod_det['images']->AdditionalDetailDescription[$count_total_items_in_additionaldetaildescription - 2]->Description; ?>
                    </p>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php
if (have_rows('financing_area')) :
    while (have_rows('financing_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="boat_information_page_new fea_an_option_sec pt-ak-30">
                <div class="container">
                    <div class="man_infor_con fea_an_option">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="FAQ">
                                    <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
                                    <ul class="mainsingle_coun">
                                        <?= get_sub_field('para'); ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="two_buttsw">
                                    <a class="loanse" href="<?= site_url() . "/loan-calculator/?manufacturer=" . $prod_det['make'] . "&model=" . $prod_det['model']; ?>">Loan
                                        Calculator</a>
                                    <a class="applysec" href="<?= site_url() . "/apply-for-financing/?manufacturer=" . $prod_det['make'] . "&model=" . $prod_det['model']; ?>">Apply
                                        for Financing</a>
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
if (have_rows('share_your_experience_area')) :
    while (have_rows('share_your_experience_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="py-5 all-cnt-sec aos-init aos-animate" data-aos="fade-down">
                <div class="container">
                    <h2 class="text-center smaller-heading mb-5"><?= get_sub_field('heading'); ?></h2>
                    <?= get_sub_field('para'); ?>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<?php
if (have_rows('contact_section_area')) :
    while (have_rows('contact_section_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="pb-5 cont">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="card p-0 me-1 border-0 h-100">
                                <img class="desk-img" src="<?= get_sub_field('desktop_image'); ?>">
                                <img src="<?= get_sub_field('mobile_image'); ?>" class="mobile-img">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="card p-0 ms-1 border-0 h-100 blue-side-pill">
                                <div class="content-center">
                                    <h3><?= get_sub_field('heading'); ?></h3>
                                    <a class="rounded-pill btn-contact" href="<?= get_sub_field('get_in_touch_link'); ?>"><?= get_sub_field('get_in_touch_text'); ?></a>
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
    jQuery(document).ready(function() {
        jQuery('#myBtn').click(function() {
            jQuery('.dots').show();
        })
    })
</script>

<script type="text/javascript">
    let $ = jQuery;
    $(".stock_number").val("Sailboat");
    $("input[name='make']").attr("readonly", true);
    $("input[name='model']").attr("readonly", true);
    $(".new-form-desk form input[name='make']").attr("value", "<?= $prod_det['make']; ?>");
    $(".new-form-desk  form input[name='model']").attr("value", "<?= $prod_det['model']; ?>");
    $(".tagline").children("strong").css("fontWeight", "Normal");
</script>