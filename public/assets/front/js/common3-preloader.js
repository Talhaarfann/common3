/* The intro depends only on its two logo assets, never every image on the page. */
(() => {
  const loader = document.querySelector('[data-common3-preloader]');
  if (!loader) return;
  const find = (selector) => loader.querySelector(selector);
  const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)').matches;
  let finished = false;
  let revealed = false;
  const animations = [];
  const wait = (ms) => new Promise((resolve) => setTimeout(resolve, ms));
  const revealPage = () => {
    if (revealed) return;
    revealed = true;
    document.dispatchEvent(new Event('common3:reveal'));
  };
  const finish = () => {
    if (finished) return;
    finished = true;
    clearTimeout(safetyTimer);
    animations.forEach((animation) => animation.cancel());
    loader.hidden = true;
    loader.setAttribute('aria-hidden', 'true');
    revealPage();
  };
  // Registered before any animation work, including when assets or scripts fail.
  const safetyTimer = setTimeout(finish, 8000);
  find('.c3-loader-skip').addEventListener('click', finish);
  const animate = (selector, frames, duration, easing = 'cubic-bezier(.76,0,.24,1)') => {
    if (finished) return Promise.resolve();
    const animation = find(selector).animate(frames, { duration, easing, fill: 'forwards' });
    animations.push(animation);
    return animation.finished.catch(() => {});
  };
  const logoReady = Promise.all([...loader.querySelectorAll('img')].map((image) =>
    image.decode().catch(() => {})
  ));
  const run = async () => {
    await Promise.race([logoReady, wait(1200)]);
    if (finished) return;
    if (reducedMotion) {
      await wait(150);
      finish();
      return;
    }
    await animate('.c3-loader-wordmark', [
      { opacity: 0, transform: 'translateY(18px)' },
      { opacity: 1, transform: 'translateY(0)' }
    ], 650);
    await wait(650);
    await Promise.all([
      animate('.c3-loader-piece--middle', [
        { opacity: 1, transform: 'scaleX(1)', filter: 'blur(0)' },
        { opacity: 0, transform: 'scaleX(.18)', filter: 'blur(8px)' }
      ], 650),
      animate('.c3-loader-piece--tagline', [
        { opacity: 1, transform: 'translateY(0)' },
        { opacity: 0, transform: 'translateY(12px)' }
      ], 350),
      animate('.c3-loader-piece--c', [{ transform: 'translateX(0)' }, { transform: 'translateX(23%)' }], 850),
      animate('.c3-loader-piece--three', [{ transform: 'translateX(0)' }, { transform: 'translateX(-23%)' }], 850)
    ]);
    await Promise.all([
      animate('.c3-loader-wordmark', [{ opacity: 1 }, { opacity: 0 }], 450),
      animate('.c3-loader-mark', [{ opacity: 0, transform: 'scale(.66)' }, { opacity: 1, transform: 'scale(1)' }], 600)
    ]);
    await wait(400);
    await Promise.all([
      animate('.c3-loader-seam', [{ transform: 'scaleX(0)' }, { transform: 'scaleX(1)' }], 500),
      animate('.c3-loader-stage', [{ opacity: 1, transform: 'scale(1)' }, { opacity: 0, transform: 'scale(.92)' }], 450),
      animate('.c3-loader-caption', [{ opacity: 1 }, { opacity: 0 }], 300),
      animate('.c3-loader-skip', [{ opacity: 1 }, { opacity: 0 }], 300)
    ]);
    if (finished) return;
    revealPage();
    await Promise.all([
      animate('.c3-loader-panel--top', [{ transform: 'translateY(0)' }, { transform: 'translateY(-100%)' }], 950),
      animate('.c3-loader-panel--bottom', [{ transform: 'translateY(0)' }, { transform: 'translateY(100%)' }], 950),
      animate('.c3-loader-seam', [{ opacity: 1 }, { opacity: 0 }], 400)
    ]);
    finish();
  };
  run().catch(finish);
})();
