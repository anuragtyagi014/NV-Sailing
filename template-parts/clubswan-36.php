<?php
/* Template Name: clubswan 36 */
get_header();
?>

<style type="text/css">
.page-template-clubswan-36 section.spec-sec-excss .spec-sec-ex {
    background: #0c2169;
    padding: 60px 48px;
    border-radius: 145px;
}


@media (min-width: 1601px) {
.page-template-clubswan-36 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
    font-size: 29px;
    line-height: 36px !important;
}
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
    justify-content: start;
     justify-content: start;
    align-items: center;
    display: grid;

}
}
@media (max-width: 1499px){
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
    font-size: 18px;
    line-height: 23px !important;
}
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
    justify-content: start;
     justify-content: start;
    align-items: center;
    display: grid;

}
}
@media (max-width: 1440px) {
.page-template-clubswan-36 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 17px;
}
.page-template-clubswan-36 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
   
    height: 265px;  
}
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
    padding: 30px 30px;
    justify-content: start;
     justify-content: start;
    align-items: center;
    display: grid;

}
}

@media (max-width: 1243px) {
.page-template-clubswan-36 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 17px;
}
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
    justify-content: start;
     justify-content: start;
    align-items: center;
    display: grid;

}
}


@media (max-width:768px){
.page-template-clubswan-36 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    margin-bottom: 0px;
}

.page-template-clubswan-36 .page-template-EXCESS11 li.blank-li {
    display: block;
}
.page-template-clubswan-36 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(10) {
    display: none !important;
}

.page-template-swan-128 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box:nth-child(1) .spec-line ul li:nth-child(3) span {
    display: contents;
}

.page-template-clubswan-36 .page-template-EXCESS14 .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li.blank-li{
    display: none;
}

}
@media (max-width:767px){
.page-template-EXCESS11 .download-the-brochure {
    padding: 0 30px;
}
.page-template-clubswan-36 section.spec-sec-excss .spec-sec-ex {
    padding: 70px 40px;
}
}
@media (max-width:390px){
.page-template-EXCESS11 .download-the-brochure {
    padding: 0 0px;
}
}
@media (max-width:375px){
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont {
    padding: 20px 30px 40px;
}
.page-template-clubswan-36 .page-template-EXCESS11 section.interior-main-sec .container-fluid .interior-img-are .img-ovr-cont p {
    font-size: 14px;
    line-height: 22px !important;
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
        if (have_rows('about_area')) :
            while (have_rows('about_area')) : the_row();
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
                                <div class="bann-btm-right" data-aos="fade-down">
                                    <div class="bann-btm-right-in">
                                        <div class="lgo-are">
                                            <img src="<?= get_sub_field('logo'); ?>">
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
        if (have_rows('phone_slider_area')) :
            while (have_rows('phone_slider_area')) : the_row();
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
                                <?= get_sub_field('para'); ?>
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
                                <?= get_sub_field('para'); ?>
                            </div>

                            <div class="interior-img-are" data-aos="zoom-in">
                                <div class="intirior-in-img">
                                    <img src="<?= get_sub_field('image'); ?>">
                                </div>
                                <div class="img-ovr-cont">
                                    <?= get_sub_field('image_cover_content'); ?>
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
                            <?php foreach (get_sub_field('specification_boxes') as $specifications) : ?>
                                <div class="spec-box">
                                    <h4><?= $specifications['heading']; ?></h4>
                                    <div class="spec-line">
                                        <ul>
                                            <?php
                                            foreach ($specifications['lists'] as $lists) : ?>
                                                <li><span><?= !empty($lists['title']) ? $lists['title'] : "" ?></span> <?= !empty($lists['value']) ? $lists['value'] : "" ?></li>

                                            <?php
                                            endforeach; ?>
                                            <?php if ($specifications['heading'] == "TANK CAPACITY BATTERY & POWER SOURCES") : ?>
                                            <?php else : ?>
                                                <li class="blank-li"></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php if(!empty(get_sub_field('button_link'))){ ?>
                            <div class="download-the-brochure">
                                <a href="<?php echo get_sub_field('button_link'); ?>" target="_blank"><?php echo get_sub_field('button_name'); ?></a>
                            </div>
                        <?php } ?>
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
                    <section class="spec-sec-excss">
                        <div class="sec-head">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach (get_sub_field('configuration_details') as $config) : ?>
                                    <div class="col-md-6" data-aos="fade-up">
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