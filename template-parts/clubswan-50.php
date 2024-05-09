<?php
/* Template Name: clubswan 50 */
get_header();
?>
<style>
@media (max-width: 767px){
    .page-template-clubswan-50 .download-the-brochure {
        padding: 2px 30px;
    }
}
@media (max-width:480px){
    .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
        padding: 70px 40px;
    }
}
@media (max-width:390px){
    .page-template-clubswan-50 .download-the-brochure {
        padding: 2px 0px;
    }
}
@media (max-width: 320px){
    .page-template-clubswan-50 .download-the-brochure {
        padding: 2px 0px;
    }
    .page-template-clubswan-50 .download-the-brochure a {
        font-size: 14px !important;
        line-height: 20px;
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
                                <?php if(have_rows('profile_data')):
                                    while(have_rows('profile_data')): the_row();
                                ?>
                                <div class="pro-div">
                                    <div class="pro-img-mn">
                                        <img src="<?= get_sub_field('image'); ?>">
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
                        <?php foreach (get_sub_field('slider_images') as $desk_images) : ?>
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
            if (have_rows('phone_slider_area')) :
                while (have_rows('phone_slider_area')) : the_row();
                    if (get_row_layout() == 'all_content') :
            ?>
            <section class="main-img-slider mob">
                <div class="container-fluid">
                    <div class="vrtcl-slider vrtcl-sliders">
                        <?php foreach (get_sub_field('slider_images') as $desk_images) : ?>
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
                <?php foreach(get_sub_field('specification_boxes') as $spec_box) :  ?>
                <div class="spec-box">
                    <h4> <?= $spec_box['heading'];?></h4>
                    <div class="spec-line">
                        <ul>
                            <?php foreach($spec_box['lists'] as $spec_list) :  ?>
                              <li><span><?= $spec_list['title'];?>: </span> <?= $spec_list['value'];?></li>
                            <?php endforeach;?>
                            <?php if($spec_box['heading'] == 'DIMENSIONS' || $spec_box['heading'] == 'SAIL AREAS' || $spec_box['heading'] == 'TANK CAPACITY' || $spec_box['heading'] == 'BATTERY'){ ?>
                                <li class="blank-li"></li>
                            <?php  } ?>
                        </ul>

                    </div>
                </div>
                <?php endforeach;?>
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
                    <?php foreach (get_sub_field('configuration_details') as $configuration_box) :?>
                    <div class="col-md-6">
                        <div class="two-im-in">
                            <img src="<?= $configuration_box['image'];?>">
                            <div class="textcont-in">
                                <h4><?= $configuration_box['heading'];?></h4>
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
