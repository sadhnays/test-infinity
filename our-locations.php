<?php
// our-locations.php
$pageTitle = "Our Locations | Infinity SoftHub - Countries Where We Have Services";
$pageDescription = "Explore the countries where Infinity SoftHub provides digital and LMS services. We serve clients worldwide.";
$pageKeywords = "our locations, countries we serve, Infinity SoftHub presence, global presence";
$activePage = 'locations';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Our <span class="gradient-text">Locations</span></h1>
            <p>Providing services to clients worldwide</p>
        </div>
    </section>

    <!-- Global Offices Section -->
    <section class="section offices">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Countries Where We Have <span class="gradient-text">Services</span></h2>
                <p class="section-subtitle">Serving clients from strategic locations worldwide</p>
            </div>

            <div class="offices-grid">
                <!-- USA Office -->
                <div class="office-card active" data-aos="fade-up">
                    <div class="flag">🇺🇸</div>
                    <h3>United States</h3>
                    <p>30 N Gould St Ste R, Sheridan, WY 82801</p>
                    <a href="https://www.google.com/maps/place/30+N+Gould+St+Ste+R,+Sheridan,+WY+82801,+USA/@44.7977689,-106.9570921,17z" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>

                <!-- UK Office -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flag">🇬🇧</div>
                    <h3>United Kingdom</h3>
                    <p>71-75 Shelton Street, Covent Garden, London, WC2H 9JQ</p>
                    <a href="https://www.google.com/maps/place/The+London+Office/@51.518616,-0.142192,14z" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>

                <!-- Netherlands Office -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flag">🇳🇱</div>
                    <h3>Netherlands</h3>
                    <p>Joop Geesinkweg 501, 1114 AB Amsterdam</p>
                    <a href="https://maps.google.com/maps?ll=52.334194,4.932082&z=14&t=m&hl=en&gl=IN&mapclient=embed&q=Joop%20Geesinkweg%20501%201096%20AX%20Amsterdam%20Netherlands" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>

                <!-- Faridabad Office -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flag">🇮🇳</div>
                    <h3>India - Faridabad</h3>
                    <p>Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar, Faridabad, Haryana - 121014</p>
                    <a href="https://www.google.com/maps?q=28.4315947,77.343365&z=17&hl=en" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>

                <!-- Gurugram Office -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="flag">🇮🇳</div>
                    <h3>India - Gurugram</h3>
                    <p>701-708, 7th Floor, Tower D, Global Business Park, Gurugram - 122002</p>
                    <a href="https://www.google.com/maps/place/Global+Business+Park/@28.4812306,77.0994571,17z" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>

                <!-- Australia Office -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="flag">🇦🇺</div>
                    <h3>Australia</h3>
                    <p>Sydney, NSW, Australia</p>
                    <a href="#" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>

                <!-- Singapore Office -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="flag">🇸🇬</div>
                    <h3>Singapore</h3>
                    <p>Singapore</p>
                    <a href="#" target="_blank" style="color:var(--accent); font-size:0.85rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:0.5rem;">
                        <i class="fas fa-map-marker-alt"></i> View on Map
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Get in <span class="gradient-text">Touch</span></h2>
                <p class="section-subtitle">Reach out to any of our global offices</p>
            </div>

            <div class="services-grid">
                <div class="value-card" data-aos="fade-up">
                    <div class="card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>info@infinitysofthub.com</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>+91-129-2985010</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar, Faridabad, Haryana - 121014</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Office Hours</h3>
                    <p>Mon-Fri: 9:00 AM - 6:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width:800px; margin:0 auto;">
                <h2 style="color:white; font-size:clamp(1.75rem, 4vw, 3rem); margin-bottom:1.5rem;">
                    Ready to Work With <span style="color:#60A5FA;">Our Global Team?</span>
                </h2>
                <p style="color:rgba(255,255,255,0.8); font-size:1.1rem; margin-bottom:2.5rem; line-height:1.8;">
                    Whether you're in the US, UK, India, or anywhere else, our team is ready to help transform your business.
                </p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent); font-weight:600;">
                    <i class="fas fa-handshake"></i> Contact Our Team
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
