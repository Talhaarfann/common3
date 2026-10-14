# 011 - Social Media Marketing artwork

Date: 2026-10-13 (Asia/Karachi)

## Request

Create an 800×800 image for the Social Media Marketing service using Common3's branding colors.

## Deliverable and integration

- Created original artwork using the built-in imagegen tool and imagegen skill.
- Palette: near-black #0A0A0A, violet #8B2CFA, magenta #D735EF and coral #FF6268 with white highlights.
- The illustration depicts a smartphone content grid, chat/engagement icons, sharing and a rising graph. No text, fabricated metrics or platform wordmarks.
- Saved an exactly 800×800 PNG to `public/assets/front/img/common3/social-media-marketing.png`. High-quality bicubic resampling adjusted the generated square to the requested delivery dimensions; original generated output remains preserved in the Codex generated_images folder.
- Replaced only the Social Media Marketing desktop and mobile placeholders in `resources/views/index2.blade.php`, using Laravel `asset()` URLs, descriptive alt text and intrinsic image dimensions. Original theme classes and pinned transitions stay intact.

## Final generation prompt

Use case: stylized-concept. Asset type: 800x800 square illustration for Common3 agency website Social Media Marketing service. Create an 800x800 square premium 3D editorial illustration with a near-black #0A0A0A background. A central sleek smartphone showing an abstract social content grid, surrounded by a small, carefully composed collection of floating chat bubbles, heart notification tiles, a paper-plane share icon, and a clean rising engagement graph. Communicate social media strategy, content and audience connection. Use Common3's exact brand palette: vivid violet #8B2CFA blending through magenta #D735EF into coral #FF6268, with restrained white highlights. Strong coherent violet-magenta-coral gradients across sculptural glass and satin surfaces; beautiful studio rim lighting, subtle depth and shadows. Center the composition with ample breathing room and safe edges for a rounded square website crop. Polished contemporary creative agency visual, distinctive and readable at small sizes. No text, no letters, no numbers, no invented logo, no watermark, no platform wordmarks. Background is solid near-black, not transparent.

## Verification

- Read the saved PNG dimensions: 800×800.
- Reloaded the homepage. Both desktop and mobile image elements load successfully with natural dimensions 800×800.
- Visually checked the artwork in the original rounded service image slot. Preview: `previews/011-social-media-marketing.jpg`.
- `git diff --check` passed.
