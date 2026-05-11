<?php
// portfolio.php
$pageTitle = "Portfolio | Infinity SoftHub - Our Work & Projects";
$pageDescription = "Explore Infinity SoftHub's portfolio of digital transformation projects, web development, mobile apps, and enterprise solutions.";
$pageKeywords = "portfolio, our work, digital transformation projects, web development portfolio, mobile app portfolio";
$activePage = 'portfolio';

require_once 'includes/header.php';

// Build project data for JavaScript (safe JSON encoding)
$projectsData = [
    'university-lms' => [
        'title' => 'University LMS Transformation',
        'badge' => 'Moodle / LMS',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/moodle-lms-development.jpg'),
        'description' => 'A comprehensive transformation of a university learning management system serving over 10,000 students. We completely redesigned the Moodle platform with custom themes, 20+ plugins, and integrated AI-powered course recommendation engine. The platform now supports mobile learning, gamified assessments, and real-time analytics dashboards for both students and faculty.',
        'highlights' => ['10,000+ active students', '40% engagement boost', '20+ custom plugins', 'AI-powered course recommendations', 'Mobile-responsive design', 'Real-time analytics'],
        'tech' => ['Moodle', 'PHP', 'JavaScript', 'MySQL', 'AI/ML', 'REST API'],
        'duration' => '8 months',
        'type' => 'Education',
        'challenge' => 'The university was using an outdated Moodle installation with poor user experience, low engagement rates, and no mobile support. Faculty struggled with content management, and students found navigation confusing.',
        'solution' => 'We conducted a thorough audit of the existing system and developed a comprehensive migration plan. We designed custom themes matching the university branding, developed 20+ plugins for specific workflows, and integrated an AI engine for personalized course recommendations. The new platform features a responsive design, gamified assessments, and real-time analytics.',
        'results' => ['10,000+ students migrated seamlessly', '40% increase in course engagement', '95% student satisfaction rate', '50% reduction in support tickets', 'Mobile usage increased by 300%']
    ],
    'angular-app' => [
        'title' => 'Enterprise Dashboard Platform',
        'badge' => 'Angular / Web',
        'badgeClass' => 'badge-success',
        'image' => asset('images/about/custom.jpg'),
        'description' => 'Built an enterprise-grade dashboard platform using Angular 17+ with TypeScript. Features real-time data analytics, role-based access control, and AI-driven insights. The platform serves 5,000+ enterprise users across multiple departments with seamless data integration from various sources.',
        'highlights' => ['5,000+ enterprise users', '60% faster load time', 'Real-time analytics', 'Role-based access control', 'AI-driven insights', 'Microservices architecture'],
        'tech' => ['Angular', 'TypeScript', 'RxJS', 'NgRx', 'Node.js', 'Docker'],
        'duration' => '6 months',
        'type' => 'Web Application',
        'challenge' => 'The client needed a unified dashboard to replace multiple legacy systems used across departments. The existing tools were slow, lacked real-time data, and had inconsistent user interfaces.',
        'solution' => 'We designed and built a modern Angular 17+ dashboard with microservices backend architecture. Implemented real-time data streaming, role-based access control with granular permissions, and AI-powered analytics dashboards. Used RxJS and NgRx for state management.',
        'results' => ['Consolidated 5 legacy systems into 1', '60% improvement in page load times', 'Real-time data across all departments', '5,000+ active enterprise users', '40% increase in operational efficiency']
    ],
    'wordpress-cms' => [
        'title' => 'Corporate Website & Blog Portal',
        'badge' => 'WordPress / CMS',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/hosting-migration.jpg'),
        'description' => 'Developed a corporate website with headless WordPress CMS architecture. Features custom theme design, advanced SEO optimization, WooCommerce integration, and a blog portal with content management workflow. Achieved 85% traffic boost within 6 months of launch.',
        'highlights' => ['200+ pages created', '85% traffic boost', 'Headless CMS architecture', 'WooCommerce integration', 'Advanced SEO', 'Content workflow'],
        'tech' => ['WordPress', 'PHP', 'React', 'WooCommerce', 'Yoast SEO'],
        'duration' => '5 months',
        'type' => 'Website',
        'challenge' => 'The client had an outdated corporate website with poor SEO, no content workflow, and an incompatible e-commerce setup. They needed a modern, scalable solution that could handle 200+ pages and a blog portal.',
        'solution' => 'We built a headless WordPress architecture with a custom React front-end. Implemented advanced SEO strategies with Yoast, created streamlined content workflows, and integrated WooCommerce for their e-commerce needs. Custom theme designed to match brand guidelines.',
        'results' => ['85% organic traffic increase in 6 months', '200+ pages with consistent design', '50% faster content publishing', '3x increase in blog subscribers', 'Top 3 rankings for target keywords']
    ],
    'mobile-cms' => [
        'title' => 'Retail Mobile App & CMS',
        'badge' => 'Mobile CMS',
        'badgeClass' => 'badge-success',
        'image' => asset('images/about/Mobile-app.jpg'),
        'description' => 'Cross-platform mobile application with headless CMS backend for a retail enterprise. Features include push notifications, offline sync, real-time inventory tracking, and personalized shopping experience. The app achieved 4.8 star rating with 50,000+ downloads.',
        'highlights' => ['50,000+ downloads', '4.8 star app rating', 'Offline sync capability', 'Push notifications', 'Real-time inventory', 'Personalized UX'],
        'tech' => ['React Native', 'Firebase', 'GraphQL', 'Headless CMS', 'AWS'],
        'duration' => '7 months',
        'type' => 'Mobile Application',
        'challenge' => 'The retail client needed a unified mobile experience across iOS and Android with real-time inventory, personalized recommendations, and reliable offline capabilities for areas with poor connectivity.',
        'solution' => 'We developed a React Native cross-platform app with headless CMS backend. Implemented offline-first architecture with data sync, Firebase push notifications, GraphQL API for fast data queries, and personalized shopping experience using recommendation algorithms.',
        'results' => ['50,000+ app downloads', '4.8 star average rating', '30% increase in mobile sales', '99.5% sync reliability', '40% reduction in load times']
    ],
    'fitness-app' => [
        'title' => 'Fitness Tracking Application',
        'badge' => 'Mobile App',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/Mobile-app2.jpg'),
        'description' => 'A comprehensive fitness tracking app built with React Native. Features personalized workout plans, health monitoring, social sharing, and real-time analytics. Users can track their fitness goals, view progress charts, and connect with fitness communities.',
        'highlights' => ['100,000+ active users', '4.9 star app rating', 'Personalized workout plans', 'Social sharing features', 'Health tracking integration', 'Real-time analytics'],
        'tech' => ['React Native', 'Node.js', 'MongoDB', 'Firebase', 'Health API'],
        'duration' => '6 months',
        'type' => 'Mobile Application',
        'challenge' => 'The client wanted a comprehensive fitness platform that combined workout tracking, social features, and health monitoring in a single intuitive mobile experience.',
        'solution' => 'Built a React Native app with personalized AI workout recommendations, social feed integration, health data syncing from wearables, and real-time progress analytics. Implemented gamification elements to boost user engagement.',
        'results' => ['100,000+ active users', '4.9 star app store rating', '60% daily active users', '3x increase in premium subscriptions', 'Featured in App Store']
    ],
    'cloud-migration' => [
        'title' => 'Cloud Migration Platform',
        'badge' => 'Cloud Solutions',
        'badgeClass' => 'badge-success',
        'image' => asset('images/about/Cloud-ai.jpg'),
        'description' => 'Successfully migrated 50+ enterprise servers to AWS cloud infrastructure with zero-downtime strategy. Implemented auto-scaling, containerized services with Docker and Kubernetes, and achieved 40% cost reduction while improving performance and reliability.',
        'highlights' => ['50+ servers migrated', '40% cost reduction', 'Zero downtime', 'Auto-scaling enabled', 'Containerized architecture', '99.99% uptime'],
        'tech' => ['AWS', 'Docker', 'Kubernetes', 'Terraform', 'CI/CD', 'Monitoring'],
        'duration' => '10 months',
        'type' => 'Cloud Infrastructure',
        'challenge' => 'The enterprise client was running on-premise infrastructure with scaling limitations, high maintenance costs, and reliability concerns. They needed migration to cloud with zero downtime and cost optimization.',
        'solution' => 'We designed a phased migration strategy using Terraform for infrastructure as code, Docker for containerization, and Kubernetes for orchestration. Implemented CI/CD pipelines, auto-scaling policies, and comprehensive monitoring with Grafana and Prometheus.',
        'results' => ['Zero downtime during migration', '40% infrastructure cost reduction', 'Auto-scaling handles 10x traffic spikes', '99.99% uptime achieved', 'Deployment time reduced by 80%']
    ],
    'medical-lms' => [
        'title' => 'Medical Training LMS',
        'badge' => 'Healthcare / LMS',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/ai-lms2.jpg'),
        'description' => 'Specialized Moodle-based learning management system for medical professionals. Features CME tracking, AI-powered content recommendations, HIPAA-compliant architecture, and certification management. Currently serving 2,000+ doctors and medical staff.',
        'highlights' => ['2,000+ medical professionals', '100% HIPAA compliance', 'CME tracking system', 'AI content recommendations', 'Certification management', 'Multi-tenant architecture'],
        'tech' => ['Moodle', 'PHP', 'AI/ML', 'HIPAA Compliance', 'MySQL', 'REST API'],
        'duration' => '9 months',
        'type' => 'Healthcare',
        'challenge' => 'Medical training institution needed a specialized LMS that met strict HIPAA requirements, tracked Continuing Medical Education (CME) credits, and provided AI-powered learning paths for diverse medical specialties.',
        'solution' => 'We customized Moodle with HIPAA-compliant architecture, built CME tracking and certification modules, and integrated AI-powered content recommendations. Implemented multi-tenant architecture supporting different medical departments with role-based access.',
        'results' => ['2,000+ doctors enrolled', '100% regulatory compliance', '85% course completion rate', '40% faster certification processing', 'AI recommendations improved engagement by 60%']
    ],
    'e-learning' => [
        'title' => 'E-Learning Platform',
        'badge' => 'E-Learning',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/moodle-development.jpg'),
        'description' => 'Scalable e-learning platform serving 5,000+ students with real-time progress tracking, interactive course content, and AI-powered assessments. Built on Moodle with custom plugins and modern front-end interface.',
        'highlights' => ['5,000+ enrolled students', 'AI-powered assessments', 'Interactive course content', 'Real-time progress tracking', 'Mobile-responsive', 'Multi-language support'],
        'tech' => ['Moodle', 'React', 'PHP', 'MySQL', 'AI/ML', 'WebRTC'],
        'duration' => '7 months',
        'type' => 'Education',
        'challenge' => 'Educational startup needed a scalable online learning platform that could handle thousands of concurrent students with interactive content, live sessions, and intelligent assessments.',
        'solution' => 'We built a custom Moodle platform with React front-end, interactive video content, real-time progress dashboards, AI-powered assessment engine, and live class streaming via WebRTC. Multi-language support for international students.',
        'results' => ['5,000+ students enrolled', '90% course completion rate', 'AI assessments reduced grading time by 70%', '4.8 star student satisfaction', 'Live classes support 500 concurrent users']
    ],
    'corporate-training' => [
        'title' => 'Enterprise Training Portal',
        'badge' => 'Corporate / Training',
        'badgeClass' => 'badge-success',
        'image' => asset('images/about/hosting-migration.jpg'),
        'description' => 'Angular-based corporate training portal integrated with Moodle LMS. Features employee progress tracking, certification management, automated reporting, and AI analytics for training effectiveness measurement.',
        'highlights' => ['5,000+ employees trained', '60% faster onboarding', 'Automated reporting', 'Certification management', 'AI analytics', 'SSO integration'],
        'tech' => ['Angular', 'TypeScript', 'Moodle', 'Node.js', 'AI Analytics'],
        'duration' => '8 months',
        'type' => 'Corporate Training',
        'challenge' => 'Fortune 500 company needed a centralized training platform to onboard 5,000+ employees across regions, track progress, and measure training effectiveness with automated reporting.',
        'solution' => 'We developed an Angular-based training portal integrated with Moodle backend. Implemented SSO, automated certification workflows, AI-based analytics for training effectiveness, and real-time progress dashboards for HR teams.',
        'results' => ['60% faster onboarding', '5,000+ employees trained', 'Automated 80% of reporting', 'Training costs reduced by 35%', '100% compliance tracking']
    ],
    'security-solutions' => [
        'title' => 'Enterprise Security Solutions',
        'badge' => 'Security',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/security-solutions.jpg'),
        'description' => 'Comprehensive cybersecurity platform providing threat detection, real-time monitoring, automated incident response, and compliance management. Achieved 99.9% uptime with zero security breaches since deployment.',
        'highlights' => ['99.9% uptime', 'Zero security breaches', 'Threat detection', 'Automated response', 'SOC2 compliance', '24/7 monitoring'],
        'tech' => ['CyberSecurity', 'AI/ML', 'SOC2', 'Cloud', 'Monitoring'],
        'duration' => '12 months',
        'type' => 'Security',
        'challenge' => 'Enterprise needed a comprehensive security platform to monitor threats across their infrastructure, ensure SOC2 compliance, and respond to incidents automatically without human intervention.',
        'solution' => 'We built a security monitoring platform with AI-powered threat detection, automated incident response playbooks, real-time alerting, and compliance dashboards. Integrated with existing infrastructure for comprehensive coverage.',
        'results' => ['Zero breaches since deployment', '99.9% platform uptime', 'Threat response time reduced by 90%', 'Full SOC2 compliance achieved', '24/7 automated monitoring']
    ],
    'data-analytics' => [
        'title' => 'Data Analytics Dashboard',
        'badge' => 'Data & AI',
        'badgeClass' => 'badge-success',
        'image' => asset('images/about/digital-marketing.jpg'),
        'description' => 'Real-time business intelligence platform processing millions of data points daily. Features interactive data visualizations, predictive analytics, automated reporting, and custom dashboard creation for enterprise clients.',
        'highlights' => ['1M+ daily data points', 'Real-time processing', 'Predictive analytics', 'Interactive dashboards', 'Automated reports', 'Custom visualizations'],
        'tech' => ['Python', 'D3.js', 'Pandas', 'ML Models', 'PostgreSQL'],
        'duration' => '9 months',
        'type' => 'Data & Analytics',
        'challenge' => 'Enterprise client needed to consolidate data from multiple sources into a unified analytics platform with real-time processing, predictive insights, and customizable dashboards for different departments.',
        'solution' => 'We built a data pipeline using Python and PostgreSQL, created interactive D3.js visualizations, implemented ML models for predictive analytics, and built a dashboard builder allowing custom report creation across departments.',
        'results' => ['Processed 1M+ data points daily', 'Real-time dashboard updates <1s', 'Predictive accuracy improved by 35%', 'Report generation time reduced by 80%', 'Adopted across 12 departments']
    ],
    'ui-ux-design' => [
        'title' => 'UI/UX Design System',
        'badge' => 'Design',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/ui-ux.jpg'),
        'description' => 'Complete design system with 50+ reusable components, accessibility compliance (WCAG 2.1), developer documentation, and Figma-to-code handoff tools. Streamlined design consistency across all products.',
        'highlights' => ['50+ UI components', 'WCAG 2.1 compliant', 'Figma integration', 'Storybook documentation', 'Developer handoff', 'Design tokens'],
        'tech' => ['Figma', 'Storybook', 'CSS/Tailwind', 'React', 'Accessibility'],
        'duration' => '4 months',
        'type' => 'UI/UX Design',
        'challenge' => 'Multiple products had inconsistent design patterns, slow development cycles due to lack of reusable components, and accessibility gaps that needed to be addressed across the organization.',
        'solution' => 'We created a comprehensive design system with 50+ accessible components, design tokens for consistent theming, Storybook documentation for developers, and Figma-to-code handoff tools to bridge the design-development gap.',
        'results' => ['50+ reusable components', '30% faster development', 'WCAG 2.1 AA compliance', 'Consistent branding across all products', 'Designer-developer handoff time reduced by 60%']
    ],
    'client-k12' => [
        'title' => 'K12 School Learning Platform',
        'badge' => 'Education',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/avatar-icon.png'),
        'description' => 'Complete digital learning ecosystem for K-12 schools featuring parent portals, grade tracking, attendance management, and interactive learning modules. Deployed across multiple school districts.',
        'highlights' => ['School-wide deployment', 'Parent portal integration', 'Grade tracking system', 'Attendance management', 'Interactive modules', 'Mobile responsive'],
        'tech' => ['Moodle', 'PHP', 'MySQL', 'JavaScript', 'Responsive Design'],
        'duration' => '6 months',
        'type' => 'Education',
        'challenge' => 'School district needed a unified digital platform to replace paper-based processes, provide parents with real-time access to grades and attendance, and deliver interactive learning content to students.',
        'solution' => 'We deployed a customized Moodle platform with parent/student/teacher portals, automated grade tracking, attendance management, interactive learning modules, and mobile-responsive design for accessibility from any device.',
        'results' => ['Deployed across 20+ schools', '95% parent engagement rate', '80% reduction in administrative work', 'Student performance tracking improved', 'Paper usage reduced by 90%']
    ],
    'client-talent' => [
        'title' => 'Multi-Talent Management System',
        'badge' => 'Multi-Talent',
        'badgeClass' => 'badge-success',
        'image' => asset('images/about/businessman.jpg'),
        'description' => 'Talent management platform with comprehensive skill assessment tools, automated course allocation, performance analytics, and workforce planning capabilities.',
        'highlights' => ['Skill assessment engine', 'Automated course allocation', 'Performance analytics', 'Workforce planning', 'Multi-tenant architecture', 'Real-time dashboard'],
        'tech' => ['Angular', 'Node.js', 'MongoDB', 'Express', 'REST API'],
        'duration' => '8 months',
        'type' => 'Enterprise Software',
        'challenge' => 'Client needed a unified talent management system to assess employee skills, allocate training courses, track performance, and plan workforce development across multiple business units.',
        'solution' => 'We built a multi-tenant talent management platform with AI-driven skill assessment, automated course recommendations, performance dashboards, and workforce planning tools integrated with HR systems.',
        'results' => ['5000+ employees managed', 'Training costs reduced by 25%', 'Skill gap identification improved by 70%', 'Employee retention increased 15%', 'Automated 90% of course allocation']
    ],
    'client-networking' => [
        'title' => 'Networking Training Platform',
        'badge' => 'Networking',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/ai-lms.jpg'),
        'description' => 'Professional networking and IT certification training platform with lab simulations, interactive assessments, progress tracking, and industry-recognized certification pathways.',
        'highlights' => ['Lab simulations', 'IT certification prep', 'Interactive assessments', 'Progress tracking', 'Industry certifications', 'Global reach'],
        'tech' => ['React', 'AWS', 'Docker', 'Node.js', 'MongoDB'],
        'duration' => '7 months',
        'type' => 'Training Platform',
        'challenge' => 'Training organization needed a platform that combined networking theory with hands-on lab simulations, certification tracking, and community features for IT professionals worldwide.',
        'solution' => 'We developed a platform with browser-based lab simulations, certification tracking aligned with industry standards (CCNA, AWS, Azure), interactive assessments, and community features for peer learning.',
        'results' => ['10,000+ certification candidates', 'Lab simulation accuracy 99%', '85% first-attempt pass rate', 'Global users across 30+ countries', '40% faster certification completion']
    ],
    'video-learning' => [
        'title' => 'Video Learning Platform',
        'badge' => 'Video Learning',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/ai-lms.jpg'),
        'description' => 'Cross-platform video learning platform featuring live classes, recorded sessions, interactive Q&A, community forums, and AI-powered content recommendations for enhanced learning experience.',
        'highlights' => ['Live streaming classes', 'Recorded sessions library', 'Interactive Q&A', 'Community forums', 'AI recommendations', 'Multi-device support'],
        'tech' => ['React', 'Node.js', 'WebRTC', 'Socket.io', 'MongoDB'],
        'duration' => '9 months',
        'type' => 'EdTech Platform',
        'challenge' => 'Educational startup needed a video learning platform with live streaming, community engagement, and personalized content discovery to compete in the growing EdTech market.',
        'solution' => 'We built a full-stack video learning platform with WebRTC live streaming, video-on-demand library, real-time Q&A, community forums, and AI-powered content recommendations based on viewing history and preferences.',
        'results' => ['50,000+ registered users', '10,000 concurrent live viewers', '85% average watch time completion', 'Community engagement up 300%', 'AI recommendations drove 40% more course completions']
    ],
    'new-learning' => [
        'title' => 'Next-Gen Adaptive Learning Platform',
        'badge' => 'Innovation',
        'badgeClass' => 'badge-success',
        'image' => asset('images/Power-BI-consulting.jpg'),
        'description' => 'AI-driven adaptive learning platform that personalizes course content based on learner behavior, performance, and preferences. Features intelligent assessments, spaced repetition, and predictive analytics.',
        'highlights' => ['AI adaptive learning', 'Personalized pathways', 'Intelligent assessments', 'Spaced repetition', 'Predictive analytics', 'Multi-language'],
        'tech' => ['AI/ML', 'Python', 'Vue.js', 'FastAPI', 'PostgreSQL'],
        'duration' => '10 months',
        'type' => 'Innovation',
        'challenge' => 'EdTech company needed a platform that could adapt to each learner pace and style, predict learning outcomes, and optimize content delivery for maximum knowledge retention.',
        'solution' => 'We built an AI-first learning platform using machine learning models that analyze learner behavior, adapt content difficulty in real-time, implement spaced repetition algorithms, and provide predictive analytics to instructors.',
        'results' => ['60% improvement in learning outcomes', 'Adaptive paths reduced dropout by 45%', 'AI predictions 85% accurate', 'Multi-language support for 15 languages', 'Scaled to 50,000+ learners']
    ],
    'bi-intelligence' => [
        'title' => 'Business Intelligence Tool',
        'badge' => 'BI Intelligence',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/Data-driven marketing concept, professional marketer analyzing marketing data and analytics, digital marketing dashboard with charts and graphs, customer data visualization, ROI metrics, conversion rates, marketing .jpg'),
        'description' => 'Comprehensive business intelligence dashboard with automated reporting, real-time data visualization, predictive insights, and custom metric tracking for enterprise decision-making.',
        'highlights' => ['Automated reporting', 'Real-time dashboards', 'Predictive insights', 'Custom KPIs', 'Data integration', 'Export capabilities'],
        'tech' => ['Power BI', 'Azure', 'SQL Server', 'Python', 'REST API'],
        'duration' => '6 months',
        'type' => 'Business Intelligence',
        'challenge' => 'Enterprise needed a unified BI platform to consolidate data from multiple business units, provide real-time insights to decision-makers, and automate reporting processes that were consuming hundreds of analyst hours.',
        'solution' => 'We developed a BI platform integrating Power BI dashboards with Azure data services, automated ETL pipelines, predictive analytics models, and custom KPI tracking. Data integrated from 15+ sources with role-based dashboard access.',
        'results' => ['Report generation time reduced by 80%', 'Real-time decision making enabled', '35% improvement in forecasting accuracy', 'ROI dashboard across all business units', 'Self-service analytics for 500+ users']
    ]
];
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-briefcase" aria-hidden="true"></i> Our Portfolio
                </div>
                <h1>Our <span class="gradient-text">Portfolio</span></h1>
                <p class="hero-subtitle">Showcasing our best digital transformation work across technologies and industries.</p>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 1: Web Development Projects (3 Box) -->
    <!-- ============================================ -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Web Development</div>
                <h2>Web <span class="gradient-text">Projects</span></h2>
                <p class="lead">Modern web platforms built with cutting-edge technologies.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="card portfolio-card" data-aos="zoom-in" data-project="university-lms" onclick="openProjectDetail('university-lms')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/moodle-lms-development.jpg'); ?>" alt="University LMS Transformation" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/0066ff/ffffff?text=University+LMS'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Moodle / LMS</div>
                        <h4>University LMS Transformation</h4>
                        <p class="text-secondary mb-1rem">Custom Moodle platform for 10,000+ students with AI-powered course recommendations and mobile app integration.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 10,000+ Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 40% Engagement</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Moodle</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">AI</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="100" data-project="angular-app" onclick="openProjectDetail('angular-app')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/custom.jpg'); ?>" alt="Enterprise Dashboard Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/0B3D91/ffffff?text=Angular+App'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Angular / Web</div>
                        <h4>Enterprise Dashboard Platform</h4>
                        <p class="text-secondary mb-1rem">Built with Angular 17+ featuring real-time analytics, role-based access, and AI-driven insights for enterprise clients.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 5,000+ Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 60% Faster Load</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Angular</span>
                            <span class="tech-tag">TypeScript</span>
                            <span class="tech-tag">RxJS</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="200" data-project="wordpress-cms" onclick="openProjectDetail('wordpress-cms')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/hosting-migration.jpg'); ?>" alt="Corporate Website & Blog Portal" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/10B981/ffffff?text=WordPress+CMS'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">WordPress / CMS</div>
                        <h4>Corporate Website & Blog Portal</h4>
                        <p class="text-secondary mb-1rem">Custom WordPress theme with headless CMS architecture, SEO optimization, and WooCommerce integration.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 200+ Pages</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 85% Traffic Boost</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">WordPress</span>
                            <span class="tech-tag">WooCommerce</span>
                            <span class="tech-tag">SEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- SECTION 2: Mobile & Cloud Projects (3 Box)   -->
    <!-- ============================================== -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Mobile & Cloud</div>
                <h2>Mobile & <span class="gradient-text">Cloud</span> Projects</h2>
                <p class="lead">Cross-platform mobile apps and cloud-native enterprise solutions.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="card portfolio-card" data-aos="zoom-in" data-project="mobile-cms" onclick="openProjectDetail('mobile-cms')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/Mobile-app.jpg'); ?>" alt="Retail Mobile App & CMS" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/8B5CF6/ffffff?text=Mobile+CMS'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Mobile CMS</div>
                        <h4>Retail Mobile App & CMS</h4>
                        <p class="text-secondary mb-1rem">Cross-platform mobile app (iOS/Android) with headless CMS backend, push notifications, and offline sync.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 50K+ Downloads</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 4.8&star; Rating</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Firebase</span>
                            <span class="tech-tag">GraphQL</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="100" data-project="fitness-app" onclick="openProjectDetail('fitness-app')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/Mobile-app2.jpg'); ?>" alt="Fitness Tracking App" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/2563EB/ffffff?text=Fitness+App'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Mobile App</div>
                        <h4>Fitness Tracking Application</h4>
                        <p class="text-secondary mb-1rem">React Native app with health tracking, workout plans, social sharing, and real-time analytics dashboard.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 100K+ Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 4.9&star; Rating</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="200" data-project="cloud-migration" onclick="openProjectDetail('cloud-migration')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/Cloud-ai.jpg'); ?>" alt="Cloud Migration Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/60A5FA/ffffff?text=Cloud+Migration'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Cloud Solutions</div>
                        <h4>Cloud Migration Platform</h4>
                        <p class="text-secondary mb-1rem">Migrated 50+ servers to AWS with zero-downtime, auto-scaling, and 40% cost reduction using Kubernetes orchestration.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 50+ Servers</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 40% Cost Cut</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">AWS</span>
                            <span class="tech-tag">Docker</span>
                            <span class="tech-tag">K8s</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 3: AI & Education Projects (3 Box)  -->
    <!-- ============================================ -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">AI & Education</div>
                <h2>AI & <span class="gradient-text">Learning</span> Projects</h2>
                <p class="lead">Intelligent learning platforms powered by AI and modern technology.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="card portfolio-card" data-aos="zoom-in" data-project="medical-lms" onclick="openProjectDetail('medical-lms')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/ai-lms2.jpg'); ?>" alt="Medical Training LMS" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/EF4444/ffffff?text=Medical+LMS'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Healthcare / LMS</div>
                        <h4>Medical Training LMS</h4>
                        <p class="text-secondary mb-1rem">Specialized Moodle platform for medical professionals with CME tracking, AI content recommendations, and HIPAA compliance.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 2,000+ Doctors</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 100% Compliance</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Moodle</span>
                            <span class="tech-tag">AI</span>
                            <span class="tech-tag">HIPAA</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="100" data-project="e-learning" onclick="openProjectDetail('e-learning')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/moodle-development.jpg'); ?>" alt="E-Learning Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/06B6D4/ffffff?text=E-Learning'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">E-Learning</div>
                        <h4>E-Learning Platform</h4>
                        <p class="text-secondary mb-1rem">Scalable e-learning platform serving 5,000+ students with real-time progress tracking and AI-powered assessments.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 5,000+ Students</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> AI Powered</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Moodle</span>
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">AI</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="200" data-project="corporate-training" onclick="openProjectDetail('corporate-training')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/hosting-migration.jpg'); ?>" alt="Enterprise Training Portal" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/F59E0B/ffffff?text=Corporate+Training'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Corporate / Training</div>
                        <h4>Enterprise Training Portal</h4>
                        <p class="text-secondary mb-1rem">Angular-based training portal with Moodle integration, progress tracking, certification management, and AI analytics.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 5,000+ Employees</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 60% Faster</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Angular</span>
                            <span class="tech-tag">Moodle</span>
                            <span class="tech-tag">AI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 4: Special Projects (3 Box)         -->
    <!-- ============================================ -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Special Projects</div>
                <h2>More <span class="gradient-text">Projects</span></h2>
                <p class="lead">Additional work showcasing our diverse expertise.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="card portfolio-card" data-aos="zoom-in" data-project="security-solutions" onclick="openProjectDetail('security-solutions')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/security-solutions.jpg'); ?>" alt="Security Solutions" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/6366F1/ffffff?text=Security+Solutions'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Security</div>
                        <h4>Enterprise Security Solutions</h4>
                        <p class="text-secondary mb-1rem">Comprehensive cybersecurity platform with threat detection, monitoring, and automated incident response.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 99.9% Uptime</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 0 Breaches</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">CyberSec</span>
                            <span class="tech-tag">AI</span>
                            <span class="tech-tag">SOC2</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="100" data-project="data-analytics" onclick="openProjectDetail('data-analytics')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/digital-marketing.jpg'); ?>" alt="Data Analytics Dashboard" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/EC4899/ffffff?text=Data+Analytics'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Data & AI</div>
                        <h4>Data Analytics Dashboard</h4>
                        <p class="text-secondary mb-1rem">Real-time analytics platform processing millions of data points with interactive visualizations and predictive insights.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 1M+ Data Points</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Real-Time</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">D3.js</span>
                            <span class="tech-tag">ML</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="200" data-project="ui-ux-design" onclick="openProjectDetail('ui-ux-design')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/ui-ux.jpg'); ?>" alt="UI/UX Design System" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/06B6D4/ffffff?text=UI+UX+Design'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Design</div>
                        <h4>UI/UX Design System</h4>
                        <p class="text-secondary mb-1rem">Complete design system with component library, accessibility compliance, and developer handoff tools.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 50+ Components</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> WCAG 2.1</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Figma</span>
                            <span class="tech-tag">Storybook</span>
                            <span class="tech-tag">CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 5: CLIENT SHOWCASE (3 Box)         -->
    <!-- ============================================ -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Clients</div>
                <h2>Trusted <span class="gradient-text">Partners</span></h2>
                <p class="lead">Leading organizations we've delivered transformative solutions for.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="card portfolio-card" data-aos="zoom-in" data-project="client-k12" onclick="openProjectDetail('client-k12')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/avatar-icon.png'); ?>" alt="K12 School Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/0066ff/ffffff?text=K12+School'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Education</div>
                        <h4>K12 School Learning Platform</h4>
                        <p class="text-secondary mb-1rem">Complete digital learning ecosystem for K-12 schools with parent portals and grade tracking.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> Live Platform</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Responsive</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Moodle</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="100" data-project="client-talent" onclick="openProjectDetail('client-talent')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/businessman.jpg'); ?>" alt="Multi-Talent Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/10B981/ffffff?text=Multi-Talent'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Multi-Talent</div>
                        <h4>Multi-Talent Management System</h4>
                        <p class="text-secondary mb-1rem">Talent management platform with skill assessment, course allocation, and performance analytics.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> Live Platform</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Scalable</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Angular</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="200" data-project="client-networking" onclick="openProjectDetail('client-networking')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/ai-lms.jpg'); ?>" alt="Networking Training Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/F59E0B/ffffff?text=Networking+Training'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Networking</div>
                        <h4>Networking Training Platform</h4>
                        <p class="text-secondary mb-1rem">Professional networking and IT certification training platform with lab simulations and assessments.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> Live Platform</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Global</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">AWS</span>
                            <span class="tech-tag">Docker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 6: VIDEO LEARNING (3 Box)          -->
    <!-- ============================================ -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Video Learning</div>
                <h2>Learning <span class="gradient-text">Platforms</span></h2>
                <p class="lead">Engaging video-based learning and community platforms.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="card portfolio-card" data-aos="zoom-in" data-project="video-learning" onclick="openProjectDetail('video-learning')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/ai-lms.jpg'); ?>" alt="Video Learning App" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/2563EB/ffffff?text=Video+Learning'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Video Learning</div>
                        <h4>Video Learning Mobile App & Web</h4>
                        <p class="text-secondary mb-1rem">Cross-platform video learning platform with live classes, recorded sessions, and community features.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> Live App</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Web + Mobile</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">WebRTC</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="100" data-project="new-learning" onclick="openProjectDetail('new-learning')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/Power-BI-consulting.jpg'); ?>" alt="Next Gen Learning Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/0B3D91/ffffff?text=New+Learning'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Innovation</div>
                        <h4>Next-Gen Learning Platform</h4>
                        <p class="text-secondary mb-1rem">AI-driven adaptive learning platform with personalized course recommendations and interactive assessments.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> AI Powered</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Adaptive</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">AI/ML</span>
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">Vue.js</span>
                        </div>
                    </div>
                </div>

                <div class="card portfolio-card" data-aos="zoom-in" data-aos-delay="200" data-project="bi-intelligence" onclick="openProjectDetail('bi-intelligence')">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/Data-driven marketing concept, professional marketer analyzing marketing data and analytics, digital marketing dashboard with charts and graphs, customer data visualization, ROI metrics, conversion rates, marketing .jpg'); ?>" alt="BI Intelligence Tool" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/6366F1/ffffff?text=BI+Intelligence'">
                        <div class="card-overlay">
                            <i class="fas fa-eye"></i>
                            <span>View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Business Intelligence</div>
                        <h4>Business Intelligence Tool</h4>
                        <p class="text-secondary mb-1rem">Real-time business intelligence dashboard with automated reporting, data visualization, and predictive analytics.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> Real-Time</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> Power BI</span>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Power BI</span>
                            <span class="tech-tag">Azure</span>
                            <span class="tech-tag">SQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 7: IMAGE SLIDER (Auto-sliding)     -->
    <!-- ============================================ -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">In Action</div>
                <h2>Projects <span class="gradient-text">In Action</span></h2>
                <p class="lead">A glimpse into our recent work and implementations.</p>
            </div>

            <div class="image-slider-container">
                <div class="image-slider-wrapper">
                    <div class="image-slider-track" id="imageSliderTrack">
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/moodle-lms-development.jpg'); ?>" alt="Project 1" onerror="this.src='https://via.placeholder.com/800x400/0066ff/ffffff?text=Project+1'">
                            <div class="slide-caption">
                                <h4>University LMS Transformation</h4>
                                <p>Custom Moodle platform for 10,000+ students</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/ai-lms2.jpg'); ?>" alt="Project 2" onerror="this.src='https://via.placeholder.com/800x400/10B981/ffffff?text=Project+2'">
                            <div class="slide-caption">
                                <h4>Enterprise Training Platform</h4>
                                <p>Angular-based corporate training portal</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/Digital-Solutions.jpg'); ?>" alt="Project 3" onerror="this.src='https://via.placeholder.com/800x400/2563EB/ffffff?text=Project+3'">
                            <div class="slide-caption">
                                <h4>Product Training Portal</h4>
                                <p>Interactive e-commerce education platform</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/ui-ux.jpg'); ?>" alt="Project 4" onerror="this.src='https://via.placeholder.com/800x400/06B6D4/ffffff?text=Project+4'">
                            <div class="slide-caption">
                                <h4>UI/UX Design System</h4>
                                <p>Complete component library with 50+ elements</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/Cloud-ai.jpg'); ?>" alt="Project 5" onerror="this.src='https://via.placeholder.com/800x400/6366F1/ffffff?text=Project+5'">
                            <div class="slide-caption">
                                <h4>Cloud Migration Platform</h4>
                                <p>50+ servers migrated to AWS with zero downtime</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/digital-marketing.jpg'); ?>" alt="Project 6" onerror="this.src='https://via.placeholder.com/800x400/EC4899/ffffff?text=Project+6'">
                            <div class="slide-caption">
                                <h4>Digital Marketing Platform</h4>
                                <p>SEO campaign with 300% organic traffic increase</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/moodle-development.jpg'); ?>" alt="Project 7" onerror="this.src='https://via.placeholder.com/800x400/F59E0B/ffffff?text=Project+7'">
                            <div class="slide-caption">
                                <h4>Medical Training LMS</h4>
                                <p>Specialized Moodle for healthcare professionals</p>
                            </div>
                        </div>
                        <div class="image-slide">
                            <img src="<?php echo asset('images/about/hosting-migration.jpg'); ?>" alt="Project 8" onerror="this.src='https://via.placeholder.com/800x400/041E4D/ffffff?text=Project+8'">
                            <div class="slide-caption">
                                <h4>Hosting Migration</h4>
                                <p>Seamless cloud infrastructure migration</p>
                            </div>
                        </div>
                    </div>

                    <button class="slider-arrow slider-arrow-prev" id="sliderPrev" onclick="slidePrev()">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-arrow slider-arrow-next" id="sliderNext" onclick="slideNext()">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="slider-dots" id="sliderDots"></div>
                    <div class="slider-counter" id="sliderCounter">01 / 08</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 8: Technology Stack (3 Box)        -->
    <!-- ============================================ -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Technologies</div>
                <h2>Technologies We <span class="gradient-text">Use</span></h2>
                <p class="lead">We leverage industry-leading technologies to build robust, future-proof solutions.</p>
            </div>

            <div class="grid grid-3 stagger">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-wordpress" aria-hidden="true"></i>
                    </div>
                    <h4>WordPress / CMS</h4>
                    <p>Custom themes, headless CMS, WooCommerce, and plugin development for scalable content platforms.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fab fa-angular" aria-hidden="true"></i>
                    </div>
                    <h4>Angular</h4>
                    <p>Modern Angular applications with TypeScript, RxJS, NgRx, and enterprise-grade architecture patterns.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h4>Moodle LMS</h4>
                    <p>Custom Moodle development, plugin creation, theme design, and AI-powered learning solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 9: CTA Section                      -->
    <!-- ============================================ -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Have a Project in <span class="cta-highlight">Mind?</span></h2>
                <p class="cta-text">Let's discuss how our expertise in Moodle, Angular, WordPress, and Mobile CMS can bring your vision to life.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<!-- Project Detail Modal -->
