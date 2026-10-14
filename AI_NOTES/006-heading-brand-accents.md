# 006 - Common3 heading accents

Date: 2026-10-13 (Asia/Karachi)

## Request

Give some headings the Common3 brand color while retaining the supplied Rayo design.

## Changes

Added Rayo's existing `t-accent` class to three text elements in `resources/views/index2.blade.php`:

- The hero's “into real stories” line.
- The “Case studies” heading.
- The “Recent insights” heading.

These use the current theme accent: pale lavender #E0C6FF in dark mode and violet #8B2CFA in light mode. The other heading text stays neutral to preserve contrast and hierarchy. No new CSS, markup wrappers, copy changes, or animation changes were needed; all original reveal/loading classes remain.

## Verification

- Reloaded the homepage and confirmed all three selected text elements compute to rgb(224, 198, 255) in dark mode and rgb(139, 44, 250) in light mode.
- Visually inspected the hero after the original loader completed. Font, line wrapping, layout and animation classes remain unchanged.
- Verified the original color switch and restored dark mode for review.
- Screenshot: previews/006-heading-accents-dark.jpg.
