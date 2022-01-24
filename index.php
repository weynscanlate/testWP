<?php get_header(); ?>

<!-- slider section -->
<section class="slider_section position-relative">
    <div class="slider_bg_box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/slider-bg.jpg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
        <div class="col-md-6 ml-auto">
            <div class="detail-box">
                <h1>
                    <?php the_field('main_title'); ?>
                </h1>
                <p>
                    <?php the_field('main_subtitle'); ?>
                </p>
                <div>
                    <a href="" class="slider-link">
                        Book A Table
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end slider section -->

<!-- special section -->

<section class="spcl_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail_container">
                    <div class="detail-box">
                        <img src="<?php the_field('detail1_image'); ?>" alt="">
                        <h5>
                            <?php the_field('detail1_title'); ?>
                        </h5>
                        <p>
                            <?php the_field('detail1_text'); ?>
                        </p>
                    </div>
                    <div class="detail-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/s2.png" alt="">
                        <h5>
                            Self Roasted
                        </h5>
                        <p>
                            Minima nam cumque officiis placeat perferendis impedit, reprehenderit ratione aut exercitationem a, corrupti nesciunt velit.
                        </p>
                    </div>
                    <div class="detail-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/s3.png" alt="">
                        <h5>
                            15 Coffee Items
                        </h5>
                        <p>
                            Minima nam cumque officiis placeat perferendis impedit, reprehenderit ratione aut exercitationem a, corrupti nesciunt velit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 ml-auto">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/spcl-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end special section -->

<!-- about section -->

<section class="about_section  layout_padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-img.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?php echo get_the_title(26); ?>
                        </h2>
                    </div>
                    <p>
                        <?php echo get_the_excerpt(26); ?>
                    </p>
                    <a href="<?php echo home_url('about'); ?>">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="contact_bg_box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact-bg.jpg" alt="">
    </div>
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Book A Table
            </h2>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <?php echo do_shortcode("[wpc_reservation_form form_style ='2']"); ?>
                    <!-- <form action="#">
                        <div class="contact_form-container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Full Name" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Phone Number" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" placeholder="Number of People" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="date" placeholder="Select Date" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="time" placeholder="Select Time" />
                                </div>
                            </div>
                            <div class="">
                                <input type="text" placeholder="Aditional Note" class="message_input" />
                            </div>
                            <div class="btn-box ">
                                <button type="submit">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<!-- client section -->

<section class="client_section layout_padding">
    <div class="container ">
        <div class="heading_container heading_center">
            <h2>
                What says our clients
            </h2>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 10,
                    'post_type'      => 'reviews',
                ]);

                if ($myposts) {
                    foreach ($myposts as $key => $post) {
                        setup_postdata($post);
                        $class = ($key == 0) ? 'active' : '';
                ?>
                        <div class="carousel-item <?php echo $class; ?>">
                            <div class="box">
                                <div class="img-box">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="detail-box">
                                    <h4>
                                        <?php echo the_title(); ?>
                                    </h4>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    // Постов не найдено
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?>

            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<?php get_footer(); ?>