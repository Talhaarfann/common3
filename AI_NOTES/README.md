# Common3 AI notes

All project work must be documented in this folder alongside implementation. Each task note records the request, findings, changed files, decisions, validation results, and remaining work. Update the task note when verification finishes.

## Current direction

The active homepage is `resources/views/index2.blade.php`, served by `/`. Preserve the original Rayo design and build branding one step at a time. Branding includes gradient headings, the team divider, About copy, seven services, six case studies, Recent Insights and the custom logo preloader. At the user's request, task 030 extracts the approved page into `layouts.front` and shared partials, reused by `/contact`. Keep theme script order; do not load the earlier custom master, `common3.css`, or `common3.js`. Task 015 coordinates the new intro; task 030 excludes the Laravel form from demo AJAX submission. Earlier custom-prototype artifacts are historical and are not the approved design direction.

## Task history

- [001 - Theme asset setup](001-theme-asset-setup.md) (2026-10-10): Fix the Web Agency homepage CSS, JavaScript, favicon, and local media paths.

- [003 - Restore the original theme on index2](003-index2-theme-restore.md) (2026-10-13): Restore the original Rayo page structure, asset URLs and animation scripts.

- [004 - Common3 logo and theme colors](004-common3-logo-colors.md) (2026-10-13): Brand the header, favicon and existing theme palette.

- [005 - Lavender and violet palette](005-lavender-violet-palette.md) (2026-10-13): Replace the prominent coral accent with the earlier prototype's lavender/violet color direction, retaining the original Rayo design.

- [006 - Heading brand accents](006-heading-brand-accents.md) (2026-10-13): Apply the existing theme accent class to selected homepage headings.

- [007 - Logo gradient headings](007-logo-gradient-headings.md) (2026-10-13): Replace the solid heading accents from task 006 with the logo's violet/magenta/coral gradient, preserving letter reveal animations.

- [008 - Team divider image](008-team-divider-image.md) (2026-10-13): Use teamTogether.png in the parallax divider below the first marquee.

- [009 - Common3 About copy](009-common3-about-copy.md) (2026-10-13): Brand the introduction immediately below the team photo.

- [010 - Common3 services](010-common3-services.md) (2026-10-13): Expand the original pinned-image section to all seven services with matching copy and tags.

- [011 - Social Media Marketing artwork](011-social-media-marketing-artwork.md) (2026-10-13): Generate and install the 800×800 Common3 service illustration.

- [012 - Remaining service artwork](012-remaining-service-artwork.md) (2026-10-13): Generate six matching 800×800 service images for manual integration; website unchanged.

- [013 - Transparent service artwork](013-transparent-service-artwork.md) (2026-10-13): Remove all seven black backgrounds while keeping translucent brand-color glow and shadow gradients.

- [014 - Transparent image paths](014-transparent-image-paths.md) (2026-10-13): Correct desktop directory typos and point all seven mobile images to their transparent counterparts.

- [015 - Wordmark preloader](015-wordmark-preloader.md) (2026-10-13): Reference-inspired wordmark-to-C³ animation, gradient panel reveal, and protection against the old 100% loader stall.

- [016 - Restore preloader includes](016-restore-preloader-includes.md) (2026-10-13): Restore the two CSS/JS includes removed during undo/paste; all other application content preserved.

- [017 - Common3 footer wordmark](017-common3-footer-wordmark.md) (2026-10-13): Replace the full-width theme footer lettering with Common3 in the logo gradient.

- [018 - MathTrix case-study thumbnail](018-mathtrix-case-study-thumbnail.md) (2026-10-13): Create a 1400×1400 client portfolio thumbnail from two Instagram screenshots.

- [019 - MathTrix first case study](019-mathtrix-first-case-study.md) (2026-10-13): Install the MathTrix thumbnail, title and service tags in the first case-study card.

- [020 - CIMS Academy case study](020-cims-case-study.md) (2026-10-13): Generate a 1400×1400 academy thumbnail and install it in the second case-study card.

- [021 - Simplify CIMS thumbnail](021-simplify-cims-thumbnail.md) (2026-10-13): Replace the crowded glowing mockup with a spacious, flat two-post presentation.

- [022 - CIMS in the MathTrix style](022-cims-mathtrix-style.md) (2026-10-13): Refine the cover to a light phone mockup with two supporting posts, following the user's approved MathTrix reference.

- [023 - Rills Attendance Management System](023-rills-attendance-case-study.md) (2026-10-13): Create a navy/mint laptop dashboard thumbnail and install it as the third case study.

- [024 - CIMS website design](024-cims-website-case-study.md) (2026-10-13): Generate a cimsofficial.com website thumbnail and install it in the fourth case-study card.

- [025 - Gymnasium case study](025-gymnasium-case-study.md) (2026-10-14): Generate a black/white/lime campaign thumbnail and install it in the fifth case-study card.

- [026 - Burgher case study](026-burgher-case-study.md) (2026-10-14): Generate a green/yellow food-campaign thumbnail and install it in the sixth case-study card.

- [027 - Recent Insights](027-recent-insights.md) (2026-10-14): Add three curated marketing/design guides with matching generated editorial pictures.

- [028 - CTA background path](028-cta-background-path.md) (2026-10-14): Correct the stylesheet-relative path to bg3.png.

- [029 - Common3 menu copy](029-common3-menu-copy.md) (2026-10-14): Brand the menu introduction, copyright and video poster.

- [030 - Contact page and email enquiries](030-contact-page.md) (2026-10-14): Extract shared Rayo layout/partials, build the theme contact page, persist/validate enquiries and wire Hostinger mail; mailbox password still required for live delivery.

- [031 - Contact confirmation page](031-contact-confirmation.md) (2026-10-14): Add a shared-theme message-received page and redirect successful enquiry submissions to it; verify desktop/mobile and email failure behavior.

- [032 - Common3 About Us](032-about-us.md) (2026-10-14): Adapt the original Rayo About page with the founder story, seven services, three founder cards, confirmed brand facts, process, artwork and working navigation.

- [033 - Header and Under Construction](033-header-under-construction.md) (2026-10-14): Clean shared navigation, promote About Us, connect real homepage sections and route unfinished work/project destinations to the new themed placeholder page.
