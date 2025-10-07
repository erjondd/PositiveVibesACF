<?php

get_header();

/*
Template Name: the hills Template
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
            The Hills Women’s Shed
        </div>
        <div class="subtext module">
            Every Thursday from 11am to 1pm
        </div>
        <div class="image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hills.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="text module">
            Established in February 2018, The Hills Women’s Shed is a safe, welcoming and inclusive community space for women in the Baulkham Hills.
            Empowering women to make deep connections, look after their wellbeing, share stories and learn new skills, The Hills Women’s Shed hosts a number of activities across the year.
            These include crafting workshops such as screen printing, broken pots with succulents, macrame, making face masks, glass painting, canvas painting, intuitive painting, creating whimsical gardens, constructing mosaic coasters, and more.
            The Hills Women’s Shed also hosts cooking classes, including making dog treats, and features talks on nutrition and gardening, as well as life skill workshops such as learning to change a tyre and check your car’s oil.
            The Hills Women’s Shed also opened an op shop at Balcombe Heights during COVID, and has held garage sales, and hosted International Women’s Day luncheons.
        </div>


    </div>
</section>

<section class="uphill">
    <div class="container">
        <div class="left-u">
            <div class="title-u module">
                To check out the calendar of events hosted at The Hills Women’s Shed, head over to Facebook.
                <br /><br />
                You can also reach out to The Hills Women’s Shed on:
            </div>
            <div class="infos module">
                <div class="one-info">
                    <div class="span">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <a href="tel:0408549530">
                        0408 549 530
                    </a>
                </div>

                <div class="one-info module">
                    <div class="span">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <a href="mailto:thehillswomensshed@positivevibes.org.au">
                        thehillswomensshed@positivevibes.org.au
                    </a>
                </div>
                <div class="one-info module">
                    <div class="span">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    Positive Vibes - The Hills Women's Shed
                </div>
            </div>
        </div>
        <div class="right-u module">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.9052310048132!2d150.97779207643606!3d-33.763114713593744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a23c5b36af5b%3A0xc708ded623169e25!2sStamford%20Hall%20Balcombe%20Heights!5e0!3m2!1sen!2s!4v1759484490114!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<section class="hill-images">
    <div class="container">
        <div class="one-hill-image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/activity1.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="one-hill-image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/activity2.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="one-hill-image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/activity3.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>
<?php
get_footer();
?>