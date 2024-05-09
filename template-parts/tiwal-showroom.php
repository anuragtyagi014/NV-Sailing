<?php
/* 
   Template Name: Tiwal Showroom Template
   */

get_header();

?>

<style>
    .main-category-text {
        padding: 50px 0;
        margin: 0px;
        text-align: left;
    }

    .main-category-text .twil_show_page p b {
        font-family: 'Avenir';
    }

    .main-category-img {
        padding: 50px 0px;
        border-bottom: 2px solid #0C2169;
        margin: 0 76px 0px 134px;
    }

    .swan-list-each {
        margin-bottom: 60px;
    }

    .container {
        padding: 0 200px;
    }




    @media(min-width: 1441px) and (max-width: 1840px) {
        .twil_show_page p br {
            display: none;
        }

        b.font_we br {
            display: block !important;
        }


    }

    @media(min-width: 1921px) {
        .twil_show_page p br {
            display: none;
        }

        .container {
            padding: 0 200px;
        }

        .twil_show_page p {
            font-size: 30px;
            line-height: 3rem;
        }

        .main-category-img {
            margin: 0 0px 0px 134px;
        }

    }


    @media(min-width: 2200px) {

        .twil_show_page p {
            font-size: 34px;
            line-height: 3.6rem;
            margin-bottom: 40px;
        }

        .main-category-img img {
            margin: auto;
            width: 450px;
        }

        .main-category-img {
            margin: 0 0px 0px 160px;
        }

    }

    @media(min-width: 2500px) {

        .twil_show_page p {
            font-size: 38px;
            line-height: 4rem;
        }

        .main-category-img {
            margin: 0 30px 0px 180px;
        }

    }

    @media(min-width: 2900px) {

        .twil_show_page p {
            font-size: 44px;
            line-height: 5rem !important;
        }

        .main-category-img {
            margin: 0 0px 0px 224px;
        }

    }

    @media(min-width: 3200px) {

        .main-category-img {
            margin: 0 50px 0px 256px;
        }

    }


    @media(max-width: 1919px) {

        .main-category-img {
            margin: 0 0px 0px 116px;
        }

    }

    @media(max-width: 1680px) {

        .main-category-img {
            margin: 0 0px 0px 116px;
        }

    }

    @media(max-width: 1440px) {
        .container {
            padding: 0 160px;
        }

        .twil_show_page p br {
            display: none;
        }

        b.font_we br {
            display: block !important;
        }

        .main-category-img {
            padding: 50px 0px;
            border-bottom: 2px solid #0C2169;
            margin: 0 0px 0px 100px;
        }

    }


    @media(max-width: 1200px) {
        .container {
            padding: 0 120px;
        }
    }

    @media(max-width: 1199px) {
        .twil_show_page p br {
            display: none;
        }

        .sec-head p br {
            display: none;
        }

        .main-category-img {
            margin: 0 0px 0px 80px;
        }

    }


    @media(max-width: 992px) {

        .main-category-img {
            padding: 20px;
        }

        .twil_show_page p {
            text-align: center;
        }

        b.font_we {
            margin-top: 30px;
            display: block;
        }

        b.font_we br {
            display: block;
        }

        img.excess-desk {
            width: 400px;
            margin: 0 auto;
        }

    }

    @media(max-width: 768px) {
        .main-category-img {
            margin: 0px 0px;
        }

        .col-lg-6:nth-child(odd) {
            padding-left: 15px;
        }

        .col-lg-6:nth-child(even) {
            padding-right: 15px;
        }

        .swan-list-each {
            margin-bottom: 30px;
        }

        .container {
            padding: 0 70px;
        }

    }

    @media(max-width: 767px) {

        .container {
            padding: 0 50px;
        }

        img.excess-phone {
            display: block;
            width: 60%;
            text-align: center;
            margin: 0 auto;
        }

    }

    @media(max-width: 576px) {

        .swan-list-each {
            margin-bottom: 30px;
        }

        .main-category-text {
            padding: 50px 0 10px;
            margin: 0px;
            text-align: left;
        }

        .main-category-img img {
            margin: auto;
            width: 240px;
        }

        img.excess-phone {
            display: block;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

    }

    @media(max-width: 376px) {

        .swan-list-each {
            margin-bottom: 20px;
        }

        .main-category-text {
            padding: 30px 0 10px;
        }

        b.font_we br {
            display: none !important;
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
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
                    <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
                </div>
            </section>

<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('main_section_area')) :
    while (have_rows('main_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="all-boats pb-5">
                <div class="container">
                    <div class="main-category-img">
                        <img class="img-fluid" src="<?= get_sub_field('main_category_image'); ?>" alt="">
                    </div>
                    <div class="main-category-text">
                        <div class="row">

                            <div class="col-lg-5">
                                <img src="<?= get_sub_field('main_category_desktop_image'); ?>" class="excess-desk" alt="">
                                <img src="<?= get_sub_field('main_category_phone_image'); ?>" class="excess-phone" alt="">

                            </div>

                            <div class="col-lg-7 twil_show_page">

                                <?= get_sub_field('paragraph'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <?php
                        foreach (get_sub_field('all_models') as $model) :
                        ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="item-wrapper">
                                    <div class="swan-list-each">
                                        <a href="<?= $model['image_link']; ?>">
                                            <img src="<?= $model['image']; ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="col-lg-6 col-md-12">
                <div class="item-wrapper">
                    <div class="swan-list-each">
                        <a href="#">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/06/showroom3.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item-wrapper">
                    <div class="swan-list-each">
                        <a href="#">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/06/showroom4.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item-wrapper">
                    <div class="swan-list-each">
                        <a href="#">
                            <img src="https://nvsailing.com/wp-content/uploads/2023/06/shoroom5.png">
                        </a>
                    </div>
                </div>
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