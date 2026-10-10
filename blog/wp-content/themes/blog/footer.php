<?php
/**
 * Site footer.
 *
 * @package Infinity_Softhub_Blog
 */
?>
<footer class="footer ish-site-footer" id="site-footer">
    <div class="container footer-container">
        <section class="footer-col footer-brand" aria-labelledby="footer-about-title">
            <a href="<?php echo esc_url(get_main_site_url()); ?>" class="footer-logo" aria-label="<?php esc_attr_e('Infinity Softhub Technologies home', 'ish-blog-theme'); ?>">
                <img src="<?php echo esc_url(get_main_site_url('assets/images/ish-logo.svg')); ?>" alt="Infinity Softhub Technologies" width="230" height="58">
            </a>
            <h2 id="footer-about-title" class="screen-reader-text"><?php esc_html_e('About Infinity Softhub Technologies', 'ish-blog-theme'); ?></h2>
            <p>Founder-led custom LMS development, AI-powered learning tools, coding labs, integrations, and cloud deployment for organizations worldwide.</p>
            <div class="social-icons" aria-label="<?php esc_attr_e('Social media links', 'ish-blog-theme'); ?>">
                <a href="https://www.facebook.com/infinitysofthub" target="_blank" rel="noopener noreferrer" aria-label="Infinity Softhub Technologies on Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/infinitysofthub/" target="_blank" rel="noopener noreferrer" aria-label="Infinity Softhub Technologies on LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/@infinitysofthub" target="_blank" rel="noopener noreferrer" aria-label="Infinity Softhub Technologies on YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            </div>
        </section>

        <nav class="footer-col" aria-labelledby="footer-links-title">
            <h2 id="footer-links-title">Quick Links</h2>
            <a href="<?php echo esc_url(get_main_site_url()); ?>">Home</a>
            <a href="<?php echo esc_url(get_main_site_url('about.php')); ?>">About Us</a>
            <a href="<?php echo esc_url(get_main_site_url('what-we-do.php')); ?>">Services</a>
            <a href="<?php echo esc_url(get_main_site_url('portfolio.php')); ?>">Portfolio</a>
            <a href="<?php echo esc_url(home_url('/')); ?>">Blog</a>
            <a href="<?php echo esc_url(get_main_site_url('contact.php')); ?>">Contact Us</a>
        </nav>

        <nav class="footer-col" aria-labelledby="footer-services-title">
            <h2 id="footer-services-title">Our Services</h2>
            <a href="<?php echo esc_url(get_main_site_url('services/moodle-all-development.php')); ?>">LMS Development</a>
            <a href="<?php echo esc_url(get_main_site_url('services/web-development.php')); ?>">Web Development</a>
            <a href="<?php echo esc_url(get_main_site_url('services/mobile-app-development.php')); ?>">Mobile Apps</a>
            <a href="<?php echo esc_url(get_main_site_url('services/ai-ml-integration.php')); ?>">AI &amp; ML Solutions</a>
            <a href="<?php echo esc_url(get_main_site_url('services/cloud-solutions.php')); ?>">Cloud Solutions</a>
        </nav>

        <section class="footer-col footer-contact" aria-labelledby="footer-contact-title">
            <h2 id="footer-contact-title">Contact Us</h2>
            <address>
                <p><i class="fas fa-location-dot" aria-hidden="true"></i><span>Plot No. 6 &amp; 7, Wazirpur Road, Jeevan Nagar, Sector 87, Faridabad, Haryana 121014</span></p>
                <p><i class="fas fa-phone" aria-hidden="true"></i><a href="tel:+911292985010">+91-129-2985010</a></p>
                <p><i class="fas fa-envelope" aria-hidden="true"></i><a href="mailto:info@infinitysofthub.com">info@infinitysofthub.com</a></p>
            </address>
        </section>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; <?php echo esc_html(wp_date('Y')); ?> Infinity Softhub Technologies. All rights reserved.</p>
            <nav class="footer-legal" aria-label="<?php esc_attr_e('Legal links', 'ish-blog-theme'); ?>">
                <a href="<?php echo esc_url(get_main_site_url('privacy-policy.php')); ?>">Privacy Policy</a>
                <a href="<?php echo esc_url(get_main_site_url('terms.php')); ?>">Terms</a>
            </nav>
            <p class="moodle-disclaimer">Moodle&#8482; is a registered trademark of Moodle Pty Ltd. Infinity Softhub Technologies is an independent custom development agency and is not affiliated with, sponsored by, or endorsed by Moodle Pty Ltd.</p>
        </div>
    </div>

    <button id="backToTop" class="back-to-top" type="button" aria-label="<?php esc_attr_e('Back to top', 'ish-blog-theme'); ?>">
        <i class="fas fa-angle-up" aria-hidden="true"></i>
    </button>
</footer>

<?php wp_footer(); ?>
</body>
</html>
