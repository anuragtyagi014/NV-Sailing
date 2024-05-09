<?php
/*
Template Name: Firstshowroom Template
*/

get_header();
?>
<!-- Hero Section Start -->
<style>
  /*  .page-template-firstshowroom .item-wrapper {
    position: relative;
    height: 100%;
    padding-bottom: 90px;
  }
*/
  .page-template-firstshowroom a.findoutmore2 {
    display: block;
    color: #fff;
    background-color: #0c2169;
    padding: 10px 50px 10px;
    font-size: 21px;
    border-radius: 40px;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    width: fit-content;
    text-decoration: none;
    margin: 0 auto;
    text-transform: uppercase;
  }

  .page-template-firstshowroom .first53-main video {
    width: 100%;
    height: 100%;
  }

  .page-template-firstshowroom .main-category-textshowroom h2 {
    color: var(--color-primary);
    padding: 0;
    margin-bottom: 70px;
    text-transform: uppercase;
    font-size: 2.5rem;
    text-align: center;
    letter-spacing: inherit;
    font-family: 'Carla Sans';
  }

  .page-template-firstshowroom .main-category-textshowroom .last-mainsewq {
    margin-bottom: 0px;
  }

  .page-template-firstshowroom .main-category-text h2 {
    font-size: 26px;
    font-weight: 600;
    letter-spacing: inherit;
  }

  .page-template-firstshowroom .firstshowroom-imsec ul {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .page-template-firstshowroom .firstshowroom-imsec ul li {
    list-style: none;
    padding: 20px;
  }

  .page-template-firstshowroom .showroom-mobile-m {
    display: none;
  }

  .page-template-firstshowroom .firstshowroom-imsec {
    padding: 0px 0px 60px;
  }

  .page-template-firstshowroom .firstshowroom-imsec img {
    width: 90%;
    margin: 0 auto;
  }

  /* .page-template-firstshowroom p {
    font-family: 'Avenir';
    font-size: 23px;line-height: 33px;
  }*/

  .page-template-firstshowroom .main-category-img .naq {
    padding: 30px 0 0px;
    margin-top: 10px;
  }

  .page-template-firstshowroom .all-boats .main-category-img {
    padding: 0px 0 20px;
    margin-top: 10px;
  }

  .page-template-firstshowroom .main-category-text {
    padding: 40px 0;
  }


  .all-boats .col-lg-6.mb-5 {
    padding: 0 24px;
    text-align: left;
  }

  .swan-list-each {
    margin-bottom: 40px !important;
    padding: 0;
  }

  .swan-list-each img {
    width: 100%;
  }

  .all-boats .col-lg-6.col-md-12 {
    padding: 0 24px;
    text-align: left;
  }


  @media (max-width: 767px) {
    .page-template-firstshowroom p {
      line-height: 28px !important;
      font-size: 18px !important;
    }

    .page-template-firstshowroom .main-category-text h2 {
      font-size: 30px;
      font-weight: 600;
      letter-spacing: inherit;
    }
  }

  @media (max-width: 1023px) {
    .page-template-firstshowroom p {
      line-height: 28px !important;
      font-size: 18px !important;
    }

    .page-template-firstshowroom .main-category-text h2 {
      font-size: 18px;
      font-weight: 600;
      letter-spacing: inherit;
    }
  }


  .page-template-firstshowroom p {
    font-size: 44px;
  }


  @media (min-width: 1023px) {
    .page-template-firstshowroom p {
      line-height: 25px !important;
      font-size: 16px;
    }

    /*.page-template-firstshowroom .main-category-text h2 {
    font-size: 18px;
    font-weight: 600;
    letter-spacing: inherit;
}*/

    .page-template-firstshowroom .main-category-textshowroom h2 {
      font-size: 30px;
    }

    .item-wrapper h3 {
      font-size: 25px;
    }
  }

  @media (min-width: 1200px) {
    .page-template-firstshowroom p {
      line-height: 27px !important;
      font-size: 18px;
    }

    /*.page-template-firstshowroom .main-category-text h2 {
    font-size: 20px;
    font-weight: 600;
    letter-spacing: inherit;
}*/

    .page-template-firstshowroom .main-category-textshowroom h2 {
      font-size: 35px;
    }

    .item-wrapper h3 {
      font-size: 30px;
    }
  }

  @media (min-width: 1440px) {
    .page-template-firstshowroom p {
      line-height: 32px !important;
      font-size: 21px;
    }

    /*.page-template-firstshowroom .main-category-text h2 {
    font-size: 27px;
    font-weight: 600;
    letter-spacing: inherit;
}*/

    .page-template-firstshowroom .main-category-textshowroom h2 {
      font-size: 40px;
    }

    .item-wrapper h3 {
      font-size: 35px;
    }
  }

  @media (min-width: 1601px) and (max-width: 1919px) {
    .page-template-EXCESS11 p {
      line-height: 35px !important;
      font-size: 22px;
    }

    /*.page-template-firstshowroom .main-category-text h2 {
    font-size: 24px;
    font-weight: 600;
    letter-spacing: inherit;
}*/

    .page-template-firstshowroom .main-category-textshowroom h2 {
      font-size: 45px;
    }

    .item-wrapper h3 {
      font-size: 40px;
    }
  }

  @media (min-width:2100px) {
    .page-template-firstshowroom p {
      line-height: 37px !important;
      font-size: 28px;
    }

    .page-template-firstshowroom .main-category-text h2 {
      font-size: 40px;
    }

  }

  @media (min-width: 2500px) {
    .page-template-firstshowroom p {
      font-size: 33px;
      line-height: 52px !important;
    }

    /*.page-template-firstshowroom .main-category-text h2 {
    font-size: 35px;
    font-weight: 600;
    letter-spacing: inherit;
}*/

    .page-template-firstshowroom .main-category-textshowroom h2 {
      font-size: 50px;
    }

    .item-wrapper h3 {
      font-size: 45px;
    }
  }


  @media (min-width: 2700px) {
    /*.page-template-firstshowroom .main-category-text h2 {
    font-size: 42px;
    font-weight: 600;
    letter-spacing: inherit;
}*/
    /*.page-template-firstshowroom p {
    font-size: 40px;
    line-height: 60px !important;
}*/

    .page-template-firstshowroom .main-category-textshowroom h2 {
      font-size: 55px;
    }

    .item-wrapper h3 {
      font-size: 50px;
    }

    .page-template-firstshowroom .main-category-img .naq {
      padding: 30px 0 0px;
      margin-top: 50px;
      width: 490px;
    }


  }









  @media(min-width:2800px) and (max-width:3200px) {
    .page-template-firstshowroom a.findoutmore2 {
      padding: 15px 70px 15px;
      font-size: 28px;
    }

    /*    .page-template-firstshowroom .main-category-text h2 {
      font-size: 42px;
    }*/
    /*.page-template-firstshowroom p {
      font-size: 32px;
      line-height: 52px;
  }*/
  }

  @media(min-width:2550px) and (max-width:2700px) {

    /*    .page-template-firstshowroom .main-category-text h2 {
      font-size: 33px;
    }*/
    .page-template-firstshowroom a.findoutmore2 {
      padding: 15px 70px 15px;
      font-size: 23px;
    }
  }

  @media(min-width:2200px) and (max-width:2400px) {
    .page-template-firstshowroom a.findoutmore2 {
      padding: 15px 70px 15px;
      font-size: 28px;
    }

    /*
    .page-template-firstshowroom .main-category-text h2 {
      font-size: 30px;
    }*/
    /*.page-template-firstshowroom p {
      font-size: 26px;
      line-height: 45px;
  }*/
  }

  @media(max-width:768px) {

    /*    .page-template-firstshowroom .col-lg-6:nth-child(odd) {
      padding-left: 0px;
    }*/
    .page-template-firstshowroom .main-category-text h2 {
      font-size: 23px;
      line-height: 34px;
    }
  }

  @media(max-width:767px) {
    .page-template-firstshowroom .main-category-text {
      padding: 30px 0;
    }

    .page-template-firstshowroom .main-category-text h2 {
      padding: 0px 10px 0px;
      font-size: 26px;
      line-height: 39px;
    }

    .page-template-firstshowroom .all-boats .main-category-img {
      margin: 10px 20px 0px;
    }

    /*    .page-template-firstshowroom .col-lg-6:nth-child(odd) {
      padding-left: 10px;
    }*/

    .page-template-firstshowroom .item-wrapper p {
      margin-bottom: 2rem;
    }

    /*    .page-template-firstshowroom .item-wrapper {
      padding-bottom: 50px;
    }*/

    .page-template-firstshowroom a.findoutmore2 {
      padding: 10px 30px 10px;
      bottom: 20px;
    }

    .page-template-firstshowroom footer .py-5 {
      padding-top: 0rem !important;
    }

    .page-template-firstshowroom .showroom-mobile-m {
      display: block;
    }

    .page-template-firstshowroom .showroom-deskf {
      display: none;
    }

    .page-template-firstshowroom .main-category-textshowroom h2 {
      margin-bottom: 40px;
    }

    .page-template-firstshowroom .firstshowroom-imsec {
      padding: 0px 0px 40px;
    }

    /*.page-template-firstshowroom p {
      padding-left: 10px;
    }*/
  }

  @media (max-width: 480px) {
    .page-template-firstshowroom .main-category-text {
      margin: 0 0px;
    }

    /*.page-template-firstshowroom p {
      font-size: 16px;
      line-height: 33px;
    }*/
    /*    .page-template-firstshowroom .main-category-text h2 {
      font-size: 24px;
    }*/
    .page-template-firstshowroom a.findoutmore2 {
      padding: 14px 30px 10px;
      font-size: 16px;
    }

  }

  @media (max-width: 320px) {
    .page-template-firstshowroom a.findoutmore2 {
      padding: 10px 40px 10px;
      font-size: 12px;
    }

    p {
      padding-left: 10px;
    }

    .page-template-firstshowroom .col-lg-6:nth-child(even) {
      padding-right: 20px;
    }

    /*    .page-template-firstshowroom .main-category-text h2 {
      font-size: 18px;
    }*/
  }
</style>


<?php
if (have_rows('top_section_area')) :
  while (have_rows('top_section_area')) : the_row();
    if (get_row_layout() == 'all_content') :
?>
      <section class="hero_section">
        <img src="<?= get_sub_field('desktop_image'); ?>" alt="desktop" class="excess-desk" />
        <img src="<?= get_sub_field('phone_image'); ?>" alt="phone" class="excess-phone" />
      </section>
<?php
    endif;
  endwhile;
endif;
?>
<!-- Hero Section End -->

<!-- <div class="social-media">
  <a class="mb-2" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
  <a class="mb-2" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
  <a class="mb-2" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
  <a class="mb-2" href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
</div> -->
<!-- all boats under category start -->
<section class="all-boats pb-5">
  <div class="container">
    <?php
    if (have_rows('main_category_image_area')) :
      while (have_rows('main_category_image_area')) : the_row();
        if (get_row_layout() == 'all_content') :
    ?>
          <div class="main-category-img">
            <img class="img-fluid naq" src="<?= get_sub_field('image'); ?>" alt="" />
          </div>
    <?php
        endif;
      endwhile;
    endif;
    ?>
    <?php
    if (have_rows('main_category_text_area')) :
      while (have_rows('main_category_text_area')) : the_row();
        if (get_row_layout() == 'all_content') :
    ?>
          <div class="main-category-text">
            <h2><?= get_sub_field('heading'); ?></h2>
            <?= get_sub_field('para'); ?>
          </div>
    <?php
        endif;
      endwhile;
    endif;
    ?>
    <div class="main-category-textshowroom">
      <h2><?= the_field('text_showroom_area'); ?></h2>
    </div>

    <?php
    if (have_rows('first_models_area')) :
      while (have_rows('first_models_area')) : the_row();
        if (get_row_layout() == 'all_content') :
    ?>




          <div class="row m-0">
            <?php foreach (get_sub_field('first_model_content') as $content) : ?>
              <div class="col-lg-6 col-md-12">
                <div class="item-wrapper" data-aos="zoom-in-up">
                  <div class="swan-list-each">
                    <a href="<?= $content['button_link']; ?>">
                      <img src="<?= $content['image']; ?>">
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>





    <?php
        endif;
      endwhile;
    endif;
    ?>
  </div>
</section>

<?php
if (have_rows('video_section_area')) :
  while (have_rows('video_section_area')) : the_row();
    if (get_row_layout() == 'all_content') :
?>
      <section class="page-video-sec">
        <div class="container-fluid">
          <div class="video-main">
            <video src="<?= get_sub_field('video_file'); ?>" type="video/mp4" playsinline="" autoplay="" muted="" loop=""></video>
          </div>
        </div>
      </section>

<?php
    endif;
  endwhile;
endif;
?>

<section class="all-boats pb-5">
  <div class="container">
    <?php
    if (have_rows('first_se_area')) :
      while (have_rows('first_se_area')) : the_row();
        if (get_row_layout() == 'all_content') :
    ?>
          <div class="main-category-img">
            <div class="main-category-textshowroom" data-aos="zoom-in">
              <h2 class="last-mainsewq"><?= get_sub_field('heading'); ?></h2>
            </div>
          </div>
          <div class="main-category-text" data-aos="zoom-in">
            <h2><?= get_sub_field('middle_content_heading'); ?></h2>
            <?= get_sub_field('middle_content_para'); ?>
          </div>
          <div class="firstshowroom-imsec" data-aos="zoom-in">
            <img src="<?= get_sub_field('desktop_image'); ?>" class="showroom-deskf">
            <img src="<?= get_sub_field('phone_image'); ?>" class="showroom-mobile-m">
          </div>
    <?php
        endif;
      endwhile;
    endif;
    ?>
    <?php
    if (have_rows('first_se_models_area')) :
      while (have_rows('first_se_models_area')) : the_row();
        if (get_row_layout() == 'all_content') :
    ?>
          <div class="main-category-textshowroom" data-aos="zoom-in">
            <h2><?= get_sub_field('heading'); ?></h2>
          </div>
          <div class="row m-0">
            <?php foreach (get_sub_field('all_models') as $content2) : ?>
              <div class="col-lg-6 col-md-12">
                <div class="item-wrapper" data-aos="zoom-in">

                  <div class="swan-list-each">
                    <a href="<?= $content2['button_link']; ?>">
                      <img src="<?= $content2['image']; ?>">
                    </a>
                  </div>

                </div>
              </div>
            <?php endforeach; ?>
            <!-- <div class="col-lg-6 mb-5">
              <div class="item-wrapper">
                <div class="position-relative">
                  <img src="https://nvsailing.com/wp-content/uploads/2022/12/firstshowroom8.png">
                  <a class="stretched-link" href="#"></a>
                </div>
                <h3>FIRST 24 SE</h3>
                <p>The First 24 SE is a modern high-tech sport cruiser, capable of delivering thrilling performance in a versatile package that is easy to use and maintain. She is of course trailerable, and her smart mast-raising system allows a single user to launch and go, giving her access to a wide variety of cruising and racing grounds, from international one-design regattas to coastal adventure races. And at the end of the day, she will welcome you with a basic but smart interior, offering all basic cruising amenities for four people. No matter the mode, she is a pure sailing sensation.</p>
                <a href="#" class="findoutmore2"> Find Out More </a>
              </div>
            </div>

            <div class="col-lg-6 mb-5">
              <div class="item-wrapper">
                <div class="position-relative">
                  <img src="https://nvsailing.com/wp-content/uploads/2022/12/firstshowroom9.png">
                  <a class="stretched-link" href="#"></a>
                </div>
                <h3>FIRST 18 SE</h3>
                <p>The First 18 SE is a modern and fun gateway to keel-boat sailing. A wide, flat and stable hull, ballasted swinging keel, gennaker snuffer system, furling jib, and minimized deck controls all facilitate an easy-to-handle yet lively sailing experience. Easily dismantled and trailered, she’ll surely fulfill racing ambitions in international one-design classes as well as adventurous sea-camping.</p>
                <a href="#" class="findoutmore2"> Find Out More </a>
              </div>
            </div>

            <div class="col-lg-6 mb-5">
              <div class="item-wrapper">
                <div class="position-relative">
                  <img src="https://nvsailing.com/wp-content/uploads/2022/12/firstshowroom10.png">
                  <a class="stretched-link" href="#"></a>
                </div>
                <h3>FIRST 14 SE</h3>
                <p>The First 14 SE delivers the excitement, speed and fun of high-performance racing skiffs in a modern, accessible, safe and really easy-to-handle sport dinghy. The build quality and the high-tech materials allow you to push the boat in stronger winds, additional sail area options will also guarantee thrills in even the lightest of airs. Her removable wheels and overall weight – which allow her to be transported on the roof of a car – make it the ideal answer to an active lifestyle.</p>
                <a href="#" class="findoutmore2"> Find Out More </a>
              </div>
            </div> -->
          </div>
    <?php
        endif;
      endwhile;
    endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>