# 016 - Restore preloader after undo/paste

Date: 2026-10-13 (Asia/Karachi)

The user requested repairing only the preloader after undoing and pasting changes.

## Cause and repair

The preloader markup, logo assets, CSS, animation controller, and app.js reveal listener were intact. However, index2.blade.php no longer included common3-preloader.css or common3-preloader.js, so the custom markup had neither its styling nor its controller.

Restored exactly two lines after common3-brand.css in resources/views/index2.blade.php: the preloader stylesheet link and deferred script include. No other application files or page content were changed.

## Verification

- Homepage returned HTTP 200.
- Browser showed the animated wordmark, then the loader became hidden and revealed the homepage.
- Both includes were present, the stylesheet loaded, and all five loader image elements loaded successfully.
- No browser JavaScript errors were captured.
- Removing the two restored lines in memory reproduced the exact pre-edit SHA-256 of index2.blade.php, confirming all other view content stayed unchanged. app.js and both preloader asset hashes also remained unchanged.
- git diff --check passed.
- [Homepage after the restored intro completed](previews/016-preloader-restored.jpg).
