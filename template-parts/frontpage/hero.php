<?php ?>

<!-- Start header Area -->
<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1><?php the_field('hero_title'); ?></h1>
                    <p><?php the_field('hero_desc'); ?></p>
                    <div class="button">
                        <a href="<?php the_field('hero_button_link'); ?>" class="btn primary-btn"><?php the_field('hero_button_text'); ?></a>
                        <a href="<?php the_field('hero_video_link'); ?>" class="glightbox video-button">
                            <span class="btn icon-btn rounded-full">
                                <i class="lni lni-play"></i>
                            </span>
                            <span class="text"><?php the_field('hero_video_label'); ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    <?php $hero_img = get_field('hero_image'); ?>
                    <?php if ($hero_img): ?>
                        <img src="<?php echo esc_url($hero_img['url']); ?>" alt="<?php echo esc_attr($hero_img['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End header Area -->