<div class="project-modal" id="projectModal">
    <div class="project-modal-overlay" onclick="closeProjectDetail()"></div>
    <div class="project-modal-content" id="projectModalContent">
        <button class="project-modal-close" onclick="closeProjectDetail()">
            <i class="fas fa-times"></i>
        </button>
        <div id="projectModalBody">
            <!-- Dynamic content loaded here -->
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>

<script>
// ==========================================
// Image Slider - Auto Sliding
// ==========================================
(function() {
    var track = document.getElementById('imageSliderTrack');
    var slides = track ? track.querySelectorAll('.image-slide') : [];
    var dotsContainer = document.getElementById('sliderDots');
    var counter = document.getElementById('sliderCounter');
    var totalSlides = slides.length;
    var currentSlide = 0;
    var autoSlideInterval;
    var SLIDE_INTERVAL = 5000;

    if (totalSlides === 0) return;

    for (var i = 0; i < totalSlides; i++) {
        var dot = document.createElement('span');
        dot.classList.add('slider-dot');
        if (i === 0) dot.classList.add('active');
        dot.setAttribute('data-slide', i);
        dot.onclick = function() { goToSlide(parseInt(this.getAttribute('data-slide'))); };
        dotsContainer.appendChild(dot);
    }

    var dots = dotsContainer.querySelectorAll('.slider-dot');

    function updateSlider() {
        track.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
        for (var i = 0; i < dots.length; i++) dots[i].classList.remove('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
        if (counter) {
            var num = String(currentSlide + 1).padStart(2, '0');
            var tot = String(totalSlides).padStart(2, '0');
            counter.textContent = num + ' / ' + tot;
        }
    }

    function goToSlide(index) {
        currentSlide = index;
        if (currentSlide >= totalSlides) currentSlide = 0;
        if (currentSlide < 0) currentSlide = totalSlides - 1;
        updateSlider();
    }

    function nextSlide() { goToSlide(currentSlide + 1); }
    function prevSlide() { goToSlide(currentSlide - 1); }

    function startAutoSlide() {
        stopAutoSlide();
        autoSlideInterval = setInterval(nextSlide, SLIDE_INTERVAL);
    }
    function stopAutoSlide() {
        if (autoSlideInterval) clearInterval(autoSlideInterval);
    }

    window.slideNext = nextSlide;
    window.slidePrev = prevSlide;

    var sliderContainer = document.querySelector('.image-slider-wrapper');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopAutoSlide);
        sliderContainer.addEventListener('mouseleave', startAutoSlide);
    }

    var touchStartX = 0, touchEndX = 0;
    if (track) {
        track.addEventListener('touchstart', function(e) {
            stopAutoSlide();
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        track.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            var diff = touchStartX - touchEndX;
            if (Math.abs(diff) > 50) diff > 0 ? nextSlide() : prevSlide();
            startAutoSlide();
        }, { passive: true });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') prevSlide();
        if (e.key === 'ArrowRight') nextSlide();
    });

    updateSlider();
    startAutoSlide();
    window.addEventListener('resize', updateSlider);
})();

