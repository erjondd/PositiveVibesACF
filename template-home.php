<?php

get_header();

/*
Template Name: Homepage Template
*/

$link = get_field('hero_button_url', get_the_ID());

$donation_link = get_field('donation_button_url'); // returns array

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
            <a href="<?php echo $link ?>">
                <?php the_field('hero_button_text'); ?>
            </a>
        </div>
    </div>
</section>
<section class="logos">
    <div class="container">
        <div class="all-logos">
            <?php if (have_rows('logos')): ?>
                <?php while (have_rows('logos')) : the_row();
                    $logo = get_sub_field('image');
                    if (!empty($logo)): ?>
                        <div class="one-logo">
                            <img src="<?php echo esc_url($logo); ?>"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="under-hero">
    <div class="container">
        <div class="top">
            <?php if (have_rows('first_reactangle')): ?>
                <?php while (have_rows('first_reactangle')) : the_row();
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('description');
                ?>
                    <div class="one-rect">
                        <?php if ($title): ?>
                            <div class="title"><?php echo esc_html($title); ?></div>
                        <?php endif; ?>
                        <?php if ($subtitle): ?>
                            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('second_rectangle')): ?>
                <?php while (have_rows('second_rectangle')) : the_row();
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('description');
                ?>
                    <div class="one-rect">
                        <?php if ($title): ?>
                            <div class="title"><?php echo esc_html($title); ?></div>
                        <?php endif; ?>
                        <?php if ($subtitle): ?>
                            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('third_rectangle')): ?>
                <?php while (have_rows('third_rectangle')) : the_row();
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('description');
                ?>
                    <div class="one-rect">
                        <?php if ($title): ?>
                            <div class="title"><?php echo esc_html($title); ?></div>
                        <?php endif; ?>
                        <?php if ($subtitle): ?>
                            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('fourth_reactangle')): ?>
                <?php while (have_rows('fourth_reactangle')) : the_row();
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('description');
                ?>
                    <div class="one-rect">
                        <?php if ($title): ?>
                            <div class="title"><?php echo esc_html($title); ?></div>
                        <?php endif; ?>
                        <?php if ($subtitle): ?>
                            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="bottom">
            <?php the_field('under_rectangle_text'); ?>
        </div>
    </div>
</section>
<section class="impact">
    <div class="container">
        <div class="top">
            <div class="title"> <?php the_field('impact_title'); ?>
            </div>
            <div class="our-blogs">

                <?php if (have_rows('impact_repeater')): ?>
                    <?php while (have_rows('impact_repeater')) : the_row();
                        $image = get_sub_field('image'); // URL or Array
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');

                        // If using image array, get URL like this:
                        if (is_array($image)) {
                            $image_url = $image['url'];
                        } else {
                            $image_url = $image;
                        }
                    ?>
                        <div class="one-blog">
                            <div class="left">
                                <?php if ($image_url): ?>
                                    <img src="<?php echo esc_url($image_url); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="right">
                                <?php if ($title): ?>
                                    <div class="title"><?php echo esc_html($title); ?></div>
                                <?php endif; ?>
                                <?php if ($description): ?>
                                    <div class="description"><?php echo esc_html($description); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


            </div>
        </div>
        <div class="bottom">
            <?php if (have_rows('pages_repeater')): ?>
                <?php while (have_rows('pages_repeater')) : the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('description');
                    $link = get_sub_field('link', get_the_ID());
                    // Handle image array vs URL
                    if (is_array($image)) {
                        $image_url = $image['url'];
                    } else {
                        $image_url = $image;
                    }
                ?>
                    <div class="one-rect">
                        <?php if ($image_url): ?>
                            <div class="image">
                                <img src="<?php echo esc_url($image_url); ?>">
                            </div>
                        <?php endif; ?>

                        <?php if ($title): ?>
                            <div class="title"><?php echo esc_html($title); ?></div>
                        <?php endif; ?>

                        <?php if ($subtitle): ?>
                            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php endif; ?>


                        <div class="link">
                            <a href="<?php echo esc_url($link); ?>">
                                LEARN MORE
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/vector.png"
                                        alt="<?php bloginfo('name'); ?>"></span>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>



        </div>
    </div>
</section>
<section class="donate">
    <div class="container">
        <div class="title">
            <?php the_field('donation_title'); ?>
        </div>
        <div class="subtitle">
            <?php the_field('donation_subtitle'); ?>

        </div>
        <div class="button">
            <a href="">
                <?php the_field(selector: 'donation_button_text'); ?>
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