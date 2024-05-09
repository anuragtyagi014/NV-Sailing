<?php
/* Template Name: oceanis yacht 60 */
get_header(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.4/venobox.css" />

<style>
  .centeral-button-block {
    text-align: center;
    padding-top: 40px;
  }

  .walktrough-video {
    margin-top: 20px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 24px;
    border-radius: 10rem;
    background-color: #0c2169;
    font-family: 'Avenir Black', serif;
    font-weight: 900;
    text-decoration: none;
    margin: auto;
    padding: 13px;
    letter-spacing: -0.08px;
    border: 0;
    outline: 0;
  }

  .walktrough-video:hover {
    text-decoration: none;
    color: #fff;
  }

  .img-comparison-section {
    display: block;
    width: 100%;
  }

  .funny-container {
    margin: auto;
    height: 100%;
    width: 100%;
    margin-top: 60px;
    padding: 0 300px;
  }

  .img-comp-container {
    position: relative;
    height: 810px;
    /*should be the same height as the images*/
  }

  .img-comp-img {
    position: absolute;
    width: auto;
    height: auto;
    overflow: hidden;
  }

  .img-comp-img img {
    display: block;
    vertical-align: middle;
    width: 1320px;
    height: 810px;
    max-width: unset;
    pointer-events: none;
  }

  .img-comp-slider {
    position: absolute;
    z-index: 9;
    cursor: ew-resize;
    /*set the appearance of the slider:*/
    width: 40px;
    height: 40px;
    background-color: #f8f8f8;
    opacity: 0.7;
    border-radius: 50%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 5px 10px;
    transition: padding 0.2s linear;
  }

  .img-comp-container:hover .img-comp-slider {
    padding: 5px 5px;
  }

  .img-comp-slider::before {
    content: '<';
    font-weight: 600;
    font-size: 20px;
    color: #080e49;
    font-family: monospace;
  }

  .img-comp-slider::after {
    content: '>';
    font-weight: 600;
    font-size: 20px;
    color: #080e49;
    font-family: monospace;
  }

  @media screen and (max-width: 1919px) {
    .funny-container {
      padding: 0px;
      max-width: 1400px;
    }

    .img-comp-container {
      position: relative;
      height: 800px;
    }

    .img-comp-img img {
      width: 1400px;
      height: 800px;
    }

    .walktrough-video {
      font-size: 16px;
    }
  }

  @media screen and (min-width: 1451px) and (max-width: 1599px) {
    .funny-container {
      padding: 0px;
      max-width: 1200px;
    }

    .img-comp-container {
      position: relative;
      height: 720px;
    }

    .img-comp-img img {
      width: 1200px;
      height: 720px;
    }

    .walktrough-video {
      font-size: 16px;
    }
  }

  @media screen and (min-width: 1200px) and (max-width: 1450px) {
    .funny-container {
      padding: 0px;
      max-width: 1016px;
    }

    .img-comp-container {
      position: relative;
      height: 600px;
    }

    .img-comp-img img {
      width: 1016px;
      height: 600px;
    }
  }

  @media screen and (min-width: 830px) and (max-width: 1199px) {
    .funny-container {
      padding: 0px;
      max-width: 800px;
    }

    .img-comp-container {
      position: relative;
      height: 420px;
    }

    .img-comp-img img {
      width: 800px;
      height: 420px;
    }
  }

  @media screen and (min-width: 767px) and (max-width: 829px) {
    .funny-container {
      padding: 0px;
      max-width: 628px;
    }

    .img-comp-container {
      position: relative;
      height: 380px;
    }

    .img-comp-img img {
      width: 628px;
      height: 380px;
    }
  }

  @media screen and (max-width: 768px) {
    .img-comp-slider {
      width: 30px;
      height: 30px;
    }

    .img-comp-slider::before,
    .img-comp-slider::after {
      font-size: 15px;
    }

    .img-comp-slider {
      padding: 5px;
    }

    .img-comp-slider:hover {
      padding: 2px;
    }
  }

  @media screen and (max-width: 576px) {
    .funny-container {
      padding: 0px;
      max-width: 420px;
    }

    .img-comp-container {
      position: relative;
      height: 360px;
    }

    .img-comp-img img {
      width: 420px;
      height: 360px;
    }

    .download-the-brochure {
      margin-top: 10px;
      margin-bottom: 20px;
    }
  }

  @media screen and (min-width: 400px) and (max-width: 450px) {
    .funny-container {
      padding: 0px;
      max-width: 365px;
    }

    .img-comp-container {
      position: relative;
      height: 250px;
    }

    .img-comp-img img {
      width: 365px;
      height: 250px;
    }
  }

  @media screen and (min-width: 376px) and (max-width: 400px) {
    .funny-container {
      padding: 0px;
      max-width: 330px;
    }

    .img-comp-container {
      position: relative;
      height: 240px;
    }

    .img-comp-img img {
      width: 330px;
      height: 240px;
    }
  }

  @media screen and (min-width: 340px) and (max-width: 376px) {
    .funny-container {
      padding: 0px;
      max-width: 316px;
    }

    .img-comp-container {
      position: relative;
      height: 220px;
    }

    .img-comp-img img {
      width: 316px;
      height: 220px;
    }

    .walktrough-video {
      font-size: 15px;
    }
  }

  @media screen and (min-width: 319px) and (max-width: 339px) {
    .funny-container {
      padding: 0px;
      max-width: 300px;
    }

    .img-comp-container {
      position: relative;
      height: 200px;
    }

    .img-comp-img img {
      width: 300px;
      height: 200px;
    }

    .walktrough-video {
      font-size: 14px;
    }
  }

  @media screen and (min-width: 2200px) {
    .funny-container {
      padding: 0px;
      max-width: 1700px;
    }

    .img-comp-container {
      position: relative;
      height: 950px;
    }

    .img-comp-img img {
      width: 1700px;
      height: 950px;
    }

    .walktrough-video {
      font-size: 18px;
    }
  }

  @media screen and (min-width: 2500px) {
    .funny-container {
      padding: 0px;
      max-width: 1900px;
    }

    .img-comp-container {
      position: relative;
      height: 1050px;
    }

    .img-comp-img img {
      width: 1900px;
      height: 1050px;
    }

    .img-comp-slider {
      width: 50px;
      height: 50px;
    }

    .img-comp-slider::before,
    .img-comp-slider::after {
      font-size: 22px;
    }

    .img-comp-slider {
      padding: 6px 12px;
    }

    .img-comp-slider:hover {
      padding: 6px;
    }

    .walktrough-video {
      font-size: 25px;
      padding: 15px;
    }
  }

  @media screen and (min-width: 2700px) {
    .funny-container {
      padding: 0px;
      margin-top: 80px;
      max-width: 2100px;
    }

    .img-comp-container {
      position: relative;
      height: 1100px;
    }

    .img-comp-img img {
      width: 2100px;
      height: 1100px;
    }

    .walktrough-video {
      font-size: 30px;
      padding: 15px;
    }
  }

  @media screen and (min-width: 2900px) {
    .funny-container {
      padding: 0px;
      margin-top: 80px;
      max-width: 2300px;
    }

    .img-comp-container {
      position: relative;
      height: 1150px;
    }

    .img-comp-img img {
      width: 2300px;
      height: 1150px;
    }

    .img-comp-slider {
      width: 60px;
      height: 60px;
    }

    .img-comp-slider::before,
    .img-comp-slider::after {
      font-size: 26px;
    }

    .img-comp-slider {
      padding: 8px 16px;
    }

    .img-comp-slider:hover {
      padding: 8px;
    }

    .walktrough-video {
      font-size: 35px;
      padding: 18px;
    }
  }

  @media screen and (min-width: 3200px) {
    .funny-container {
      padding: 0px;
      max-width: 2600px;
    }

    .img-comp-container {
      position: relative;
      height: 1200px;
    }

    .img-comp-img img {
      width: 2600px;
      height: 1200px;
    }
  }
</style>

<section class="page-template-EXCESS14">
  <section class="page-template-EXCESS11">

    <?php
    if (have_rows('top_banner_section')) :
      while (have_rows('top_banner_section')) : the_row();
        if (get_row_layout('') == 'all_content') :
    ?>
          <section class="top-bann-sec">
            <div class="img-are">
              <img src="<?php the_sub_field('desktop_image'); ?>" class="excess-desk">
              <img src="<?php the_sub_field('phone_image'); ?>" class="excess-phone" alt="">
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
        if (get_row_layout('') == 'all_content') :
    ?>
          <section class="bann-btm-sec">
            <div class="container-fluid">
              <div class="row-in">
                <div class="bann-btm-left">
                  <h1><?php the_sub_field('heading'); ?></h1>
                  <h2><?php the_sub_field('sub_heading'); ?></h2>
                </div>
                <div class="bann-btm-right" data-aos="zoom-in">
                  <div class="bann-btm-right-in">
                    <div class="lgo-are">
                      <img src="<?php the_sub_field('logo'); ?>">
                    </div>
                    <div class="pro-dtl-are">
                      <?php
                      foreach (get_sub_field('profile_details') as $profile) :
                      ?>
                        <div class="pro-div">
                          <div class="pro-img-mn">
                            <img src="<?= $profile['image']; ?>">
                          </div>
                          <div class="pro-div-cont">
                            <h4><?= $profile['designation']; ?></h4>
                            <p><?= $profile['name']; ?></p>
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
    if (have_rows('video_section_area')) :
      while (have_rows('video_section_area')) : the_row();
        if (get_row_layout('') == 'all_content') :
    ?>
          <section class="abt_main_video">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="abt_video ctb-video-in" data-aos="zoom-in">
                    <video width="100%" height="100%" autoplay="" muted="" playsinline loop>
                      <source src="<?= get_sub_field('video_file'); ?>" type="video/mp4">
                    </video>
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
        if (get_row_layout('') == 'all_content') :
    ?>

          <section class="main-img-slider desk">
            <div class="container-fluid">
              <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                <?php foreach (get_sub_field('slider_image') as $deskslider) : ?>
                  <div class="item">
                    <img src="<?= $deskslider['image']; ?>">
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
    if (have_rows('mobile_slider_area')) :
      while (have_rows('mobile_slider_area')) : the_row();
        if (get_row_layout('') == 'all_content') :
    ?>
          <section class="main-img-slider mob">
            <div class="container-fluid">
              <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
                <?php foreach (get_sub_field('slider_image') as $mobslider) : ?>
                  <div class="item">
                    <img src="<?= $mobslider['image']; ?>">
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
        if (get_row_layout('') == 'all_content') :
    ?>
          <section class="exterior-main-sec">
            <div class="container-fluid">
              <div class="sec-head" data-aos="zoom-in">
                <h2><?php the_sub_field('heading'); ?></h2>
                <?php the_sub_field('para'); ?>
              </div>
            </div>
            <div class="ext-img-are" data-aos="zoom-in">
              <img src="<?php the_sub_field('main_image'); ?>" class="main">
              <img src="<?php the_sub_field('phone_image'); ?>" class="phn-img">
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
        if (get_row_layout('') == 'all_content') :
    ?>
          <section class="interior-main-sec">
            <div class="container-fluid">
              <div class="sec-head" data-aos="zoom-in">
                <h2><?php the_sub_field('heading'); ?></h2>
                <?php the_sub_field('para'); ?>
              </div>

              <div class="interior-img-are" data-aos="zoom-in">
                <div class="intirior-in-img">
                  <img src="<?php the_sub_field('image_ex'); ?>">
                </div>
                <div class="img-ovr-cont">
                  <h4><?php the_sub_field('deck_heading'); ?> </h4>
                  <p><?php the_sub_field('deck_paragraph'); ?></p>
                </div>
              </div>
            </div>
          </section>
    <?php
        endif;
      endwhile;
    endif;
    ?>

    <section class="img-comparison-section">
      <div class="funny-container">
        <div class="img-comp-container">
          <div class="img-comp-img">
            <img src="https://nvsailing.com/wp-content/uploads/2023/02/ocy60-after.jpg" alt="after" />
          </div>
          <div class="img-comp-img img-comp-overlay">
            <img src="https://nvsailing.com/wp-content/uploads/2023/02/ocy60-before.jpg" alt="before" />
          </div>
        </div>
      </div>
    </section>
    <section class="walktrough-video-section">
      <div class="centeral-button-block">
        <a class="walktrough-video" data-autoplay="true" data-vbtype="video" data-ratio="16x9" href="https://nvsailing.com/wp-content/uploads/2023/02/walkthrough-video.mp4" data-maxwidth="800px">WALKTHROUGH</a>
      </div>
    </section>

    <?php
    if (have_rows('specifications_area')) :
      while (have_rows('specifications_area')) : the_row();
        if (get_row_layout('') == "all_contents") :

    ?>
          <section class="spec-sec-excss">
            <div class="sec-head">
              <h2><?= get_sub_field('heading'); ?></h2>
            </div>
            <div class="spec-sec-ex">
              <div class="spec-box">
                <div class="spec-line" data-aos="zoom-in">
                  <ul>
                    <?php $count = 1;
                    foreach (get_sub_field('lists') as $lists) : ?>
                      <?php if ($count == count(get_sub_field('lists')) - 1 || $count == count(get_sub_field('lists'))) : ?>
                        <li style="border-bottom:0; padding:0;margin: 0;">
                          <span><?= !empty($lists['title']) ? $lists['title'] : ""; ?></span>
                          <?= !empty($lists['value']) ? $lists['value'] : ""; ?>
                        </li>
                      <?php else : ?>
                        <li><span><?= !empty($lists['title']) ? $lists['title'] : ""; ?></span>
                          <?= !empty($lists['value']) ? $lists['value'] : ""; ?>
                        </li>
                      <?php endif; ?>
                    <?php $count++;
                    endforeach; ?>
                  </ul>
                  <?php if (!empty(get_sub_field('brochure_button_link'))) { ?>
                    <div class="download-the-brochure">
                      <a target="_blank" href="<?php the_sub_field('brochure_button_link'); ?>"><?php the_sub_field('brochure_button'); ?></a>
                    </div>
                  <?php } ?>
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
    if (have_rows('profiles_area')) :
      while (have_rows('profiles_area')) : the_row();
        if (get_row_layout('profiles_area') == 'all_content') :
    ?>
          <section class="profiles-main-sec">
            <div class="container-fluid">
              <div class="sec-head" data-aos="zoom-in">
                <h2><?= the_sub_field('heading'); ?></h2>
              </div>

              <div class="row" data-aos="zoom-in">
                <div class="col-md-3">
                </div>
                <?php foreach (get_sub_field('profile_box') as $probox) : ?>
                  <div class="col-md-3">
                    <div class="profl-bx">
                      <img src="<?= $probox['image']; ?>">
                      <h5><?= $probox['title']; ?></h5>
                    </div>
                  </div>
                <?php endforeach; ?>
                &nbsp; &nbsp;&nbsp;&nbsp;

                <div class="col-md-3">
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
    if (have_rows('boat_slider_area')) :
      while (have_rows('boat_slider_area')) : the_row();
        if (get_row_layout('boat_slider_area') == 'all_content') :
    ?>
          <section class="boat-slider-sec">
            <div class="container-fluid">
              <div class="boat-slider">
                <?php foreach (get_sub_field('slider_content') as $boat) : ?>
                  <div class="item" data-aos="zoom-in">
                    <div class="boat-slide">
                      <img src="<?= $boat['image']; ?>">
                      <div class="profl-bx">
                        <h5><?= $boat['heading']; ?></h5>
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


<?php
if (have_rows('virtual_tour_section')) :
  while (have_rows('virtual_tour_section')) : the_row();
    if (get_row_layout() == 'all_content') :
      if (!empty(get_sub_field('iframe_source'))) :
?>
        <section class="virtual_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="tagline"><?= get_sub_field('heading'); ?></h2>
              </div>
              <div class="col-md-12">
                <div class="virtual_img">
                  <?= get_sub_field('iframe_source'); ?>
                </div>
              </div>

            </div>
          </div>
        </section>
<?php
      endif;
    endif;
  endwhile;
endif;
?>

<script>
  function initComparisons() {
    var x, i;
    /*find all elements with an "overlay" class:*/
    x = document.getElementsByClassName("img-comp-overlay");
    for (i = 0; i < x.length; i++) {
      /*once for each "overlay" element:
    pass the "overlay" element as a parameter when executing the compareImages function:*/
      compareImages(x[i]);
    }

    function compareImages(img) {
      var slider,
        img,
        clicked = 0,
        w,
        h;
      /*get the width and height of the img element*/
      w = img.offsetWidth;
      h = img.offsetHeight;
      /*set the width of the img element to 50%:*/
      img.style.width = w / 2 + "px";
      /*create slider:*/
      slider = document.createElement("DIV");
      slider.setAttribute("class", "img-comp-slider");
      /*insert slider*/
      img.parentElement.insertBefore(slider, img);
      /*position the slider in the middle:*/
      slider.style.top = h / 2 - slider.offsetHeight / 2 + "px";
      slider.style.left = w / 2 - slider.offsetWidth / 2 + "px";
      /*execute a function when the mouse button is pressed:*/
      slider.addEventListener("mousedown", slideReady);
      /*and another function when the mouse button is released:*/
      window.addEventListener("mouseup", slideFinish);
      /*or touched (for touch screens:*/
      slider.addEventListener("touchstart", slideReady);
      /*and released (for touch screens:*/
      window.addEventListener("touchend", slideFinish);

      function slideReady(e) {
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*the slider is now clicked and ready to move:*/
        clicked = 1;
        /*execute a function when the slider is moved:*/
        window.addEventListener("mousemove", slideMove);
        window.addEventListener("touchmove", slideMove);
      }

      function slideFinish() {
        /*the slider is no longer clicked:*/
        clicked = 0;
      }

      function slideMove(e) {
        var pos;
        /*if the slider is no longer clicked, exit this function:*/
        if (clicked == 0) return false;
        /*get the cursor's x position:*/
        pos = getCursorPos(e);
        /*prevent the slider from being positioned outside the image:*/
        if (pos < 0) pos = 0;
        if (pos > w) pos = w;
        /*execute a function that will resize the overlay image according to the cursor:*/
        slide(pos);
      }

      function getCursorPos(e) {
        var a,
          x = 0;
        e = e.changedTouches ? e.changedTouches[0] : e;
        /*get the x positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x coordinate, relative to the image:*/
        x = e.pageX - a.left;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        return x;
      }

      function slide(x) {
        /*resize the image:*/
        img.style.width = x + "px";
        /*position the slider:*/
        slider.style.left = img.offsetWidth - slider.offsetWidth / 2 + "px";
      }
    }
  }
  initComparisons();
</script>

<?php get_footer(); ?>