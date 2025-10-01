<?php

get_header();

/*
Template Name: Homepage Template
*/



?>

<section class="hero">
    <div class="container">
        <div class="left-hero">
            <h1 class="title module">
                Cutting-Edge Cleaning Solutions – Where Excellence Meets Integrity 
            </h1>
            <p class="subtitle module">
                Premium domestic and commercial cleaning services, delivered with environmental care, community values,
                and unmatched professionalism. 
            </p>
            <div class="button module">
                <a href="#contact-form" class="btn-primary">Get Your Free Quote</a>
            </div>
        </div>
        <div class="right-hero module">
            <div class="title">
                Send Your Inquiry
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="under-hero">
    <div class="container">
        <div class="images module">
            <div class="img-1"> <img src="<?php echo get_template_directory_uri(); ?>/images/rect.png"
                    alt="<?php bloginfo('name'); ?>"></div>
            <div class="img-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/homepage.png"
                    alt="<?php bloginfo('name'); ?>"></div>
        </div>
        <div class="content">
            <div class="title module">
                More Than Just Cleaning
            </div>
            <div class="subtitle module">
                At Wakanda Safari Care, a clean space is more than what you see—it’s how it makes you feel. Our mission
                is to combine exceptional cleaning expertise with eco-friendly practices and a commitment to empowering
                the community.</br></br>From family homes to healthcare facilities, schools to corporate offices, every
                service we deliver meets the highest standards of hygiene, safety, and attention to detail. We take
                pride in creating spaces that promote wellbeing, productivity, and comfort.
            </div>
            <div class="button module">
                <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">Learn More About Us </a>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="title module">
            Our Services
        </div>
        <div class="subtitle module">
            Tailored cleaning solutions for homes, businesses, and specialised facilities.
        </div>
        <div class="services-all">
            <div class="one-service">
                <div class="image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/vector-1.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title module">
                    Domestic Cleaning
                </div>
                <div class="service-titles ">
                    <ul>
                        <li class="module">
                            Regular cleaning (weekly, fortnightly, monthly)
                        </li>
                        <li class="module">
                            Deep & spring cleaning
                        </li>
                        <li class="module">
                            End-of-lease cleaning
                        </li>
                        <li class="module">
                            Carpet & upholstery care
                        </li>
                        <li class="module">
                            Window cleaning
                        </li>
                    </ul>
                </div>
                <div class="link module">
                    <a href="<?php echo get_permalink(get_page_by_path(page_path: 'domestic')); ?>">
                        <span class="left">Click Here for More</span><span class="right"> <svg width="14" height="14"
                                viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 8H8V14H6V8H0V6H6V0H8V6H14V8Z" fill="black" />
                            </svg></span>
                    </a>
                </div>
            </div>
            <div class="one-service">
                <div class="image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/vector-2.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title module ">
                    Commercial Cleaning
                </div>
                <div class="service-titles ">
                    <ul>
                        <li class="module">
                            Office & workspace cleaning
                        </li>
                        <li class="module">
                            Healthcare & clinical sanitation
                        </li>
                        <li class="module">
                            School, childcare & aged care cleaning
                        </li>
                        <li class="module">
                            Retail & hospitality cleaning
                        </li>
                        <li class="module">
                            Post-construction & renovation site cleaning 
                        </li>
                    </ul>
                </div>
                <div class="link module">
                    <a href="<?php echo get_permalink(get_page_by_path('commercial')); ?>">
                        <span class="left">Click Here for More</span><span class="right"><svg width="14" height="14"
                                viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 8H8V14H6V8H0V6H6V0H8V6H14V8Z" fill="black" />
                            </svg></span>
                    </a>
                </div>
            </div>
            <div class="one-service">
                <div class="image module">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/vector-3.png"
                        alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="title module">
                    Domestic Cleaning
                </div>
                <div class="service-titles ">
                    <ul>
                        <li class="module">
                            Regular cleaning (weekly, fortnightly, monthly)
                        </li>
                        <li class="module">
                            Deep & spring cleaning
                        </li>
                        <li class="module">
                            End-of-lease cleaning
                        </li>
                        <li class="module">
                            Carpet & upholstery care
                        </li>
                        <li class="module">
                            Window cleaning
                        </li>
                    </ul>
                </div>
                <div class="link module">
                    <a href="<?php echo get_permalink(get_page_by_path(page_path: 'domestic')); ?>">
                        <span class="left">Click Here for More</span><span class="right"> <svg width="14" height="14"
                                viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 8H8V14H6V8H0V6H6V0H8V6H14V8Z" fill="black" />
                            </svg></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="under-hero">
    <div class="container">

        <div class="content right responsive">
            <div class="title module">
                Why Clients Choose Wakanda Safari Care
            </div>
            <div class="subtitle ">
                <span>
                    We go beyond cleaning to provide peace of mind.<br /><br /><br />
                </span>
                <ul>
                    <li class="module">
                        Fully insured & compliant
                    </li>
                    <li class="module">
                        Police-checked, professionally trained staff  </li>
                    <li class="module">
                        Flexible & scalable cleaning packages  </li>
                    <li class="module">
                        Socially responsible & ethical business practices  </li>
                    <li class="module">
                        Competitive rates with exceptional quality  </li>
                </ul>
            </div>
            <div class="button module">
                <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">Learn More About Us </a>
            </div>
        </div>
        <div class="images module">
            <div class="img-1"> <img src="<?php echo get_template_directory_uri(); ?>/images/rect.png"
                    alt="<?php bloginfo('name'); ?>"></div>
            <div class="img-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/homepage2.png"
                    alt="<?php bloginfo('name'); ?>"></div>
        </div>
    </div>
