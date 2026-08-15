(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var body = document.body;
        var navbar = document.getElementById('navbar');
        var navPanel = document.getElementById('navMenu');
        var navToggle = document.getElementById('navToggle');
        var navClose = document.getElementById('navCloseBtn');
        var overlay = document.getElementById('mobileOverlay');
        var backToTop = document.getElementById('backToTop');
        var lastFocusedElement = null;

        function setScrolledState() {
            if (navbar) {
                navbar.classList.toggle('scrolled', window.scrollY > 24);
            }

            if (backToTop) {
                backToTop.classList.toggle('visible', window.scrollY > 500);
            }
        }

        function openNavigation() {
            if (!navPanel || !navToggle) {
                return;
            }

            lastFocusedElement = document.activeElement;
            navPanel.classList.add('active');
            body.classList.add('nav-open');
            navToggle.setAttribute('aria-expanded', 'true');

            if (overlay) {
                overlay.classList.add('active');
                overlay.setAttribute('aria-hidden', 'false');
            }

            if (navClose) {
                navClose.focus();
            }
        }

        function closeNavigation(restoreFocus) {
            if (!navPanel || !navToggle) {
                return;
            }

            navPanel.classList.remove('active');
            body.classList.remove('nav-open');
            navToggle.setAttribute('aria-expanded', 'false');

            if (overlay) {
                overlay.classList.remove('active');
                overlay.setAttribute('aria-hidden', 'true');
            }

            if (restoreFocus && lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
                lastFocusedElement.focus();
            }
        }

        document.querySelectorAll('.ish-nav-menu .menu-item-has-children').forEach(function (menuItem, index) {
            var submenu = menuItem.querySelector(':scope > .sub-menu');
            var parentLink = menuItem.querySelector(':scope > a');

            if (!submenu || !parentLink) {
                return;
            }

            var submenuId = submenu.id || 'ish-submenu-' + index;
            submenu.id = submenuId;

            var button = document.createElement('button');
            button.className = 'submenu-toggle';
            button.type = 'button';
            button.setAttribute('aria-expanded', 'false');
            button.setAttribute('aria-controls', submenuId);
            button.setAttribute('aria-label', 'Toggle ' + parentLink.textContent.trim() + ' submenu');
            button.innerHTML = '<i class="fas fa-angle-down" aria-hidden="true"></i>';
            parentLink.insertAdjacentElement('afterend', button);

            button.addEventListener('click', function () {
                var isOpen = menuItem.classList.toggle('submenu-open');
                button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
        });

        if (navToggle) {
            navToggle.addEventListener('click', function () {
                if (navPanel && navPanel.classList.contains('active')) {
                    closeNavigation(true);
                } else {
                    openNavigation();
                }
            });
        }

        if (navClose) {
            navClose.addEventListener('click', function () {
                closeNavigation(true);
            });
        }

        if (overlay) {
            overlay.addEventListener('click', function () {
                closeNavigation(true);
            });
        }

        if (navPanel) {
            navPanel.addEventListener('click', function (event) {
                if (window.innerWidth <= 1180 && event.target.closest('a') && !event.target.closest('.menu-item-has-children > a')) {
                    closeNavigation(false);
                }
            });
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && navPanel && navPanel.classList.contains('active')) {
                closeNavigation(true);
            }
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 1180) {
                closeNavigation(false);
            }
        });

        window.addEventListener('scroll', setScrolledState, { passive: true });
        setScrolledState();

        if (backToTop) {
            backToTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    });
}());
