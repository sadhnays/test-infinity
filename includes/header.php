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
    <link rel="canonical" href="<?php echo e(base_url($_SERVER['REQUEST_URI'])); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo asset('images/favicon.png'); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animations -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- New Premium Styles -->
    <link rel="stylesheet" href="<?php echo asset('css/new-style.css'); ?>">

    <!-- Chatbot Styles -->
    <link rel="stylesheet" href="<?php echo asset('css/chatbot.css'); ?>">

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
</head>
<body>
    <!-- Transparent Sticky Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="<?php echo base_url('index.php'); ?>" class="logo">Infinity<span>Soft</span>Hub</a>

            <div class="nav-menu" id="navMenu">
                <a href="<?php echo base_url('index.php'); ?>" class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a>
                <a href="<?php echo base_url('about.php'); ?>" class="nav-link <?php echo $activePage === 'about' ? 'active' : ''; ?>">About</a>

                <div class="nav-dropdown">
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="nav-link <?php echo $activePage === 'what-we-do' || $activePage === 'services' ? 'active' : ''; ?>">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                         <a href="<?php echo base_url('services/moodle-all-development.php'); ?>" class="dropdown-link">Moodle Development</a>
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
<a href="<?php echo base_url('our-locations.php'); ?>" class="nav-link <?php echo $activePage === 'locations' ? 'active' : ''; ?>">Locations</a>
                <a href="<?php echo base_url('case-studies.php'); ?>" class="nav-link <?php echo $activePage === 'case-studies' ? 'active' : ''; ?>">Case Studies</a>
                <a href="<?php echo base_url('blog/'); ?>" class="nav-link <?php echo $activePage === 'blog' ? 'active' : ''; ?>">Blog</a>
                <a href="<?php echo base_url('contact.php'); ?>" class="nav-cta">Get in Touch</a>
            </div>

            <div class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
