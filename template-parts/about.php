<?php
/* Template Name: about */
get_header();
?>
<?php
if (have_rows('top_banner_section')) :
    while (have_rows('top_banner_section')) : the_row();
        if (get_row_layout() == "all_content") :
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
        if (get_row_layout() == "all_content") :
?>
<section class="about-sec">
    <div class="about-img">
        <img src="<?= get_sub_field('desktop_image'); ?>" class="excess-desk" alt="">
        <img src="<?= get_sub_field('phone_image'); ?>" class="excess-phone" alt="">
    </div>
    <div class="about-cont">
        <h3><?= get_sub_field('heading'); ?></h3>
        <?= get_sub_field('para'); ?>
    </div>
</section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('phone_content_area')) :
    while (have_rows('phone_content_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
<section class="phone-cont">
    <div class="phone-info">
        <?= get_sub_field('para'); ?>
    </div>
</section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
get_footer();
?>