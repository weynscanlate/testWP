<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="<? echo get_template_directory_uri(); ?>/images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <?php wp_head(); ?>
</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <span>
                        <?php echo get_bloginfo('sitename'); ?>
                    </span>
                </a>
                <div class="" id="">

                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                            <span class="s-1"> </span>
                            <span class="s-2"> </span>
                            <span class="s-3"> </span>
                        </button>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a href="<?php echo home_url('home'); ?>">Home</a>
                                <a href="<?php echo home_url('about'); ?>">About</a>
                                <a href="<?php echo home_url('book'); ?>">Book Table</a>
                                <a href="<?php echo home_url('testimonial'); ?>">Testimonial</a>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->