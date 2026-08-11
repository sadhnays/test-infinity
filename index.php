<?php
// index.php - Homepage
$pageTitle = "Moodle LMS Specialist & Custom Software Developer | Infinity SoftHub";
$pageDescription = "Custom Moodle™ LMS development, LearnDash platforms, AI integration, interactive coding playgrounds (SQL/Python), and full-stack software development.";
$pageKeywords = "Moodle LMS development, LMS specialist, LearnDash developer, custom Moodle plugins, SQL coding playgrounds, Python coding labs, AI in LMS, full-stack software engineering";
$activePage = 'home';

// Page-specific schema
$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Infinity SoftHub Technologies",
    "alternateName": "Infinity SoftHub",
    "url": "https://infinitysofthub.com/",
    "logo": "https://infinitysofthub.com/assets/images/logo.png",
    "description": "Premium enterprise IT consulting and digital transformation services.",
    "sameAs": [
        "https://www.facebook.com/infinitysofthub",
        "https://twitter.com/InfinitySoftHub",
        "https://www.linkedin.com/company/infinitysofthub/"
    ]
}';

require_once 'includes/header.php';
?>
<style>
/* Consolidated styles previously inline */
.hero-content {
    text-align: left;
    color: #ffffff;
    z-index: 15;
    position: relative;
}

/* Industries Section Styles */
.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.industry-link {
    text-decoration: none;
    color: inherit;
    display: block;
}

.industry-card {
    background: var(--bg-color);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.industry-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
}

.industry-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.industry-icon {
    background: var(--accent);
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin: 1.5rem auto 1rem;
    color: white;
}

.industry-card h3 {
    text-align: center;
    color: var(--text-color);
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive adjustments for industries section */
@media (max-width: 768px) {
    .industries-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }

    .industry-image {
        height: 150px;
    }

    .industry-icon {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }

    .industry-card h3 {
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .industries-grid {
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }

    .industry-image {
        height: 130px;
    }
}
.hero-badge {
    display: inline-flex;
    color: #ffffff;
}
.hero-heading {
    color: #ffffff;
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    text-align: left;
    text-shadow: 0 2px 15px rgba(0,0,0,0.5);
}
.hero-subtext {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
    text-align: left;
}
.hero-buttons {
    display: flex;
    gap: 1rem;
    justify-content: flex-start;
}
.hero-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    text-align: center;
}
.stat-number {
    color: #ffffff;
    font-size: 2rem;
    font-weight: 700;
}
.stat-label {
    color: rgba(255,255,255,0.8);
}
.service-link {
    color: var(--accent);
    font-weight: 600;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
}
.cta-fullwidth h2 {
    color: white;
    font-size: clamp(1.75rem, 4vw, 3rem);
    margin-bottom: 1.5rem;
}
.cta-fullwidth p {
    color: rgba(255,255,255,0.8);
    font-size: 1.1rem;
    margin-bottom: 2.5rem;
    line-height: 1.8;
}
.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}
.cta-fullwidth .btn:first-child {
    background: white;
    color: var(--accent);
    font-weight: 600;
}
.cta-fullwidth .btn:last-child {
    background: transparent;
    color: white;
    border: 2px solid rgba(255,255,255,0.3);
}
/* Responsive Adjustments */
@media (max-width: 768px) {
    .hero-stats {
        grid-template-columns: repeat(2, 1fr);
    }
    .hero-buttons {
        flex-direction: column;
        align-items: flex-start;
    }
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}
/* Technology Stack Icons */
.hero-tech-stack {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 2rem;
    flex-wrap: wrap;
}
.tech-label {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    font-weight: 500;
}
.tech-icons {
    display: flex;
    gap: 1.25rem;
    flex-wrap: wrap;
}
.tech-icons i {
    font-size: 1.75rem;
    color: rgba(255, 255, 255, 0.6);
    transition: all 0.3s ease;
    cursor: default;
}
.tech-icons i:hover {
    color: #00ccff;
    transform: translateY(-3px);
}

