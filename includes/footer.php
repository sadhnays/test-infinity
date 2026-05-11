    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container footer-container">
            <div class="footer-col">
                <h3>Infinity<span>Soft</span>Hub</h3>
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
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#values">Core Values</a>
                <a href="#industries">Industries</a>
                <a href="#offices">Global Offices</a>
                <a href="<?php echo base_url('contact.php'); ?>">Contact Us</a>
            </div>

            <div class="footer-col">
                <h4>Services</h4>
                <a href="<?php echo base_url('services/web-development.php'); ?>">Web Development</a>
                <a href="<?php echo base_url('services/mobile-app-development.php'); ?>">Mobile App Development</a>
                <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>">AI & ML Integration</a>
                <a href="<?php echo base_url('services/cloud-solutions.php'); ?>">Cloud Solutions</a>
                <a href="<?php echo base_url('services/ui-ux-design.php'); ?>">UI/UX Design</a>
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
                <p>&copy; 2026 Infinity SoftHub Technologies. All rights reserved.</p>
            </div>
        </div>

        <!-- Back to Top Button -->
        <a href="#" id="backToTop" class="back-to-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo asset('js/new-script.js'); ?>"></script>
    <script src="<?php echo asset('js/chatbot.js'); ?>"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Back to top
        window.addEventListener('scroll', function() {
            const btn = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                btn.style.display = 'flex';
            } else {
                btn.style.display = 'none';
            }
        });

        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
