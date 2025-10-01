<?php

get_header();

/*
Template Name: Homepage Template
*/



?>

<section class="hero">
    <div class="container">
        <div class="subtitle">
            Sparking conversations to improve lives
        </div>
        <div class="title">
            Promoting positive mental health
        </div>
        <div class="button">
            <a href="">
                GET INVOLVED
            </a>
        </div>
    </div>
</section>
<section class="logos">
    <div class="container">
        <div class="all-logos">
            <div class="one-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo3.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo4.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo5.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo6.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>