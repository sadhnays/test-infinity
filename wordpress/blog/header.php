<?php
/**
 * Header Template for WordPress Blog - Responsive Fixed
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_main_site_url('assets/images/favicon.png'); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_main_site_url('assets/images/favicon.png'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_main_site_url('assets/css/variables.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_main_site_url('assets/css/new-style.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_main_site_url('assets/css/chatbot.css'); ?>">
    <style>
        /* WordPress Admin Bar Compatibility */
        body.admin-bar .navbar {
            top: 32px;
        }
        @media screen and (max-width: 782px) {
            body.admin-bar .navbar {
                top: 46px;
            }
        }
        /* Reset list styles for navigation menu to remove black dots */
        .nav-menu, .nav-menu li, .dropdown-menu, .dropdown-menu a {
            list-style: none !important;
            list-style-type: none !important;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_main_site_url('assets/images/ish-logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
            </a>

            <ul class="nav-menu" id="navMenu">
                <li class="mobile-close-btn" id="navCloseBtn"><i class="fas fa-times"></i></li>
                <li><a href="<?php echo get_main_site_url(); ?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo get_main_site_url('about'); ?>" class="nav-link">About</a></li>
                <li class="nav-dropdown" onclick="toggleDropdown(this)">
                    <a href="#" class="nav-link">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="<?php echo get_main_site_url('services/moodle-all-development'); ?>" class="dropdown-link">Moodle Development</a>
                        <a href="<?php echo get_main_site_url('services/web-development'); ?>" class="dropdown-link">Web Development</a>
                        <a href="<?php echo get_main_site_url('services/mobile-app-development'); ?>" class="dropdown-link">Mobile App Development</a>
                        <a href="<?php echo get_main_site_url('services/ai-ml-integration'); ?>" class="dropdown-link">AI & ML Integration</a>
                        <a href="<?php echo get_main_site_url('services/cloud-solutions'); ?>" class="dropdown-link">Cloud Solutions</a>
                        <a href="<?php echo get_main_site_url('services/ui-ux-design'); ?>" class="dropdown-link">UI/UX Design</a>
                        <a href="<?php echo get_main_site_url('services/digital-marketing'); ?>" class="dropdown-link">Digital Marketing</a>
                    </div>
                </li>
                <li><a href="<?php echo get_main_site_url('industry-expertise'); ?>" class="nav-link">Industries</a></li>
                <li><a href="<?php echo get_main_site_url('portfolio'); ?>" class="nav-link">Portfolio</a></li>
                <li><a href="<?php echo get_main_site_url('our-locations'); ?>" class="nav-link">Locations</a></li>
                <li><a href="<?php echo get_main_site_url('case-studies'); ?>" class="nav-link">Case Studies</a></li>
                <li><a href="<?php echo home_url(); ?>" class="nav-link active">Blog</a></li>
                <li><a href="<?php echo get_main_site_url('contact'); ?>" class="nav-cta">Get in Touch</a></li>
            </ul>

            <div class="nav-toggle" id="navToggle"><i class="fas fa-bars"></i></div>
        </div>
    </nav>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <script>
    // Toggle dropdown on mobile
    function toggleDropdown(element) {
        if (window.innerWidth <= 991) {
            element.classList.toggle('active');
        }
    }

    </script>