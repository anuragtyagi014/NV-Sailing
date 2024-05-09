<?php 

/* 
Template Name: Swan showroom Template
*/

get_header();

?>

        <?php
        if (have_rows('main_banner_section_area')) :
            while (have_rows('main_banner_section_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
            <section class="mian-banner-sec">
                <img src="<?php echo get_sub_field('desktop_banner'); ?>" class="desk-ban" alt="">
                <img src="<?php echo get_sub_field('phone_banner'); ?>" class="phone-ban" alt="">
            </section>
        <?php endif; endwhile; endif; ?>

        <?php
        if (have_rows('logo_brand_section_area')) :
            while (have_rows('logo_brand_section_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
            <section class="logo-brand-sec">
                <div class="logo-sec-info">
                    <img src="<?php echo get_sub_field('logo'); ?>" alt="">
                    <hr>
                    <?php echo get_sub_field('heading'); ?>
                    <?php echo get_sub_field('paragraph'); ?>
                    <div class="models-name-list">
                        <ul>
                            <a href="#swan-scroll">
                                <li class="brand-1"><img src="<?php echo get_sub_field('logo_one'); ?>" alt=""></li>
                            </a>
                            <a href="#swan-maxi">
                                <li class="brand-2"><img src="<?php echo get_sub_field('logo_two'); ?>" alt=""></li>
                            </a>
                            <a href="#clubswan-scroll">
                                <li class="brand-3"><img src="<?php echo get_sub_field('logo_three'); ?>" alt=""></li>
                            </a>
                            <a href="#">
                                <li class="brand-4"><img src="<?php echo get_sub_field('logo_four'); ?>" alt=""></li>
                            </a>
                        </ul>
                    </div>
                </div>
            </section>
        <?php endif; endwhile; endif; ?>

        <?php
        if (have_rows('swan_list_section_area')) :
            while (have_rows('swan_list_section_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
            <section class="swan-list-sec" id="swan-maxi">
                <h2><?php echo get_sub_field('main_heading'); ?></h2>

                <div class="d-main-section d-antino-except-sec">
                    <div class="row f-c">
                        <div class="col-lg-6 col-md-12 except-cont-sec">
                            <div class="content-sec">
                                <p>The history of Swan Maxis begins early on, a few years after the establishment of Nautor. An expert client asked for a 17m Sparkman & Stephens. It was the year 1970, and the magnificent Swan 55 took shape. At the time, it was one of the largest yachts in the world to be produced in series and in fiberglass.</p>

                                <p>The Swan Maxi, from 88 to 128 feet, offers the highest expression of seaworthiness in any conditions combined with elegance, comfort, performance, style and modernity. The world class designers behind these beautiful yachts are Maestro Germàn Frers and for the interior design, Misa Poggi, while from the launch of Swan 88 and 108 projects, the exterior design sees the addition of Lucio Micheletti’s pen to the team.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="list-sec" >
                                <div class="main-image-circle">
                                    <a href="https://nvsailing.com/swan-128/" target="_blank">
                                        <img src="https://nvsailing.com/wp-content/uploads/2023/02/128img-1.png" alt=""></a>
                                </div>
                                <div class="d-feature">
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-main-section d-antino-except-sec">
                    <div class="row f-c">
                        <?php foreach(get_sub_field('swan_list_box') as $swan_list_box): ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="swan-list-each">
                                    <a href="<?php echo $swan_list_box['button_link']; ?>">
                                        <img src="<?php echo $swan_list_box['swan_image']; ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <hr class="sec">
            </section>
        <?php endif; endwhile; endif; ?>

    
        <?php
        if (have_rows('swan_list_section_area_two')) :
            while (have_rows('swan_list_section_area_two')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
            <section class="swan-list-sec" id="swan-scroll">
                <h2><?php echo get_sub_field('main_heading'); ?></h2>
                <p>The Swan Yachts division represents heritage, hand craftsmanship, products characterized by elegant and timeless lines that have made Nautor Swan an icon in the sailing world. The yachts are reliable against the sea hardships and the performing hulls guarantee both comfort and competitiveness during regattas. The design team is led by German Frers the renowned Argentinean yacht designer who started working with Nautor in the 80s.</p>

                <div class="d-main-section d-antino-except-sec">
                    <div class="row f-c">
                        <?php foreach(get_sub_field('swan_list_box') as $swan_list_boxtwo): ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="swan-list-each">
                                    <a href="<?php echo $swan_list_boxtwo['button_link']; ?>">
                                        <img src="<?php echo $swan_list_boxtwo['swan_image']; ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                 <hr class="sec">
            </section>
        <?php endif; endwhile; endif; ?>



       <!--  <?php
        // if (have_rows('section_divide_area_two')) :
        //    while (have_rows('section_divide_area_two')) : the_row();
        //        if (get_row_layout() == 'all_content') :
        ?>
            <section class="sec-divide-img">
                <img src="<?php // echo get_sub_field('image'); ?>" class="desk-ban" alt="">
                <img src="<?php // echo get_sub_field('mobile_image'); ?>" class="phone-ban" alt="">
            </section>
        <?php // endif; endwhile; endif; ?> -->



        <?php
        if (have_rows('swan_list_section_area_three')) :
            while (have_rows('swan_list_section_area_three')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
            <section class="swan-list-sec exc-last" id="clubswan-scroll swan-scroll">
                <h2><?php echo get_sub_field('main_heading'); ?></h2>
                <div class="d-main-section d-antino-except-sec">
                    <div class="row f-c">
                        <div class="col-lg-6 col-md-12 except-cont-sec">
                            <div class="content-sec">
                                <p>With the launch of ClubSwan yachts, Nautor marks the beginning of a new chapter in the Finnish boat builders’ remarkable history.</p>
                                <p>
                                ClubSwan Yachts is the high-performance division of Nautor Swan, offering a conceptual vision with the accent firmly upon the values of speed, technology and competitive sailing potential. Innovative solutions focused upon maximising these qualities are at the heart of ClubSwan Yacht development.</p>
                                <p>
                                The designer is Juan Kouyoumdijan, the French-Argentinean naval architect specialised in ocean racing yachts.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="list-sec" >
                                <div class="main-image-circle">
                                    <a href="https://nvsailing.com/clubswan-125/">
                                        <img src="https://nvsailing.com/wp-content/uploads/2023/02/125img.png" alt=""></a>
                                </div>
                                <div class="d-feature">
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-main-section d-antino-except-sec">
                    <div class="row f-c">
                        <?php foreach(get_sub_field('swan_list_boxs') as $swan_list_boxsthree): ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="swan-list-each">
                                    <a href="<?php echo $swan_list_boxsthree['button_link']; ?>">
                                        <img src="<?php echo $swan_list_boxsthree['image']; ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; endwhile; endif; ?>





<style type="text/css">
    
.d-main-section {
    margin:0;
    padding:0;
}
.content-sec {
    margin-bottom: 50px;
}
.d-main-section .row {
    justify-content: center;
    align-items: center;
}

.list-sec {
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: relative;
    justify-content: flex-end;
    margin-bottom: 70px;
}
.main-image-circle img {
    width: 100%;
}
.d-feature {
    position: absolute;
    bottom: 60px;
    color: white;
    left: 50%;
    transform: translate(-50%);
}
.d-main-section .col-lg-6.col-md-12 {
    padding: 0 24px;
    text-align: left;
}
.content-sec {
    margin-bottom: 70px;
}
.content-sec p {
    color: #0c2169;
    font-family: 'Avenir LT Std';
    text-align: left;
    font-size: 25px;
    margin-bottom: 40px;
}

.swan-list-each img {
    width: 100%;
}
.swan-list-each {
    padding-bottom:0px;
}

.logo-sec-info .models-name-list, .logo-sec-info p {
    padding: 0 110px;
}
section.logo-brand-sec {
    padding: 50px 160px;
}
.swan-list-each {
    margin-bottom: 40px !important;
}
section.swan-list-sec {
    padding: 30px 160px;
}

hr{
    width: 100%;
    height: 2px;
    background: #0C2169;
    margin-top: 48px;
}

#swan-scroll h2 {
    margin-bottom: 20px;
}
#swan-scroll p {
    font-size: 25px;
    text-align: center;
    margin-bottom: 70px;
}

.swan-list-sec.exc-last .swan-list-each:last-child {
    margin-bottom: 0px;
}



@media (min-width: 2100px){
section.logo-brand-sec .logo-sec-info>img {
    max-width: 220px;
}
section.logo-brand-sec .logo-sec-info h5 {
    font-size: 40px;
}
.content-sec p {
    font-size: 30px;
    margin-bottom: 40px;
}

section.logo-brand-sec .logo-sec-info p {
    font-size: 30px;
}
#swan-scroll p {
    font-size: 30px;
}


}

@media (min-width: 2300px){
section.logo-brand-sec {
    padding: 50px 260px;
}
section.swan-list-sec {
    padding: 30px 260px;
}
.swan-list-each {
    margin-bottom: 50px !important;
}
}

@media (min-width: 2800px){
.content-sec p {
    font-size: 33px;
    line-height: 55px;
}
section.logo-brand-sec .logo-sec-info p {
    font-size: 33px;
}
section.logo-brand-sec .logo-sec-info>img {
    max-width: 300px;
}
section.logo-brand-sec .logo-sec-info h5 {
    font-size: 50px;
}

#swan-scroll p {
    font-size: 33px;
    line-height: 53px;
}

}


@media (min-width: 2900px){

section.logo-brand-sec .logo-sec-info p {
    font-size: 43px;
}
#swan-scroll p {
    font-size: 43px;
    line-height: 70px !important;
}
.content-sec p {
    font-size: 43px;
    line-height: 70px !important;
}

}


@media (max-width: 1699px){

section.logo-brand-sec .logo-sec-info p {
    font-size: 22px;
    line-height: 30px;
}
.content-sec p {
    font-size: 22px;
    line-height: 30px;
}
#swan-scroll p {
    font-size: 22px;
    line-height: 30px;
}

}

@media (max-width: 1599px){

section.logo-brand-sec .logo-sec-info p {
    font-size: 22px;
}
.content-sec p {
    font-size: 22px;
    line-height: 30px;
}
#swan-scroll p {
    font-size: 22px;
    line-height: 30px;
}


}


@media (max-width: 1499px){
section.logo-brand-sec .logo-sec-info p {
    font-size: 19px;
}
.content-sec p {
    font-size: 19px;
}
#swan-scroll p {
    font-size: 19px;
    margin-bottom: 50px;
}

}

