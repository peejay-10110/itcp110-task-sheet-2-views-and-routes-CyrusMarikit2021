/* Portfolio — main.js */

(function () {
  'use strict';

  // This is the mobile meno
  const toggle = document.getElementById('menu-toggle');
  const nav    = document.getElementById('main-nav');

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', String(open));
      document.body.style.overflow = open ? 'hidden' : '';
    });

    // nav link click leads to closing
    nav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  // scroll based header shadow 
  const header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.style.borderBottomColor = window.scrollY > 10
        ? 'rgba(255,255,255,0.1)'
        : 'rgba(255,255,255,0.07)';
    }, { passive: true });
  }

  // scrolling using animate skill bars
  const bars = document.querySelectorAll('.skill-bar-fill');
  if (bars.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    bars.forEach(bar => {
      bar.style.animationPlayState = 'paused';
      io.observe(bar);
    });
  }

  // cards using "fade-up on scroll" 
  const fadeEls = document.querySelectorAll(
    '.project-card, .blog-card, .value-card, .timeline-item, .uses-item'
  );

  if (fadeEls.length && 'IntersectionObserver' in window) {
    const fadeIo = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          entry.target.style.animation =
            `fadeUp 0.5s ${idx * 0.05}s cubic-bezier(0.22, 1, 0.36, 1) both`;
          fadeIo.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    fadeEls.forEach(el => {
      el.style.opacity = '0';
      fadeIo.observe(el);
    });
  }

  // Active nav highlight (SPA-feel)
  const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (href !== '/' && currentPath.startsWith(href))) {
      link.classList.add('active');
    }
  });

})();