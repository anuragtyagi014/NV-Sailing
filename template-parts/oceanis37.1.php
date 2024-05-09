<?php /* Template Name: Oceanis 37.1 */
get_header();
?>


<style>
    /* new responsive css */

    .profile_con-in {
        width: 100%;
        margin-top: 2rem;        
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .abt_video.ctb-video-in video {
        height: auto;
        margin-top: 2rem;
        aspect-ratio: 21.5/9;
    }

    .tagline-tra {
        font-family: 'Avenir';
        font-weight: 700;
    }

    .specification-main-are ul li:last-child {
        border-bottom: 4px solid #fff;
    }

    section.main-img-slider ul.slick-dots {
        margin-top: 25px;
    }

    @media(min-width:992px) {
        .fr-dsktp {
            display: block;
        }
        .fr-phn {
            display: none;
        }

        .specification-main-are ul {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 0;
            max-width: 95%;
            margin: 0 auto;
        }
    }

    @media(min-width:2200px) {
        .tagline-tra {
            padding: 40px 30px 0;
            font-size: 32px;
        }
        .tagline-tra {
            padding: 40px 40px 0;
        }
        .left-interior-con p {
            padding: 24px 40px 60px;
            font-size: 22px;
        }
    }

    @media screen and (min-width: 2700px) {
        .tagline-tra {
            padding: 70px 70px 0;
            font-size: 40px;
            line-height: 1.5;
        }
        section.direction_section p, section.interior_section p, .footer-text p {
            font-size: 42px;
        }
        .left-interior-con p {
            padding: 30px 70px 70px;
            font-size: 34px;
            line-height: 57px !important;
        }
        .about_con p {
            line-height: 55px;
            padding-top: 30px;
            font-size: 40px;
            line-height: 70px !important;
        }
    }

    @media(max-width:1700px) {
        section.abt p br {
            display: none;
        }
        img.pro_img {
            max-width: 105px;
            width: 100%;
        }
    }

    @media(max-width: 1599px) {
        .specification-main-are ul li:last-child {
            border-bottom: 2px solid #fff;
        }

        .about_con p {
            line-height: 34px;
            font-size: 19px;
        }

        .tagline {
            padding: 0;
        }

       .direction_con p {
            font-size: 19px;
            line-height: 34px;
        }

        .deck_con {
            padding-left: 0;
            padding-right: 30px;
        }
    }

    @media(max-width:1440px) {
        img.pro_img {
            max-width: 80px;
            width: 100%;
        }
    }

    @media screen and (max-width: 991px) {
        .direction_con, .tagline {
            padding-bottom: 0;
            padding-top: 0;
        }
        .specification-main-are ul li:last-child {
            border-bottom: 0;
        }
        .tagline-tra {
            padding: 20px 30px 0;
            font-size: 18px;
            color: #f26715;
            text-align: center;
            margin-bottom: 0;
        }
        .abt_video.ctb-video-in video {
            margin-top: 1rem;
        }
        .profile_con-in {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .direction_con, .tagline {
            padding-bottom: 0;
        }
        .tagline {
            margin-bottom: 0;
        }
        section.main-img-slider ul.slick-dots {
            margin-top: 10px;
        }
        .fr-dsktp {
            display: none;
        }
        .fr-phn {
            display: block;
        }
        section.specification {
            padding: 0;
        }
        section.abt_main_video {
            padding: 10px 40px 20px;
        }

        .swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
            top: 97%;
        }

        section.main-img-slider.desk {
            background-position: -4px 15px;
        }

        section .vrtcl-sliders {
            padding-top: 0;
        }

        .left-interior {
            border-radius: 6rem 6rem 0px 0px;
        }

        section .vrtcl-sliders .slick-slide img {
            width: 72% !important;
            margin: 1% auto 0;
        }

        .specification-main-are ul {
            max-width: 100%;
        }
    }
</style>

<section class="hero_section">
   <img src="https://nvsailing.com/wp-content/uploads/2024/02/oceanis37.1.jpg" alt="" class="hero_bg-image" />
</section>
<section class="abt">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="about_con">
               <h2>OCEANIS 37.1</h2>
               <h3>GET TO KNOW HER</h3>
               <p>The new 37 footer capitalizes on the innovations of the seventh generation of<br> Oceanis cruisers, which it completes. The Oceanis 37.1 is the eighth model<br> launched since 2017 and it has all the line’s hallmarks and offers eco-friendly<br> solutions like an optional electric motor or iroko slatted cockpit floor.</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="con_right" data-aos="zoom-in">
               <div class="main_logo">
                  <img src="https://nvsailing.com/wp-content/uploads/2022/11/Group-256.png" alt="">
               </div>
               <div class="pro-dtl-are">
                  <div class="pro-div">
                     <div class="pro-img-mn">
                        <img src="https://nvsailing.com/wp-content/uploads/2022/12/photo-1-1.png" class="pro_img" alt="">
                     </div>
                     <div class="pro-div-cont">
                        <h4>NAVAL ARCHITECT:</h4>
                        <p>Marc Lombard</p>
                     </div>
                  </div>
                  <div class="pro-div">
                     <div class="pro-img-mn">
                        <img src="https://nvsailing.com/wp-content/uploads/2022/12/photo-2.png" class="pro_img" alt="">
                     </div>
                     <div class="pro-div-cont">
                        <h4>INTERIOR & <br>DECK DESIGN: </h4>
                        <p>Nauta Design</p>
                     </div>
                  </div>
               </div>
               <div class="profile_con-in">
                  <img src="https://nvsailing.com/wp-content/uploads/2024/02/European-Yacht-of-the-Year_NOMINATED_2024.webp" class="pro_img" alt="">
                  <img src="https://nvsailing.com/wp-content/uploads/2024/02/Voilier-Annee-2024-Voile-Mag_Bleu.webp" class="pro_img" alt="">
                  <img src="https://nvsailing.com/wp-content/uploads/2024/02/BYA-AWARDS-2023-logo.webp" class="pro_img" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="abt_main_video">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="abt_video ctb-video-in" data-aos="zoom-in">
               <video width="100%" height="100%" autoplay muted loop playsinline>
                  <source src="https://nvsailing.com/wp-content/uploads/2024/02/NEW-BENETEAU-Oceanis-37.1_-A-Legacy-Of-Harmony.mp4" type="video/mp4">
               </video>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main-img-slider desk">
   <div class="container-fluid">
      <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/acxcasxasx.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/cxgscscs.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/gsfcysdcdc.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/acxcasxasx.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/cxgscscs.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/gsfcysdcdc.png">
         </div>
      </div>
   </div>
</section>
<section class="main-img-slider mob">
   <div class="container-fluid">
      <div class="vrtcl-slider vrtcl-sliders" data-aos="zoom-in">
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/acxcasxasx.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/cxgscscs.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/gsfcysdcdc.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/acxcasxasx.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/cxgscscs.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/gsfcysdcdc.png">
         </div>
      </div>
   </div>
</section>
<section class="direction_section">
   <div class="container">
      <div class="row">
         <div class="direction_con" data-aos="zoom-in">
            <h2 class="tagline">EXTERIOR DESIGN</h2>
            <p>The deck is open and easily maneuverable, with an absence of back stays – a layout used successfully on the Oceanis 30.1 and Oceanis 34.1. The generous double spreaders on the Oceanis 37.1 promise excellent performance. To retain easy handling shorthanded, all the rigging is brought back to the two aft winches. Only the halyards remain grouped around the coachroof. All the instruments, including a 7-inch plotter, can be found on the starboard helm console. The hull is flared with a rib giving it fluid lines below water and allowing it to achieve greater power and stability. It also improves the hull rigidity, controls the weight well, and provides greater volume inside the bow.</p>
         </div>
      </div>
   </div>
   <div class="ext-img-are" data-aos="zoom-in">
      <img src="https://nvsailing.com/wp-content/uploads/2024/02/fxdjkf.png" class="for_dec">
      <img src="https://nvsailing.com/wp-content/uploads/2024/02/xdfxffghg.png" class="for_fon">
   </div>
</section>
<section class="interior_section">
   <div class="container">
      <div class="row">
         <div class="direction_con" data-aos="zoom-in">
            <h2 class="tagline">INTERIOR DESIGN</h2>
            <p>The Oceanis 37.1 cruiser’s interior volume is remarkable. The generous space in the salon is nearly as large as a 40 footer. The salon is offset to port with a sofa for relaxing and a comfortable table for six, facing the lengthwise galley. The fore cabin has a breathtaking view of the horizon through two large portholes integrated in the hull side. In the two-bathroom version, a spacious double bed is positioned against the starboard hull. The stern has been optimized for comfort. In the standard version, there is a king-size double bed and a huge sail locker that can be accessed from inside or out.</p>
         </div>
         <div class="left-interior" data-aos="zoom-in">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/rounded-img.png" class="fr-dsktp">
            <img src="https://nvsailing.com/wp-content/uploads/2024/02/rsesszxgvkh.png" class="fr-phn">
            <div class="left-interior-con">
               <h2 class="tagline-tra">AVAILABLE IN 2 VERSIONS</h2>
               <p>In the standard version with a self-tacking jib, we've focused on making cruising easier. Meanwhile, sailors who enjoy lively performance boats will love the First Line version, with the square-top mainsail and Genoa.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="specification">
   <div class="container">
      <div class="row">
         <div class="col-md-12" data-aos="zoom-in">
            <h2 class="tagline">SPECIFICATIONS</h2>
            <div class="specification-main-are">
               <ul>
                  <li><span>Length Overall:</span> 39'2"</li>
                  <li><span>Beam Overall:</span> 12'10"</li>
                  <li><span>Light Displacement:</span> 15,128 LBS</li>
                  <li><span>Air Draft Max:</span> 54'6"</li>
                  <li><span>Draft Min:</span> 5'4"</li>
                  <li><span>Draft Max:</span> 6'11"</li>
                  <li><span>Air Draft:</span> 2.1 M</li>
                  <li><span>Fuel Capacity:</span> 34 US GAL</li>
                  <li><span>Water Capacity:</span> 94 US GAL</li>
                  <li><span>Max. Engine Power:</span> 40 HP</li>
                  <li><span>Propulsion:</span> VOILE</li>
                  <li><span>CE Certification:</span> A8/B10/C10</li>
               </ul>
               <div class="download-the-brochure">
                  <a href="https://nvsailing.com/wp-content/uploads/2024/02/V12841_Oceanis_37-1_EN_light.pdf" target="_blank">Download the brochure</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="deck_sec">
   <div class="container-fluid">
      <div class="swiper mySwiper-second">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="deck_slide">
                  <div class="row align-items-center">
                     <div class="col-md-4" data-aos="zoom-in">
                        <div class="deckimg_slide">
                           <img src="https://nvsailing.com/wp-content/uploads/2024/02/first-boat.png">
                        </div>
                     </div>
                     <div class="col-md-8" data-aos="zoom-in">
                        <div class="deck_con">
                            <ul>
                                <li>U-shaped saloon seat</li>
                                <li>Lengthwise fitted galley: fridge, icebox, sink, 2-ring hob, oven, storage and worktop</li>
                                <li>Owner cabin with double bed positioned to starboard</li>
                                <li>Two aft cabins with double berths</li>
                                <li>Two shower rooms with shower cubicle and head</li>
                                <li>Several hull portholes and coachroof portlights make the space naturally bright</li>
                            </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="deck_slide">
                  <div class="row align-items-center">
                     <div class="col-md-4" data-aos="zoom-in">
                        <div class="deckimg_slide">
                           <img src="https://nvsailing.com/wp-content/uploads/2024/02/second-boat.png">
                        </div>
                     </div>
                     <div class="col-md-8" data-aos="zoom-in">
                        <div class="deck_con">
                           <ul>
                                <li>U-shaped saloon seat</li>
                                <li>Lengthwise fitted galley: fridge, icebox, sink, 2-ring hob, oven, storage and worktop</li>
                                <li>Owner cabin with double bed positioned on the boat’s centerline</li>
                                <li>Aft cabin with double berth</li>
                                <li>Shower room with shower cubicle and head</li>
                                <li>Several hull portholes and coachroof portlights make the space naturally bright</li>
                            </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="deck_slide">
                  <div class="row align-items-center">
                     <div class="col-md-4" data-aos="zoom-in">
                        <div class="deckimg_slide">
                           <img src="https://nvsailing.com/wp-content/uploads/2024/02/third-boat.png">
                        </div>
                     </div>
                     <div class="col-md-8" data-aos="zoom-in">
                        <div class="deck_con">
                           <ul>
                               <li>U-shaped saloon seat</li>
                               <li>Lengthwise fitted galley: fridge, sink, two-ring hob, oven, storage and worktop</li>
                               <li>Owner cabin with double bed positioned on the boat’s centerline</li>
                               <li>Two aft cabins with double berths</li>
                               <li>Shower room with shower cubicle, washbasin cabinet and head</li>
                               <li>Several hull portholes and coachroof portlights make the space naturally bright</li>
                            </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>
<?php get_footer(); ?>