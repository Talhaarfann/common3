# 007 - Logo gradient on selected headings

Date: 2026-10-13 (Asia/Karachi)

## Request and reference

The user clarified that the headings should use the logo's gradient, rather than the solid lavender/violet added in task 006. Inspected `public/assets/front/img/common3/logo.png`: its colored 3 transitions from violet at the lower left through magenta to coral at the upper right.

## Implementation

- Replaced `t-accent` on “into real stories”, “Case studies” and “Recent insights” with `common3-gradient-text` in `resources/views/index2.blade.php`.
- Added a 65-degree gradient using #8B2CFA, #D735EF and #FF6268 to `public/assets/front/css/common3-brand.css`. The same gradient is used in both modes. These stops visually approximate the supplied artwork using the existing brand palette.
- Clip the gradient to text; size the heading paint area to its content so short headings show the complete color range. Typography, margins, content and original theme sections stay intact.
- Added `public/assets/front/js/common3-brand.js`, loaded after the original libs.min.js and app.js. Rayo splits section headings into individually animated letters. A parent-only text gradient bypassed their opacity visually during testing, so this small adapter aligns each letter's gradient to a shared heading-sized canvas. Original GSAP opacity remains effective. Coordinates update on heading resize and font readiness.
- Keep solid-color fallback for browsers without text clipping and system text colors in forced-color mode.
- Existing buttons, global color tokens, source theme files and original public theme CSS/JS remain unchanged. The earlier custom common3.js/common3.css remain excluded.

## Verification

- Reloaded the live Laravel homepage at http://127.0.0.1:8767/ and visually checked the hero in dark and light modes. Both now show violet through magenta to coral.
- Inspected both section headings: each animated letter uses the same gradient canvas, sized to its heading. Visually verified Case studies during its dim-to-bright reveal and after scrolling; letter opacity and the continuous gradient both work.
- No browser console errors were reported. Restored dark mode for the user.
- Screenshots: `previews/007-logo-gradient-dark.jpg`, `previews/007-logo-gradient-light.jpg`, and `previews/007-logo-gradient-case-studies.jpg`.
