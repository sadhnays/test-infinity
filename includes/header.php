<?php
// header.php - Contains head section, header, and navigation
// Expected variables: $pageTitle, $pageDescription, $pageKeywords, $activePage
// Optional: $pageSchema (JSON-LD string), $canonicalPath, $ogImage, $robotsMeta
require_once 'config.php';
require_once 'functions.php';

$pageTitle = $pageTitle ?? SITE_NAME;
$pageDescription = $pageDescription ?? 'Founder-led custom LMS development, AI-powered learning tools, coding labs, integrations, and cloud deployment for organizations worldwide.';
$pageKeywords = $pageKeywords ?? 'custom LMS development, Moodle development, AI learning assistant, LMS integration, e-learning development';
$activePage = $activePage ?? '';
$pageSchema = $pageSchema ?? null;
$canonical = canonical_url($canonicalPath ?? null);
$ogImage = $ogImage ?? asset('images/og-image.png');
$robotsMeta = $robotsMeta ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

// Site-wide entity graph: one Organization + WebSite + this WebPage.
$orgId = base_url('') . '#organization';
$siteGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => $orgId,
            'name' => SITE_NAME,
            'alternateName' => 'Infinity SoftHub',
            'url' => base_url(''),
            'logo' => ['@type' => 'ImageObject', 'url' => asset('images/ish-logo.svg')],
            'image' => asset('images/og-image.png'),
            'description' => 'Founder-led custom LMS development, AI-powered learning tools, coding labs, integrations, and cloud deployment for organizations worldwide.',
            'email' => 'info@infinitysofthub.com',
            'telephone' => '+91-129-2985010',
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar',
                'addressLocality' => 'Faridabad',
                'addressRegion' => 'Haryana',
                'postalCode' => '121014',
                'addressCountry' => 'IN',
            ],
            'areaServed' => 'Worldwide',
            'knowsAbout' => ['Learning management systems', 'Moodle development', 'LearnDash development', 'IOMAD multi-tenant LMS', 'SQL and Python coding labs', 'AI learning assistants', 'LMS integrations', 'Cloud hosting and migration'],
            'contactPoint' => [[
                '@type' => 'ContactPoint',
                'telephone' => '+91-129-2985010',
                'email' => 'info@infinitysofthub.com',
                'contactType' => 'sales',
                'availableLanguage' => ['English', 'Hindi'],
            ]],
            'sameAs' => [
                'https://www.facebook.com/infinitysofthub',
                'https://www.linkedin.com/company/infinitysofthub/',
                'https://www.youtube.com/@infinitysofthub',
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => base_url('') . '#website',
            'url' => base_url(''),
            'name' => SITE_NAME,
            'publisher' => ['@id' => $orgId],
            'inLanguage' => 'en',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => ['@id' => base_url('') . '#website'],
            'about' => ['@id' => $orgId],
            'inLanguage' => 'en',
        ],
    ],
];

// Page-level schema: keep custom schema unless it only repeats the Organization.
$extraSchema = null;
if ($pageSchema) {
    $decoded = json_decode($pageSchema, true);
    $type = is_array($decoded) ? ($decoded['@type'] ?? '') : '';
    if ($type !== 'Organization') {
        $extraSchema = $pageSchema;
    }
} elseif (strpos(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '', '/services/') === 0) {
    // Automatic Service schema for service pages without their own markup.
    $extraSchema = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => trim(explode('|', $pageTitle)[0]),
        'description' => $pageDescription,
        'url' => $canonical,
        'provider' => ['@id' => $orgId],
        'areaServed' => 'Worldwide',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
$breadcrumbSchema = breadcrumb_schema($pageTitle);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($pageTitle); ?></title>
    <meta name="description" content="<?php echo e($pageDescription); ?>">
    <meta name="keywords" content="<?php echo e($pageKeywords); ?>">
    <meta name="robots" content="<?php echo e($robotsMeta); ?>">
<?php if (stripos($robotsMeta, 'noindex') === false): ?>
    <link rel="canonical" href="<?php echo e($canonical); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo e($canonical); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo e($canonical); ?>">
<?php endif; ?>
    <meta name="theme-color" content="#062b6f">

    <!-- Open Graph / Social -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME); ?>">
    <meta property="og:title" content="<?php echo e($pageTitle); ?>">
    <meta property="og:description" content="<?php echo e($pageDescription); ?>">
    <meta property="og:url" content="<?php echo e($canonical); ?>">
    <meta property="og:image" content="<?php echo e($ogImage); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Infinity SoftHub Technologies — custom LMS and AI-powered learning solutions">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo e($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo e($ogImage); ?>">
    <meta name="twitter:image:alt" content="Infinity SoftHub Technologies — custom LMS and AI-powered learning solutions">

    <link rel="icon" type="image/svg+xml" href="<?php echo asset('images/infinity-svg.svg?v=3'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo asset('images/favicon.png?v=3'); ?>">
    <link rel="apple-touch-icon" href="<?php echo asset('images/favicon.png?v=3'); ?>">
    <meta name="format-detection" content="telephone=no">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P7V2VKMT');</script>
    <!-- End Google Tag Manager -->

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <!-- Google Fonts (non-blocking) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Defer non-critical stylesheets to eliminate render-blocking -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo versioned_asset('css/chatbot.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="<?php echo versioned_asset('css/chatbot.css'); ?>">
    </noscript>

    <!-- Main styles (synchronous to prevent Flash of Unstyled Content) -->
    <link rel="stylesheet" href="<?php echo versioned_asset('css/new-style.css'); ?>">

    <!-- Structured data -->
    <script type="application/ld+json">
<?php echo json_encode($siteGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>

    </script>
<?php if ($extraSchema): ?>
    <script type="application/ld+json">
    <?php echo $extraSchema; ?>

    </script>
<?php endif; ?>
<?php if ($breadcrumbSchema): ?>
    <script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>

    </script>
<?php endif; ?>
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7V2VKMT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Loading Screen with Logo -->
    <div class="loader-wrapper" id="loaderWrapper" aria-hidden="true">
        <div class="loader-inner">
            <img src="<?php echo asset('images/ish-logo.svg'); ?>" alt="" class="loader-logo" width="200" height="50">
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
    }, 1200);
    </script>
    <!-- Diagonal Sticky Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="<?php echo base_url(''); ?>" class="logo">
                <img src="<?php echo asset('images/ish-logo.svg'); ?>" alt="Infinity SoftHub Technologies" width="199" height="50" style="height:50px; width:auto;">
            </a>

            <div class="nav-menu" id="navMenu">
                <a href="<?php echo base_url(''); ?>" class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a>
                <a href="<?php echo base_url('about.php'); ?>" class="nav-link <?php echo $activePage === 'about' ? 'active' : ''; ?>">About</a>

                <div class="nav-dropdown">
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="nav-link <?php echo $activePage === 'what-we-do' || $activePage === 'services' ? 'active' : ''; ?>">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="<?php echo base_url('services/moodle-all-development.php'); ?>" class="dropdown-link">LMS Development</a>
                        <a href="<?php echo base_url('services/iomad-multi-tenant-lms.php'); ?>" class="dropdown-link">IOMAD Multi-Tenant LMS</a>
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
                <a href="<?php echo base_url('blog/'); ?>" class="nav-link <?php echo $activePage === 'blog' ? 'active' : ''; ?>">Blog</a>
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
