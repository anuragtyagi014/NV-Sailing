<?php /* Template Name: excess-showroom */
get_header();
?>

<?php
if (have_rows('hero_section_area')) :
    while (have_rows('hero_section_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="hero_section">
                <img src="<?= get_sub_field('desktop_image'); ?>" alt="" class="excess-desk" />
                <img src="<?= get_sub_field('phone_image'); ?>" alt="" class="excess-phone" />
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<section class="all-boats pb-5">
    <div class="container">
        <?php
        if (have_rows('main_category_image_area')) :
            while (have_rows('main_category_image_area')) : the_row();
                if (get_row_layout() == 'all_content') :
        ?>
                    <div class="main-category-img">
                        <img class="img-fluid" src="<?= get_sub_field('image'); ?>" alt="" />
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
        <div class="row m-0">
            <?php
            if (have_rows('all_boats_section_area')) :
                while (have_rows('all_boats_section_area')) : the_row();
                    if (get_row_layout() == 'all_content') :
                        foreach (get_sub_field('item_repeater') as $items) :
            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="item-wrapper" data-aos="zoom-in">
                                    <div class="swan-list-each">
                                        <a href="<?= !empty($items['link']) ? $items['link'] : "#"; ?>">
                                            <img src="<?= $items['image']; ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
            <?php
                        endforeach;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Main End -->

<style type="text/css">
    .all-boats .col-lg-6.mb-5 {
        padding: 0 24px;
        text-align: left;
    }

    .swan-list-each {
        margin-bottom: 40px !important;
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
</style>



<?php get_footer(); ?>