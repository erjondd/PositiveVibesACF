<?php

get_header();

/*
Template Name: Contact Template
*/

?>
<section class="another-hero">
    <img src="<?php echo get_field('hero_image'); ?>"
        alt="<?php bloginfo('name'); ?>" class="hero-image">
    <div class="container">
        <div class="title module"><?php echo get_field('hero_title'); ?></div>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="left module">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact2.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6633.73987427404!2d150.9727149470524!3d-33.76402667380539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBuilding%2032%2C%20Balcombe%20Heights%20Estate%2C%2092%20Seven%20Hills%20Road%2C%E2%80%A8Baulkham%20Hills%20NSW%2C%202153.!5e0!3m2!1sen!2s!4v1759344036624!5m2!1sen!2s" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="right module">
            <div class="subtitle">
                Let’s Talk
            </div>
            <div class="title">
                Contact the Positive<br /> Vibes Foundation
            </div>
            <div class="all-infos">
                <div class="one-info">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location.png"
                            alt="<?php bloginfo('name'); ?>">
                    </span>
                    <div class="infos">
                        <div class="info-1">
                            Visit Us
                        </div>
                        <div class="info-2">
                            Building 32/92 Seven Hills Rd, Baulkham Hills NSW 2153, Australia

                        </div>
                    </div>
                </div>
                <div class="one-info">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/email.png"
                            alt="<?php bloginfo('name'); ?>">
                    </span>
                    <div class="infos">
                        <div class="info-1">
                            Mail Us
                        </div>
                        <div class="info-2">
                            info@positivevibes.org.au

                        </div>
                    </div>
                </div>
                <div class="one-info">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"
                            alt="<?php bloginfo('name'); ?>">
                    </span>
                    <div class="infos">
                        <div class="info-1">
                            Call Us
                        </div>
                        <div class="info-2">
                            +61 408 549 530
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form module">
    <div class="container">
        <div class="title ">
            Send Us A Message
        </div>
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
    </div>
</section>
<?php
get_footer();
?>