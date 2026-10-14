# 024 - CIMS website design case study

Date: 2026-10-13 (Asia/Karachi)

The user supplied CIMS website screenshots for the next case study, identified as cimsofficial.com website design. Continue the approved balanced cover style with one laptop displaying the homepage and a single supporting courses-page panel, using CIMS's navy/blue/white identity on a light neutral background.

Selected the supplied homepage and courses screenshots as client-content references and the Rills cover as the presentation-style reference. The other supplied faculty, physics course and news screenshots provide context; they are not needed as extra visual panels. Preserve recognizable content while omitting phone strips and course prices from the mockup.

## Deliverable and integration

Generated the reference-based mockup with the built-in image tool, visually inspected its domain, client name, layout and page recognition, and exported public/assets/front/img/common3/cims-website-case-study.png with FFmpeg Lanczos resizing. The image uses a single laptop and supporting course browser panel; fine page text, crest details and photographed people may differ from source screenshots because this is generated artwork rather than an exact screenshot composite.

Updated only the fourth card in resources/views/index2.blade.php: the new image URL via asset(), accessible label, “CIMS Academy cimsofficial.com website” title, and Web Design / Web Development / Education tags. Preserved theme masonry, parallax and existing project-details.html demo link. The CIMS social media card remains separate and unchanged. The original card framing crops the square artwork while scrolling.

## Validation

Verified PNG dimensions as 1400×1400, asset HTTP 200 and git diff --check. Browser review confirmed the new image, title and tags in the fourth card.

[Full artwork](../public/assets/front/img/common3/cims-website-case-study.png). [Installed preview](previews/024-cims-website-case-study.jpg).

## Generation prompt

Create a square 1400x1400 premium website-design portfolio thumbnail for cimsofficial.com, CIMS Academy's educational website. Reference 1 is the actual homepage hero screenshot, reference 2 is the actual courses page, reference 3 is an approved RILLS case-study cover for the desired balanced light mockup presentation style. Follow reference 3's restrained studio feel but adapt naturally to this academy website. One main thin silver laptop at a slight realistic angle showing reference 1's homepage: preserve the CIMS crest, white navigation bar, blue Apply Now button, student hero photograph and recognizable 'Top Results in O & A Level Examinations' heading. Add ONLY ONE modest supporting flat browser-window card showing the courses-page section from reference 2 with the three subject thumbnails Mathematics, Physics and Chemistry. The main laptop is dominant; the supporting panel sits slightly behind or alongside it with space, not obscuring important content. Background warm off-white/light gray, natural soft daylight and short shadows; enough breathing room, no clutter. Above the mockups, refined navy headline exactly 'CIMS Academy', smaller prominent domain exactly 'cimsofficial.com', and a restrained 'WEBSITE DESIGN' label. CIMS client colors navy, bright blue #087BFF, white and subtle gold crest accents. Preserve recognizable website content and people within the supplied homepage screenshot; no new people or extra portraits. Omit course pricing and phone-number header strips from mockup presentation. No fake results or invented analytics. No neon, no glowing outlines, no holographic blue backdrop, no extra UI panels or devices, no decorative props, no schoolbooks, no pens. Keep important elements safely within canvas margins and layout readable at thumbnail scale. Tasteful middle-ground mockup, visually consistent with approved cover, neither flat minimal tiles nor overloaded montage. Opaque square raster image.
