<?php

get_header();

/*
Template Name: About Template
*/

?>
<section class="another-hero">
    <img src="<?php echo get_field('hero_image'); ?>"
        alt="<?php bloginfo('name'); ?>" class="hero-image">
    <div class="container">
        <div class="title module"><?php echo get_field('hero_title'); ?></div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="left">
            <div class="title module">
                About the Positive Vibes Foundation
            </div>
            <div class="description module">
                The Positive Vibes Foundation was formed in 2014 by a psychiatrist working in Castle Hill.
                <br /><br />
                The charity was driven by the need to eliminate the stigma around mental health, which at the time was preventing many from seeking treatment.
                <br /><br />
                While the stigma has lessened somewhat today, conversations around mental health are still vital in helping more people within the community to live healthier lives.
                <br /><br />
                Through Positive Vibes’ four core programs – The Hills Women’s Shed, Paw Visits, the Young Healthy Minds Forum and Community Engagement – we are working to make deeper connections and increase the conversation around mental wellbeing.
            </div>
        </div>
        <div class="right module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>
<section class="under-about">
    <div class="container">
        <div class="all-rect">
            <div class="one-rect module">
                <div class="title">
                    Our Vision
                </div>
                <div class="subtitle">
                    To promote positive mental health and wellbeing in communities through connections and conversations.
                </div>
            </div>
            <div class="one-rect module">
                <div class="title">
                    Our Mission
                </div>
                <div class="subtitle module">
                    <ul>
                        <li>
                            Embrace a holistic approach to address mental illness and wellbeing at home, work and school.
                        </li>
                        <li>

                            Collaborate with like-minded organisations to drive better outcomes.
                        </li>
                        <li>
                            Spark conversations around positive mental health with individuals and groups throughout the community.

                        </li>
                        <li>
                            Use community events to raise awareness and connect people to mental health services.

                        </li>
                    </ul>
                </div>
            </div>
            <div class="one-rect module">
                <div class="title">
                    Our Values


                </div>
                <div class="subtitle">
                    <ul>
                        <li>
                            Honesty, integrity and transparency.
                        </li>
                        <li>

                            Collaboration and knowledge sharing.
                        </li>
                        <li>
                            Being respectful and inclusive of all.
                        </li>
                        <li>
                            Passionate and committed to delivering on our goals.
                        </li>
                        <li>
                            Affordable and sustainable programmes.
                        </li>
                        <li>
                            Embrace innovation.
                        </li>
                        <li>
                            Approachable, positive and adaptive to the circumstances.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>