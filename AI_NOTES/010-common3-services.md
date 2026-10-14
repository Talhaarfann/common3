# 010 - Seven Common3 services

Date: 2026-10-13 (Asia/Karachi)

## Request

Brand the next section with the user's seven niches and correct the headings.

## Changes

Expanded the existing Rayo pinned-image services section in `resources/views/index2.blade.php` from four to seven items, in the requested order:

1. Social Media Marketing
2. Brand Identity
3. Content Creation
4. Web Development
5. Video Editing
6. Graphic Design
7. Videography

Used the conventional service heading “Graphic Design” for the supplied “Graphics Designing”. Social media remains first, reflecting Common3's primary focus. Each service has four relevant tags and a distinct description based on the founders' skills supplied by the user. Copy distinguishes planning and page management, identity systems, content concepts, websites, editing, graphic design, and filming. No fabricated results or client claims were added.

Added three image items alongside the three new text items: seven desktop image items and seven mobile images keep the theme's index-based switching aligned. Images remain the theme's existing gray placeholders until service artwork is selected. Their alt attributes are empty because they are decorative placeholders, rather than descriptive service illustrations.

Retained original section structure, typography, animation classes, responsive image wrappers and tags. Added an accessible “Common3 services” label to the existing container. Original theme CSS/JS and the approved team photo/parallax were not edited.

## Verification

- Live DOM shows all seven headings in the requested order, with seven desktop images and seven mobile images.
- At the 1440px desktop breakpoint, scrolled through all services. Each active text block matched the corresponding image index from 0 through 6; the theme supports the expanded list without animation-code changes.
- At 390px phone width, verified heading/tag wrapping and description readability. Document width equals viewport width, with no horizontal overflow.
- Screenshots: `previews/010-services-desktop.jpg`, `previews/010-services-mobile.jpg`, and `previews/010-services-phone.jpg`.
- Restored the browser's default viewport after responsive checks.
