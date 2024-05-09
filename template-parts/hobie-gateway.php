<?php
   /* 
   Template Name: Hobie Gateway Template
   */
   
   get_header();
   
   ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
   .page-template-hobie-gateway .bann-btm-right {
   width: 360px;
   margin-top: -140px;
   }
   .page-template-hobie-gateway section.top-bann-sec img {
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

.page-template-hobie-gateway .bann-btm-right {
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

.page-template-hobie-gateway .bann-btm-right {
    width: 530px;
}

}

@media(min-width: 1440px) and (max-width: 1680px){
    .page-template-hobie-gateway .bann-btm-right {
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
    .page-template-hobie-gateway .bann-btm-right {
            padding-left: 30px;
        }

        section.spec-sec-excss .spec-sec-ex .spec-box .spec-line ul li {
    font-size: 20px;

}

section.spec-sec-excss .spec-sec-ex {
    padding: 60px 60px 30px;
}

  .page-template-hobie-gateway .bann-btm-left br {
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

@media(max-width: 992px){

.mirage_page h3 {
    font-size: 80px;
    text-align: center;
    line-height: 0.4;
}

.page-template-hobie-gateway .bann-btm-right {
    padding-left: 0px !important;
}

.page-template-hobie-gateway .bann-btm-right {
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
<section class="top-bann-sec">
   <div class="img-are">
      <img src="https://nvsailing.com/wp-content/uploads/2023/06/Intersection-3-4.png" class="excess-desk" alt="img">
      <img src="https://nvsailing.com/wp-content/uploads/2023/06/Scroll-Group-5-1.png" class="excess-phone" alt="img">
   </div>
   <div class="mirage_page">
      <h3 class="head_page_mirage">GETAWAY</h3>
   </div>
</section>
<section class="bann-btm-sec">
   <div class="container-fluid">
      <div class="row-in">
         <div class="bann-btm-left new_mirage">
            <h1 class="fon_none">GETAWAY</h1>
            <p>Take the party on the water with the Hobie Getaway. When the agenda involves sailing with friends and family, the Hobie Getaway is a sure-fire ticket to multihull fun. </p>
            <p>Stir in the boat’s performance-minded symmetrically shaped hulls, its efficient, mainsail-driven sailplan and its roller-furling jib and you quickly discover a sailing pedigree that leaves “party boats” stalled out. With the Getaway, there’s no worry about impromptu raft-ups, beaching or docking; its impact-resistant, rotomolded polyethylene hull provides years’ worth of family fun. But most impressive is the Getaway’s awesome value—expect great times for a modest price tag.</p>
         </div>
         <div class="bann-btm-right" data-aos="fade-up">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/Group-606.png" class="excess-desk" alt="">
            <!-- <img src="https://nvsailing.com/wp-content/uploads/2023/06/Group-616.png" class="excess-phone" alt=""> -->
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/hobie-getaway-head-img.png" class="excess-phone" alt="">
         </div>
      </div>
   </div>
</section>

<section class="main-img-slider desk">
   <div class="container-fluid">
      <div class="vrtcl-slider vrtcl-sliders">
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/1-getaway.png">
         </div>
        <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/2-getaway.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/3-getaway.png">
         </div>
        <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/1-getaway.png">
         </div>
        <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/2-getaway.png">
         </div>
         <div class="item">
            <img src="https://nvsailing.com/wp-content/uploads/2023/06/3-getaway.png">
         </div>
      </div>
   </div>
</section>

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

<section class="spec-sec-excss bann-btm-sec new_sec_mirage">
   <div class="container-fluid">
        <div class="sec-head">
      <h2>TECHNICAL SPECS</h2>
   </div>
   <div class="spec-sec-ex new_mirage_tech">
      <div class="spec-box">
         <div class="spec-line">
            <ul>
                <div class="row">
                    <div class="col-md-6">
                           <li><span>Crew: </span> 1-6 (US) \ 3-4 (EU)</li>
                           <li><span>Length:  </span> 17’ / 5.18 m</li>
                           <li><span>Beam:</span> 7’ 8” / 2.34 m</li>
                           <li><span>Capacity: </span> 1000 lbs/453 kg (US) / 661 lbs</li>
                           <li><span>Weight: </span> 390lbs / 176 kg </li>
                           <li><span>Draft w/  Rudder Up: </span> 10” / 25.4 cm</li>
                           <li><span>Mast Length:  </span> 25’ / 7.62 m</li>
                           <li><span>Total Sail Area:   </span> 180 ft² / 17 m²</li>
                            <li><span>Hull Construction: </span>  Rotomolded Polyethylene</li>

                    </div>

                    <div class="col-md-6">
                           <li><span>Total Sail Area:  </span> 180 ft² / 17 m²</li>
                           <li><span>Hull Construction:</span> Rotomolded Polyethylene</li>
                           <li><span>Height From Floor to Bow: </span> 29.5” / 74.93 cm</li>
                           <li><span>Height From Floor to Stern: </span>17.5” / 44.45 cm </li>
                           <li><span>Color Options </span> </li>
                           <li><span>*All colors, graphics and specifications of all <br>models are subject to change without notice.</span></li>
                    </div>

                </div>
              
               
            </ul>
         </div>
      </div>
   </div>

   </div>
</section>

<section class="ft-bt_mirage bann-btm-sec">
    <div class="container-fluid">
                <div class="sec-head">
                    <h2 class="tagline">Uncommon Discoveries</h2>
                    <p>Explore the pages of our website to learn all about the yachts shaping today’s modern boating landscape. Create your <br>dream… live your best life… the open waters await you. </p>
                </div>
    </div>
</section>
<?php get_footer(); ?>