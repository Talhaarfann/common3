# 033 — Clean header and Under Construction page

Date: 2026-10-14

## Request

Put About Us in the header, clean the header navigation, and create an Under Construction page linked from project details and all work pages.

## Changes

- Replaced the shared header's theme demo accordion/submenus with six direct links: Home, About Us, Works, Services, Insights and Contact. Removed commented demo home variants and unrelated demo page links.
- Added a desktop About Us button beside the existing theme switch and Say Hello controls. It is hidden below the large breakpoint to keep the mobile header comfortable; mobile visitors have the direct About Us menu item.
- Branded the menu caption with the three-minds story. Existing menu animation classes, hamburger, team promo photo, copyright, logo, color switch and contact button remain.
- Services and Insights point to real homepage sections. Added `common3-services` and `common3-insights` IDs to those existing sections. Updated the footer's corresponding links to the same destinations.
- Added `UnderConstructionController::index()` and `resources/views/under-construction.blade.php`, extending `layouts.front`. The page uses Rayo's inner headline grid, Common3 gradient, shared loader/header/footer and animated theme buttons. Copy explains that portfolio and case studies are being prepared, with Home and Contact actions.
- Scoped mobile heading sizing prevents the long construction word being clipped. Buttons wrap using existing Bootstrap utilities and retain full captions on 390px screens.
- GET `/under-construction` is named `under-construction`.
- Temporary redirects cover `/project-detail`, `/project-details`, `/works`, `/works-simple` and `/works-masonry`, plus each `.html` counterpart. These include both actual Rayo work pages and the supplied singular project-detail spelling. All lead to the canonical construction page; no general catch-all route was added.
- Homepage portfolio buttons and all six project media/title links, About's work/gallery links and the footer Works link now use the named construction route directly.
- Original THEME source, public theme CSS/JS and case-study artwork/content remain untouched. No database changes are needed.

Changed files: shared header/footer, homepage, About view, routes, new controller and new construction view. Pre-edit checkpoints: `backups/033-header-construction/`.

## Verification

- Canonical page and all ten legacy/clean portfolio aliases resolve to HTTP 200 with the Under Construction title after redirects.
- Browser menu opens with the original animation and contains the six intended links. Clicking About Us from the menu navigates to `/about-us`.
- Desktop 1440px and mobile 390px screenshots reviewed. No horizontal overflow on mobile; heading and both buttons are fully visible. Desktop About Us button fits in the existing header.
- Browser JavaScript error log empty. Loader closes normally.
- Pint passed for the new controller and routes. Blade compilation passed. Existing Laravel suite: **11 tests passed, 59 assertions**. `git diff --check` passed.
- Screenshots: `previews/033-under-construction.jpg`, `033-construction-mobile.jpg`, `033-clean-menu.jpg` and `033-clean-menu-mobile.jpg`.

The redirects are temporary while full work and project pages are built. Remove the corresponding temporary redirect when implementing each real page. Existing homepage `common3-work` remains available as a direct section anchor, although work-page buttons now intentionally lead to Under Construction.
