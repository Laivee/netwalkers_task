// SIDEBAR 

function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('collapsed');
    document.querySelector('.arrow-icon').classList.toggle('flipped');
}

function toggleDropdown(section) {
    const dropdown = document.getElementById(`dropdown-${section}`);
    const arrowIcon = document.getElementById(`arrow-${section}`);
    const isOpen = dropdown.classList.contains('open');

    // Close all other dropdowns
    closeAllDropdowns();

    // Toggle current dropdown if it wasn't open
    if (!isOpen) {
        dropdown.classList.add('open');
        arrowIcon.classList.add('rotated');
    }
}

function closeAllDropdowns() {
    const dropdowns = document.querySelectorAll('.dropdown');
    const arrows = document.querySelectorAll('.arrow-icon');

    dropdowns.forEach(dropdown => dropdown.classList.remove('open'));
    arrows.forEach(arrow => arrow.classList.remove('rotated'));
}

let currentOpenDropdown = null;

function toggleDropup(section, element) {
    const dropdown = document.getElementById(`dropdowns-${section}`);
    const arrow = document.getElementById(`arrow-${section}`);
    const overlay = document.getElementById('dropdownOverlay');

    // If clicking the same item that's already open, close it
    if (currentOpenDropdown === section) {
        closeAllDropup();
        return;
    }

    // Close any open dropdown first
    closeAllDropup();

    // Open the clicked dropdown
    if (dropdown) {
        dropdown.classList.add('open');
        arrow.classList.add('rotated');
        overlay.classList.add('active');
        element.classList.add('active');
        currentOpenDropdown = section;
    }
}

function closeAllDropup() {
    const dropdowns = document.querySelectorAll('.bottom-navigation .dropdown');
    const arrows = document.querySelectorAll('.bottom-navigation .nav-arrow');
    const overlay = document.getElementById('dropdownOverlay');
    const navItems = document.querySelectorAll('.bottom-navigation .nav-item');

    dropdowns.forEach(dropdown => dropdown.classList.remove('open'));
    arrows.forEach(arrow => arrow.classList.remove('rotated'));
    overlay.classList.remove('active');

    // Remove active class from nav items (except the first one which should stay active)
    navItems.forEach((item, index) => {
        if (index !== 0) {
            item.classList.remove('active');
        }
    });

    currentOpenDropdown = null;
}



// Close dropdown when clicking on overlay
document.getElementById('dropdownOverlay').addEventListener('click', function () {
    closeAllDropup();
});

// Close dropdown when clicking outside
document.addEventListener('click', function (event) {
    const bottomNav = document.querySelector('.bottom-nav');
    if (!bottomNav.contains(event.target)) {
        closeAllDropup();
    }
});

// Handle touch events for better mobile experience
document.addEventListener('touchstart', function (event) {
    const bottomNav = document.querySelector('.bottom-nav');
    if (!bottomNav.contains(event.target)) {
        closeAllDropup();
    }
});

// Prevent body scroll when dropdown is open (optional)
function toggleBodyScroll(disable) {
    if (disable) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}

// NAVBAR

const hamburgerMenu = document.getElementById('hamburgerMenu');
const mobileDropdown = document.getElementById('mobileDropdown');
const mobileOverlay = document.getElementById('mobileOverlay');

function toggleMobileMenu() {
    const isActive = hamburgerMenu.classList.contains('active');

    if (isActive) {
        closeMobileMenu();
    } else {
        openMobileMenu();
    }
}

function openMobileMenu() {
    hamburgerMenu.classList.add('active');
    mobileDropdown.classList.add('active');
    mobileOverlay.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent body scroll when menu is open
}

function closeMobileMenu() {
    hamburgerMenu.classList.remove('active');
    mobileDropdown.classList.remove('active');
    mobileOverlay.classList.remove('active');
    document.body.style.overflow = ''; // Restore body scroll
}


// Event listeners
hamburgerMenu.addEventListener('click', toggleMobileMenu);
mobileOverlay.addEventListener('click', closeMobileMenu);

// Close mobile menu when clicking outside
document.addEventListener('click', function (event) {
    const navbar = document.querySelector('.navbar');
    if (!navbar.contains(event.target) && hamburgerMenu.classList.contains('active')) {
        closeMobileMenu();
    }
});

// Handle touch events for better mobile experience
document.addEventListener('touchstart', function (event) {
    const navbar = document.querySelector('.navbar');
    if (!navbar.contains(event.target) && hamburgerMenu.classList.contains('active')) {
        closeMobileMenu();
    }
});

// Close mobile menu on window resize if it gets too large
window.addEventListener('resize', function () {
    if (window.innerWidth > 768 && hamburgerMenu.classList.contains('active')) {
        closeMobileMenu();
    }
});

// Prevent event bubbling on mobile dropdown clicks
mobileDropdown.addEventListener('click', function (event) {
    event.stopPropagation();
});


