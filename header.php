<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css?id=<?php echo rand() ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom.css?id=<?php echo rand() ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slider.css?id=<?php echo rand() ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom-css2.css?id=<?php echo rand() ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/new-custom.css?id=<?php echo rand() ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/lightbox.min.css?id=<?php echo rand() ?>" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css?id=<?php // echo rand()
                                                                                                    ?>" /> -->

</head>


<style>
    /* hiding heater text showroom */
    .tab-pane .tab-in-are .canvas-right-cont h5 {
        display: none;
    }

    .added-link-tab {
        font-weight: 900;
        color: #0c2169;
        font-size: 18px;
        font-family: 'Avenir';
        margin-bottom: 5px;
        display: block;
        text-decoration: none;
    }

    .added-link-tab:hover {
        color: #0c2169;
        text-decoration: none;
    }

    #tab-4 .canvas-right-cont ul {
        padding-bottom: 10px;
        margin-bottom: 0;
    }




    @media (min-width: 2100px) {
        .added-link-tab {
            font-size: 22px;
            margin-bottom: 10px;
        }
    }

    @media (min-width: 2300px) {
        .added-link-tab {
            font-size: 26px;
            margin-bottom: 10px;
        }
    }

    @media (min-width: 2500px) {
        .added-link-tab {
            font-size: 27px;
            margin-bottom: 10px;
        }
    }

    @media (min-width: 2900px) {
        .added-link-tab {
            font-size: 31px;
            margin-bottom: 15px;
        }
    }

    @media (max-width: 1799px) {
        .added-link-tab {
            font-size: 16px;
        }
    }

    @media (max-width: 1699px) {
        .added-link-tab {
            font-size: 15px;
        }
    }

    @media (max-width: 1599px) {
        .added-link-tab {
            font-size: 14px;
            margin-bottom: 0;
        }
    }

    @media (max-width: 1499px) {
        .added-link-tab {
            font-size: 14px;
            margin-bottom: 2px;
        }
    }

    @media (max-width: 1399px) {
        .added-link-tab {
            font-size: 14px;
            margin-bottom: 2px;
        }
    }

    @media (max-width: 1340px) {
        .added-link-tab {
            font-size: 13px;
            margin-bottom: 2px;
        }
    }
</style>

<body <?php body_class(); ?>>

    <header class="main-header">
        <div class="main-head-in">
            <div class="main-logo">
                <a href="<?= site_url(); ?>">
                    <img src="<?= the_field('logo', 'options'); ?>" alt="" />
                </a>
            </div>
            <div class="header-desk-tgl dsk">
                <div class="tgl-ico-btn">
                    <span></span>
                </div>
            </div>
            <div class="header-desk-tgl mob">
                <div class="hdr-mob-left">
                    <div class="canvas-head-cross mobile">
                        <span></span>
                    </div>
                    <div class="tgl-ico-btn">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-header">
            <div class="canvas-head-cross">
                <span></span>
                <h6><?= the_field('close_text', 'option'); ?></h6>
            </div>
            <div class="tgl-ico-btn tgl-ico-btn2">
                <h6><?= the_field('show_room_text', 'option'); ?></h6>
            </div>
            <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => '')); ?>
        </div>
    </header>

    <div class="desk-show-room-are">
        <div class="canvas-head">
            <div class="canvas-head-in">
                <div class="canvas-hed-logo">
                    <a href="<?= site_url(); ?>">
                        <img src="<?= the_field('logo', 'options'); ?>" alt="" />
                    </a>
                </div>
                <div class="canvas-head-cross">
                    <h6><?= the_field('close_text', 'option'); ?></h6>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="canvas-cont">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <?php
                    $link_count = 1;
                    if (have_rows('mobile_showroom_area', 'option')) :
                        while (have_rows('mobile_showroom_area', 'option')) : the_row();
                            if (get_row_layout() == 'all_content') :
                                foreach (get_sub_field('list_menu') as $menu_image) :

                    ?>
                                    <a class="nav-item nav-link" id="nav-tab-<?= $link_count; ?>" data-toggle="tab" href="#tab-<?= $link_count; ?>" role="tab" aria-controls="tab-<?= $link_count; ?>" aria-selected="<?= $link_count == 1 ? 'true' : 'false'; ?>"><img src="<?= $menu_image['menu_image']; ?>"></a>
                    <?php
                                    $link_count++;
                                endforeach;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_1', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_1', 'option'); ?>"><?= the_field('show_room_tab_list_text_1', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-2'); ?>
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_2', 'option'); ?>"><?= the_field('show_room_tab_list_text_2', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-6'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_2', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_3', 'option'); ?>"><?= the_field('show_room_tab_list_text_3', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-4'); ?>
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_8', 'option'); ?>"><?= the_field('show_room_tab_list_text_8', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-5'); ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_3', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_4', 'option'); ?>"><?= the_field('show_room_tab_list_text_4', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-3'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="nav-tab-4">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_4', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_5', 'option'); ?>"><?= the_field('show_room_tab_list_text_5', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-8'); ?>
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_6', 'option'); ?>"><?= the_field('show_room_tab_list_text_6', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-9'); ?>
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_7', 'option'); ?>"><?= the_field('show_room_tab_list_text_7', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-7'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="nav-tab-5">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_5', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="nav-tab-6">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_6', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_10', 'option'); ?>"><?= the_field('show_room_tab_list_text_10', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-10'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="nav-tab-7">
                    <div class="tab-in-are">
                        <div class="head-menu-image">
                            <img src="<?= the_field('tab_image_7', 'option'); ?>">
                        </div>
                        <div class="canvas-right-cont">
                            <a class="added-link-tab" href="<?= the_field('show_room_tab_heding_link_9', 'option'); ?>"><?= the_field('show_room_tab_list_text_9', 'option'); ?></a>
                            <?php dynamic_sidebar('sidebar-11'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (have_rows('mobile_showroom_area', 'option')) :
        while (have_rows('mobile_showroom_area', 'option')) : the_row();
            if (get_row_layout() == 'all_content') :

    ?>
                <div class="mobile-showroom">
                    <div class="shroom-img">
                        <img src="<?= get_sub_field('showroom_image'); ?>">
                    </div>
                    <div class="showroom-logo">
                        <ul>
                            <?php foreach (get_sub_field('list_menu') as $mobile_menu) : ?>
                                <li><a href="<?= $mobile_menu['menu_link']; ?>"><img src="<?= $mobile_menu['menu_image']; ?>"></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
    <?php
            endif;
        endwhile;
    endif;
    ?>


    <!-- Desktop Header Ends -->