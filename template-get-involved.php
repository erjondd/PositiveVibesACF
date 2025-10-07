<?php

get_header();

/*
Template Name: Get Involved Template
*/

?>
<section class="another-hero">
    <img src="<?php echo get_field('hero_image'); ?>"
        alt="<?php bloginfo('name'); ?>" class="hero-image">
    <div class="container">
        <div class="title module"><?php echo get_field('hero_title'); ?></div>
    </div>
</section>
<section class="get-involved">
    <div class="container">
        <div class="title module">
            Volunteering Opportunities
        </div>
        <div class="subtitle module">
            Join us
        </div>
        <div class="get-involved-text module">
            Would you like to get involved with the Positive Vibes Foundation?<br /> Here’s how you can join us.
        </div>
        <div class="all-involved">
            <div class="one-involved">
                <div class="one-image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/inv1.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="one-title module">
                    We are always on the lookout for more volunteers to join the Paw Visits program, visiting aged care homes with our furry friends.
                </div>
                <div class="one-link module">
                    <a href="<?php echo get_permalink(get_page_by_path('vulentar')); ?>">
                        Become Volunteer
                        <span><img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
            <div class="one-involved">
                <div class="one-image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/inv2.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="one-title module">
                    Would you like our Paw Visits program to visit your aged care home? We travel to residences throughout the Hills area.
                </div>
                <div class="one-link module">
                    <a href="<?php echo get_permalink(get_page_by_path('paw-visits')); ?>">
                        REQUEST A PAW VISIT
                        <span><img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
            <div class="one-involved">
                <div class="one-image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/inv3.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="one-title module">
                    If you are looking for a welcoming, inclusive and safe space to make new friends, then you’ll find it at the Hills Women’s Shed. Come join us for one of our community events.
                </div>
                <div class="one-link module">
                    <a href="<?php echo get_permalink(get_page_by_path('the-hills-womens-shed')); ?>">
                        JOIN WOMEN’S SHED
                        <span><img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
            <div class="one-involved">
                <div class="one-image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/inv4.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="one-title module">
                    Mental health awareness within schools is important for creating a healthy and safe community. We hold regular forums for high school students, encouraging open discussions around mental health.
                </div>
                <div class="one-link module">
                    <a href="<?php echo get_permalink(get_page_by_path('community-engagement')); ?>">
                        SEND STUDENTS
                        <span><img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
    <div class="container module">
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 2"]'); ?>
    </div>
<?php
get_footer();
?>