(() => {
    function init() {
      const btn = document.querySelector('.kebab-toggle');     // must match your header markup
      const nav = document.getElementById('primary-menu');     // must match your <nav id="primary-menu">
  
      if (!btn || !nav) {
        // Helpful console message while you wire things up
        console.warn('[mobile-menu] Missing .kebab-toggle or #primary-menu on this page');
        return;
      }
  
      const openMenu = () => {
        nav.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        const firstLink = nav.querySelector('a, button');
        if (firstLink) firstLink.focus({ preventScroll: true });
      };
  
      const closeMenu = () => {
        nav.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
      };
  
      btn.addEventListener('click', () => {
        nav.classList.contains('is-open') ? closeMenu() : openMenu();
      });
  
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && nav.classList.contains('is-open')) {
          closeMenu();
          btn.focus();
        }
      });
  
      document.addEventListener('click', (e) => {
        if (!nav.contains(e.target) && !btn.contains(e.target) && nav.classList.contains('is-open')) {
          closeMenu();
        }
      });
  
      // Close when switching to desktop width
      const mq = window.matchMedia('(min-width: 769px)');
      mq.addEventListener('change', () => { if (mq.matches) closeMenu(); });
    }
  
    // Run after DOM is ready (works even if script is concatenated/moved)
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', init);
    } else {
      init();
    }
  })();
  