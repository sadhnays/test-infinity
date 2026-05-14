    <!-- Footer - Same as Main Site -->
    <footer class="footer" id="contact">
        <style>
        /* Footer Styles - Match Main Site */
        .footer {
            background: #041E4D;
            padding-top: 4rem;
            padding-bottom: 2rem;
            color: rgba(255,255,255,0.8);
        }
        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 3rem;
            margin-bottom: 3rem;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 20px;
        }
        .footer h3 { color: var(--white); font-size: 1.5rem; margin-bottom: 1rem; }
        .footer h3 span { color: var(--accent-light); }
        .footer h4 { color: var(--white); font-size: 1.1rem; margin-bottom: 1.25rem; }
        .footer-col p { font-size: 0.9rem; line-height: 1.7; margin-bottom: 1.5rem; }
        .footer-col a { display: block; color: rgba(255,255,255,0.7); font-size: 0.9rem; padding: 0.3rem 0; transition: var(--transition); }
        .footer-col a:hover { color: var(--accent-light); padding-left: 5px; }
        .social-icons { display: flex; gap: 0.75rem; margin-top: 20px; }
        .social-icons a { width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.8); transition: var(--transition); }
        .social-icons a:hover { background: var(--accent); color: var(--white); transform: translateY(-3px); }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem; text-align: center; }
        .footer-bottom p { font-size: 0.85rem; color: rgba(255,255,255,0.6); }
        .back-to-top { position: fixed; bottom: 2rem; right: 2rem; width: 45px; height: 45px; background: var(--accent); border-radius: 50%; display: none; align-items: center; justify-content: center; color: var(--white); box-shadow: var(--shadow-lg); z-index: 999; transition: var(--transition); }
        .back-to-top:hover { background: var(--secondary); transform: translateY(-3px); }
        .back-to-top.visible { display: flex; }

        @media (max-width: 1024px) {
            .footer-container { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 768px) {
            .footer-container { grid-template-columns: 1fr; gap: 2rem; }
        }
        </style>

        <div class="footer-container">
            <div class="footer-col">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ish-logo.svg" alt="<?php bloginfo('name'); ?>" style="height:45px; margin-bottom:15px; filter:brightness(0) invert(1);">
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
                <a href="<?php echo get_main_site_url('services/moodle-development'); ?>">Moodle Development</a>
                <a href="<?php echo get_main_site_url('services/web-development'); ?>">Web Development</a>
                <a href="<?php echo get_main_site_url('services/mobile-app-development'); ?>">Mobile Apps</a>
                <a href="<?php echo get_main_site_url('services/ai-ml-integration'); ?>">AI & ML Solutions</a>
                <a href="<?php echo get_main_site_url('services/cloud-solutions'); ?>">Cloud Solutions</a>
            </div>

            <div class="footer-col">
                <h4>Contact Us</h4>
                <p><i class="fas fa-map-marker-alt"></i> 5th Floor, HB Twin Tower, New Delhi - 110034</p>
                <p><i class="fas fa-phone"></i> +91-120-5146-341</p>
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

    <?php wp_footer(); ?>
</body>
</html>