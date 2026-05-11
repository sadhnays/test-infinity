<?php
// portfolio-detail.php
$pageTitle = "Portfolio Detail | Infinity SoftHub";
$pageDescription = "Detailed view of Infinity SoftHub's portfolio projects and case studies.";
$pageKeywords = "portfolio detail, project case study, project details";
$activePage = 'portfolio';

require_once 'includes/header.php';

// Get project ID from URL
$projectId = isset($_GET['id']) ? sanitize_input($_GET['id']) : '';

// Project data (same as in portfolio.php for consistency)
$projects = [
    'university-lms' => [
        'title' => 'University LMS Transformation',
        'badge' => 'Moodle / LMS',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/moodle-lms-development.jpg'),
        'description' => 'A comprehensive transformation of a university\'s learning management system serving over 10,000 students. We completely redesigned the Moodle platform with custom themes, 20+ plugins, and integrated AI-powered course recommendation engine. The platform now supports mobile learning, gamified assessments, and real-time analytics dashboards for both students and faculty.',
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
        'description' => 'Cross-platform mobile application with headless CMS backend for a retail enterprise. Features include push notifications, offline sync, real-time inventory tracking, and personalized shopping experience. The app achieved 4.8★ rating with 50,000+ downloads.',
        'highlights' => ['50,000+ downloads', '4.8★ app rating', 'Offline sync capability', 'Push notifications', 'Real-time inventory', 'Personalized UX'],
        'tech' => ['React Native', 'Firebase', 'GraphQL', 'Headless CMS', 'AWS'],
        'duration' => '7 months',
        'type' => 'Mobile Application',
        'challenge' => 'The retail client needed a unified mobile experience across iOS and Android with real-time inventory, personalized recommendations, and reliable offline capabilities for areas with poor connectivity.',
        'solution' => 'We developed a React Native cross-platform app with headless CMS backend. Implemented offline-first architecture with data sync, Firebase push notifications, GraphQL API for fast data queries, and personalized shopping experience using recommendation algorithms.',
        'results' => ['50,000+ app downloads', '4.8★ average rating', '30% increase in mobile sales', '99.5% sync reliability', '40% reduction in load times']
    ],
    'fitness-app' => [
        'title' => 'Fitness Tracking Application',
        'badge' => 'Mobile App',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/about/Mobile-app2.jpg'),
        'description' => 'A comprehensive fitness tracking app built with React Native. Features personalized workout plans, health monitoring, social sharing, and real-time analytics. Users can track their fitness goals, view progress charts, and connect with fitness communities.',
        'highlights' => ['100,000+ active users', '4.9★ app rating', 'Personalized workout plans', 'Social sharing features', 'Health tracking integration', 'Real-time analytics'],
        'tech' => ['React Native', 'Node.js', 'MongoDB', 'Firebase', 'Health API'],
        'duration' => '6 months',
        'type' => 'Mobile Application',
        'challenge' => 'The client wanted a comprehensive fitness platform that combined workout tracking, social features, and health monitoring in a single intuitive mobile experience.',
        'solution' => 'Built a React Native app with personalized AI workout recommendations, social feed integration, health data syncing from wearables, and real-time progress analytics. Implemented gamification elements to boost user engagement.',
        'results' => ['100,000+ active users', '4.9★ app store rating', '60% daily active users', '3x increase in premium subscriptions', 'Featured in App Store']
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
        'image' => asset('images/about/Moodle development services, e-learning platform development, LMS customization, Moodle experts, online education technology, learning management system, educational software development, Moodle programming, course .jpg'),
        'description' => 'Scalable e-learning platform serving 5,000+ students with real-time progress tracking, interactive course content, and AI-powered assessments. Built on Moodle with custom plugins and modern front-end interface.',
        'highlights' => ['5,000+ enrolled students', 'AI-powered assessments', 'Interactive course content', 'Real-time progress tracking', 'Mobile-responsive', 'Multi-language support'],
        'tech' => ['Moodle', 'React', 'PHP', 'MySQL', 'AI/ML', 'WebRTC'],
        'duration' => '7 months',
        'type' => 'Education',
        'challenge' => 'Educational startup needed a scalable online learning platform that could handle thousands of concurrent students with interactive content, live sessions, and intelligent assessments.',
        'solution' => 'We built a custom Moodle platform with React front-end, interactive video content, real-time progress dashboards, AI-powered assessment engine, and live class streaming via WebRTC. Multi-language support for international students.',
        'results' => ['5,000+ students enrolled', '90% course completion rate', 'AI assessments reduced grading time by 70%', '4.8★ student satisfaction', 'Live classes support 500 concurrent users']
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
        'tech' => ['CyberSec', 'AI/ML', 'SOC2', 'Cloud', 'Monitoring'],
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
        'image' => asset('images/Data-driven marketing concept, professional marketer analyzing marketing data and analytics, digital marketing dashboard with charts and graphs, customer data visualization, ROI metrics, conversion rates, marketing .jpg'),
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
        'image' => asset('images/about/moodle-lms-development.jpg'),
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
        'challenge' => 'EdTech company needed a platform that could adapt to each learner\'s pace and style, predict learning outcomes, and optimize content delivery for maximum knowledge retention.',
        'solution' => 'We built an AI-first learning platform using machine learning models that analyze learner behavior, adapt content difficulty in real-time, implement spaced repetition algorithms, and provide predictive analytics to instructors.',
        'results' => ['60% improvement in learning outcomes', 'Adaptive paths reduced dropout by 45%', 'AI predictions 85% accurate', 'Multi-language support for 15 languages', 'Scaled to 50,000+ learners']
    ],
    'bi-intelligence' => [
        'title' => 'Business Intelligence Tool',
        'badge' => 'BI Intelligence',
        'badgeClass' => 'badge-primary',
        'image' => asset('images/Data-driven marketing concept, professional marketer analyzing marketing data and analytics, digital marketing dashboard with charts and graphs, customer data visualization, ROI metrics, conversion rates, marketing .jpg'),
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

// Handle 404 for unknown projects
if (!isset($projects[$projectId]) || empty($projectId)) {
    $projectId = 'university-lms'; // Default fallback
}
$project = $projects[$projectId];
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-folder-open" aria-hidden="true"></i> Project Details
                </div>
                <h1><?php echo e($project['title']); ?></h1>
                <p class="hero-subtitle"><?php echo e($project['description']); ?></p>
            </div>
        </div>
    </section>

    <!-- Project Detail Section -->
    <section class="content-section">
        <div class="container">
            <div class="project-detail-hero">
                <img src="<?php echo $project['image']; ?>" alt="<?php echo e($project['title']); ?>" class="project-detail-hero-img" onerror="this.src='https://via.placeholder.com/1200x450/062B6F/ffffff?text=<?php echo urlencode($project['title']); ?>'">
                <div class="project-detail-hero-overlay">
                    <div class="badge <?php echo $project['badgeClass']; ?> badge-lg"><?php echo $project['badge']; ?></div>
                    <h2><?php echo e($project['title']); ?></h2>
                    <div class="project-meta-inline">
                        <span><i class="fas fa-clock"></i> <?php echo $project['duration']; ?></span>
                        <span><i class="fas fa-tag"></i> <?php echo $project['type']; ?></span>
                    </div>
                    <div class="project-hero-tech">
                        <?php foreach($project['tech'] as $t): ?>
                        <span class="tech-tag"><?php echo e($t); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- The Challenge -->
            <div class="project-section">
                <div class="section-header anim-fade-up" data-aos="fade-up">
                    <div class="section-tag">The Challenge</div>
                    <h2>Problem Statement</h2>
                </div>
                <div class="project-challenge-content anim-fade-up" data-aos="fade-up" data-aos-delay="100">
                    <div class="challenge-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <p><?php echo e($project['challenge']); ?></p>
                </div>
            </div>

            <!-- Our Solution -->
            <div class="project-section bg-alt">
                <div class="section-header anim-fade-up" data-aos="fade-up">
                    <div class="section-tag">Our Approach</div>
                    <h2>The Solution</h2>
                </div>
                <div class="project-solution-content anim-fade-up" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <p><?php echo e($project['solution']); ?></p>
                </div>
            </div>

            <!-- Key Highlights -->
            <div class="project-section">
                <div class="section-header anim-fade-up" data-aos="fade-up">
                    <div class="section-tag">Key Highlights</div>
                    <h2>Project Highlights</h2>
                </div>
                <div class="grid grid-3 stagger">
                    <?php foreach($project['highlights'] as $index => $highlight): ?>
                    <div class="highlight-card" data-aos="zoom-in" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="highlight-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4><?php echo e($highlight); ?></h4>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Technology Stack -->
            <div class="project-section bg-alt">
                <div class="section-header anim-fade-up" data-aos="fade-up">
                    <div class="section-tag">Tech Stack</div>
                    <h2>Technology Stack</h2>
                </div>
                <div class="project-tech-stack anim-fade-up" data-aos="fade-up" data-aos-delay="100">
                    <?php foreach($project['tech'] as $tech): ?>
                    <div class="tech-stack-item">
                        <span class="tech-stack-name"><?php echo e($tech); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Results -->
            <div class="project-section">
                <div class="section-header anim-fade-up" data-aos="fade-up">
                    <div class="section-tag">Results</div>
                    <h2>Project Results</h2>
                </div>
                <div class="results-grid">
                    <?php foreach($project['results'] as $index => $result): ?>
                    <div class="result-card" data-aos="zoom-in" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="result-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <p><?php echo e($result); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- CTA -->
            <div class="project-section bg-alt">
                <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                    <h2 class="cta-title">Want a Similar <span class="cta-highlight">Solution?</span></h2>
                    <p class="cta-text">Let's discuss how we can build a custom solution for your business needs.</p>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>