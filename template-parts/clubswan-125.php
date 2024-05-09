<?php 
/* Template Name: clubswan 125 */
get_header();?>
<style>
@media (max-width: 767px){
    .page-template-clubswan-125 .download-the-brochure {
        padding: 2px 30px;
    }
    .page-template-EXCESS11 section.spec-sec-excss .spec-sec-ex {
        padding: 70px 40px;
    }
}
@media (max-width:390px){
.page-template-clubswan-125 .download-the-brochure {
    padding: 2px 0px;
}
}
@media (max-width: 320px){
    .page-template-clubswan-125 .download-the-brochure {
        padding: 2px 0px;
    }
    .page-template-clubswan-125 .download-the-brochure a {
        font-size: 14px !important;
        line-height: 20px;
    }
}

</style>
<section class="page-template-EXCESS14">
    <section class="page-template-EXCESS11">
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
                        <h2><?= get_sub_field('sub_heading'); ?></h2>
                        <?= get_sub_field('para'); ?>
                    </div>
                    <div class="bann-btm-right" data-aos="fade-down">
                        <div class="bann-btm-right-in">
                            <div class="lgo-are">
                                <img src="<?= get_sub_field('logo'); ?>">
                            </div>
                            <div class="pro-dtl-are">
                                <?php if(have_rows('profile_detail')):
                                    while(have_rows('profile_detail')): the_row();
                                ?>
                                <div class="pro-div">
                                    <div class="pro-img-mn">
                                        <img src="<?= get_sub_field('image'); ?>">
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
                    <?php foreach (get_sub_field('slider_images') as $phone_images) : ?>
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
        if (have_rows('interior_design_area')) :
            while (have_rows('interior_design_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
            <section class="exterior-main-sec">
                <div class="container-fluid">
                    <div class="sec-head">
                        <h2 data-aos="zoom-in"><?= get_sub_field('heading'); ?></h2>
                        <p data-aos="zoom-in"><?= get_sub_field('para'); ?></p>
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
                            <?= get_sub_field('para_2'); ?>
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
                    <h4><?= $spec_box['heading'];?></h4>
                    <div class="spec-line">
                        <ul>
                          <?php foreach($spec_box['lists'] as $spec_list) :  ?>
                            <li class="<?= !empty($spec_list['class'])?$spec_list['class']:""; ?>"><span><?= $spec_list['title'];?> </span> <?= $spec_list['value'];?> </li>
                          <?php endforeach;?>
                            <!-- <li><span>Displacement (empty):</span> 59,300 kg</li>
                            <li><span>LWL:</span> 36,60</li>
                            <li><span>Ballast (fin and bulb):</span> 23,230 kg</li>
                            <li><span>Beam max:</span> 8,75 m</li>
                            <li><span>Engine:</span> 500 Hp</li>
                            <li><span>Draught (canting keel):</span> 7,4 m</li>
                            <li class="blank-li"></li> -->
                        </ul>
                    </div>
                </div>
            <?php endforeach;?>
            <?php if(!empty(get_sub_field('button_link'))){ ?>
            <div class="download-the-brochure">
                <a href="<?php echo get_sub_field('button_link'); ?>" target="_blank"><?php echo get_sub_field('button_name'); ?></a>
            </div>
        <?php } ?>
<!-- 
                <div class="spec-box">
                    <h4>RIG AND SAIL DIMENSIONS</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>IM:</span> 53.30 m</li>
                            <li><span>STL:</span> 21.760 m</li>
                            <li><span>J:</span> 16.50 m</li>
                            <li><span>Jib Area 100% triangle:</span> 413 m2</li>
                            <li><span>P:</span> 51.700 m</li>
                            <li><span>Mainsail:</span> 659 m2</li>
                            <li><span>E:</span> 18.350 m</li>
                            <li><span>Down Main + A3:</span> 1961 m2</li>
                        </ul>
                    </div>
                </div>
                <div class="spec-box">
                    <h4>TANK CAPACITY</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>Fuel storage:</span> 1000 | / 264 USg</li>
                            <li><span>Hot water:</span> 60 | / 16 USg</li>
                            <li><span>Rem. Fuel storage:</span> 2000 | / 528 USg</li>
                            <li><span>Black/Grey water:</span> 215 | / 57 USg</li>
                            <li><span>Fuel day tank:</span> 200 | / 53 USg</li>
                            <li><span>Ballast tank mid:</span> 8000 | / 2113 USg</li>
                            <li><span>Water:</span> 1320 | / 58 USg</li>
                            <li><span>Ballast tanks aft:</span> 7000 | / 1849 USg</li>
                        </ul>
                    </div>
                </div>
                <div class="spec-box">
                    <h4>BATTERY & POWER SOURCES</h4>
                    <div class="spec-line">
                        <ul>
                            <li><span>Service battery:</span> 24V 540Ah/1h</li>
                            <li style="border-bottom: 2px solid #ffffff00;"><span>Main Engine:</span> Marine Diesel Sweden VGT 500</li>
                            <li><span>Electronic battery:</span> 24V 180 Ah/1h </li>
                            <li><span></span> 373kW @ 3600 rpm</li>
                            <li><span>Starting battery:</span> 12V 25 Ah/1h</li>
                            <li><span>Shore power:</span> 230V 32A 1-phase</li>
                            <li><span>Generator:</span> Fischer Panda 10000i 8kW</li>
                            <li><span></span></li>
                        </ul>
                    </div>
                </div> -->
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