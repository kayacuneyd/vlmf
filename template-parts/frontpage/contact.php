<?php ?>

<!-- ========================= contact-section start ========================= -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4><?php the_field('contact_title'); ?></h4>
                                    <p><?php the_field('contact_phone'); ?></p>
                                    <p><?php the_field('contact_email'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4><?php the_field('address_title'); ?></h4>
                                    <p><?php the_field('address_line1'); ?></p>
                                    <p><?php the_field('address_line2'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-alarm-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4><?php the_field('schedule_title'); ?></h4>
                                    <p><?php the_field('schedule_line1'); ?></p>
                                    <p><?php the_field('schedule_line2'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-xl-10 col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <span> Get in Touch </span>
                                <h2>
                                    Ready to Get Started
                                </h2>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    quiblanditiis praesentium
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php echo do_shortcode('[vlmf_contact_form type="full"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= contact-section end ========================= -->