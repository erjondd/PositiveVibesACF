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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="logo2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg"
                                alt="<?php bloginfo('name'); ?>">
                        </div>
                    </a>
                </div>
                <div class="header-phone">
                    <div class="phone-svg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.8751 20C16.2753 20 13.8299 19.5083 11.5388 18.525C9.24696 17.5417 7.24714 16.196 5.53929 14.488C3.83078 12.7793 2.4809 10.7793 1.48965 8.488C0.497741 6.196 0.00178556 3.74167 0.00178556 1.125C-0.0148796 0.825 0.0851114 0.562333 0.301759 0.337C0.518406 0.112333 0.785049 0 1.10169 0H5.00134C5.30131 0 5.55962 0.112333 5.77627 0.337C5.99292 0.562333 6.10124 0.833333 6.10124 1.15C6.10124 1.88333 6.15124 2.575 6.25123 3.225C6.35122 3.875 6.50954 4.49167 6.72619 5.075C6.80951 5.25833 6.82618 5.44567 6.77618 5.637C6.72619 5.829 6.62619 6.00833 6.47621 6.175L3.97643 8.675C4.69303 10.1417 5.70961 11.5333 7.02616 12.85C8.34271 14.1667 9.75925 15.2167 11.2758 16L13.7756 13.5C13.9255 13.35 14.1005 13.25 14.3005 13.2C14.5005 13.15 14.7005 13.1667 14.9005 13.25C15.5171 13.45 16.1543 13.604 16.8123 13.712C17.4709 13.8207 18.1502 13.875 18.8501 13.875C19.1667 13.875 19.4377 13.9917 19.663 14.225C19.8877 14.4583 20 14.7417 20 15.075V18.9C20 19.2 19.8917 19.4583 19.675 19.675C19.4584 19.8917 19.1917 20 18.8751 20ZM13.1256 17C13.8755 17.2833 14.6588 17.5083 15.4754 17.675C16.292 17.8417 17.1336 17.95 18.0002 18V15.85C17.4836 15.8167 16.9546 15.7583 16.4133 15.675C15.8714 15.5917 15.3337 15.4667 14.8005 15.3L13.1256 17ZM18.0002 10C18.0002 7.76667 17.2252 5.875 15.6754 4.325C14.1255 2.775 12.234 2 10.0009 2V0C11.3841 0 12.684 0.262333 13.9005 0.787C15.1171 1.31233 16.1753 2.025 17.0753 2.925C17.9752 3.825 18.6875 4.88333 19.2121 6.1C19.7374 7.31667 20 8.61667 20 10H18.0002ZM14.0005 10C14.0005 8.9 13.6089 7.95833 12.8256 7.175C12.0424 6.39167 11.1008 6 10.0009 6V4C11.6674 4 13.084 4.58333 14.2505 5.75C15.4171 6.91667 16.0004 8.33333 16.0004 10H14.0005ZM3.00152 6.825L4.65137 5.15C4.51805 4.66667 4.40539 4.15833 4.3134 3.625C4.22208 3.09167 4.15975 2.55 4.12642 2H2.0266C2.05994 2.8 2.15993 3.6 2.32658 4.4C2.49323 5.2 2.71821 6.00833 3.00152 6.825Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="phone-texts">
                        <div class="phone-text-top">
                            Book a Call Today
                        </div>
                        <div class="phone-text-bottom">
                            Free: <a href="tel:+0433443791">+0433 443 791</a>
                        </div>
                    </div>

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
        </div>

    </header>