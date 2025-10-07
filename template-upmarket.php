<?php

get_header();

/*
Template Name: upmarket Template
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
            The Positive Vibes Foundation at UPmarket
        </div>
        <div class="subtext module">
            Every 4th Sunday at Castle Hill Showground
        </div>

        <div class="text module">
            Partnering with The Hills UPmarket, we have a promotional stall at the monthly market where family and friends can mingle in a relaxed environment.

            This collaboration is part of an initiative to actively promote positive mental health within the community, while also demonstrating our passion for dog companionship as a way to improve mental wellbeing.

            Each month the stall is staffed by mental health professionals who help spark the conversation around positive mental health, while also answering any questions market visitors might have.
        </div>
        <div class="upmarket-images">
            <div class="one-market-image module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/upmarket1.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="one-market-image module">
                <img src="<?php echo get_template_directory_uri(); ?>/images/upmarket2.png"
                    alt="<?php bloginfo('name'); ?>">
            </div>
        </div>

    </div>
</section>
<section class="upmarket-map">
    <div class="container">


        <div class="left module">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.3988532280873!2d150.98622179999998!3d-33.72450099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a18ab22b515d%3A0xc4d88fa80ca48e9e!2sThe%20Hills%20UPmarket!5e0!3m2!1sen!2s!4v1759476137263!5m2!1sen!2s" width="100%" height="544px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="right">
            <div class="title module">
                UPmarket is held on the fourth Sunday of each month at The Terraces at the Castle Hill Showground and features more than 60 quality market stalls. Come visit us!
            </div>
            <div class="button module">
                <a href="">
                    Check Website
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>