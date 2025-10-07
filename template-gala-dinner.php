<?php

get_header();

/*
Template Name: Gala Dinner Template
*/

?>
<section class="another-hero">
    <img src="<?php echo get_field('hero_image'); ?>"
        alt="<?php bloginfo('name'); ?>" class="hero-image">
    <div class="container">
        <div class="title module"><?php echo get_field('hero_title'); ?></div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="title module">
            Volunteering Opportunities
        </div>
        <div class="subtext module">
            Saturday 12 October 2024
        </div>
        <div class="image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/video.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="text module">
            We recently celebrated a decade of community impact at the 10th Anniversary Gala Dinner of the Positive Vibes Foundation, held in a night filled with elegance, entertainment, and heartfelt connections.

            The event was more than just a gathering, it was a reflection of the incredible journey and achievements of the foundation over the past 10 years. The night kicked off with a dinner, bringing together supporters, volunteers, and partners to celebrate the foundation’s milestones and future aspirations.

            A highlight of the evening was the auction and raffle tickets, where attendees had the chance to win exclusive prizes while contributing to the continued success of our initiatives. The excitement in the room was palpable as generous bids came in, all in the spirit of giving back to the community.
        </div>


    </div>
</section>
<div class="gallery">
    <div class="container">
        <div class="all-images module">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gala1.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gala2.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gala3.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gala4.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gala5.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gala6.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
        <div class="more-text module">
            Guests enjoyed a variety of entertainment throughout the evening, including live music, art work, and speeches from inspiring individuals. The gala provided a unique opportunity for networking, with guests connecting over shared values and a common goal of making a positive difference in the world.

            One of the most memorable parts of the night was a powerful and touching talk from rugby league legend Timana Tahu, who shared his personal journey and life experiences. His story of resilience, overcoming adversity, and commitment to making an impact deeply resonated with everyone in the room, making it a truly wonderful life experience.
        </div>
    </div>
</div>
<?php
get_footer();
?>