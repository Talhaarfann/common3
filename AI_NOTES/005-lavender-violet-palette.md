# 005 - Bring the earlier Common3 palette into Rayo

Date: 2026-10-13 (Asia/Karachi)

## Request

The user finds coral too prominent in dark mode and prefers the colors from the earlier index.blade.php prototype. Apply that color direction while retaining the original Rayo design on index2.

## Comparison and changes

Read common3.css only as a color reference. It remains unloaded on index2. All application edits are limited to color custom properties in public/assets/front/css/common3-brand.css.

| Token / purpose | Previous | Updated |
| --- | --- | --- |
| Dark primary accent and matching RGB | #FF6268 coral | #E0C6FF pale lavender, taken from the prototype's primary buttons |
| Light secondary surface and matching RGB | #EED7FA | #E0C6FF |
| Dark raised surface | #17131C | #131214 |
| Dark shaded surface | #050505 | #171419 |
| Dark muted border | #2B2232 | #2B282E |
| Dark medium text | #C4BACB | #C7C1CE |
| Dark muted text | #A89CAE | #A5A1AA |
| Dark extra-muted text | #665A6D | #827D87 |
| Existing decorative magenta RGB | 215, 53, 239 | 221, 67, 222 (the prototype gradient's #DD43DE midpoint) |

Retained near-black #0A0A0A, warm white #F5F3F7, violet #8B2CFA for light accents/dark secondary elements, and the theme's original light/dark variable mapping. Coral is no longer a theme accent; its small presence within the original logo artwork is preserved.

Rayo accent buttons use opposite-mode text, so lavender in dark mode pairs with near-black text. Secondary violet buttons keep light text. No gradients, sections, layout rules, typography, or animation changes were added. No view, original theme CSS/JS, or logo image was edited.

## Verification

- Reloaded the active index2 preview at http://127.0.0.1:8767/.
- Light mode resolves --accent to #8B2CFA and --additional to #E0C6FF.
- The original switch changes to dark mode with background rgb(10, 10, 10) and --accent #E0C6FF.
- After the original color transition settled, the existing secondary CTA rendered violet rgb(139, 44, 250) with warm white rgb(245, 243, 247) text.
- Confirmed the browser loads only loader.css, plugins.css, main.css and common3-brand.css; the earlier prototype stylesheet remains unloaded.
- Inspected the hero and original contact section in dark mode. The page remains the Rayo design with its existing placeholders and text.
- Preview screenshot: previews/005-lavender-violet-dark.jpg. Dark mode is left selected for review.
