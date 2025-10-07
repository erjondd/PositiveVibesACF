<?php

get_header();

/*
Template Name: Gallery Template
*/

?>
<section class="another-hero">
    <img src="<?php echo get_field('hero_image'); ?>"
        alt="<?php bloginfo('name'); ?>" class="hero-image">
    <div class="container">
        <div class="title  module"><?php echo get_field('hero_title'); ?></div>
    </div>
</section>
<section class="gallery">
    <div class="container">
        <div class="title  module">
            The Hills Women’s Shed
        </div>
        <div class="subtitle  module">
            Join a community of likeminded women, getting involved in crafting workshops, social events and gardening projects. Make new friends and give back through this female-empowered collective.
        </div>
        <div class="tags">
            <div class="one-tag blue  module">
                THE HILLS WOMEN’S SHED
            </div>
            <div class="one-tag module">
                THE YOUNG HEALTHY MINDS FORUM
            </div>
            <div class="one-tag module">
                PAW VISITS
            </div>
            <div class="one-tag module">
                ANNUAL GALA DINNER
            </div>
            <div class="one-tag module">
                THE POSITIVE VIBES FOUNDATION AT UPMARKET
            </div>
            <div class="one-tag module">
                LIBRARY TALKS
            </div>
            <div class="one-tag module">
                CASTLE HILL ROTATORY CLUB’S CROSS COUNTY CHALLENGE
            </div>
            <div class="one-tag module">
                BUNNINGS CHARITY CHRISTMAS NIGHT MARKET
            </div>
            <div class="one-tag module">
                MULTICULTURAL MENTAL HEALTH FORUM
            </div>
        </div>
        <div class="pictures">
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery1.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery2.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery3.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery4.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery5.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery6.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery7.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery8.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-picture module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery9.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>