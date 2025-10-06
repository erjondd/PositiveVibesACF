<?php

get_header();

/*
Template Name: paw Template
*/

?>
<section class="another-hero">
    <img src="<?php echo get_field('hero_image'); ?>"
        alt="<?php bloginfo('name'); ?>" class="hero-image">
    <div class="container">
        <div class="title"><?php echo get_field('hero_title'); ?></div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="title">
            Paw Visits
        </div>
        <div class="subtext">
            Visits take place every 1st and 3rd Saturday each month at various care homes.
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/paw.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="text">
            The Positive Vibes Paw Visits program sees volunteers stop by various aged care homes with their furry pals in tow, putting a smile on residents’ faces.

            The program has seen great success as seniors have loved cuddling, patting and chatting with the doggie friends, working to improve mental health outcomes in these homes.

            We regularly visit various care homes in Glenhaven, Oatlands and North Parramatta and are looking to expand our program to create further positive impact within the community.
        </div>


    </div>
</section>
<section class="paw">
    <div class="container">
        <div class="title">
            If you are interested in volunteering and can spare 1-2 Saturday mornings a month please get in touch.
            <br /><br />
            If you would like the dogs to visit your aged care home, please get in touch.
        </div>
        <div class="subtitle">
            Visits take place every 1st and 3rd Saturdays of the month.
            Research shows dogs can improve both mental and physical health in humans.*
        </div>
        <div class="button">
            <a href="">
                EXPRESS INTEREST
            </a>
        </div>
    </div>
</section>
<section class="just-a-text">
    <div class="container">
        *Statistics from the 2020-2021 National Study of Mental Health and Wellbeing from the Australian Bureau of Statistics.
    </div>
</section>
<?php
get_footer();
?>