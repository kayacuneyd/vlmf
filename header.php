<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/svg" />

    <!--====== Title ======-->
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body>

    <!--====== NAVBAR NINE PART START ======-->

    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else { ?>
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" />
                            </a>
                        <?php } ?>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
                            aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu',
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse sub-menu-bar',
                                'container_id' => 'navbarNine',
                                'menu_class' => 'navbar-nav me-auto',
                                'fallback_cb' => false
                            ));
                            ?>
                        </div>

                        <div class="navbar-btn d-none d-lg-inline-block">
                            <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== NAVBAR NINE PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->

    <div class="sidebar-left">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo">
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else { ?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" />
                    </a>
                <?php } ?>
            </div>
            <?php if (is_active_sidebar('sidebar-description')) : ?>
                <div class="sidebar-description">
                    <?php dynamic_sidebar('sidebar-description'); ?>
                </div>
            <?php endif; ?>
            <!-- logo -->
            <?php if (is_active_sidebar('sidebar-left')) : ?>
                <div class="sidebar-menu">
                    <?php dynamic_sidebar('sidebar-left'); ?>
                </div>
            <?php endif; ?>
            <!-- menu -->
            <div class="sidebar-social align-items-center justify-content-center">
                <h5 class="social-title">Follow Us on Social Media</h5>
                <?php if (is_active_sidebar('sidebar-social')) : ?>
                    <?php dynamic_sidebar('sidebar-social'); ?>
                <?php endif; ?>
            </div>
            <!-- sidebar social -->
        </div>
        <!-- content -->
    </div>
    <div class="overlay-left"></div>

    <!--====== SIDEBAR PART ENDS ======-->