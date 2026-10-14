/* Common3 homepage: progressive enhancement, no demo forms or blocking loader. */
(() => {
  'use strict';

  const menu = document.querySelector('#main-navigation');
  const menuToggle = document.querySelector('.c3-menu-toggle');
  if (menu && menuToggle) {
    document.body.classList.add('c3-menu-ready');
    menuToggle.hidden = false;
    const closeMenu = () => {
      menu.classList.remove('is-open');
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Open navigation');
    };
    menuToggle.addEventListener('click', () => {
      const open = menu.classList.toggle('is-open');
      menuToggle.setAttribute('aria-expanded', String(open));
      menuToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    });
    menu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && menu.classList.contains('is-open')) {
        closeMenu();
        menuToggle.focus();
      }
    });
    matchMedia('(min-width: 801px)').addEventListener('change', closeMenu);
  }

  const filters = document.querySelector('.c3-filters');
  const cards = [...document.querySelectorAll('.c3-work-card')];
  if (filters && cards.length) {
    filters.hidden = false;
    filters.querySelectorAll('button').forEach(button => {
      button.addEventListener('click', () => {
        filters.querySelectorAll('button').forEach(item => item.setAttribute('aria-pressed', String(item === button)));
        cards.forEach(card => { card.hidden = button.dataset.filter !== 'all' && card.dataset.category !== button.dataset.filter; });
        const count = cards.filter(card => !card.hidden).length;
        document.querySelector('.c3-filter-status').textContent = count + (count === 1 ? ' project shown.' : ' projects shown.');
      });
    });
  }

  const dialogs = [...document.querySelectorAll('.c3-dialog')];
  const supportsDialog = typeof HTMLDialogElement !== 'undefined' && typeof HTMLDialogElement.prototype.showModal === 'function';
  const dialogTriggers = new WeakMap();
  function openDialog(dialog, trigger) {
    dialogTriggers.set(dialog, trigger);
    dialog.showModal();
  }
  if (supportsDialog) {
    dialogs.forEach(dialog => {
      dialog.querySelector('[data-close-dialog]').addEventListener('click', () => dialog.close());
      dialog.addEventListener('click', event => {
        const bounds = dialog.getBoundingClientRect();
        if (event.target === dialog && (event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom)) dialog.close();
      });
      dialog.addEventListener('close', () => dialogTriggers.get(dialog)?.focus());
    });
    const artworkDialog = document.querySelector('#artwork-dialog');
    document.querySelectorAll('[data-artwork]').forEach(link => link.addEventListener('click', event => {
      event.preventDefault();
      const preview = artworkDialog.querySelector('img');
      preview.src = link.href;
      preview.alt = link.querySelector('img').alt;
      document.querySelector('#artwork-title').textContent = link.dataset.title;
      document.querySelector('#artwork-description').textContent = link.dataset.description;
      openDialog(artworkDialog, link);
    }));
    document.querySelectorAll('[data-open-brief]').forEach(link => link.addEventListener('click', event => {
      event.preventDefault();
      openDialog(document.querySelector('#brief-dialog'), link);
    }));
  }

  const form = document.querySelector('#project-brief-form');
  const result = document.querySelector('#brief-result');
  const briefText = document.querySelector('#brief-text');
  const status = document.querySelector('#brief-status');
  if (form && result && briefText) {
    form.addEventListener('submit', event => {
      event.preventDefault();
      // Validate meaningful text, not just whitespace.
      for (const field of form.querySelectorAll('input, textarea')) {
        field.setCustomValidity(field.value.trim() ? '' : 'Please add a little detail here.');
      }
      if (!form.reportValidity()) return;
      const data = new FormData(form);
      briefText.value = 'Hi Common3! Let’s make it matter.\n\nName: ' + data.get('name').trim()
        + '\nBrand: ' + data.get('brand').trim()
        + '\nInterested in: ' + data.get('service')
        + '\n\nThe idea:\n' + data.get('idea').trim();
      form.hidden = true;
      result.hidden = false;
      status.textContent = 'Your brief is ready. Copy it, then paste it into your message.';
      document.querySelector('#copy-brief').focus();
    });
    form.querySelectorAll('input, textarea').forEach(field => field.addEventListener('input', () => field.setCustomValidity('')));
    document.querySelector('#edit-brief').addEventListener('click', () => {
      result.hidden = true;
      form.hidden = false;
      form.elements.name.focus();
    });
    document.querySelector('#copy-brief').addEventListener('click', async () => {
      try {
        await navigator.clipboard.writeText(briefText.value);
        status.textContent = 'Copied! Open Instagram and paste your brief into a message to @common.3.';
      } catch {
        briefText.focus();
        briefText.select();
        status.textContent = 'Automatic copying is unavailable. Your brief is selected: copy it manually, or download it below.';
      }
    });
    document.querySelector('#download-brief').addEventListener('click', () => {
      const url = URL.createObjectURL(new Blob([briefText.value], { type: 'text/plain;charset=utf-8' }));
      const link = document.createElement('a');
      link.href = url;
      link.download = 'common3-project-brief.txt';
      document.body.append(link);
      link.click();
      link.remove();
      setTimeout(() => URL.revokeObjectURL(url), 1000);
      status.textContent = 'Your brief download is ready. Share it with @common.3 when you’re ready.';
    });
  }

  // Reuse the theme's GSAP without hiding the page while images/fonts load.
  if (window.gsap && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
    gsap.from('.c3-hero-copy > *', { y: 18, opacity: 0, duration: .65, stagger: .07, ease: 'power2.out', clearProps: 'all' });
    gsap.from('.c3-phone', { y: 25, opacity: 0, duration: 1, delay: .15, ease: 'power2.out', clearProps: 'all' });
  }
})();
