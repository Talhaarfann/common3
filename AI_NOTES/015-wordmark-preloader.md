# 015 - Common3 wordmark-to-monogram preloader

Date: 2026-10-13 (Asia/Karachi)

## Request and reference

Replace the loader that remained at 100% with an animation inspired by the supplied video, using `Wordmark — dark@2x.png` and transitioning into `logo.png` in Common3 colors.

Analyzed `E:/Photoshop shit/Photoshop Shit/Common 3/66f3c9708a821273014805.mp4`: 6.76 seconds, 1600×1200, approximately 24 fps. The reference contracts a full wordmark into a compact symbol and then opens a horizontal seam to reveal the page. [Reference contact sheet](previews/015-preloader-reference.jpg).

## Implementation

- `resources/views/index2.blade.php`: replace the counter markup with the branded intro, load its dedicated stylesheet and deferred controller, and add a no-JavaScript hiding fallback. Existing bottom theme script order is retained.
- `public/assets/front/css/common3-preloader.css`: near-black panels, responsive logo framing, moving wordmark crops, violet/magenta/coral light seam, caption, keyboard focus style, reduced-motion treatment and a 10-second CSS visibility fallback.
- `public/assets/front/js/common3-preloader.js`: native Web Animations sequence with bounded logo decoding, skip control, reduced-motion completion, an eight-second watchdog and a single `common3:reveal` event.
- `public/assets/front/js/app.js`: minimal loader integration. The new intro triggers the existing Rayo page entrance without the old extra delays. Legacy loader markup uses imagesLoaded's `always` event instead of `done`. Other theme animation sections remain unchanged.

The actual supplied bitmap artwork remains unmodified. Four clipped instances of the wordmark allow the middle letters and tagline to dissolve while the C and superscript 3 converge. This composition crossfades into the actual monogram; it is not a vector-path morph. The gradient seam then grows across the screen and the panels open vertically. The small caption reads “THREE MINDS. ONE COMMON IDEA.”

Normal sequence: 650ms wordmark entrance, 650ms hold, 850ms contraction, 600ms monogram handoff, 400ms hold, 500ms seam, 950ms panel opening. Logo readiness is bounded to 1200ms. Page entrance begins with panel opening (around 3.7 seconds with cached assets); overlay removal follows around 4.7 seconds. Intro plays on each page load; Skip intro ends it immediately.

## Why the old loader stuck

The percentage counter was simulated independently of image loading. The page reveal listened to imagesLoaded's success-only `done` event. Three current page assets were missing: `testi1.png`, `testi2.png`, and `logo2.png`. Their failures prevented that event despite the counter reaching 100%.

The new loader waits only briefly for its own logo assets and cannot be held by unrelated page images. Missing testimonial/logo assets are outside this task and remain to be supplied or repointed.

## Verification

- Installed homepage reload: loader becomes hidden, all five logo image elements load with correct natural dimensions, and no JavaScript console errors were captured.
- Temporary local review harness exercised the production controller without theme dependencies. Normal reveal event: 3.70s; reduced-motion branch: 0.19s; Skip intro: 0.31s after starting the test; intentionally missing logo URLs: reveal at 3.94s and loader hidden afterward.
- All animation promises deliberately stalled: watchdog hid the loader and fired reveal at 8.03s.
- Desktop wordmark and monogram inspected visually. At 390×844, an initial grid overflow cropped the wordmark; `minmax(0, 1fr)` fixed the grid track and the full wordmark/tagline now fit.
- Review controls visible in review screenshots are test-only and are not part of the homepage. Temporary public harness removed after verification; browser viewport reset.
- `git diff --check` passed. Browser execution provided JavaScript validation; local Node checks were unavailable because Windows antivirus blocked the bundled executable. No antivirus settings were changed.

## Review images

- [Wordmark](previews/015-wordmark.jpg)
- [Monogram](previews/015-monogram.jpg)
- [Mobile wordmark after correction](previews/015-mobile-wordmark.jpg)

Original Rayo source files in THEME, homepage section layout, brand colors, team-photo parallax, and service content are preserved. The public theme app.js loader integration above is an intentional exception to the earlier no-theme-script-edits approach, necessary to coordinate the explicitly requested replacement intro.
