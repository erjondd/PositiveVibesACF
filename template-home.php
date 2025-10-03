<?php

get_header();

/*
Template Name: Homepage Template
*/



?>

<section class="hero">
    <img src="<?php echo get_field('hero_image'); ?>" 
        alt="<?php bloginfo('name'); ?>" class="hero-imagee">
    <div class="container">
        <div class="subtitle">
            <?php the_field('hero_title'); ?>
        </div>
        <div class="title">
            <?php the_field('hero_subtitle'); ?>
        </div>
        <div class="button">
            <a href="<?php the_field('hero_button_URL'); ?>">
                <?php the_field('hero_button_text'); ?>
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
<section class="under-hero">
    <div class="container">
        <div class="top">
            <div class="one-rect">
                <div class="title">
                    42.9% of people aged 16–85 years
                    positive mental health
                </div>
                <div class="subtitle">
                    had experienced a mental disorder at some time in their life
                </div>
            </div>
            <div class="one-rect">
                <div class="title">
                    21.5% of people
                </div>
                <div class="subtitle">
                    had a 12-month mental disorder
                </div>
            </div>
            <div class="one-rect">
                <div class="title">
                    17.2% of people aged 16–85 years
                </div>
                <div class="subtitle">
                    had a 12-month anxiety disorder
                </div>
            </div>
            <div class="one-rect">
                <div class="title">
                    38.8% of people aged 16–24 years
                </div>
                <div class="subtitle">
                    had a 12-month mental disorder
                </div>
            </div>
        </div>
        <div class="bottom">
            *Statistics from the 2020-2022 National Study of Mental Health and Wellbeing from the Australian Bureau of Statistics.
        </div>
    </div>
</section>
<section class="impact">
    <div class="container">
        <div class="top">
            <div class="title">Our impact on the community</div>
            <div class="our-blogs">
                <div class="one-blog">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog1.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="right">
                        <div class="title">
                            Communities, connections and conversations
                        </div>
                        <div class="description">
                            We collaborate with the community to raise awareness and encourage open dialogue around mental health.
                        </div>
                    </div>
                </div>
                <div class="one-blog">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog2.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="right">
                        <div class="title">
                            Creating kinship within the community
                        </div>
                        <div class="description">
                            Through various activities and community partnerships, we work with young and old to deepen connections and provide mental health guidance.
                        </div>
                    </div>
                </div>
                <div class="one-blog">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog3.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="right">
                        <div class="title">
                            Local community involvement​
                        </div>
                        <div class="description">
                            We run a number of different programs within the Baulkham Hills and surrounding areas in New South Wales.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="one-rect">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p1.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title">
                    PAW VISITS
                </div>
                <div class="subtitle">
                    Making the elderly smile with dog-friendly visits to aged care homes.
                </div>
                <div class="link">
                    <a href="">
                        LEARN MORE <span> <img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
            <div class="one-rect">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p2.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title">
                    THE HILLS WOMEN’S SHED
                </div>
                <div class="subtitle">
                    Embracing deeper social connections through regular community meet-ups and female-empowered activities.
                </div>
                <div class="link">
                    <a href="">
                        LEARN MORE <span> <img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
            <div class="one-rect">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p3.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title">
                    YOUNG HEALTHY MINDS
                </div>
                <div class="subtitle">
                    Working with high school students to improve mental health and smash the stigma.
                </div>
                <div class="link">
                    <a href="">
                        LEARN MORE <span> <img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
            <div class="one-rect">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p1.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title">
                    COMMUNITY ENGAGEMENT
                </div>
                <div class="subtitle">
                    Organising community talks to promote positive mental wellbeing.
                </div>
                <div class="link">
                    <a href="">
                        LEARN MORE <span> <img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                alt="<?php bloginfo('name'); ?>"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="donate">
    <div class="container">
        <div class="title">
            Donating to the Positive Vibes Foundation
        </div>
        <div class="subtitle">
            Want to make an impact?<br />
            If you are passionate about improving the lives of those in the local community
            – both young and old – then consider contributing to the Positive Vibes Foundation.
            No matter the size of your donation, it will make a difference to someone’s life.
            As a registered charity, any donations over $2 are tax deductible.
        </div>
        <div class="button">
            <a href="">
                MAKE A DONATION
            </a>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="all-news">
            <div class="one-blog">
                <div class="left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/news1.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="right">
                    <div class="title">
                        A bright night up in lights: The Annual Positive Vibes Gala Dinner​
                    </div>
                    <div class="description">
                        This year’s 2023 gala ball was hosted by Biviano’s Restaurant in Dural.  Thank you to all those who attended and donated to Biviano’s Hills Community Gala Ball on 31 August in support of the Positive Vibes Foundation.
                    </div>
                </div>
            </div>
            <div class="one-blog">
                <div class="left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/news2.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="right">
                    <div class="title">
                        UPmarket
                    </div>
                    <div class="description">
                        A family and pet-friendly monthly market to get out into the community and discuss positive mental health. 
                        The stall is staffed by welcoming mental health professionals who are on-hand to answer any questions and encourage conversation around mental wellness topics.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="slider">
    <div class="feedback">
        <div class="left">
            <div class="title">
                Feedback about the foundation
            </div>
            <div class="description">
                “I retired in March 2022 and have been attending The Hills Women's Shed for about 3 months, I heard about THWS through a friend who has been going for some time. I look forward to Thursdays and doing interesting crafts, having cooking lessons and learning all sorts of new things, but what I especially like is meeting new people and making new friends. It's a safe, caring environment and I'm so happy to be included.”
            </div>
            <div class="info">
                <div class="left-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/circle.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="right-info">
                    <div class="info-text">
                        <div class="title-info">
                            Heather Ross
                        </div>
                        <div class="subtitle-info">
                            The Hills Women’s Shed member
                        </div>
                    </div>
                    <div class="arrows">
                        <div class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/left-arrow.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero2.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>
<section class="white-space">

</section>
<?php
get_footer();
?>