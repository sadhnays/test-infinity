<?php
$pageTitle = 'HTML Sitemap | Infinity SoftHub Technologies';
$pageDescription = 'Browse the main LMS, AI learning, software development, industry, portfolio, and company pages on the Infinity SoftHub website.';
$pageKeywords = 'Infinity SoftHub sitemap, LMS development services, website pages';
$activePage = 'sitemap';

require_once 'includes/header.php';

$sitemapSections = [
    'Company' => [
        'Home' => '',
        'About Us' => 'about.php',
        'Services Overview' => 'what-we-do.php',
        'Portfolio' => 'portfolio.php',
        'Case Studies' => 'case-studies.php',
        'Global Delivery' => 'our-locations.php',
        'Contact Us' => 'contact.php',
    ],
    'LMS & Learning Solutions' => [
        'LMS Solutions' => 'services/lms-solutions.php',
        'Complete LMS Development' => 'services/moodle-all-development.php',
        'Custom LMS Plugins & Integrations' => 'services/moodle-development.php',
        'LearnDash Development' => 'services/learndash-development.php',
        'Mobile e-Learning' => 'services/mobile-elearning.php',
        'AI for Learning Platforms' => 'services/ai-ml-integration.php',
        'Interactive SQL Coding Lab' => 'demos/sql-playground.php',
    ],
    'International LMS Delivery' => [
        'Moodle LMS Development for US Organizations' => 'services/moodle-lms-development-usa.php',
        'Moodle LMS Development for UK Organizations' => 'services/moodle-lms-development-uk.php',
        'Moodle LMS Development for Canadian Organizations' => 'services/moodle-lms-development-canada.php',
        'Moodle LMS Development for Australian Organizations' => 'services/moodle-lms-development-australia.php',
    ],
    'Engineering Services' => [
        'Web Development' => 'services/web-development.php',
        'Mobile App Development' => 'services/mobile-app-development.php',
        'Cloud Solutions' => 'services/cloud-solutions.php',
        'Hosting & Migration' => 'services/hosting-migration.php',
        'Security Solutions' => 'services/security-solutions.php',
        'UI/UX Design' => 'services/ui-ux-design.php',
        'Product Development' => 'product-development.php',
    ],
    'Industries & Resources' => [
        'Industry Expertise' => 'industry-expertise.php',
        'Education' => 'education.php',
        'Healthcare' => 'healthcare.php',
        'Finance' => 'finance.php',
        'Retail' => 'retail.php',
        'Manufacturing' => 'manufacturing.php',
        'Logistics' => 'logistics.php',
        'Automotive' => 'automotive.php',
        'Blog' => 'blog/',
    ],
    'Latest LMS Articles' => [
        'How to Build an SQL Coding Lab in Moodle' => 'blog/2026/08/15/sql-coding-lab-in-moodle/',
        'How to Build a Cross-Platform LMS Mobile App with Ionic' => 'blog/2026/05/25/why-ionic-is-the-perfect-choice-for-cross-platform-enterprise-app-development/',
        'Why Choose Moodle for Corporate Training?' => 'blog/2026/05/25/why-choosing-moodle-open-source-lms-is-the-smartest-move-for-your-organization/',
        'AI Integration for LMS: Practical Use Cases' => 'blog/2026/05/25/ai-integration/',
    ],
];
?>

<section class="page-hero">
    <div class="container">
        <h1>Website <span class="gradient-text">Sitemap</span></h1>
        <p>Find our core LMS services, technical capabilities, industries, and resources.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="services-grid">
            <?php foreach ($sitemapSections as $sectionTitle => $links): ?>
                <div class="service-card" style="padding:2rem;">
                    <h2 style="font-size:1.35rem; margin-bottom:1rem;"><?php echo e($sectionTitle); ?></h2>
                    <ul style="list-style:none; padding:0; margin:0; display:grid; gap:0.75rem;">
                        <?php foreach ($links as $label => $path): ?>
                            <li>
                                <a href="<?php echo e(base_url($path)); ?>" class="service-link">
                                    <?php echo e($label); ?>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-fullwidth">
    <div class="container" style="text-align:center;">
        <h2>Have an LMS or Learning-Technology Project?</h2>
        <p>Share your requirements and we will recommend a practical technical approach.</p>
        <a href="<?php echo e(base_url('contact.php')); ?>" class="btn">Discuss Your LMS Project</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