@media (max-width: 480px) {
    .hero-stats {
        grid-template-columns: 1fr;
    }
    .hero-tech-stack {
        flex-direction: column;
        align-items: flex-start;
    }
    .tech-icons {
        gap: 1rem;
    }
    .tech-icons i {
        font-size: 1.5rem;
    }
}
</style>

    <!-- Hero Section - Modern 2-Column Split -->
    <section class="hero animated-bg" id="home">
        <!-- Grid overlay & Particles -->
        <div class="hero-grid"></div>
        <div class="hero-scan-line"></div>
        <div class="hero-float-elements">
            <div class="float-icon float-1"><i class="fas fa-code"></i></div>
            <div class="float-icon float-2"><i class="fas fa-cloud"></i></div>
            <div class="float-icon float-3"><i class="fas fa-robot"></i></div>
            <div class="float-icon float-4"><i class="fas fa-graduation-cap"></i></div>
            <div class="float-icon float-5"><i class="fas fa-chart-line"></i></div>
        </div>

        <div class="container">
            <div class="hero-split">
                <!-- Left Column: Content -->
                <div class="hero-left-content">
                    <!-- Subtitle -->
                    <p class="hero-subtitle-tag" data-aos="fade-down">
                        <span class="tag-dot"></span>
                        Enterprise IT Solutions Since 2015
                    </p>

                    <!-- Main Heading -->
                    <h1 class="hero-main-title" data-aos="fade-up" data-aos-delay="100">
                        Connecting Innovation with
                        <span class="title-highlight">Custom LMS & Software</span>
                    </h1>

                    <!-- Description -->
                    <p class="hero-main-desc" data-aos="fade-up" data-aos-delay="200">
                        We build custom Moodle™ LMS platforms, interactive learning tools (SQL/Python labs), custom web & mobile applications, and AI integrations for global organizations.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="hero-cta-group" data-aos="fade-up" data-aos-delay="300">
                        <a href="<?php echo base_url('contact.php'); ?>" class="cta-primary">
                            <i class="fas fa-rocket"></i> Start Your Project
                        </a>
                        <a href="<?php echo base_url('what-we-do.php'); ?>" class="cta-secondary">
                            <i class="fas fa-eye"></i> View Services
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="hero-trust" data-aos="fade-up" data-aos-delay="400">
                        <span class="trust-text">Trusted by 150+ companies worldwide</span>
                        <div class="trust-icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <!-- Tech Stack Icons -->
                    <div class="hero-tech" data-aos="fade-up" data-aos-delay="500">
                        <span class="tech-label">Powered by:</span>
                        <div class="tech-icons-row">
                            <i class="fab fa-php" title="PHP"></i>
                            <i class="fab fa-java" title="Java"></i>
                            <i class="fab fa-python" title="Python"></i>
                            <i class="fab fa-react" title="React"></i>
                            <i class="fab fa-angular" title="Angular"></i>
                            <i class="fab fa-node-js" title="Node.js"></i>
                            <i class="fab fa-docker" title="Docker"></i>
                            <i class="fab fa-aws" title="AWS"></i>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Premium Visual Graphic -->
                <div class="hero-right-visual" data-aos="fade-left" data-aos-delay="200">
                    <div class="visual-glow"></div>
                    <div class="visual-image-wrapper">
                        <img src="<?php echo asset('images/hero_tech_visual.webp'); ?>" alt="Infinity SoftHub Technology Solutions" class="hero-premium-image">
                    </div>
                    <!-- Floating glassmorphic cards -->
                    <div class="floating-glass-card card-top">
                        <div class="card-icon"><i class="fas fa-brain"></i></div>
                        <div class="card-content">
                            <h4>AI & Automation</h4>
                            <p>Smart enterprise solutions</p>
                        </div>
                    </div>
                    <div class="floating-glass-card card-bottom">
                        <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="card-content">
                            <h4> LMS</h4>
                            <p>Premium learning systems</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Numbers -->
            <div class="hero-stats-numbers-container" data-aos="fade-up" data-aos-delay="600">
                <div class="hero-stats-numbers">
                    <div class="stat-item-hero">
                        <span class="stat-num counter" data-target="15000" data-suffix="+">0</span>
                        <span class="stat-lbl">Users Empowered</span>
                    </div>
                    <div class="stat-item-hero">
                        <span class="stat-num">200+</span>
                        <span class="stat-lbl">Projects Delivered</span>
                    </div>
                    <div class="stat-item-hero">
                        <span class="stat-num">150+</span>
                        <span class="stat-lbl">Global Clients</span>
                    </div>
                    <div class="stat-item-hero">
                        <span class="stat-num">98%</span>
                        <span class="stat-lbl">Success Rate</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="hero-wave">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,50 C360,100 1080,0 1440,50 L1440,100 L0,100 Z"></path>
            </svg>
        </div>
    </section>

    <style>
    /* Hero Grid Layout split */
    .hero-split {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 4rem;
        align-items: center;
        padding: 5rem 0 3rem;
        position: relative;
        z-index: 15;
    }

    .hero-left-content {
        text-align: left;
    }

    .hero-subtitle-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        background: rgba(255,255,255,0.08);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        color: rgba(255,255,255,0.9);
        font-size: 0.95rem;
        margin-bottom: 2rem;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.1);
    }

    .tag-dot {
        width: 10px;
        height: 10px;
        background: #00D4FF;
        border-radius: 50%;
        animation: pulse-dot 2s ease-in-out infinite;
    }

    @keyframes pulse-dot {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.3); opacity: 0.7; }
    }

    .hero-main-title {
        color: #ffffff;
        font-size: clamp(2.4rem, 5vw, 3.8rem);
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 1.5rem;
    }

    .title-highlight {
        background: linear-gradient(135deg, #00D4FF, #00FF88);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-main-desc {
        color: rgba(255,255,255,0.85);
        font-size: 1.15rem;
        line-height: 1.75;
        margin-bottom: 2.5rem;
    }

    .hero-main-desc strong {
        color: #00D4FF;
    }

    /* CTA Buttons */
    .hero-cta-group {
        display: flex;
        gap: 1rem;
        justify-content: flex-start;
        flex-wrap: wrap;
        margin-bottom: 2rem;
    }

    .cta-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, #00D4FF, #0066FF);
        color: white;
        padding: 1rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 212, 255, 0.3);
    }

    .cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0, 212, 255, 0.5);
    }

    .cta-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: transparent;
        color: white;
        padding: 1rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        border: 2px solid rgba(255,255,255,0.3);
        transition: all 0.3s ease;
    }

    .cta-secondary:hover {
        background: rgba(255,255,255,0.1);
        border-color: rgba(255,255,255,0.5);
    }

    /* Trust Badges */
    .hero-trust {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .trust-text {
        color: rgba(255,255,255,0.6);
        font-size: 0.9rem;
    }

    .trust-icons {
        color: #FFD700;
        display: flex;
        gap: 0.25rem;
    }

    /* Right column graphics */
    .hero-right-visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
    }

    .visual-glow {
        position: absolute;
        width: 320px;
        height: 320px;
        background: radial-gradient(circle, rgba(0, 212, 255, 0.35) 0%, transparent 70%);
        z-index: 1;
        filter: blur(40px);
    }

    .visual-image-wrapper {
        position: relative;
        z-index: 2;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        border: 1px solid rgba(255,255,255,0.15);
        background: rgba(255,255,255,0.03);
        backdrop-filter: blur(10px);
        max-width: 400px;
        animation: float-hero-img 6s ease-in-out infinite;
    }

    @keyframes float-hero-img {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
    }

    .hero-premium-image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .floating-glass-card {
        position: absolute;
        z-index: 3;
        background: rgba(255, 255, 255, 0.07);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 16px;
        padding: 0.85rem 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.85rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        animation: float-glass-card 8s ease-in-out infinite;
        width: 250px;
    }

    .floating-glass-card.card-top {
        top: 15%;
        right: -15%;
        animation-delay: 0s;
    }

    .floating-glass-card.card-bottom {
        bottom: 15%;
        left: -15%;
        animation-delay: 4s;
    }

    @keyframes float-glass-card {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-8px) scale(1.02); }
    }

    .floating-glass-card .card-icon {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        background: linear-gradient(135deg, #00D4FF, #0066FF);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.1rem;
    }

    .floating-glass-card .card-content h4 {
        color: white;
        font-size: 0.9rem;
        font-weight: 700;
        margin: 0 0 2px 0;
        text-align: left;
    }

    .floating-glass-card .card-content p {
        color: rgba(255,255,255,0.7);
        font-size: 0.75rem;
        margin: 0;
        text-align: left;
    }

    /* Floating Elements */
    .hero-float-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
    }

    .float-icon {
        position: absolute;
        color: rgba(0, 212, 255, 0.1);
        font-size: 2rem;
        animation: float-around 20s ease-in-out infinite;
    }

    .float-1 { top: 15%; left: 10%; animation-delay: 0s; }
    .float-2 { top: 25%; right: 15%; animation-delay: -5s; }
    .float-3 { top: 60%; left: 5%; animation-delay: -10s; }
    .float-4 { bottom: 25%; right: 10%; animation-delay: -15s; }
    .float-5 { top: 40%; right: 5%; animation-delay: -8s; }

    @keyframes float-around {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(20px, -30px) rotate(10deg); }
        50% { transform: translate(-10px, 20px) rotate(-5deg); }
        75% { transform: translate(15px, 10px) rotate(5deg); }
    }

    /* Wave Divider */
    .hero-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 80px;
    }

    .hero-wave svg {
        width: 100%;
        height: 100%;
    }

    /* Tech Stack Row */
    .hero-tech {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(255,255,255,0.08);
    }

    .tech-label {
        color: rgba(255,255,255,0.4);
        font-size: 0.85rem;
    }

    .tech-icons-row {
        display: flex;
        gap: 1.25rem;
    }

    .tech-icons-row i {
        font-size: 1.6rem;
        color: rgba(255,255,255,0.4);
        transition: all 0.3s ease;
    }

    .tech-icons-row i:hover {
        color: #00D4FF;
        transform: translateY(-3px);
    }

    /* Stats Numbers */
    .hero-stats-numbers-container {
        border-top: 1px solid rgba(255,255,255,0.08);
        margin-top: 3rem;
        padding-top: 2rem;
        position: relative;
        z-index: 15;
    }

    .hero-stats-numbers {
        display: flex;
        justify-content: space-between;
        gap: 2rem;
    }

    .stat-item-hero {
        text-align: center;
        flex: 1;
    }

    .stat-num {
        display: block;
        font-size: 2.2rem;
        font-weight: 800;
        color: #00D4FF;
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    .stat-lbl {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.55);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .hero-split {
            grid-template-columns: 1fr;
            gap: 5rem;
            text-align: center;
            padding: 4rem 0 2rem;
        }
        .hero-left-content {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .hero-cta-group {
            justify-content: center;
        }
        .hero-trust {
            justify-content: center;
        }
        .hero-tech {
            justify-content: center;
            flex-direction: column;
            gap: 0.75rem;
        }
        .hero-right-visual {
            margin-top: 1rem;
        }
        .floating-glass-card.card-top {
            right: 0%;
        }
        .floating-glass-card.card-bottom {
            left: 0%;
        }
    }

    @media (max-width: 768px) {
        .hero-main-title { font-size: 2.2rem; }
        .hero-main-desc { font-size: 1rem; }
        .hero-cta-group { flex-direction: column; align-items: center; }
        .cta-primary, .cta-secondary { width: 100%; max-width: 280px; justify-content: center; }
        .float-icon { display: none; }
        .hero-stats-numbers { flex-wrap: wrap; justify-content: center; gap: 1.5rem; }
        .stat-item-hero { flex: unset; width: calc(50% - 1rem); }
        .stat-num { font-size: 1.75rem; }
        .floating-glass-card {
            width: 200px;
            padding: 0.6rem 0.85rem;
        }
        .floating-glass-card .card-icon {
            width: 32px;
            height: 32px;
            font-size: 0.9rem;
        }
        .floating-glass-card .card-content h4 { font-size: 0.8rem; }
        .floating-glass-card .card-content p { font-size: 0.7rem; }
    }

    @media (max-width: 480px) {
        .floating-glass-card { display: none; }
    }

    /* Services Grid and Cards */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 2.5rem;
        margin-top: 3rem;
    }

    .service-link-card {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .service-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(229, 234, 243, 0.7);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(11, 61, 145, 0.1);
        border-color: rgba(37, 99, 235, 0.35);
    }

    .service-image-wrapper {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .service-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .service-card:hover .service-image {
        transform: scale(1.08);
    }

    .service-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: linear-gradient(135deg, #00D4FF, #0066FF);
        color: white;
        padding: 0.35rem 0.85rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(0, 102, 255, 0.3);
        z-index: 2;
    }

    .service-card-content {
        padding: 2.2rem 1.75rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        position: relative;
    }

    .service-icon-box {
        position: absolute;
        top: -30px;
        left: 1.75rem;
        width: 60px;
        height: 60px;
        border-radius: 16px;
        background: #ffffff;
        box-shadow: 0 8px 24px rgba(11, 61, 145, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 5;
        border: 1px solid rgba(229, 234, 243, 0.5);
    }

    .service-icon-box i {
        font-size: 1.4rem;
        background: linear-gradient(135deg, #0066FF, #00CCFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .service-card:hover .service-icon-box {
        background: linear-gradient(135deg, #0066FF, #00CCFF);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 102, 255, 0.35);
    }

    .service-card:hover .service-icon-box i {
        background: #ffffff;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .service-card-content h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-top: 1rem;
        margin-bottom: 0.75rem;
        transition: color 0.3s ease;
    }

    .service-card:hover .service-card-content h3 {
        color: var(--accent);
    }

    .service-card-content p {
        color: var(--text-gray);
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        flex-grow: 1;
    }

    .learn-more-link {
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--accent);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }

    .learn-more-link i {
        transition: transform 0.3s ease;
    }

    .service-card:hover .learn-more-link {
        color: var(--secondary);
    }

    .service-card:hover .learn-more-link i {
        transform: translateX(5px);
    }

    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }

    /* Core Values split interactive container */
    .values-container {
        display: grid;
        grid-template-columns: 0.8fr 1.2fr;
        gap: 4rem;
        align-items: center;
        margin-top: 3rem;
    }

    .values-tabs-vertical {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .values-tabs-vertical .tab-btn {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        padding: 1.25rem 2rem;
        background: #ffffff;
        border: 1px solid rgba(229, 234, 243, 0.7);
        border-radius: 16px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        text-align: left;
        width: 100%;
        box-shadow: none;
    }

    .values-tabs-vertical .tab-btn:hover {
        border-color: rgba(37, 99, 235, 0.3);
        background: rgba(245, 247, 251, 0.5);
        transform: translateX(5px);
        box-shadow: none;
    }

    .values-tabs-vertical .tab-btn.active {
        border-color: var(--accent);
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(0, 212, 255, 0.05) 100%);
        box-shadow: 0 10px 25px rgba(11, 61, 145, 0.05);
        transform: translateX(8px);
        color: var(--accent);
    }

    .values-tabs-vertical .tab-btn .btn-num {
        font-size: 1.1rem;
        font-weight: 800;
        color: var(--text-gray);
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .values-tabs-vertical .tab-btn.active .btn-num {
        color: var(--accent);
        opacity: 1;
    }

    .values-tabs-vertical .tab-btn h4 {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
    }

    .values-tabs-vertical .tab-btn.active h4 {
        color: var(--accent);
    }

    .values-tabs-vertical .tab-btn i {
        margin-left: auto;
        font-size: 1rem;
        color: var(--text-gray);
        opacity: 0;
        transition: all 0.3s ease;
    }

    .values-tabs-vertical .tab-btn.active i {
        opacity: 1;
        transform: translateX(3px);
        color: var(--accent);
    }

    .values-display-wrapper {
        position: relative;
    }

    .values-display-wrapper .value-card {
        background: #ffffff;
        border-radius: 24px;
        padding: 3.5rem 3rem;
        box-shadow: 0 15px 35px rgba(11, 61, 145, 0.06);
        border: 1px solid rgba(229, 234, 243, 0.7);
        position: relative;
        overflow: hidden;
        min-height: 350px;
        display: none;
        flex-direction: column;
        justify-content: center;
        transition: opacity 0.4s ease, transform 0.4s ease;
        transform: translateY(10px);
        opacity: 0;
        text-align: left;
    }

    .values-display-wrapper .value-card.active {
        display: flex;
        opacity: 1;
        transform: translateY(0);
    }

    .values-display-wrapper .value-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 6px;
        height: 100%;
        background: linear-gradient(to bottom, #00D4FF, #0066FF);
    }

    .values-display-wrapper .value-card .display-icon {
        width: 80px;
        height: 80px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.08) 0%, rgba(0, 212, 255, 0.08) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 0 2rem 0;
    }

    .values-display-wrapper .value-card .display-icon i {
        font-size: 2.2rem;
        background: linear-gradient(135deg, #0066FF, #00CCFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .values-display-wrapper .value-card h3 {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 1.25rem;
    }

    .values-display-wrapper .value-card p {
        font-size: 1.05rem;
        line-height: 1.75;
        color: var(--text-gray);
        margin: 0;
    }

    @media (max-width: 992px) {
        .values-container {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
        .values-tabs-vertical {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
        .values-tabs-vertical .tab-btn {
            flex: 1;
            min-width: 200px;
            justify-content: center;
            padding: 1rem 1.5rem;
        }
        .values-tabs-vertical .tab-btn:hover, .values-tabs-vertical .tab-btn.active {
            transform: translateY(-3px);
        }
        .values-tabs-vertical .tab-btn i {
            display: none;
        }
    }
    @media (max-width: 576px) {
        .values-tabs-vertical .tab-btn {
            width: 100%;
            flex: none;
        }
    }

    /* ===== Modern Tech Stack Section ===== */
    .technologies-section {
        background: #f8fafc;
        position: relative;
    }

    .tech-tabs {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
        margin-top: 2.5rem;
        margin-bottom: 3rem;
    }

    .tech-tab-btn {
        background: #ffffff;
        color: var(--text-dark);
        border: 1px solid rgba(229, 234, 243, 0.8);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
    }

    .tech-tab-btn:hover {
        background: #f1f5f9;
        border-color: rgba(0, 102, 255, 0.3);
        color: #0066ff;
        transform: translateY(-1px);
    }

    .tech-tab-btn.active {
        background: linear-gradient(135deg, #0066ff, #0052cc);
        color: #ffffff;
        border-color: transparent;
        box-shadow: 0 4px 12px rgba(0, 102, 255, 0.25);
    }

    .tech-grid-v2 {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.75rem;
        margin-top: 2rem;
    }

    .tech-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 2.25rem 1.75rem;
        border: 1px solid rgba(229, 234, 243, 0.8);
        text-align: left;
        transition: opacity 0.35s ease, transform 0.35s ease, box-shadow 0.4s ease, border-color 0.4s ease;
        position: relative;
        overflow: hidden;
        cursor: default;
        display: flex;
        flex-direction: column;
        height: 100%;
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    .tech-card.filtering {
        opacity: 0;
        transform: scale(0.92) translateY(15px);
    }

    .tech-card::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--tech-color);
        opacity: 0.8;
        transition: height 0.3s ease;
    }

    .tech-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 30px var(--tech-bg);
        border-color: var(--tech-color);
    }

    .tech-card:hover::before {
        height: 6px;
    }

    .tech-card-icon {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        background: var(--tech-bg);
        color: var(--tech-color);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
    }

    .tech-card-icon i {
        font-size: 1.5rem;
    }

    .tech-card:hover .tech-card-icon {
        background: var(--tech-color);
        color: #ffffff;
        transform: scale(1.08);
        box-shadow: 0 6px 15px var(--tech-bg);
    }

    .tech-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.35rem;
    }

    .tech-use {
        font-size: 0.825rem;
        font-weight: 700;
        color: var(--tech-color);
        margin-bottom: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: block;
    }

    .tech-card p {
        font-size: 0.9rem;
        color: var(--text-gray);
        line-height: 1.6;
        margin: 0;
        flex-grow: 1;
    }

    @media (max-width: 768px) {
        .tech-tabs {
            margin-bottom: 2.5rem;
        }
        .tech-tab-btn {
            padding: 0.65rem 1.35rem;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 576px) {
        .tech-grid-v2 {
            grid-template-columns: 1fr;
            gap: 1.25rem;
        }
        .tech-card {
            padding: 2rem 1.5rem;
        }
    }
    </style>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Services</span></h2>
                <p class="section-subtitle">From custom Moodle LMS development and enterprise web applications to AI-powered automation and cloud migration — we deliver end-to-end digital transformation services for global businesses.</p>
            </div>
            <div class="services-grid">
                <!-- Moodle Development -->
                <a href="<?php echo base_url('services/moodle-all-development.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/about/service_moodle.webp'); ?>" alt="Moodle LMS Development and Platform Setup" class="service-image" loading="lazy" width="400" height="300">
                            <div class="service-badge">Core Speciality</div>
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-graduation-cap"></i>
                            </div>
                            <h3>Moodle LMS Development</h3>
                            <p>Custom LMS hosting, bespoke theme development, plugin integrations, and scalable learning platforms.</p>
                            <span class="learn-more-link">Explore Service <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                <!-- Web Development -->
                <a href="<?php echo base_url('services/web-development.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/about/service_web.webp'); ?>" alt="Custom Enterprise Web Development and Systems Integration" class="service-image" loading="lazy" width="400" height="300">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-code"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>High-performance websites, customized CMS solutions, and secure portal integrations for enterprises.</p>
                            <span class="learn-more-link">Explore Service <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                <!-- Mobile App Development -->
                <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/about/service_mobile.webp'); ?>" alt="Native and Hybrid Mobile App Development" class="service-image" loading="lazy" width="400" height="300">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Mobile Apps</h3>
                            <p>Native & hybrid mobile applications featuring clean UI, offline mode support, and seamless performance.</p>
                            <span class="learn-more-link">Explore Service <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                <!-- AI & ML Integration -->
                <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/about/service_ai.webp'); ?>" alt="Intelligent Artificial Intelligence and Machine Learning Models" class="service-image" loading="lazy" width="400" height="300">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-brain"></i>
                            </div>
                            <h3>AI & ML Integration</h3>
                            <p>Intelligent bots, semantic search, predictive analytics, and task automation to scale your operations.</p>
                            <span class="learn-more-link">Explore Service <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                <!-- Cloud Solutions -->
                <a href="<?php echo base_url('services/cloud-solutions.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/about/service_cloud.webp'); ?>" alt="Cloud Server Deployments and DevOps Architecture" class="service-image" loading="lazy" width="400" height="300">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-cloud"></i>
                            </div>
                            <h3>Cloud Solutions</h3>
                            <p>Secure, elastic hosting on AWS/Azure, custom microservice design, and DevOps optimization.</p>
                            <span class="learn-more-link">Explore Service <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                <!-- UI/UX Design -->
                <a href="<?php echo base_url('services/ui-ux-design.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/about/service_uiux.webp'); ?>" alt="UI UX Wireframing and Prototyping Systems" class="service-image" loading="lazy" width="400" height="300">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-paint-brush"></i>
                            </div>
                            <h3>UI/UX Design</h3>
                            <p>Modern design systems, user journeys, layout wireframing, and highly polished visual prototypes.</p>
                            <span class="learn-more-link">Explore Service <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="section core-values" id="values">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Core <span class="gradient-text">Values</span></h2>
                <p class="section-subtitle">Guiding principles that drive our success</p>
            </div>

            <div class="values-container" data-aos="fade-up">
                <!-- Left: Tabs -->
                <div class="values-tabs-vertical">
                    <button class="tab-btn active" data-tab="1">
                        <span class="btn-num">01</span>
                        <h4>Integrity</h4>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="tab-btn" data-tab="2">
                        <span class="btn-num">02</span>
                        <h4>Innovation</h4>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="tab-btn" data-tab="3">
                        <span class="btn-num">03</span>
                        <h4>Excellence</h4>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="tab-btn" data-tab="4">
                        <span class="btn-num">04</span>
                        <h4>Collaboration</h4>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Right: Active Value Details -->
                <div class="values-display-wrapper">
                    <!-- Integrity Card -->
                    <div class="value-card active" data-tab="1">
                        <div class="display-icon">
                            <i aria-hidden="true" class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Integrity</h3>
                        <p>We uphold the highest standards of honesty, ethics, and transparency in all our professional engagements. We believe that trust is the foundation of long-term partnerships, and we commit to delivering on our promises with complete visibility.</p>
                    </div>

                    <!-- Innovation Card -->
                    <div class="value-card" data-tab="2">
                        <div class="display-icon">
                            <i aria-hidden="true" class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>We embrace creative thinking and leverage emerging technologies to solve complex enterprise challenges. Our team is constantly researching modern architectures, AI frameworks, and e-learning breakthroughs to keep your platform future-proof.</p>
                    </div>

                    <!-- Excellence Card -->
                    <div class="value-card" data-tab="3">
                        <div class="display-icon">
                            <i aria-hidden="true" class="fas fa-trophy"></i>
                        </div>
                        <h3>Excellence</h3>
                        <p>We are relentlessly committed to delivering exceptional quality in every line of code, infrastructure setup, and learning system we deploy. We set high benchmarks and follow rigorous engineering standards to ensure your success.</p>
                    </div>

                    <!-- Collaboration Card -->
                    <div class="value-card" data-tab="4">
                        <div class="display-icon">
                            <i aria-hidden="true" class="fas fa-handshake"></i>
                        </div>
                        <h3>Collaboration</h3>
                        <p>We view our clients as true partners, working closely at every step to align on requirements, design decisions, and system capabilities. By working together as one cohesive team, we build digital ecosystems that deliver true impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="section industries" id="industries">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Industries We <span class="gradient-text">Serve</span></h2>
                <p class="section-subtitle">We specialize in delivering industry-specific IT solutions for Healthcare, Finance, Retail, Manufacturing, Education, and Logistics — each built for compliance, scalability, and real-world performance.</p>
            </div>

            <div class="services-grid">
                <!-- Healthcare -->
                <a href="<?php echo base_url('healthcare.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/Industries-We-Serve/Healthcare.webp'); ?>" alt="Healthcare Industry" class="service-image" loading="lazy">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-hospital"></i>
                            </div>
                            <h3>Healthcare</h3>
                            <p>HIPAA-compliant platforms, custom medical databases, patient portals, and specialized training LMS setups.</p>
                            <span class="learn-more-link">Explore Industry <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Finance -->
                <a href="<?php echo base_url('finance.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/Industries-We-Serve/Finance.webp'); ?>" alt="Finance Industry" class="service-image" loading="lazy">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-university"></i>
                            </div>
                            <h3>Finance</h3>
                            <p>Secure financial transaction systems, automated reporting, employee compliance training, and risk dashboards.</p>
                            <span class="learn-more-link">Explore Industry <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Retail -->
                <a href="<?php echo base_url('retail.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/Industries-We-Serve/Retail.webp'); ?>" alt="Retail Industry" class="service-image" loading="lazy">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-shopping-cart"></i>
                            </div>
                            <h3>Retail & E-Commerce</h3>
                            <p>Scalable online storefronts, customer education portals, inventory sync integrations, and predictive analytics.</p>
                            <span class="learn-more-link">Explore Industry <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Manufacturing -->
                <a href="<?php echo base_url('manufacturing.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/Industries-We-Serve/Manufacturing.webp'); ?>" alt="Manufacturing Industry" class="service-image" loading="lazy">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-industry"></i>
                            </div>
                            <h3>Manufacturing</h3>
                            <p>Workforce safety training systems, compliance automation, process monitoring portals, and IoT data feeds.</p>
                            <span class="learn-more-link">Explore Industry <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Education -->
                <a href="<?php echo base_url('education.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/Industries-We-Serve/Education.webp'); ?>" alt="Education Industry" class="service-image" loading="lazy">
                            <div class="service-badge">Key Focus</div>
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-graduation-cap"></i>
                            </div>
                            <h3>Education & K-12</h3>
                            <p>Bespoke Moodle LMS setups, multi-tenant learning ecosystems, automated quiz builders, and virtual classrooms.</p>
                            <span class="learn-more-link">Explore Industry <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Logistics -->
                <a href="<?php echo base_url('logistics.php'); ?>" class="service-link-card">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-image-wrapper">
                            <img src="<?php echo asset('images/Industries-We-Serve/Logistics.webp'); ?>" alt="Logistics Industry" class="service-image" loading="lazy">
                        </div>
                        <div class="service-card-content">
                            <div class="service-icon-box">
                                <i aria-hidden="true" class="fas fa-shipping-fast"></i>
                            </div>
                            <h3>Logistics & Supply Chain</h3>
                            <p>Route optimization portals, delivery tracking integrations, and driver safety & orientation training modules.</p>
                            <span class="learn-more-link">Explore Industry <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container about-container">
            <div class="about-content" data-aos="fade-right">
                <h2 class="section-title">About Infinity SoftHub</h2>
                <div class="blue-underline"></div>
                <p class="about-text">
                    Infinity SoftHub is a leading IT consulting and software development company specializing in Learning Management Systems (LMS), enterprise web applications, AI/ML integration, and cloud solutions.
                    With over 15 years of experience serving 150+ clients across 6 countries, we deliver secure, scalable, and cost-effective digital solutions that drive measurable business growth.
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
                    <i aria-hidden="true" class="fas fa-rocket"></i>
                    <h4>Digital Strategy</h4>
                    <p>Custom roadmaps for digital transformation.</p>
                </div>

                <div class="mini-card">
                    <i aria-hidden="true" class="fas fa-cloud"></i>
                    <h4>Cloud Solutions</h4>
                    <p>Secure and scalable cloud infrastructure.</p>
                </div>

                <div class="mini-card">
                    <i aria-hidden="true" class="fas fa-mobile-alt"></i>
                    <h4>App Development</h4>
                    <p>Cross-platform mobile and web applications.</p>
                </div>

                <div class="mini-card">
                    <i aria-hidden="true" class="fas fa-shield-alt"></i>
                    <h4>Cyber Security</h4>
                    <p>Enterprise-grade security solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition Section -->
    <section class="section awards">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Awards & Recognition</h2>
                <p class="section-subtitle">Industry accolades we're proud of</p>
            </div>

            <div class="swiper awards-swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-icon"><i class="fas fa-trophy"></i></div>
                            <p>Best IT Consultancy 2025</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-icon"><i class="fas fa-medal"></i></div>
                            <p>Top Digital Transformation</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-icon"><i class="fas fa-lightbulb"></i></div>
                            <p>Excellence in Innovation</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-icon"><i class="fas fa-award"></i></div>
                            <p>Client Satisfaction Award</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-icon"><i class="fas fa-chart-line"></i></div>
                            <p>Fastest Growing Tech Firm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Why Choose Us Section -->
    <section class="section why-choose-section" id="why-us">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Why Choose <span class="gradient-text">Infinity SoftHub</span></h2>
                <p class="section-subtitle">15+ years of enterprise IT expertise, 200+ successful project deliveries, and a 98% client retention rate — we combine deep domain knowledge with cutting-edge technology to deliver exceptional, measurable results.</p>
            </div>
            <div class="features-grid">
                <div class="feature-item" data-aos="fade-up">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-award"></i>
                    </div>
                    <h4>IT Consulting Expert</h4>
                    <p>15+ years of specialized IT consulting experience with 200+ successful implementations worldwide.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-users"></i>
                    </div>
                    <h4>150+ Global Clients</h4>
                    <p>Our solutions empower businesses worldwide, delivering growth and competitive advantage.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-puzzle-piece"></i>
                    </div>
                    <h4>Custom Solutions</h4>
                    <p>Tailor-made IT solutions that extend your platform's functionality exactly how you need it.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h4>Scalable Systems</h4>
                    <p>Architectures designed to grow with you — from 100 to 100,000+ users without performance compromise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="section technologies-section" id="technologies">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Built with <span class="gradient-text">Modern Tech Stack</span></h2>
                <p class="section-subtitle">We leverage robust, industry-leading technologies to build scalable enterprise solutions and intelligent digital platforms.</p>
            </div>

            <!-- Category Filter Tabs -->
            <div class="tech-tabs" data-aos="fade-up">
                <button class="tech-tab-btn active" data-filter="all">All Tech</button>
                <button class="tech-tab-btn" data-filter="lms">LMS & E-Learning</button>
                <button class="tech-tab-btn" data-filter="frontend">Frontend</button>
                <button class="tech-tab-btn" data-filter="backend">Backend & APIs</button>
                <button class="tech-tab-btn" data-filter="cloud">Cloud & DevOps</button>
                <button class="tech-tab-btn" data-filter="ai">AI & Automation</button>
            </div>

            <div class="tech-grid-v2">
                <!-- Moodle LMS -->
                <div class="tech-card cat-lms" data-aos="fade-up" style="--tech-color: #F98012; --tech-bg: rgba(249, 128, 18, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h4>Moodle LMS</h4>
                    <span class="tech-use">E-Learning Systems</span>
                    <p>Custom educational platforms, bespoke plugin development, secure installations, and LMS optimization for global institutions.</p>
                </div>
                <!-- Custom LMS Plugins -->
                <div class="tech-card cat-lms" data-aos="fade-up" data-aos-delay="50" style="--tech-color: #4F46E5; --tech-bg: rgba(79, 70, 229, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
                    </div>
                    <h4>LMS Plugins</h4>
                    <span class="tech-use">Feature Extensions</span>
                    <p>Designing modular code, customized enrollment plugins, third-party API hook-ins, and dynamic dashboard reports.</p>
                </div>
                <!-- H5P & SCORM -->
                <div class="tech-card cat-lms" data-aos="fade-up" data-aos-delay="100" style="--tech-color: #0D9488; --tech-bg: rgba(13, 148, 136, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>
                    </div>
                    <h4>H5P & SCORM</h4>
                    <span class="tech-use">Interactive Content</span>
                    <p>Developing rich self-assessment tools, learning modules, and SCORM/xAPI compliance for accurate learner progress tracking.</p>
                </div>
                <!-- ReactJS -->
                <div class="tech-card cat-frontend" data-aos="fade-up" data-aos-delay="150" style="--tech-color: #61DAFB; --tech-bg: rgba(97, 218, 251, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-react" aria-hidden="true"></i>
                    </div>
                    <h4>ReactJS</h4>
                    <span class="tech-use">Frontend Framework</span>
                    <p>Architecting highly interactive, responsive single page applications (SPAs) and component-driven user dashboards.</p>
                </div>
                <!-- JS ES6 -->
                <div class="tech-card cat-frontend" data-aos="fade-up" data-aos-delay="200" style="--tech-color: #F59E0B; --tech-bg: rgba(245, 158, 11, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-js" aria-hidden="true"></i>
                    </div>
                    <h4>JavaScript (ES6+)</h4>
                    <span class="tech-use">Client-Side Logic</span>
                    <p>Writing highly performant, custom-tailored scripting to power smooth user interactions and client-side integrations.</p>
                </div>
                <!-- HTML5 CSS3 -->
                <div class="tech-card cat-frontend" data-aos="fade-up" data-aos-delay="250" style="--tech-color: #E34F26; --tech-bg: rgba(227, 79, 38, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-html5" aria-hidden="true"></i>
                    </div>
                    <h4>HTML5 & CSS3</h4>
                    <span class="tech-use">Structure & Styling</span>
                    <p>Utilizing semantic elements for search engine friendliness and advanced styling techniques for pixel-perfect screens.</p>
                </div>
                <!-- PHP & Laravel -->
                <div class="tech-card cat-backend" data-aos="fade-up" data-aos-delay="300" style="--tech-color: #777BB4; --tech-bg: rgba(119, 123, 180, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-php" aria-hidden="true"></i>
                    </div>
                    <h4>PHP & Laravel</h4>
                    <span class="tech-use">Backend & APIs</span>
                    <p>Engineering secure server controllers, database schema management, RESTful endpoint routers, and backend services.</p>
                </div>
                <!-- Node.js -->
                <div class="tech-card cat-backend" data-aos="fade-up" data-aos-delay="350" style="--tech-color: #339933; --tech-bg: rgba(51, 153, 51, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-node-js" aria-hidden="true"></i>
                    </div>
                    <h4>Node.js</h4>
                    <span class="tech-use">Event-Driven Services</span>
                    <p>Developing lightweight, asynchronous backend services, WebSocket communication layers, and API microservices.</p>
                </div>
                <!-- Python -->
                <div class="tech-card cat-backend cat-ai" data-aos="fade-up" data-aos-delay="400" style="--tech-color: #3776AB; --tech-bg: rgba(55, 118, 171, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-python" aria-hidden="true"></i>
                    </div>
                    <h4>Python</h4>
                    <span class="tech-use">AI Models & Scripts</span>
                    <p>Writing analytics pipelines, automated scheduling routines, background workers, and statistical data calculations.</p>
                </div>
                <!-- AWS -->
                <div class="tech-card cat-cloud" data-aos="fade-up" data-aos-delay="450" style="--tech-color: #FF9900; --tech-bg: rgba(255, 153, 0, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-aws" aria-hidden="true"></i>
                    </div>
                    <h4>AWS Cloud</h4>
                    <span class="tech-use">Cloud Infrastructure</span>
                    <p>Configuring highly available cloud computing instances, data backups, CDN delivery networks, and identity policies.</p>
                </div>
                <!-- Microsoft Azure -->
                <div class="tech-card cat-cloud" data-aos="fade-up" data-aos-delay="500" style="--tech-color: #0078D4; --tech-bg: rgba(0, 120, 212, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-microsoft" aria-hidden="true"></i>
                    </div>
                    <h4>MS Azure</h4>
                    <span class="tech-use">Enterprise Hosting</span>
                    <p>Managing enterprise level network structures, cloud integrations, and robust single-sign-on (SSO) frameworks.</p>
                </div>
                <!-- Docker -->
                <div class="tech-card cat-cloud" data-aos="fade-up" data-aos-delay="550" style="--tech-color: #2496ED; --tech-bg: rgba(36, 150, 237, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fab fa-docker" aria-hidden="true"></i>
                    </div>
                    <h4>Docker</h4>
                    <span class="tech-use">Containerization</span>
                    <p>Standardizing system environments using container images for error-free deployment operations across environments.</p>
                </div>
                <!-- AI & ML -->
                <div class="tech-card cat-ai" data-aos="fade-up" data-aos-delay="600" style="--tech-color: #10B981; --tech-bg: rgba(16, 185, 129, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h4>AI & ML</h4>
                    <span class="tech-use">Intelligent Systems</span>
                    <p>Integrating machine learning classification tools, recommender engines, predictive math formulas, and analytics.</p>
                </div>
                <!-- TensorFlow -->
                <div class="tech-card cat-ai" data-aos="fade-up" data-aos-delay="650" style="--tech-color: #FF6F00; --tech-bg: rgba(255, 111, 0, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fas fa-microchip" aria-hidden="true"></i>
                    </div>
                    <h4>TensorFlow</h4>
                    <span class="tech-use">Deep Learning</span>
                    <p>Training and serving neural networks to power custom computer vision tasks and advanced pattern calculations.</p>
                </div>
                <!-- RPA Automation -->
                <div class="tech-card cat-ai" data-aos="fade-up" data-aos-delay="700" style="--tech-color: #EC4899; --tech-bg: rgba(236, 72, 153, 0.08);">
                    <div class="tech-card-icon">
                        <i class="fas fa-cogs" aria-hidden="true"></i>
                    </div>
                    <h4>RPA & Integration</h4>
                    <span class="tech-use">Workflow Automation</span>
                    <p>Designing workflows to automate business routines, scheduling tasks, and handling dynamic software API triggers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Technology Section Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabBtns = document.querySelectorAll('.tech-tab-btn');
            const techCards = document.querySelectorAll('.tech-card');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    tabBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filter = btn.getAttribute('data-filter');

                    // Set filtering transition class
                    techCards.forEach(card => {
                        card.classList.add('filtering');
                    });

                    setTimeout(() => {
                        techCards.forEach(card => {
                            const isAll = (filter === 'all');
                            const matches = isAll || card.classList.contains('cat-' + filter);
                            if (matches) {
                                card.style.display = '';
                            } else {
                                card.style.display = 'none';
                            }
                        });

                        // Trigger reflow/repaint, then fade back in
                        requestAnimationFrame(() => {
                            techCards.forEach(card => {
                                card.classList.remove('filtering');
                            });
                        });
                    }, 250); // Match this with CSS transition duration
                });
            });
        });
    </script>

    <!-- Trusted By Industry Leaders Section -->
    <section class="section clients-section" id="clients">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Trusted By <span class="gradient-text">Industry Leaders</span></h2>
                <p class="section-subtitle">Partnering with world-class organizations across Education, Healthcare, Automotive, Finance, and more to deliver mission-critical IT solutions.</p>
            </div>
        </div>

        <!-- Infinite Auto-Scroll Marquee -->
        <div class="logo-marquee-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="logo-marquee">
                <div class="logo-marquee-track">
                    <!-- First set -->
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/logo.webp'); ?>" alt="CarDekho - Trusted Client of Infinity SoftHub" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/datasosi-logo-final-v3-1.webp'); ?>" alt="Datasosi - Trusted Client of Infinity SoftHub" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/63f1e54c7e596_Logo-01-2048x632.webp'); ?>" alt="Jakson Group - Trusted Client of Infinity SoftHub" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/Logo_1-removebg-preview-300x169-1.webp'); ?>" alt="Maruti Suzuki - Trusted Automotive Client" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/xd-academy-logo-blue-bg.webp'); ?>" alt="XD Academy - Education Platform Client" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/logo_dc12b217ec79ff9b16bcb03607178ce7_1x.png'); ?>" alt="Orient Electric - Enterprise Client" loading="lazy" width="160" height="60">
                    </div>
                    <!-- Duplicate set for seamless loop -->
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/logo.webp'); ?>" alt="CarDekho" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/datasosi-logo-final-v3-1.webp'); ?>" alt="Datasosi" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/63f1e54c7e596_Logo-01-2048x632.webp'); ?>" alt="Jakson Group" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/Logo_1-removebg-preview-300x169-1.webp'); ?>" alt="Maruti Suzuki" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/xd-academy-logo-blue-bg.webp'); ?>" alt="XD Academy" loading="lazy" width="160" height="60">
                    </div>
                    <div class="marquee-logo-item">
                        <img src="<?php echo asset('images/clients/logo_dc12b217ec79ff9b16bcb03607178ce7_1x.png'); ?>" alt="Orient Electric" loading="lazy" width="160" height="60">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="trust-stats-bar" data-aos="fade-up" data-aos-delay="200">
                <div class="trust-stat">
                    <i class="fas fa-handshake" aria-hidden="true"></i>
                    <div><strong>150+</strong> Global Clients</div>
                </div>
                <div class="trust-stat">
                    <i class="fas fa-globe" aria-hidden="true"></i>
                    <div><strong>6</strong> Countries Served</div>
                </div>
                <div class="trust-stat">
                    <i class="fas fa-star" aria-hidden="true"></i>
                    <div><strong>98%</strong> Client Retention</div>
                </div>
                <div class="trust-stat">
                    <i class="fas fa-award" aria-hidden="true"></i>
                    <div><strong>4.9/5</strong> Avg Rating</div>
                </div>
            </div>
        </div>
    </section>

    <style>
    /* ===== Infinite Logo Marquee ===== */
    .logo-marquee-wrapper {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 2rem 0;
    }
    .logo-marquee-wrapper::before,
    .logo-marquee-wrapper::after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 120px;
        z-index: 2;
        pointer-events: none;
    }
    .logo-marquee-wrapper::before {
        left: 0;
        background: linear-gradient(to right, var(--bg-color, #ffffff) 0%, transparent 100%);
    }
    .logo-marquee-wrapper::after {
        right: 0;
        background: linear-gradient(to left, var(--bg-color, #ffffff) 0%, transparent 100%);
    }
    .logo-marquee {
        overflow: hidden;
    }
    .logo-marquee-track {
        display: flex;
        gap: 3.5rem;
        animation: marquee-scroll 30s linear infinite;
        width: max-content;
    }
    .logo-marquee-track:hover {
        animation-play-state: paused;
    }
    @keyframes marquee-scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .marquee-logo-item {
        flex-shrink: 0;
        background: #ffffff;
        border: 1px solid rgba(229, 234, 243, 0.7);
        border-radius: 16px;
        padding: 1.75rem 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 200px;
        min-height: 100px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    .marquee-logo-item:hover {
        border-color: rgba(37, 99, 235, 0.3);
        box-shadow: 0 12px 30px rgba(11, 61, 145, 0.08);
        transform: translateY(-4px);
    }
    .marquee-logo-item img {
        max-width: 140px;
        max-height: 55px;
        object-fit: contain;
        filter: grayscale(100%) opacity(0.5);
        transition: all 0.4s ease;
    }
    .marquee-logo-item:hover img {
        filter: grayscale(0%) opacity(1);
    }

    /* Trust Stats Bar */
    .trust-stats-bar {
        display: flex;
        justify-content: center;
        gap: 3rem;
        flex-wrap: wrap;
        margin-top: 2.5rem;
        padding: 1.75rem 2.5rem;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.04) 0%, rgba(0, 212, 255, 0.04) 100%);
        border: 1px solid rgba(229, 234, 243, 0.7);
        border-radius: 20px;
    }
    .trust-stat {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.95rem;
        color: var(--text-gray);
    }
    .trust-stat i {
        font-size: 1.25rem;
        background: linear-gradient(135deg, #0066FF, #00CCFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .trust-stat strong {
        color: var(--text-dark);
        font-weight: 800;
    }

    @media (max-width: 768px) {
        .logo-marquee-wrapper::before,
        .logo-marquee-wrapper::after {
            width: 40px;
        }
        .marquee-logo-item {
            min-width: 160px;
            padding: 1.25rem 1.75rem;
        }
        .trust-stats-bar {
            gap: 1.5rem;
            padding: 1.25rem 1.5rem;
        }
        .trust-stat {
            font-size: 0.85rem;
        }
    }
    @media (max-width: 480px) {
        .trust-stats-bar {
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }
    }
    </style>

    <!-- CTA Section -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width:800px; margin:0 auto;">
                <h2>
                    Ready to Accelerate Your <span style="color:#60A5FA;">Digital Transformation?</span>
                </h2>
                <p>
                    Whether you need a custom LMS, enterprise web application, AI-powered automation, or cloud migration — our team of 50+ engineers is ready to deliver scalable, secure solutions tailored to your business goals.
                </p>
                <div class="cta-buttons">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn">
                        <i class="fas fa-th-large" aria-hidden="true"></i> Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
