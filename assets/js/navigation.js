const navbarMenu = document.getElementById('navbar');
const burgerMenu = document.getElementById('burger');
const overlayMenu = document.querySelector('.overlay');

// Show and Hide Navbar Function
const toggleMenu = () => {
	navbarMenu.classList.toggle('active');
	overlayMenu.classList.toggle('active');
};

// Collapsible Mobile Submenu Function
const collapseSubMenu = () => {
	navbarMenu.querySelector('.menu-dropdown.active .submenu').removeAttribute('style');
	navbarMenu.querySelector('.menu-dropdown.active').classList.remove('active');
};

// Toggle Mobile Submenu Function
const toggleSubMenu = (e) => {
	if (e.target.hasAttribute('data-toggle') && window.innerWidth <= 1024) {
		e.preventDefault();
		const menuDropdown = e.target.parentElement;

		// If Dropdown is Expanded, then Collapse It
		if (menuDropdown.classList.contains('active')) {
			collapseSubMenu();
		} else {
			// Collapse Existing Expanded Dropdown
			if (navbarMenu.querySelector('.menu-dropdown.active')) {
				collapseSubMenu();
			}

			// Expanded the New Dropdown
			menuDropdown.classList.add('active');
			const subMenu = menuDropdown.querySelector('.submenu');
			subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
		}
	}
};

// Fixed Resize Window Function
const resizeWindow = () => {
	if (window.innerWidth > 1024) {
		if (navbarMenu.classList.contains('active')) {
			toggleMenu();
		}
		if (navbarMenu.querySelector('.menu-dropdown.active')) {
			collapseSubMenu();
		}
	}
};

// Initialize Event Listeners
burgerMenu.addEventListener('click', toggleMenu);
overlayMenu.addEventListener('click', toggleMenu);
navbarMenu.addEventListener('click', toggleSubMenu);
window.addEventListener('resize', resizeWindow);


// scroll effect
// const body = document.body;
// let lastScroll = 0;

// window.addEventListener("scroll", () => {
// 	const currentScroll = window.pageYOffset;
// 	if (currentScroll <= 0) {
// 		body.classList.remove("scroll-up");
// 		return;
// 	}

// 	if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
// 		body.classList.remove("scroll-up");
// 		body.classList.add("scroll-down");
// 	} else if (
// 		currentScroll < lastScroll && body.classList.contains("scroll-down")
// 	) {
// 		body.classList.remove("scroll-down");
// 		body.classList.add("scroll-up");
// 	}
// 	lastScroll = currentScroll;
//});

