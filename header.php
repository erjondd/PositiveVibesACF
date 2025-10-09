<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="/images/favicon/favicon.ico" />
    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        ?>
    </title>
    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
    <!-- 
    <div class="top-head">
        You can make an impact. <a href="">Donate</a>
    </div> -->
    <header class="header">
        <div class="container">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo-and-phone">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <div class="logo1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-header.png"
                                alt="<?php bloginfo('name'); ?>">
                        </div>

                    </a>
                </div>

            </div>

            <div class="navbar">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', // Make sure 'primary' is registered in functions.php
                    'menu_class' => 'primary-menu', // Optional: CSS class for the <ul>
                    'container' => false, // Remove the wrapping <div>
                ));
                ?>
            </div>
            <div class="button">
                <a href="https://checkout.square.site/merchant/N10F92A8J62CV/checkout/L3YOCAIPTLA3V7HVA6BQL3ML" target="_blank" rel="noopener">
                    Donate
                </a>
            </div>
        </div>

    </header>