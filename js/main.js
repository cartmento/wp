/**
 * CartMento Theme — Main JavaScript
 * Handles mobile menu toggle and FAQ accordion behavior
 */

document.addEventListener('DOMContentLoaded', function() {

  /**
   * Mobile Menu Toggle
   */
  const menuToggle = document.querySelector('.menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');

  if (menuToggle && mobileNav) {
    menuToggle.addEventListener('click', function() {
      mobileNav.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', mobileNav.classList.contains('open'));
    });

    // Close mobile menu when a link is clicked
    const mobileLinks = mobileNav.querySelectorAll('a');
    mobileLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileNav.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', false);
      });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!menuToggle.contains(e.target) && !mobileNav.contains(e.target)) {
        mobileNav.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', false);
      }
    });
  }

  /**
   * FAQ Accordion
   */
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    
    if (question) {
      question.addEventListener('click', function() {
        const isOpen = item.classList.contains('open');
        
        // Close all other items
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('open');
          }
        });
        
        // Toggle current item
        if (isOpen) {
          item.classList.remove('open');
        } else {
          item.classList.add('open');
        }
      });
    }
  });

  /**
   * Smooth scroll for anchor links
   */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  /**
   * Add active class to navigation links based on current page
   */
  const currentUrl = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links a, .mobile-nav a');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href && currentUrl.includes(href.replace(window.location.origin, ''))) {
      link.classList.add('active');
    }
  });

});
