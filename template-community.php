<?php

get_header();

/*
Template Name: community Template
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
            Community engagement at Castle Hill Library
        </div>
        <div class="text module">
            The Positive Vibes Foundation holds regular community talks at the Castle Hill Library to promote positive mental health. <br /><br />
            In the past, topics have included:<br /><br />
            <ul>
                <li> Mindfulness for Wellbeing – Discovering the many benefits of mindfulness which include improved concentration, mental clarity and self-control.
                </li>
                <li> Mindfulness for Study – Learning how mindfulness can be used to improve your concentration, and reduce stress and anxiety.

                </li>
                <li> Mindfulness Program – Learning mindfulness skills and techniques to cultivate health, and sharing and caring attitudes, which work towards promoting a positive interactive environment.

                </li>
                <li> Mindfulness Program – Learning mindfulness skills and techniques to cultivate health, and sharing and caring attitudes, which work towards promoting a positive interactive environment.

                </li>
                <li> Understanding Your Teen – Covering mental health, drug and alcohol abuse, managing school pressures, and social media.

                </li>
                <li> A webinar on How Pets can Improve our Mental Health.
                </li>
                <li> A virtual seminar on Raising Resilient Children.
                </li>
                <li> Mindfulness for Wellbeing – Discovering the many benefits of mindfulness which include improved concentration, mental clarity and self-control. Virtual seminar on How to Support Your Child’s Wellbeing during the HSC.
                </li>
            </ul>
        </div>


    </div>
</section>
<section class="library">
    <div class="container">
        <div class="title module">
            Are you a library or community facility interested in hosting a mental health talk?
        </div>
        <div class="subtitle module">
            Reach out to us for more information.
        </div>
        <div class="button module">
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">
                Contact Us
            </a>
        </div>
    </div>
</section>
<section class="library-pics">
    <div class="container">
        <div class="library-image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/library1.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="library-image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/library2.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="library-image module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/library3.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>
<section class="upmarmet-lib">
    <div class="container">
        <div class="left ">
            <div class="title-u module">
                UPmarket
            </div>
            <div class="subttitle-u module">
                Every 4th Sunday at Castle Hill Showground
            </div>
            <div class="more-text-u module">
                UPmarket is held on the fourth Sunday of each month at The Terraces at the Castle Hill Showground and features more than 60 quality market stalls. Come visit us!
            </div>
            <div class="button module">
                <a href="https://www.thehillsupmarket.com.au/" target="_blank" rel="noopener">

                    Check Website
                </a>
            </div>
        </div>
        <div class="right module">
            <img src="<?php echo get_template_directory_uri(); ?>/images/upmarkett.png"
                alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>
<section class="past-events ">
    <div class="container">
        <div class="title-p module">
            Past Community Events
        </div>
        <div class="subtitle-p module">
            Aside from the Positive Vibes Foundation’s main four programs, we have also been involved in other events, including:
        </div>
        <div class="all-past-events">
            <div class="one-past-event">
                <div class="left-p module">
                    <div class="title-pp module">
                        Castle Hill Rotary Club’s Cross Country Challenge​
                    </div>
                    <div class="subtitle-pp module">
                        We supported Rotary by taking part in their annual cross country event on the ground, while raising funds for our mental health initiatives.
                    </div>
                </div>
                <div class="right-p module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/upmarkett1.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
            </div>
            <div class="one-past-event">
                <div class="left-p module">
                    <div class="title-pp module">
                        Bunnings Charity Christmas Night Market​
                    </div>
                    <div class="subtitle-pp module">
                        Who doesn’t love a Bunnings’ sausage sizzle? Positive Vibes gets involved in this annual market, selling merchandise made by The Hills Women’s Shed.
                    </div>
                </div>
                <div class="right-p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/upmarkett2.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
            </div>
            <div class="one-past-event module">
                <div class="left-p">
                    <div class="title-pp">
                        Multicultural Mental Health Forum​
                    </div>
                    <div class="subtitle-pp">
                        Bringing together community groups to raise public awareness around mental health, this annual multicultural forum features key speakers sharing useful tips on positive mental health. </div>
                </div>
                <div class="right-p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/upmarkett3.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
            </div>
            <div class="one-past-event module">
                <div class="left-p">
                    <div class="title-pp">
                        Supporting Afghan Refugees
                    </div>
                    <div class="subtitle-pp">
                        One of the most satisfying key highlights of the year was the Shed being able, just before Christmas, to offer practical help, in the form of items of clothing and goods from the Op Shop to members of the Afghanistan community who had recently arrived in Australia under very difficult conditions. This would be the forerunner of a number of such drop-ins in early 2022. </div>
                </div>
                <div class="right-p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/upmarket4.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>