@media (max-width: 1399px){

.logo-sec-info .models-name-list, .logo-sec-info p {
    padding: 0 40px;
}

section.logo-brand-sec {
    padding: 50px 160px 0;
}
section.swan-list-sec {
    padding: 30px 80px;
}
section.logo-brand-sec {
    padding: 50px 80px 0;
}
.content-sec p {
    font-size: 19px;
}

#swan-scroll h2 {
    margin-bottom: 30px;
}

}



@media (max-width:768px){

.logo-sec-info .models-name-list, .logo-sec-info p {
    padding: 0 0px;
}

.content-sec p {
    font-size: 18px;
    text-align: center;
}
#swan-scroll p {
    font-size: 18px;
    text-align: center;
}

section.logo-brand-sec {
    padding: 50px 70px 0;
}
section.logo-brand-sec .logo-sec-info p {
    font-size: 19px;
}
section.swan-list-sec {
    padding: 30px 70px;
}
.list-sec {
    margin-bottom: 50px;
}
.swan-list-each {
    margin-bottom: 50px !important;
}

#swan-scroll {
    padding: 0px 70px;
}

}


@media (max-width:576px){

section.logo-brand-sec {
    padding: 50px 60px 0;
}
section.swan-list-sec {
    padding: 30px 30px;
}

.list-sec {
    margin-bottom: 40px;
}
.swan-list-each {
    margin-bottom: 40px !important;
}

section.logo-brand-sec .logo-sec-info p {
    font-size: 18px;
}

#swan-scroll {
    padding: 0px 30px;
}

}

@media (max-width:390px){

section.logo-brand-sec {
    padding: 50px 30px 0;
}

section.swan-list-sec {
    padding: 30px 30px;
}
.list-sec {
    margin-bottom: 20px;
}
.swan-list-each {
    margin-bottom: 20px !important;
}
#swan-scroll h2 {
    margin-bottom: 30px;
}
#swan-scroll {
    padding: 20px 30px;
}
#swan-scroll p {
    font-size: 18px;
}

}

</style>

<?php get_footer(); ?>