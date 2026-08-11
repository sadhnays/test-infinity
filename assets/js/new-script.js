/* ==========================================
   NEW SCRIPT - Infinity SoftHub
   Animations & Interactivity
   Enhanced Hero Animations
   ========================================== */

document.addEventListener('DOMContentLoaded', function() {

    // ===== Navbar Scroll Effect =====
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // ===== Mobile Menu Toggle =====
    const mobileOverlay = document.getElementById('mobileOverlay');
    const navCloseBtn = document.getElementById('navCloseBtn');

    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            if (mobileOverlay) {
                mobileOverlay.classList.toggle('active');
            }
            const icon = navToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Close button in mobile menu
    if (navCloseBtn) {
        navCloseBtn.addEventListener('click', function() {
            navMenu.classList.remove('active');
            if (mobileOverlay) {
                mobileOverlay.classList.remove('active');
            }
            const icon = navToggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Close mobile menu on overlay click
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            navMenu.classList.remove('active');
            mobileOverlay.classList.remove('active');
            const icon = navToggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // ===== Mobile Dropdown Toggle =====
    const navDropdowns = document.querySelectorAll('.nav-dropdown');
    const screenWidth = window.innerWidth;

    // Only apply click toggle for dropdowns on mobile/tablet
    if (screenWidth <= 1024) {
        navDropdowns.forEach(function(dropdown) {
            const link = dropdown.querySelector('.nav-link');
            if (link) {
                link.addEventListener('click', function(e) {
                    // Only prevent default if it's a parent link (has dropdown)
                    e.preventDefault();
                    // Toggle the dropdown
                    dropdown.classList.toggle('active');
                });
            }
        });
    }

    // Close mobile menu on link click (for non-dropdown links)
    const navLinks = document.querySelectorAll('.nav-link:not(.nav-dropdown > .nav-link)');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 1024) {
                navMenu.classList.remove('active');
                if (mobileOverlay) {
                    mobileOverlay.classList.remove('active');
                }
                const icon = navToggle.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });
    });

    // ===== Smooth Scroll for Anchor Links =====
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ===== Tab Switching for Core Values =====
    const tabBtns = document.querySelectorAll('.tab-btn');
    const valueCards = document.querySelectorAll('.value-card');

    tabBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');

            // Remove active class from all buttons and cards
            tabBtns.forEach(function(b) { b.classList.remove('active'); });
            valueCards.forEach(function(c) { c.classList.remove('active'); });

            // Add active class to clicked button and corresponding card
            this.classList.add('active');
            const targetCard = document.querySelector('.value-card[data-tab="' + tabId + '"]');
            if (targetCard) {
                targetCard.classList.add('active');
            }
        });
    });

    // ===== Counter Animation =====
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        function updateCounter() {
            current += step;
            if (current < target) {
                element.textContent = Math.floor(current) + (element.getAttribute('data-suffix') || '+');
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target + (element.getAttribute('data-suffix') || '+');
            }
        }

        updateCounter();
    }

    // Intersection Observer for counter animation
    const counters = document.querySelectorAll('.counter');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(function(counter) {
        counterObserver.observe(counter);
    });

    // ===== GSAP Hero Animations (Enhanced) =====
    if (typeof gsap !== 'undefined') {
        const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        heroTl
            .from('.hero', { opacity: 0, duration: 0.5 })
            .from('.hero-badge', { y: -30, opacity: 0, duration: 0.8 }, '-=0.3')
            .from('.hero-content h1', { y: 60, opacity: 0, duration: 1 }, '-=0.5')
            .from('.hero-subtitle', { y: 40, opacity: 0, duration: 0.8 }, '-=0.5')
            .from('.hero-actions', { y: 40, opacity: 0, duration: 0.8 }, '-=0.4')
            .from('.hero-stats', { y: 40, opacity: 0, duration: 0.8 }, '-=0.4')
            .from('.hero-image', { x: 60, opacity: 0, duration: 1 }, '-=0.6')
            .from('.floating-card', { scale: 0.8, opacity: 0, duration: 0.8 }, '-=0.5');
    }

    // ===== Swiper Awards Slider =====
    if (typeof Swiper !== 'undefined') {
        new Swiper('.awards-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    }

    // ===== Office Card Active State =====
    const officeCards = document.querySelectorAll('.office-card');
    officeCards.forEach(function(card) {
        card.addEventListener('click', function() {
            officeCards.forEach(function(c) { c.classList.remove('active'); });
            this.classList.add('active');
        });
    });

    // ===== Back to Top Button =====
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ===== Particle Animation (Full Screen, MORE Particles) =====
    const particleContainer = document.getElementById('heroParticles');
    if (particleContainer) {
        function createParticle() {
            const dot = document.createElement('div');
            dot.classList.add('particle-dot');

            // Random size class
            const sizeRand = Math.random();
            if (sizeRand > 0.85) {
                dot.classList.add('large');
                const size = Math.random() * 8 + 6;
                dot.style.width = size + 'px';
                dot.style.height = size + 'px';
            } else if (sizeRand > 0.6) {
                dot.classList.add('medium');
                const size = Math.random() * 5 + 3;
                dot.style.width = size + 'px';
                dot.style.height = size + 'px';
            } else {
                const size = Math.random() * 3 + 1;
                dot.style.width = size + 'px';
                dot.style.height = size + 'px';
            }

            // Random horizontal position (FULL screen)
            dot.style.left = Math.random() * 100 + '%';
            dot.style.bottom = '-20px';

            // Random animation duration & delay
            const duration = Math.random() * 10 + 8;
            dot.style.animationDuration = duration + 's';
            dot.style.animationDelay = Math.random() * 8 + 's';

            particleContainer.appendChild(dot);

            // Remove after animation
            setTimeout(function() {
                if (dot.parentNode) {
                    dot.parentNode.removeChild(dot);
                }
            }, (duration + 8) * 1000);
        }

        // Create initial particles (MORE)
        for (let i = 0; i < 50; i++) {
            setTimeout(createParticle, i * 150);
        }

        // Continuously create new particles (faster)
        setInterval(createParticle, 300);
    }

    // ===== Parallax Effect on Scroll =====
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.scrollY;
            if (scrolled < window.innerHeight) {
                const particles = document.getElementById('heroParticles');
                if (particles) {
                    particles.style.transform = 'translateY(' + (scrolled * 0.3) + 'px)';
                }
                const floatingCard = document.querySelector('.floating-card');
                if (floatingCard) {
                    floatingCard.style.transform = 'translateY(' + (scrolled * -0.2) + 'px)';
                }
            }
        });
    }

});

    // ===== Mouse-Follow Particles =====
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        let mouseX = 0, mouseY = 0;
        let followerX = 0, followerY = 0;

        document.addEventListener('mousemove', function(e) {
            if (e.clientY < window.innerHeight) {
                mouseX = e.clientX;
                mouseY = e.clientY;
            }
        });

        function createFollower() {
            const dot = document.createElement('div');
            dot.classList.add('particle-dot', 'medium');
            dot.style.position = 'fixed';
            dot.style.left = followerX + 'px';
            dot.style.top = followerY + 'px';
            dot.style.zIndex = '2';
            dot.style.pointerEvents = 'none';
            document.body.appendChild(dot);

            setTimeout(function() {
                if (dot.parentNode) dot.parentNode.removeChild(dot);
            }, 1000);
        }

        setInterval(function() {
            followerX += (mouseX - followerX) * 0.1;
            followerY += (mouseY - followerY) * 0.1;
            if (Math.random() > 0.7) createFollower();
        }, 50);
    }

