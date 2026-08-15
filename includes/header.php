<?php
// header.php - Contains head section, header, and navigation
// Expected variables: $pageTitle, $pageDescription, $pageKeywords, $activePage
require_once 'config.php';
require_once 'functions.php';

$pageTitle = $pageTitle ?? SITE_NAME;
$pageDescription = $pageDescription ?? 'Premium enterprise IT consulting and digital transformation services';
$pageKeywords = $pageKeywords ?? 'IT consulting, digital transformation, enterprise solutions, web development, AI integration';
$activePage = $activePage ?? '';
$pageSchema = $pageSchema ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo e($pageTitle); ?></title>
    <meta name="description" content="<?php echo e($pageDescription); ?>">
    <meta name="keywords" content="<?php echo e($pageKeywords); ?>">
    <meta name="robots" content="follow, index">
    <meta property="og:title" content="<?php echo e($pageTitle); ?>">
    <meta property="og:description" content="<?php echo e($pageDescription); ?>">
    <meta property="og:url" content="<?php echo e(base_url($_SERVER['REQUEST_URI'])); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo asset('images/og-image.png'); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Infinity SoftHub Technologies — custom LMS and AI-powered learning solutions">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo e($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo asset('images/og-image.png'); ?>">
    <meta name="twitter:image:alt" content="Infinity SoftHub Technologies — custom LMS and AI-powered learning solutions">
    <link rel="canonical" href="<?php echo e(base_url($_SERVER['REQUEST_URI'])); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo asset('images/favicon.png?v=3'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo asset('images/favicon.png?v=3'); ?>">
    <link rel="icon" type="image/svg+xml" href="<?php echo asset('images/infinity-svg.svg?v=3'); ?>">

    <!-- Security Headers -->
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
    <meta name="format-detection" content="telephone=no">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Defer non-critical stylesheets to eliminate render-blocking -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo versioned_asset('css/chatbot.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="<?php echo versioned_asset('css/chatbot.css'); ?>">
    </noscript>

    <!-- New Premium Styles (Synchronous to prevent Flash of Unstyled Content) -->
    <link rel="stylesheet" href="<?php echo versioned_asset('css/new-style.css'); ?>">

    <!-- Schema Markup -->
    <script type="application/ld+json">
    <?php
    if ($pageSchema) {
        echo $pageSchema;
    } else {
    ?>
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo e(SITE_NAME); ?>",
        "url": "<?php echo e(SITE_URL); ?>",
        "description": "<?php echo e($pageDescription); ?>"
    }
    <?php } ?>
    </script>

    <!-- Loading Screen Styles -->
    <style>
    /* Loading Screen */
    .loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    .loader-wrapper.loaded {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }
    .loader-inner {
        text-align: center;
    }
    .loader-logo {
        width: 200px;
        margin-bottom: 20px;
    }
    .loader-spinner {
        width: 40px;
        height: 40px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #0066ff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .loader-text {
        color: #0066ff;
        font-size: 14px;
        margin-top: 15px;
        font-weight: 500;
        letter-spacing: 1px;
    }
    </style>
</head>
<body>
    <!-- Loading Screen with Logo -->
    <div class="loader-wrapper" id="loaderWrapper">
        <div class="loader-inner">
            <img src="<?php echo asset('images/ish-logo.svg'); ?>" alt="Loading" class="loader-logo">
            <div class="loader-spinner"></div>
            <div class="loader-text">Loading...</div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var loader = document.getElementById('loaderWrapper');
        if (loader) {
            loader.classList.add('loaded');
        }
    });
    setTimeout(function() {
        var el = document.getElementById('loaderWrapper');
        if (el && !el.classList.contains('loaded')) {
            el.classList.add('loaded');
        }
    }, 2000);
    </script>
    <!-- Diagonal Sticky Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="<?php echo base_url('index.php'); ?>" class="logo">
                <img src="<?php echo asset('images/ish-logo.svg'); ?>" alt="Infinity SoftHub" style="height:50px; width:auto;">
            </a>

            <div class="nav-menu" id="navMenu">
                <a href="<?php echo base_url('index.php'); ?>" class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a>
                <a href="<?php echo base_url('about.php'); ?>" class="nav-link <?php echo $activePage === 'about' ? 'active' : ''; ?>">About</a>

                <div class="nav-dropdown">
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="nav-link <?php echo $activePage === 'what-we-do' || $activePage === 'services' ? 'active' : ''; ?>">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                         <a href="<?php echo base_url('services/moodle-all-development.php'); ?>" class="dropdown-link">LMS Development</a>
                        <a href="<?php echo base_url('services/web-development.php'); ?>" class="dropdown-link">Web Development</a>
                        <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" class="dropdown-link">Mobile App Development</a>
                        <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" class="dropdown-link">AI & ML Integration</a>
                        <a href="<?php echo base_url('services/cloud-solutions.php'); ?>" class="dropdown-link">Cloud Solutions</a>
                        <a href="<?php echo base_url('services/ui-ux-design.php'); ?>" class="dropdown-link">UI/UX Design</a>
                        <a href="<?php echo base_url('services/digital-marketing.php'); ?>" class="dropdown-link">Digital Marketing</a>
                    </div>
                </div>

                <a href="<?php echo base_url('industry-expertise.php'); ?>" class="nav-link <?php echo $activePage === 'industries' ? 'active' : ''; ?>">Industries</a>
                <a href="<?php echo base_url('portfolio.php'); ?>" class="nav-link <?php echo $activePage === 'portfolio' ? 'active' : ''; ?>">Portfolio</a>
                <a href="<?php echo base_url('our-locations.php'); ?>" class="nav-link <?php echo $activePage === 'locations' ? 'active' : ''; ?>">Global Delivery</a>
                <a href="<?php echo base_url('case-studies.php'); ?>" class="nav-link <?php echo $activePage === 'case-studies' ? 'active' : ''; ?>">Case Studies</a>
                <a href="<?php echo base_url('blog'); ?>" class="nav-link <?php echo $activePage === 'blog' ? 'active' : ''; ?>">Blog</a>
                <a href="<?php echo base_url('contact.php'); ?>" class="nav-cta">Get in Touch</a>

                <div class="mobile-close-btn" id="navCloseBtn">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <div class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