</section>
<section class="values">
    <div class="container">
        <div class="title module">
            Our Values
        </div>
        <div class="subtitle module">
            Our business is built on principles that ensure we serve our clients, staff, and community with respect and
            excellence. 
        </div>
        <div class="all-values">
            <div class="top">
                <div class="one-value module ">
                    <div class="images">
                        <div class="img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value-1.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="value-title">
                        Excellence
                    </div>
                    <div class="value-subtitle">
                        Letting the highest standards in every job.
                    </div>
                </div>
                <div class="one-value green module">
                    <div class="images">
                        <div class="img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="img-2 white">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value-2.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="value-title white">
                        Integrity
                    </div>
                    <div class="value-subtitle white">
                        Delivering what we promise with honesty and care.
                    </div>
                </div>
                <div class="one-value module">
                    <div class="images">
                        <div class="img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value-3.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="value-title ">
                        Respect
                    </div>
                    <div class="value-subtitle">
                        Valuing people, time, and space.
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="one-value module">
                    <div class="images">
                        <div class="img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value-4.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="value-title">
                        Sustainability
                    </div>
                    <div class="value-subtitle">
                        Using eco-friendly products to protect health and the planet.
                    </div>
                </div>
                <div class="one-value green module">
                    <div class="images">
                        <div class="img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="img-2 white">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value-5.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="value-title white">
                        Empowerment
                    </div>
                    <div class="value-subtitle white">
                        Creating job opportunities for underrepresented communities.
                    </div>
                </div>
                <div class="one-value module">
                    <div class="images">
                        <div class="img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/value-6.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="value-title ">
                        Innovation
                    </div>
                    <div class="value-subtitle">
                        Continuously improving and adopting smarter, more efficient solutions.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="container">
        <div class="partners-content">
            <div class="title module">
                Partner With Us
            </div>
            <span> <img src="<?php echo get_template_directory_uri(); ?>/images/underline.svg"
                    alt="<?php bloginfo('name'); ?>"></span>
            <div class="subtitle module">
                We work with local councils, schools, healthcare providers, housing organisations, and corporate<br />
                clients
                to deliver cleaner, safer, and healthier environments.<br />  If your organisation values quality,
                sustainability, and inclusiveness, we’d love to collaborate. 
            </div>
            <div class="button module">
                <a href="">Let's Collaborate</a>
            </div>
        </div>
    </div>
</section>

<section class="cleaner">
    <div class="container">
        <div class="title module">
            <div class="top">
                Ready for a Cleaner, Healthier Space? 
            </div>
            <div class="bottom module">
                Experience the difference of cleaning with purpose.
            </div>
        </div>
        <div class="button module">
            <a href="<?php echo home_url(); ?>">
                Request a Free Quote
            </a>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container">
        <h2>Form Fields</h2>
        <?php echo do_shortcode('[contact-form-7 id="138" title="Second contact form"]'); ?>
    </div>
</section>
<?php
get_footer();
?>