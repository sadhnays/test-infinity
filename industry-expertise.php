<?php
// industry-expertise.php
$pageTitle = "Industry Expertise | Infinity SoftHub - Enterprise IT Solutions";
$pageDescription = "Infinity SoftHub serves multiple industries with custom IT solutions and digital transformation services.";
$pageKeywords = "Industry Expertise, Healthcare, Finance, Retail, Manufacturing, Education, Logistics, IT solutions";
$activePage = 'industries';

$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Infinity SoftHub Technologies",
    "url": "https://infinitysofthub.com/",
    "description": "Infinity SoftHub serves multiple industries with IT consulting and digital transformation services."
}';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Industry <span class="gradient-text">Expertise</span></h1>
            <p>Delivering tailored IT solutions across diverse sectors</p>
        </div>
    </section>

    <!-- Industries Grid Section -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Industries We Serve</h2>
                <p class="section-subtitle">Custom solutions tailored to each sector's unique challenges</p>
            </div>

            <div class="industries-grid">
                <div class="industry-card" data-aos="fade-up">
                    <div class="industry-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Healthcare</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray); margin-top:0.5rem;">HIPAA-compliant solutions, patient portals, telemedicine platforms</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3>Finance</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray); margin-top:0.5rem;">Secure banking systems, fintech apps, compliance solutions</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Retail</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray); margin-top:0.5rem;">E-commerce platforms, inventory management, POS systems</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Manufacturing</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray); margin-top:0.5rem;">IoT solutions, supply chain management, automation</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray); margin-top:0.5rem;">LMS platforms, eLearning solutions, virtual classrooms</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="industry-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Logistics</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray); margin-top:0.5rem;">Fleet management, tracking systems, route optimization</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background:var(--bg-light);">
        <div class="container" style="text-align:center;" data-aos="fade-up">
            <h2 class="section-title">Ready to Transform Your Industry?</h2>
            <p class="section-subtitle">Let's discuss how our IT solutions can help your business grow</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">
                <i class="fas fa-handshake"></i> Get a Free Consultation
            </a>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
