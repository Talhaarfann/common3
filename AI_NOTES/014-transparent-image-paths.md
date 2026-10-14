# 014 - Fix transparent service image paths

Date: 2026-10-13 (Asia/Karachi)

## Request and cause

The user requested fixing the image paths after creating transparent artwork. Six desktop service paths referenced a nonexistent `common3/transplant/` directory. Social Media Marketing already had the correct desktop path. Mobile service images still referenced the original black-background artwork or theme placeholders.

## Fix

Updated `resources/views/index2.blade.php` so all seven services reference their matching PNG in `assets/front/img/common3/transparent/` through Laravel's `asset()` helper, for both desktop pinned images and mobile images. Preserved existing service copy, classes, image attributes and animations.

## Verification

- Reloaded the homepage and checked all 14 service image elements: each references `/common3/transparent/`, loads successfully, and reports natural dimensions of 800×800.
- `git diff --check` passed.
