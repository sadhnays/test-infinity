<?php
// about.php
$pageTitle = "About Infinity SoftHub | Enterprise IT Consulting Experts";
$pageDescription = "Learn about Infinity SoftHub - a leading IT consulting firm delivering digital transformation solutions to global enterprises.";
$pageKeywords = "about Infinity SoftHub, IT consulting, digital transformation, enterprise solutions, company story";
$activePage = 'about';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>About <span class="gradient-text">Infinity SoftHub</span></h1>
            <p>Delivering cutting-edge IT solutions to global enterprises since 2015</p>
        </div>
    </section>

    <!-- About Story Section -->
    <section class="section">
        <div class="container about-container">
            <div class="about-content" data-aos="fade-right">
                <h2 class="section-title">Our Story</h2>
                <div class="blue-underline"></div>
                <p class="about-text">
                    Founded in 2015, Infinity SoftHub began with a simple mission: to make digital transformation accessible, powerful, and user-friendly for enterprises worldwide.
                </p>
                <p class="about-text">
                    Over the past 15+ years, we've grown from a small consulting firm to a full-service IT solutions powerhouse. Our team has delivered 200+ projects across 15+ countries.
                </p>
                <p class="about-text">
                    Today, we're proud to serve educational institutions, corporations, and enterprises worldwide, empowering 15,000+ users through our innovative solutions.
                </p>

                <div class="about-stats">
                    <div class="stat-item">
                        <h3 class="counter" data-target="150">0</h3>
                        <p>Global Clients</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter" data-target="200">0</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter" data-target="15">0</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>

            <div class="about-cards" data-aos="fade-left">
                <div class="mini-card">
                    <i class="fas fa-rocket"></i>
                    <h4>Our Mission</h4>
                    <p>Empower businesses through innovative technology solutions that drive growth and efficiency.</p>
                </div>

                <div class="mini-card">
                    <i class="fas fa-eye"></i>
                    <h4>Our Vision</h4>
                    <p>To be the leading global partner for enterprise digital transformation.</p>
                </div>

                <div class="mini-card">
                    <i class="fas fa-bullseye"></i>
                    <h4>Our Goal</h4>
                    <p>Deliver exceptional IT solutions that exceed client expectations every time.</p>
                </div>

                <div class="mini-card">
                    <i class="fas fa-users"></i>
                    <h4>Our Team</h4>
                    <p>150+ skilled professionals dedicated to your success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="section core-values">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">Guiding principles that drive our success</p>
            </div>

            <div class="values-cards">
                <div class="value-card active" data-aos="fade-up">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We uphold the highest standards of honesty and transparency in all engagements.</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We embrace creative solutions and emerging technologies to solve complex challenges.</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We are committed to delivering exceptional quality in every project we undertake.</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We work closely with clients to achieve shared goals and mutual success.</p>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
