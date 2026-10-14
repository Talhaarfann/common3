/* Keep the logo gradient continuous across Rayo's animated SplitType letters.
   Run after app.js; leave the original splitting and GSAP animation untouched. */
(() => {
  const headings = document.querySelectorAll('.common3-gradient-text.reveal-type');
  const paintGradient = (heading) => {
    const letters = heading.querySelectorAll('.char');
    if (!letters.length) return;
    const bounds = heading.getBoundingClientRect();
    heading.style.setProperty('--common3-gradient-size', `${bounds.width}px ${bounds.height}px`);
    letters.forEach((letter) => {
      const rect = letter.getBoundingClientRect();
      letter.style.setProperty('--common3-gradient-position', `${bounds.left - rect.left}px ${bounds.top - rect.top}px`);
    });
    heading.classList.add('common3-gradient-split');
  };
  const resizeObserver = new ResizeObserver((entries) => {
    entries.forEach(({ target }) => paintGradient(target));
  });
  headings.forEach((heading) => {
    paintGradient(heading);
    resizeObserver.observe(heading);
  });
  document.fonts.ready.then(() => headings.forEach(paintGradient));
})();

/* Lower the team photo without reducing Ukiyo's original zoom or speed.
   Limit the framing offset to the available crop so no empty edge is exposed. */
(() => {
  const image = document.querySelector('.common3-team-divider');
  if (!image) return;
  const updateFraming = () => {
    const transform = new DOMMatrixReadOnly(getComputedStyle(image).transform);
    const wrapperTop = image.parentElement.getBoundingClientRect().top;
    const availableCrop = -transform.m42 + Math.max(0, -wrapperTop);
    image.style.translate = `0 ${Math.max(0, Math.min(100, availableCrop))}px`;
  };
  const scheduleFraming = () => requestAnimationFrame(updateFraming);
  window.addEventListener('scroll', scheduleFraming, { passive: true });
  window.addEventListener('resize', scheduleFraming);
  window.addEventListener('load', scheduleFraming);
  scheduleFraming();
})();