// ==========================================
// Project Detail Modal
// ==========================================
var projectData = <?php echo json_encode($projectsData); ?>;

function openProjectDetail(projectId) {
    var data = projectData[projectId];
    if (!data) return;

    var body = document.getElementById('projectModalBody');
    var highlightsHtml = data.highlights.map(function(h) {
        return '<li><i class="fas fa-check-circle"></i> ' + h + '</li>';
    }).join('');
    var techHtml = data.tech.map(function(t) {
        return '<span class="tech-badge">' + t + '</span>';
    }).join('');

    body.innerHTML =
        '<img src="' + data.image + '" alt="' + data.title + '" class="project-detail-img" onerror="this.src=\'https://via.placeholder.com/800x350/062B6F/ffffff?text=Project\'">' +
        '<div class="project-detail-content">' +
            '<div class="badge ' + data.badgeClass + ' mb-1rem">' + data.badge + '</div>' +
            '<h3 class="project-detail-title">' + data.title + '</h3>' +
            '<div class="project-detail-meta">' +
                '<span><i class="fas fa-clock"></i> ' + data.duration + '</span>' +
                '<span><i class="fas fa-tag"></i> ' + data.type + '</span>' +
            '</div>' +
            '<p class="project-detail-desc">' + data.description + '</p>' +
            '<h4 class="project-detail-section-title">The Challenge</h4>' +
            '<div class="project-challenge-content">' +
                '<div class="challenge-icon"><i class="fas fa-exclamation-triangle"></i></div>' +
                '<p>' + data.challenge + '</p>' +
            '</div>' +
            '<h4 class="project-detail-section-title">Our Solution</h4>' +
            '<div class="project-solution-content">' +
                '<div class="solution-icon"><i class="fas fa-lightbulb"></i></div>' +
                '<p>' + data.solution + '</p>' +
            '</div>' +
            '<h4 class="project-detail-section-title">Key Highlights</h4>' +
            '<ul class="project-highlights">' + highlightsHtml + '</ul>' +
            '<h4 class="project-detail-section-title">Technology Stack</h4>' +
            '<div class="project-tech-stack">' + techHtml + '</div>' +
            '<h4 class="project-detail-section-title">Results</h4>' +
            '<div class="results-grid">' +
                data.results.map(function(r) {
                    return '<div class="result-card"><div class="result-icon"><i class="fas fa-chart-line"></i></div><p>' + r + '</p></div>';
                }).join('') +
            '</div>' +
        '</div>';

    document.getElementById('projectModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeProjectDetail() {
    document.getElementById('projectModal').classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeProjectDetail();
});
</script>