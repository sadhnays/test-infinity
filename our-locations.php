<?php
// our-locations.php
$pageTitle = 'Where We Work | Infinity SoftHub Technologies';
$pageDescription = 'Infinity SoftHub Technologies is based in Faridabad, India and remotely delivers Moodle, LMS, AI and software development services to clients in the USA, UK, Canada and Australia.';
$pageKeywords = 'Infinity SoftHub Faridabad, global LMS development, remote Moodle developers, countries we serve';
$activePage = 'locations';
$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'Infinity SoftHub Technologies',
    'url' => 'https://infinitysofthub.com/',
    'email' => 'info@infinitysofthub.com',
    'telephone' => '+91-129-2985010',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar',
        'addressLocality' => 'Faridabad',
        'addressRegion' => 'Haryana',
        'postalCode' => '121014',
        'addressCountry' => 'IN',
    ],
    'areaServed' => [
        ['@type' => 'Country', 'name' => 'India'],
        ['@type' => 'Country', 'name' => 'United States'],
        ['@type' => 'Country', 'name' => 'United Kingdom'],
        ['@type' => 'Country', 'name' => 'Canada'],
        ['@type' => 'Country', 'name' => 'Australia'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once 'includes/header.php';
?>

    <style>
        .location-summary {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .verified-office-grid {
            max-width: 820px;
            margin: 2.5rem auto 0;
        }

        .verified-office-card {
            cursor: default;
            text-align: left;
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 1.5rem;
            align-items: start;
        }

        .verified-office-card,
        .verified-office-card.active {
            background: var(--white) !important;
            border-color: var(--border) !important;
            color: var(--text-dark) !important;
            transform: none !important;
            box-shadow: none !important;
        }

        .verified-office-card:hover {
            background: var(--white) !important;
            border-color: var(--accent) !important;
            color: var(--text-dark) !important;
            transform: translateY(-4px) !important;
            box-shadow: 0 12px 30px rgba(37, 99, 235, 0.12) !important;
        }

        .verified-office-card .office-icon {
            margin: 0;
        }

        .verified-office-card .office-icon,
        .verified-office-card:hover .office-icon,
        .verified-office-card.active .office-icon {
            background: rgba(37, 99, 235, 0.08) !important;
            color: var(--accent) !important;
        }

        .verified-office-card h3,
        .verified-office-card:hover h3,
        .verified-office-card.active h3 {
            color: var(--text-dark) !important;
        }

        .office-label,
        .remote-label {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            border-radius: 999px;
            padding: 0.35rem 0.7rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.02em;
            margin-bottom: 0.8rem;
        }

        .office-label {
            color: #166534;
            background: #dcfce7;
        }

        .remote-label {
            color: #1d4ed8;
            background: #dbeafe;
        }

        .office-address {
            font-style: normal;
            color: var(--text-gray) !important;
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        .office-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .office-actions a,
        .market-link {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
        }

        .office-actions a:hover,
        .market-link:hover {
            text-decoration: underline;
        }

        .market-card {
            cursor: default;
            text-align: left;
        }

        .market-card,
        .market-card.active {
            background: var(--white) !important;
            border-color: var(--border) !important;
            color: var(--text-dark) !important;
            transform: none !important;
            box-shadow: none !important;
        }

        .market-card:hover {
            background: var(--white) !important;
            border-color: var(--accent) !important;
            color: var(--text-dark) !important;
            transform: translateY(-4px) !important;
            box-shadow: 0 12px 30px rgba(37, 99, 235, 0.12) !important;
        }

        .market-card h3,
        .market-card p,
        .market-card:hover h3,
        .market-card:hover p,
        .market-card.active h3,
        .market-card.active p {
            color: var(--text-dark) !important;
        }

        .market-card .flag {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .market-card p {
            min-height: 4.8rem;
            margin-bottom: 1rem;
            line-height: 1.65;
        }

        .delivery-note {
            max-width: 900px;
            margin: 2rem auto 0;
            padding: 1rem 1.25rem;
            border-left: 4px solid var(--accent);
            background: #eff6ff;
            color: var(--text-gray);
            line-height: 1.7;
        }

        @media (max-width: 640px) {
            .verified-office-card {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Where We <span class="gradient-text">Work</span></h1>
            <p>Based in Faridabad, India. Delivering Moodle, LMS, AI and software solutions remotely worldwide.</p>
        </div>
    </section>

    <!-- Verified Office -->
    <section class="section offices">
        <div class="container">
            <div class="section-header location-summary" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Office</span></h2>
                <p class="section-subtitle">Our team operates from one office in Faridabad and collaborates remotely with clients across international markets.</p>
            </div>

            <div class="verified-office-grid">
                <article class="office-card verified-office-card" data-aos="fade-up">
                    <div class="office-icon" aria-hidden="true">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <span class="office-label"><i class="fas fa-circle-check" aria-hidden="true"></i> Our office</span>
                        <h3>Infinity SoftHub Technologies — Faridabad, India</h3>
                        <address class="office-address">
                            Plot No. 6 &amp; 7, Wazirpur Road, Jeevan Nagar,<br>
                            Sector 87, Neharpar, Faridabad, Haryana 121014, India
                        </address>
                        <div class="office-actions">
                            <a href="https://www.google.com/maps?q=28.4315947,77.343365&amp;z=17&amp;hl=en" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i> View on Google Maps
                            </a>
                            <a href="<?php echo base_url('contact.php'); ?>">
                                <i class="fas fa-calendar-check" aria-hidden="true"></i> Contact us before visiting
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Remote Markets -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Markets We Serve <span class="gradient-text">Remotely</span></h2>
                <p class="section-subtitle">Remote project delivery with clear communication, planned timezone overlap and secure online collaboration.</p>
            </div>

            <div class="offices-grid">
                <article class="office-card market-card" data-aos="fade-up">
                    <div class="flag" aria-hidden="true">🇺🇸</div>
                    <span class="remote-label"><i class="fas fa-globe" aria-hidden="true"></i> Remote delivery</span>
                    <h3>United States</h3>
                    <p>Moodle and LMS development for US schools, training companies and organizations—delivered remotely from India.</p>
                    <a class="market-link" href="<?php echo base_url('services/moodle-lms-development-usa.php'); ?>">Explore services for the USA <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>

                <article class="office-card market-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flag" aria-hidden="true">🇬🇧</div>
                    <span class="remote-label"><i class="fas fa-globe" aria-hidden="true"></i> Remote delivery</span>
                    <h3>United Kingdom</h3>
                    <p>Remote LMS development, integrations and platform support for UK education and workplace-learning teams.</p>
                    <a class="market-link" href="<?php echo base_url('services/moodle-lms-development-uk.php'); ?>">Explore services for the UK <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>

                <article class="office-card market-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flag" aria-hidden="true">🇨🇦</div>
                    <span class="remote-label"><i class="fas fa-globe" aria-hidden="true"></i> Remote delivery</span>
                    <h3>Canada</h3>
                    <p>Custom Moodle, LearnDash and eLearning engineering for Canadian institutions and training providers.</p>
                    <a class="market-link" href="<?php echo base_url('services/moodle-lms-development-canada.php'); ?>">Explore services for Canada <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>

                <article class="office-card market-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flag" aria-hidden="true">🇦🇺</div>
                    <span class="remote-label"><i class="fas fa-globe" aria-hidden="true"></i> Remote delivery</span>
                    <h3>Australia</h3>
                    <p>Remote LMS customization, migrations and support for Australian education and corporate-training projects.</p>
                    <a class="market-link" href="<?php echo base_url('services/moodle-lms-development-australia.php'); ?>">Explore services for Australia <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </article>
            </div>

            <p class="delivery-note" data-aos="fade-up">
                <strong>Location clarification:</strong> USA, UK, Canada and Australia are markets we serve remotely. Infinity SoftHub Technologies does not present these countries as physical office locations.
            </p>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Start a <span class="gradient-text">Conversation</span></h2>
                <p class="section-subtitle">Tell us about your LMS, AI learning or software-development requirements.</p>
            </div>

            <div class="services-grid">
                <div class="value-card" data-aos="fade-up">
                    <div class="card-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@infinitysofthub.com">info@infinitysofthub.com</a></p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon"><i class="fas fa-phone" aria-hidden="true"></i></div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+911292985010">+91-129-2985010</a></p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon"><i class="fas fa-video" aria-hidden="true"></i></div>
                    <h3>Remote Meeting</h3>
                    <p>Schedule an online discovery call from anywhere.</p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon"><i class="fas fa-clock" aria-hidden="true"></i></div>
                    <h3>Office Hours</h3>
                    <p>Monday–Friday, 9:00 AM–6:00 PM IST</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width:800px; margin:0 auto;">
                <h2 style="color:white; font-size:clamp(1.75rem, 4vw, 3rem); margin-bottom:1.5rem;">
                    Need a Reliable <span style="color:#60A5FA;">Remote Development Partner?</span>
                </h2>
                <p style="color:rgba(255,255,255,0.8); font-size:1.1rem; margin-bottom:2.5rem; line-height:1.8;">
                    Share your Moodle, LMS, AI or custom software requirements and we will suggest a practical next step.
                </p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent); font-weight:600;">
                    <i class="fas fa-handshake" aria-hidden="true"></i> Discuss Your Project
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
