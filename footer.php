<footer class="footer">
    <div class="container">
        <div class="top">
            <div class="col-1">
                <div class="logos">
                    <div class="logo-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/foot-logo-1.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="logo-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/foot-logo-2.png"
                            alt="<?php bloginfo('name'); ?>">
                    </div>
                </div>
                <div class="number">
                    ABN: 67 602 797 660
                </div>
            </div>
            <div class="col-2">
                <div class="title">
                    CONTACTS
                </div>
                <div class="informations">
                    <div class="one-info">
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location.png"
                                alt="<?php bloginfo('name'); ?>">
                        </span>
                        <a href="https://www.google.com/maps?q=Building+32/92+Seven+Hills+Rd,+Baulkham+Hills+NSW+2153,+Australia" target="_blank">
                            Building 32/92 Seven Hills Rd, Baulkham Hills NSW 2153, Australia
                        </a>
                    </div>

                    <div class="one-info">
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/email.png"
                                alt="<?php bloginfo('name'); ?>">
                        </span>
                        <a href="mailto:info@positivevibes.org.au">
                            info@positivevibes.org.au
                        </a>
                    </div>

                    <div class="one-info">
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"
                                alt="<?php bloginfo('name'); ?>">
                        </span>
                        <a href="tel:+61408549530">
                            +61 408 549 530
                        </a>
                    </div>
                </div>
                <div class="socials">
                    <div class="one-social">
                        <a href="https://facebook.com/" target="_blank" rel="noopener">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                    <div class="one-social">
                        <a href="https://youtube.com/" target="_blank" rel="noopener">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="title">
                    PROGRAMS AND EVENTS
                </div>
                <div class="list">
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path(page_path: 'upmarket')); ?>">UPmarket</a>
                    </div>
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path('the-hills-womens-shed')); ?>">The Hills Women's Shed</a>
                    </div>
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path(page_path: 'paw-visits')); ?>">Paw Visits</a>
                    </div>
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path('young-healthy-minds-forum')); ?>">Young Healthy Minds Forum</a>
                    </div>
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path('community-engagement')); ?>">Community Engagement</a>
                    </div>
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path(page_path: 'gala-dinner')); ?>">Gala Dinner</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="title">
                    QUICK LINKS
                </div>
                <div class="list">
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path(page_path: 'team')); ?>">Team</a>
                    </div>
                    <div class="one-list">
                        <a href="#">Policies</a>
                    </div>
                    <div class="one-list">
                        <a href="#">Publications</a>
                    </div>
                    <div class="one-list">
                        <a href="#">Private</a>
                    </div>
                    <div class="one-list">
                        <a href="<?php echo get_permalink(get_page_by_path(page_path: 'get-involved')); ?>">Get Involved</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bottom">
            Copyright ©2024 Positive Vibes Foundation, a registered charity. All Rights Reserved.
        </div>
    </div>
</footer>
<?php
wp_footer();
?>

</html>