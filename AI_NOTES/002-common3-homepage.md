# 002 - Common3 homepage prototype

Date: 2026-10-12 (Asia/Karachi)

## Request and brand facts

Rebrand the existing Laravel/Rayo Web Agency homepage into a Common3 prototype, using the artwork in `public/assets/front/img/common3`. Document implementation and verification alongside the work.

- Common3 is a startup founded by three people with common minds.
- Primary offer: social media agency services. Secondary offer: web development.
- Talha Arfan: web developer, social media manager, graphic designer.
- Muhammad Butt: content creator, videographer, Meta ads specialist.
- Syed Ali Haider: reels, motion, and long-form video editor.

## Visual analysis

Inspected all nine supplied PNG images, including `logo.png`, `Post 1.png`, `Common 3.png`, and the six timestamped images. The logo is a white C with a gradient superscript 3 on near-black. The posts use large white sans-serif lettering, black negative space, violet/magenta/coral light, and a recurring oversized numeral 3.

Brand language taken from the supplied artwork: “Three minds. One common idea.” and “Make it matter.” The social handle printed in the artwork is `@common.3`; the prototype uses its Instagram profile URL, pending owner confirmation before launch.

Working website palette (visually derived, not supplied official swatches): near-black #0A0A0A, warm white #F5F3F7, violet #8B2CFA, magenta #D735EF, coral #FF6268. Use the gradient as an accent with clear white body text.

## Theme analysis and implementation direction

- Existing Rayo assets include Funnel Display/Funnel Sans typography, Phosphor icons, Bootstrap/plugin styles, and GSAP in libs.min.js.
- Keep those theme foundations and the Laravel master/partial structure. Add dedicated Common3 CSS and JavaScript instead of editing the vendor theme assets.
- Rayo's demo app.js assumes a loader and specific demo DOM nodes and includes template form endpoints. The Common3 homepage will use its own progressive enhancement script, avoiding those demo dependencies.
- Replace template navigation, content, metadata, footer, and fake demo proof with real brand content.
- Build a social-first hero, artwork gallery, service accordions, founder story, process, and project-brief contact interaction.
- Artwork will be described as Common3's own brand studies. No invented clients, results, awards, testimonials, pricing, or founder photos.
- Prototype contact flow prepares a brief locally for copying/downloading and directs visitors to Instagram; no fake “message sent” response or invented email address.

## Implementation and verification

In progress. File inventory and final verification results will be added below.

## Access recovery

Earlier attempts were blocked by a Windows security error affecting the Codex tool host. Workspace reads and image inspection now work normally; resumed the original homepage request without requiring the brief again.
