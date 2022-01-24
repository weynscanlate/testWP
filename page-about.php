<?php get_header('page'); ?>

<!-- about section -->

<section class="about_section  layout_padding">
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
                            <?php the_title(); ?>
                        </h2>
                    </div>
                    <?php the_content(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<?php get_footer(); ?>