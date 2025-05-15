// Main JavaScript for common functionality

// DOM ready function
document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu functionality
  initMobileMenu();
});

// Initialize mobile menu
function initMobileMenu() {
  const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
  const mainNav = document.querySelector('.main-nav');
  
  if (mobileMenuBtn && mainNav) {
    mobileMenuBtn.addEventListener('click', function() {
      this.classList.toggle('active');
      mainNav.classList.toggle('active');
    });
  }
}