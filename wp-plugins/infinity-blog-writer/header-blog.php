<?php
/**
 * Header Template for Infinity Blog Writer Plugin
 */

if (!function_exists('get_main_site_url')) {
    function get_main_site_url($path = '') {
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        $is_local = (
            strpos($host, 'localhost') !== false || 
            strpos($host, '127.0.0.1') !== false || 
            strpos($host, '.local') !== false ||
            strpos($host, '.test') !== false ||
            preg_match('/^192\.168\./', $host)
        );
        
        if ($is_local) {
            if ($host === 'localhost' || $host === '127.0.0.1') {
                $base = 'http://' . $host . '/infinitysofthub.com';
            } else {
                $base = 'http://' . $host;
            }
        } else {
            $base = 'https://infinitysofthub.com';
        }
        return $base . ($path ? '/' . ltrim($path, '/') : '');
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_main_site_url('assets/css/variables.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_main_site_url('assets/css/new-style.css'); ?>">
    <style>
        /* WordPress Admin Bar Compatibility */
        body.admin-bar .navbar {
            top: 32px;
        }
        @media screen and (max-width: 782px) {
            body.admin-bar .navbar {
                top: 46px;
            }
        }
        /* Reset list styles for navigation menu to remove black dots */
        .nav-menu, .nav-menu li, .dropdown-menu, .dropdown-menu a {
            list-style: none !important;
            list-style-type: none !important;
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_main_site_url('assets/images/ish-logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
            </a>

            <ul class="nav-menu" id="navMenu">
                <li class="mobile-close-btn" id="navCloseBtn"><i class="fas fa-times"></i></li>
                <li><a href="<?php echo get_main_site_url(); ?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo get_main_site_url('about'); ?>" class="nav-link">About</a></li>
                <li class="nav-dropdown" onclick="toggleDropdown(this)">
                    <a href="#" class="nav-link">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="<?php echo get_main_site_url('services/moodle-all-development'); ?>" class="dropdown-link">Moodle Development</a>
                        <a href="<?php echo get_main_site_url('services/web-development'); ?>" class="dropdown-link">Web Development</a>
                        <a href="<?php echo get_main_site_url('services/mobile-app-development'); ?>" class="dropdown-link">Mobile App Development</a>
                        <a href="<?php echo get_main_site_url('services/ai-ml-integration'); ?>" class="dropdown-link">AI & ML Integration</a>
                        <a href="<?php echo get_main_site_url('services/cloud-solutions'); ?>" class="dropdown-link">Cloud Solutions</a>
                        <a href="<?php echo get_main_site_url('services/ui-ux-design'); ?>" class="dropdown-link">UI/UX Design</a>
                        <a href="<?php echo get_main_site_url('services/digital-marketing'); ?>" class="dropdown-link">Digital Marketing</a>
                    </div>
                </li>
                <li><a href="<?php echo get_main_site_url('industry-expertise'); ?>" class="nav-link">Industries</a></li>
                <li><a href="<?php echo get_main_site_url('portfolio'); ?>" class="nav-link">Portfolio</a></li>
                <li><a href="<?php echo get_main_site_url('our-locations'); ?>" class="nav-link">Locations</a></li>
                <li><a href="<?php echo get_main_site_url('case-studies'); ?>" class="nav-link">Case Studies</a></li>
                <li><a href="<?php echo home_url(); ?>" class="nav-link active">Blog</a></li>
                <li><a href="<?php echo get_main_site_url('contact'); ?>" class="nav-cta">Get in Touch</a></li>
            </ul>

            <div class="nav-toggle" id="navToggle"><i class="fas fa-bars"></i></div>
        </div>
    </nav>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Chatbot Widget -->
    <div class="chatbot-widget">
        <div class="chatbot-toggle" onclick="toggleChat()">
            <i class="fas fa-comment-dots" id="chat-icon"></i>
            <i class="fas fa-times" id="close-icon" style="display:none;"></i>
            <span class="chatbot-badge" id="chat-badge">1</span>
        </div>
        <div class="chatbot-window" id="chatbot-window">
            <div class="chatbot-header">
                <div class="chatbot-header-info">
                    <div class="chatbot-avatar"><i class="fas fa-robot"></i></div>
                    <div>
                        <h4>Infinity Assistant</h4>
                        <span class="chatbot-status"><i class="fas fa-circle"></i> Online</span>
                    </div>
                </div>
                <button class="chatbot-close" onclick="toggleChat()"><i class="fas fa-times"></i></button>
            </div>
            <div class="chatbot-messages" id="chatbot-messages">
                <div class="chat-message bot-message">
                    <div class="message-content">
                        <p>Hello! I'm Infinity Assistant. How can I help you today?</p>
                    </div>
                </div>
            </div>
            <div class="chatbot-input-area">
                <div class="chatbot-quick-actions">
                    <button class="quick-action" onclick="sendQuickMessage('What services do you offer?')">Services</button>
                    <button class="quick-action" onclick="sendQuickMessage('Get a quote')">Get Quote</button>
                    <button class="quick-action" onclick="sendQuickMessage('Contact info')">Contact</button>
                </div>
                <div class="chatbot-input-wrapper">
                    <input type="text" id="chatbot-input" placeholder=" screen karo..." onkeypress="handleChatKeyPress(event)">
                    <button class="chatbot-send" onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script>
    var chatOpen = false;

    function toggleChat() {
        chatOpen = !chatOpen;
        document.getElementById('chatbot-window').style.display = chatOpen ? 'flex' : 'none';
        document.getElementById('chat-icon').style.display = chatOpen ? 'none' : 'block';
        document.getElementById('close-icon').style.display = chatOpen ? 'block' : 'none';
        var badge = document.getElementById('chat-badge');
        if (chatOpen && badge) badge.style.display = 'none';
    }

    function sendMessage() {
        var input = document.getElementById('chatbot-input');
        if (!input || !input.value.trim()) return;
        var message = input.value.trim();
        input.value = '';
        addMessage(message, 'user');
        setTimeout(function() {
            var responses = [
                "Thanks for your message! Visit our website or contact us at info@infinitysofthub.com for more details.",
                "Great question! Our team is ready to help. Email us at info@infinitysofthub.com",
                "We offer Web Development, Mobile Apps, AI & ML, Cloud Solutions, and more. Contact us for a free quote!"
            ];
            addMessage(responses[Math.floor(Math.random() * responses.length)], 'bot');
        }, 1000);
    }

    function sendQuickMessage(message) {
        addMessage(message, 'user');
        setTimeout(function() {
            addMessage("Thanks for your interest! Visit https://infinitysofthub.com or email info@infinitysofthub.com for more info.", 'bot');
        }, 1000);
    }

    function handleChatKeyPress(event) {
        if (event.key === 'Enter') sendMessage();
    }

    function addMessage(text, sender) {
        var container = document.getElementById('chatbot-messages');
        if (!container) return;
        var div = document.createElement('div');
        div.className = 'chat-message ' + sender + '-message';
        div.innerHTML = '<div class="message-content"><p>' + escapeHtml(text) + '</p></div>';
        container.appendChild(div);
        container.scrollTop = container.scrollHeight;
    }

    function escapeHtml(text) {
        var div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Toggle dropdown on mobile
    function toggleDropdown(element) {
        if (window.innerWidth <= 991) {
            element.classList.toggle('active');
        }
    }

    setTimeout(function() {
        var badge = document.getElementById('chat-badge');
        if (badge && !chatOpen) badge.style.display = 'flex';
    }, 3000);

    // Mobile Menu
    document.addEventListener('DOMContentLoaded', function() {
        var navToggle = document.getElementById('navToggle');
        var navMenu = document.getElementById('navMenu');
        var navCloseBtn = document.getElementById('navCloseBtn');
        var mobileOverlay = document.getElementById('mobileOverlay');

        if (navToggle && navMenu) {
            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                mobileOverlay.classList.toggle('active');
            });
        }
        if (navCloseBtn) {
            navCloseBtn.addEventListener('click', function() {
                navMenu.classList.remove('active');
                mobileOverlay.classList.remove('active');
            });
        }
        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', function() {
                navMenu.classList.remove('active');
                mobileOverlay.classList.remove('active');
            });
        }
    });
    </script>
