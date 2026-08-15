/* ==========================================
   MAIN JAVASCRIPT - NAVIGATION, SCROLL, FORMS
   ========================================== */

(function () {
    'use strict';

    // ==========================================
    // Header Scroll Effect
    // ==========================================
    const header = document.querySelector('.header');
    const progressBar = document.querySelector('.progress-bar');

    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

        // Header background
        if (scrollTop > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Progress bar
        if (progressBar) {
            const scrollPercent = (scrollTop / scrollHeight) * 100;
            progressBar.style.width = scrollPercent + '%';
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // ==========================================
    // Mobile Navigation
    // ==========================================
    const burger = document.querySelector('.burger');
    const navbar = document.querySelector('.navbar');
    const overlay = document.querySelector('.overlay');
    const submenuToggles = document.querySelectorAll('[data-toggle="submenu"]');

    function toggleMobileMenu(show) {
        if (burger) {
            burger.classList.toggle('active', show);
        }
        if (navbar) {
            navbar.classList.toggle('active', show);
        }
        if (overlay) {
            overlay.classList.toggle('active', show);
        }
        document.body.style.overflow = show ? 'hidden' : '';
    }

    if (burger) {
        burger.addEventListener('click', function () {
            const isActive = navbar.classList.contains('active');
            toggleMobileMenu(!isActive);
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            toggleMobileMenu(false);
        });
    }

    // Submenu toggles for mobile
    if (submenuToggles.length > 0) {
        submenuToggles.forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    if (submenu && submenu.classList.contains('submenu')) {
                        submenu.classList.toggle('active');
                        this.classList.toggle('active');
                    }
                }
            });
        });
    }

    // Close mobile menu on link click
    const navLinks = document.querySelectorAll('.menu-link, .submenu-link');
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (window.innerWidth <= 992) {
                toggleMobileMenu(false);
            }
        });
    });

    // ==========================================
    // Smooth Scroll for Anchor Links
    // ==========================================
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const headerOffset = header ? header.offsetHeight : 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ==========================================
    // Active Navigation Link
    // ==========================================
    function updateActiveNavLink() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPos = window.pageYOffset + 100;

        sections.forEach(function (section) {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPos >= top && scrollPos < top + height) {
                document.querySelectorAll('.menu-link').forEach(function (link) {
                    link.classList.remove('active');
                });
                const activeLink = document.querySelector('.menu-link[href="#' + id + '"]');
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }

    window.addEventListener('scroll', updateActiveNavLink, { passive: true });

    // ==========================================
    // Counter Animation
    // ==========================================
    function animateCounter(element, target, duration) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        function update() {
            current += increment;
            if (current >= target) {
                element.textContent = target.toLocaleString() + (element.getAttribute('data-suffix') || '');
                return;
            }
            element.textContent = Math.floor(current).toLocaleString() + (element.getAttribute('data-suffix') || '');
            requestAnimationFrame(update);
        }

        update();
    }

    // ==========================================
    // Scroll Animations (Intersection Observer)
    // ==========================================
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll(
            '.anim-fade-up, .anim-fade-down, .anim-fade-left, .anim-fade-right, .anim-scale, .fade-in, .fade-in-left, .fade-in-right, .scale-in'
        );

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                }
            );

            animatedElements.forEach(function (el) {
                observer.observe(el);
            });
        } else {
            // Fallback for older browsers
            animatedElements.forEach(function (el) {
                el.classList.add('visible');
            });
        }

        // Counter animation
        const counters = document.querySelectorAll('.counter');
        if (counters.length > 0 && 'IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            const target = parseInt(entry.target.getAttribute('data-target')) || 0;
                            animateCounter(entry.target, target, 2000);
                            counterObserver.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.5 }
            );

            counters.forEach(function (counter) {
                counterObserver.observe(counter);
            });
        }
    }

    // ==========================================
    // Form Validation
    // ==========================================
    function initFormValidation() {
        const forms = document.querySelectorAll('.contact-form');
        forms.forEach(function (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const name = form.querySelector('[name="name"]');
                const email = form.querySelector('[name="email"]');
                const message = form.querySelector('[name="message"]');
                let isValid = true;

                // Clear previous errors
                form.querySelectorAll('.error-message').forEach(function (el) {
                    el.remove();
                });
                form.querySelectorAll('.is-invalid').forEach(function (el) {
                    el.classList.remove('is-invalid');
                });

                // Validate name
                if (name && !name.value.trim()) {
                    showError(name, 'Name is required');
                    isValid = false;
                }

                // Validate email
                if (email) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!email.value.trim() || !emailRegex.test(email.value)) {
                        showError(email, 'Valid email is required');
                        isValid = false;
                    }
                }

                // Validate message
                if (message && !message.value.trim()) {
                    showError(message, 'Message is required');
                    isValid = false;
                }

                if (isValid) {
                    // Show success message
                    const successMsg = document.createElement('div');
                    successMsg.className = 'alert-success';
                    successMsg.textContent = 'Thank you! Your message has been sent successfully.';
                    form.appendChild(successMsg);
                    form.reset();

                    setTimeout(function () {
                        successMsg.remove();
                    }, 5000);
                }
            });
        });
    }

    function showError(input, message) {
        input.classList.add('is-invalid');
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        errorDiv.style.cssText = 'color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;';
        input.parentNode.appendChild(errorDiv);
    }

    // ==========================================
    // Initialize Particles (Hero Background)
    // ==========================================
    function initParticles() {
        const container = document.querySelector('.hero-particles');
        if (!container) return;

        const colors = ['#0066ff', '#00ccff', '#00ffcc'];
        const particleCount = window.innerWidth < 768 ? 20 : 40;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';

            const size = Math.random() * 4 + 1;
            const posX = Math.random() * 100;
            const posY = Math.random() * 100;
            const delay = Math.random() * 8;
            const duration = 6 + Math.random() * 6;
            const color = colors[Math.floor(Math.random() * colors.length)];

            particle.style.cssText = `
                width: ${size}px;
                height: ${size}px;
                left: ${posX}%;
                top: ${posY}%;
                background: ${color};
                animation-delay: ${delay}s;
                animation-duration: ${duration}s;
                opacity: ${Math.random() * 0.5 + 0.1};
            `;

            container.appendChild(particle);
        }
    }

    // ==========================================
    // Initialize All
    // ==========================================
    document.addEventListener('DOMContentLoaded', function () {
        handleScroll();
        initScrollAnimations();
        initFormValidation();
        initParticles();

        // Lazy load images
        if ('IntersectionObserver' in window) {
            const lazyImages = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.getAttribute('data-src');
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(function (img) {
                imageObserver.observe(img);
            });
        }
    });

})();
