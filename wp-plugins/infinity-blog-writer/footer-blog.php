    <!-- Footer - Same as Main Site -->
    <footer class="footer" id="contact">
        <div class="container footer-container">
            <div class="footer-col">
                <img src="<?php echo get_main_site_url('assets/images/ish-logo.svg'); ?>" alt="<?php bloginfo('name'); ?>" style="height:45px; margin-bottom:15px; filter:brightness(0) invert(1);">
                <p>Premium enterprise digital solutions provider helping businesses transform and grow.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/infinitysofthub" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/InfinitySoftHub" target="_blank"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/infinitysofthub/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@infinitysofthub" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <a href="<?php echo get_main_site_url(); ?>">Home</a>
                <a href="<?php echo get_main_site_url('about'); ?>">About Us</a>
                <a href="<?php echo get_main_site_url('what-we-do'); ?>">Services</a>
                <a href="<?php echo get_main_site_url('portfolio'); ?>">Portfolio</a>
                <a href="<?php echo get_main_site_url('contact'); ?>">Contact Us</a>
            </div>

            <div class="footer-col">
                <h4>Our Services</h4>
                <a href="<?php echo get_main_site_url('services/moodle-all-development'); ?>">Moodle Development</a>
                <a href="<?php echo get_main_site_url('services/web-development'); ?>">Web Development</a>
                <a href="<?php echo get_main_site_url('services/mobile-app-development'); ?>">Mobile Apps</a>
                <a href="<?php echo get_main_site_url('services/ai-ml-integration'); ?>">AI & ML Solutions</a>
                <a href="<?php echo get_main_site_url('services/cloud-solutions'); ?>">Cloud Solutions</a>
            </div>

            <div class="footer-col">
                <h4>Contact Us</h4>
                <p><i class="fas fa-map-marker-alt"></i> Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar, Faridabad, Haryana - 121014</p>
                <p><i class="fas fa-phone"></i> +91-129-2985010</p>
                <p><i class="fas fa-envelope"></i> info@infinitysofthub.com</p>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>

        <!-- Back to Top Button -->
        <a href="#" id="backToTop" class="back-to-top"><i class="fas fa-angle-up"></i></a>
    </footer>

    <script>
    window.addEventListener('scroll', function() {
        var btn = document.getElementById('backToTop');
        if (window.scrollY > 300) { btn.classList.add('visible'); } else { btn.classList.remove('visible'); }
    });
    var backToTop = document.getElementById('backToTop');
    if (backToTop) {
        backToTop.addEventListener('click', function(e) { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });
    }
    </script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="<?php echo get_main_site_url('assets/js/new-script.js'); ?>" defer></script>
    <script src="<?php echo get_main_site_url('assets/js/chatbot.js'); ?>" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true
                });
            }
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
