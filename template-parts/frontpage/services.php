<?php ?>

<!-- ===== service-area start ===== -->
<section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6><?php the_field('services_subtitle'); ?></h6>
                        <h2 class="fw-bold"><?php the_field('services_title'); ?></h2>
                        <p><?php the_field('services_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        <div class="row">
            <?php
            $services_query = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 6
            ));
            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    $icon = get_field('service_icon');
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($icon); ?>"></i>
                            </div>
                            <div class="service-content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>
<!-- ===== service-area end ===== -->