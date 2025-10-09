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
        <div class="subtitle module">
            <?php the_field('hero_title'); ?>
        </div>
        <div class="title module">
            <?php the_field('hero_subtitle'); ?>
        </div>
        <div class="button module">
            <a href="<?php echo $link ?>">
                <?php the_field('hero_button_text'); ?>
            </a>
        </div>
    </div>
</section>
<section class="logos">
    <div class="container">
        <div class="swiper logos-slider swiper-container-homepage">
            <div class="swiper-wrapper">
                <?php if (have_rows('logos')): ?>
                    <?php while (have_rows('logos')) : the_row();
                        $logo = get_sub_field('image');
                        if (!empty($logo)): ?>
                            <div class="swiper-slide one-logo ">
                                <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

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
                    <div class="one-rect module">
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
                    <div class="one-rect module">
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
                    <div class="one-rect module">
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
                    <div class="one-rect module">
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
        <div class="bottom module">
            <?php the_field('under_rectangle_text'); ?>
        </div>
    </div>
</section>
<section class="impact">
    <div class="container">
        <div class="top">
            <div class="title module"> <?php the_field('impact_title'); ?>
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
                        <div class="one-blog module">
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
                    <div class="one-rect module">
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
        <div class="title module">
            <?php the_field('donation_title'); ?>
        </div>
        <div class="subtitle module">
            <?php the_field('donation_subtitle'); ?>
        </div>
        <div class="button module">

            <a href="
             <?php the_field('donation_button_url'); ?>">
                <?php the_field('donation_button_text'); ?>

            </a>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="all-news">
            <div class="all-news">
                <?php if (have_rows('another_repeater')): ?>
                    <?php while (have_rows('another_repeater')) : the_row();
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');

                        // Handle image array vs URL
                        if (is_array($image)) {
                            $image_url = $image['url'];
                            $image_alt = $image['alt'] ?: get_bloginfo('name');
                        } else {
                            $image_url = $image;
                            $image_alt = get_bloginfo('name');
                        }
                    ?>
                        <div class="one-blog module">
                            <div class="left">
                                <?php if ($image_url): ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
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
</section>
<section class="slider">
    <div class="feedback">
        <div class="left">
            <div class="swiper-container team-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide one-slider">
                        <div class="title ">
                            Feedback about the foundation
                        </div>
                        <div class="description ">
                            “I retired in March 2022 and have been attending The Hills Women's Shed for about 3 months, I heard about THWS through a friend who has been going for some time. I look forward to Thursdays and doing interesting crafts, having cooking lessons and learning all sorts of new things, but what I especially like is meeting new people and making new friends. It's a safe, caring environment and I'm so happy to be included.”
                        </div>
                        <div class="info">
                            <div class="left-info ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/circle.png"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="right-info ">
                                <div class="info-text">
                                    <div class="title-info">Heather Ross</div>
                                    <div class="subtitle-info">The Hills Women’s Shed member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide one-slider">
                        <div class="title ">
                            Feedback about the foundation
                        </div>
                        <div class="description ">
                            “As a Councilor with The Hills Shire Council, I have seen firsthand the incredible work Positive Vibes does in supporting our community. They offer programs such as their community engagement program, the Young Healthy Minds Forum, The Hills Women’s Shed, and the Paw Visits program. These initiatives help address mental health issues, support women who have been abused, bring joy to the elderly, and raise much-needed funds. Positive Vibes is led by an amazing team, and I am confident that they will continue to make a significant positive impact in our community.”
                        </div>
                        <div class="info">
                            <div class="left-info ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/22.jpg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="right-info ">
                                <div class="info-text">
                                    <div class="title-info">Brooke Collins OAM</div>
                                    <div class="subtitle-info">Founder and CEO of Staying Alive Health</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide one-slider">
                        <div class="title ">
                            Feedback about the foundation
                        </div>
                        <div class="description ">
                            “Pets are a big part of peoples lives and it is so hard when they move into care to not be able to have their pets with them. Our residents really love visits from Positive Vibes as it gives them a chance to interact with the animals, bringing back that feeling even if only for a short time. They are always looking forward to the next visit.”
                        </div>
                        <div class="info">
                            <div class="left-info ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/33.jpg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="right-info ">
                                <div class="info-text">
                                    <div class="title-info">Nerida O'Neill</div>
                                    <div class="subtitle-info">Spiritual Care Coordinator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide one-slider">
                        <div class="title ">
                            Feedback about the foundation
                        </div>
                        <div class="description ">
                            “An opportunity to visit a care home with our BC Alfie seemed like a nice thing to try. In reality, we all have a lot of fun. It is great to see the excitement of residents during our visits. Alfie loves the attention and we enjoy the residents stories.Thanks Positive Paws for the volunteering opportunity.”
                        </div>
                        <div class="info">
                            <div class="left-info ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/44.jpg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="right-info ">
                                <div class="info-text">
                                    <div class="title-info">Ann Findlay</div>
                                    <div class="subtitle-info">Paw Visits Volunteer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide one-slider">
                        <div class="title ">
                            Feedback about the foundation
                        </div>
                        <div class="description ">
                            “For me, it is only 1 hour fortnightly but for the residents it is a memorable weekend activity.It is great to spend time together with my dog and at the same time help others with is.For my dog, it is exciting to meet the residents and he can refine his social skills and learn to be extra patient. It is almost equivalent to an hour walk for him.”
                        </div>
                        <div class="info">
                            <div class="left-info ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/45.jpg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="right-info ">
                                <div class="info-text">
                                    <div class="title-info">Sabine Konzack</div>
                                    <div class="subtitle-info">Paw Visits Volunteer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide one-slider">
                        <div class="title ">
                            Feedback about the foundation
                        </div>
                        <div class="description ">
                            The residents at Arcare Oatlands love to see the volunteers and dogs of positive paws each month! The organisation brings a lot of joy, kindness, and warmth to our facility.”
                        </div>
                        <div class="info">
                            <div class="left-info ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/save.jpg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="right-info ">
                                <div class="info-text">
                                    <div class="title-info">Madeline Barnett</div>
                                    <div class="subtitle-info">Lifestyle Coordinator Arcare Oatlands</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->

                <div class="arrows">
                    <div class="arrow swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/left-arrow.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="arrow swiper-button-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="right module">
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