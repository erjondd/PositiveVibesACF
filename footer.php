<footer class="footer">
    <div class="top-footer">
        <div class="container">

            <div class="one-col">
                <div class="title">
                    Get In Touch
                </div>
                <div class="subtitle">
                    We’re here to make your home or workplace sparkle—while upholding the highest standards of safety
                    and
                    care.
                    Contact us today to discuss your needs or request a free quote.
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg"
                        alt="<?php bloginfo('name'); ?>">
                </div>
            </div>
            <div class="one-col">
                <div class="title">
                    Wakanda Safari Care
                </div>
                <div class="navbarr">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary', // Make sure 'primary' is registered in functions.php
                        'menu_class' => 'primary-menu', // Optional: CSS class for the <ul>
                        'container' => false, // Remove the wrapping <div>
                    ));
                    ?>
                </div>
            </div>
            <div class="one-col">
                <div class="title">
                    Contact Us
                </div>
                <div class="foot-content">
                    <div class="f-content">
                        <div class="one-foot">
                            <div class="svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/vec1.svg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="text">
                                <a href="tel:0433443791">0433 443 791</a>
                            </div>
                        </div>

                        <div class="one-foot">
                            <div class="svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/vec2.svg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="text">
                                <a href="mailto:maborcd77@gmail.com">maborcd77@gmail.com</a>
                            </div>
                        </div>

                        <div class="one-foot">
                            <div class="svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/vec3.svg"
                                    alt="<?php bloginfo('name'); ?>">
                            </div>
                            <div class="text">
                                <a href="https://wakandasafaricare.com" target="_blank"
                                    rel="noopener">wakandasafaricare.com</a>
                            </div>

                        </div>
                    </div>
                    <div class="another-text">Clean spaces. Stronger communities.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-top">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gotop.svg" alt="Go to top">
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="left">
                Copyright © Wakanda Safari Care. All Rights Reserved.
            </div>
            <div class="right">
                <div class="one-social">
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fb.svg"
                            alt="<?php bloginfo('name'); ?> Facebook">
                    </a>
                </div>
                <div class="one-social">
                    <a href="https://x.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/x.svg"
                            alt="<?php bloginfo('name'); ?> Twitter/X">
                    </a>
                </div>
                <div class="one-social">
                    <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/yt.svg"
                            alt="<?php bloginfo('name'); ?> YouTube">
                    </a>
                </div>
                <div class="one-social">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ig.svg"
                            alt="<?php bloginfo('name'); ?> Instagram">
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php
wp_footer();
?>

</html>