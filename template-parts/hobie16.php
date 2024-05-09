<?php
   /* 
   Template Name: Hobie 16 Template
   */
   
   get_header();
   
   ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
   .page-template-hobie16 .bann-btm-right {
   width: 360px;
   margin-top: -140px;
   }
   .page-template-hobie16 section.top-bann-sec img {
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

/*.new_mirage_tech ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}*/

.new_mirage_tech ul li {
   width: 100% !important;
}

.new_sec_mirage {
    padding: 60px 0px;
}

section.spec-sec-excss .spec-sec-ex {
    padding: 60px 100px;
}


section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li:last-child{
    border-bottom: 0px;
}

section.bann-btm-sec {
    padding-bottom: 30px;
}

@media(min-width: 1920px){

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

.page-template-hobie16 .bann-btm-right {
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


@media(min-width: 2500px){
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

}

@media(min-width: 2700px){
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

.page-template-hobie16 .bann-btm-right {
    width: 530px;
}

}

@media(min-width: 1440px) and (max-width: 1680px){
    .page-template-hobie16 .bann-btm-right {
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

 @media(max-width: 2599px){
   .mirage_page {
   max-width: 76%;
   }
   }

    @media(max-width: 1600px){
    .page-template-hobie16 .bann-btm-right {
            padding-left: 30px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 20px;

}

section.spec-sec-excss .spec-sec-ex {
    padding: 60px 60px 30px;
}

  .page-template-hobie16 .bann-btm-left br {
   display: none;
   }

   }

    @media(max-width: 1400px){
        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 18px;
    margin-bottom: 10px;
    padding-bottom: 8px;
}

    }

    @media(max-width: 1200px){
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

    }
@media(max-width: 1024px){
.maine_br{
    display: none;
}
}
@media(max-width: 992px){

.mirage_page h3 {
    font-size: 80px;
    text-align: center;
    line-height: 0.4;
}

.page-template-hobie16 .bann-btm-right {
    padding-left: 0px !important;
}

.page-template-hobie16 .bann-btm-right {
    margin-top: 50px;
}

/*.new_mirage_tech ul li {
    width: 49% !important;
}*/

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


}

@media(max-width: 767px){
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

/*.new_mirage_tech ul li {
    width: 100% !important;
}*/

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


}

@media(max-width: 576px){
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

}


</style>
    <?php
    if (have_rows('top_banner_section')) :
        while (have_rows('top_banner_section')) : the_row();
            if (get_row_layout() == 'add_row') :
    ?>
        <section class="top-bann-sec">
           <div class="img-are">
              <img src="<?php echo get_sub_field('desktop_banner_image'); ?>" class="excess-desk">
              <img src="<?php echo get_sub_field('mobile_banner_image'); ?>" class="excess-phone" alt="">
           </div>
           <div class="mirage_page">
              <h3 class="head_page_mirage"><?php echo get_sub_field('banner_name_text'); ?></h3>
           </div>
        </section>
    <?php endif; endwhile; endif; ?>
    <?php
    if (have_rows('about_section_area')) :
        while (have_rows('about_section_area')) : the_row();
            if (get_row_layout() == 'add_row') :
    ?>
        <section class="bann-btm-sec">
           <div class="container-fluid">
              <div class="row-in">
                 <div class="bann-btm-left new_mirage">
                    <h1 class="fon_none"><?php echo get_sub_field('about_heading'); ?></h1>
                    <?php echo get_sub_field('content'); ?>
                 </div>
                 <div class="bann-btm-right" data-aos="fade-up">
                    <img src="<?php echo get_sub_field('about_desktop_image'); ?>" class="excess-desk" alt="">
                    <img src="<?php echo get_sub_field('about_mobile_image'); ?>" class="excess-phone" alt="">
                 </div>
              </div>
           </div>
        </section>
    <?php endif; endwhile; endif; ?>

    <?php
    if (have_rows('slider_section_area')) :
        while (have_rows('slider_section_area')) : the_row();
            if (get_row_layout() == 'add_row') :
    ?>
        <section class="main-img-slider desk">
           <div class="container-fluid">
              <div class="vrtcl-slider vrtcl-sliders">
                <?php foreach(get_sub_field('slider_repeater') as $slider_repeater): ?>
                <div class="item">
                    <img src="<?php echo $slider_repeater['slider_image']; ?>">
                 </div>
                 <?php endforeach; ?>
              </div>
           </div>
        </section>
    <?php endif; endwhile; endif; ?>

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
            if (get_row_layout() == 'add_row') :
    ?>
        <section class="spec-sec-excss bann-btm-sec new_sec_mirage">
           <div class="container-fluid">
                <div class="sec-head">
              <h2><?php echo get_sub_field('heading'); ?></h2>
           </div>
           <div class="spec-sec-ex new_mirage_tech">
              <div class="spec-box">
                 <div class="spec-line">
                    <ul>
                        <div class="row">
                            <div class="col-md-6">
                                <?php foreach(get_sub_field('left_list') as $left_list): ?>
                                   <li><span><?php echo $left_list['title']; ?> </span> <?php echo $left_list['value']; ?></li>
                                <?php endforeach;  ?>
                                   <li><span></span> </li>

                            </div>

                            <div class="col-md-6">
                                <?php $countre = 1; foreach(get_sub_field('right_list') as $right_list): ?>
                                    <li <?php if($countre == 6){ echo 'style="border-bottom: 0px;"'; } ?>><span><?php echo $right_list['title']; ?>  </span><?php echo $right_list['value']; ?></li>
                                <?php $countre++; endforeach; ?>
<!-- 
                                   <li><span>Total Sail Area:  </span> 218 ft² / 20 m²</li>
                                   <li><span>Hull Construction:</span> Fiberglass/Foam Sandwich</li>
                                   <li><span>Height From Floor to Bow: </span> 23.5” / 59.69 cm </li>
                                   <li><span>Height From Floor to Stern: </span> 24” / 60.96 cm </li>
                                   <li><span>Color Options </span> </li>
                                   <li style="border-bottom: 0px;"><span>*All colors, graphics and specifications of all </span> </li>
                                   <li><span>models are subject to change without notice.</span> </li -->>
                            </div>

                        </div>
                      
                       
                    </ul>
                 </div>
              </div>
           </div>
           </div>
        </section>
    <?php endif; endwhile; endif; ?>

    <?php
    if (have_rows('discoveries_section_area')) :
        while (have_rows('discoveries_section_area')) : the_row();
            if (get_row_layout() == 'add_row') :
    ?>
        <section class="ft-bt_mirage bann-btm-sec">
            <div class="container-fluid">
                        <div class="sec-head">
                            <h2 class="tagline"><?php echo get_sub_field('heading'); ?></h2>
                            <?php echo get_sub_field('content'); ?>
                        </div>
            </div>
        </section>
    <?php endif; endwhile; endif; ?>
<?php get_footer(); ?>