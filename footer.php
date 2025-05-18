<!-- Start Footer Area -->
<footer class="footer-area footer-eleven">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php if (is_active_sidebar('footer-col-1')) : ?>
                            <?php dynamic_sidebar('footer-col-1'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php if (is_active_sidebar('footer-col-2')) : ?>
                            <?php dynamic_sidebar('footer-col-2'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <?php if (is_active_sidebar('footer-col-3')) : ?>
                            <?php dynamic_sidebar('footer-col-3'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <p class="copyright-text text-center my-2">
                    <?php the_field('footer_copyright', 'option'); ?>
                </p>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
</footer>
<!--/ End Footer Area -->

<div class="made-in-ayroui mt-4">
    <a href="https://ayroui.com" target="_blank" rel="nofollow">
        <img style="width:220px" src="<?php echo get_template_directory_uri(); ?>/assets/images/ayroui.svg">
    </a>
</div>

<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<?php wp_footer(); ?>
</body>

</html>