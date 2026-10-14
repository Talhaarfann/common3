# 025 - Gymnasium social media case study

Date: 2026-10-14 (Asia/Karachi)

The user supplied five Gymnasium campaign images for the next case study. Continue the approved balanced mockup style using black, white and lime client colors, a light neutral backdrop, one phone and only two supporting campaign cards.

Selected the reel cover, Train With Purpose creative, Build Your Strength creative and Strength/Stamina/Shape brand creative as client references. Used CIMS v3 as the composition/style reference. The dedicated-hours creative provides brand context but is not an extra visual panel. The image tool accepts at most five inputs, so these four client images plus the approved style reference were used.

## Deliverable and integration

Created public/assets/front/img/common3/gymnasium-case-study.png using built-in image generation: the reel cover on a phone and two supporting campaign cards, black/white/lime client artwork, a light neutral cover background and soft natural shadows. This is a generated reference-based presentation; fine lettering and photographed people may differ from source assets. No new social handle or campaign performance claims were introduced.

Exported the square image at 1400×1400 using FFmpeg Lanczos resizing. Updated only the fifth homepage case-study card in resources/views/index2.blade.php: image URL via asset(), descriptive accessibility label, Gymnasium Gujranwala title and Social Media / Content Design / Fitness tags. Preserved masonry framing, parallax and project-details.html demo link. Earlier cards remain intact.

## Validation

Verified PNG dimensions as 1400×1400, asset URL HTTP 200, and git diff --check. Browser inspection confirmed the fifth card resolves the new image and displays the matching caption/tags. The original background-cover and parallax treatment crops the square cover while scrolling.

[Full artwork](../public/assets/front/img/common3/gymnasium-case-study.png). [Installed preview](previews/025-gymnasium-case-study.jpg).

## Generation prompt

Create a premium square 1400x1400 agency portfolio case-study thumbnail for GYMNASIUM, a gym in Gujranwala. Reference 1 is the approved CIMS social-media case-study cover: use its balanced light-background composition, one angled smartphone and ONLY TWO supporting post cards, soft shadows and generous spacing. References 2 through 5 are the actual Gymnasium campaign creatives; use these recognizable designs as the showcased work, not to invent a new campaign. Main central black smartphone displays reference 2's reel cover, retaining the male gym athlete, black background, white/lime ribbons and 'YOUR NEXT CHAPTER STARTS HERE.' headline. One supporting card on left displays reference 3 'TRAIN WITH PURPOSE.' with the woman athlete; one supporting card on right displays reference 4's 'BUILD YOUR STRENGTH.' male athlete campaign. Other references support Gymnasium's real brand wordmark, fitness imagery, black/white/lime identity and typography. Faithfully preserve the supplied people within the actual campaign artwork; do not create new people or alter their identities intentionally. Background clean warm off-white / pale neutral gray, subtle natural studio surface, soft short shadows. Large clean dark title exactly 'GYMNASIUM', a restrained short lime underline, smaller subtitle exactly 'GUJRANWALA', understated small label 'SOCIAL MEDIA CASE STUDY'. Gymnasium brand colors near-black, white and acid lime #C5F21B; do not make the entire canvas neon or black. Strong fitness personality comes from the showcased posts, not additional effects. Balanced middle-ground visual complexity comparable to approved reference: one phone, two cards, no more. No dumbbells or physical gym props, no gym interior as cover backdrop, no glowing device edges, no holographic effects, no explosions, no repeated ribbons outside the actual post images, no invented social profile handle, no fabricated statistics, no extra decorative copy. All significant elements within comfortable margins; strong title and image recognition at thumbnail size. Exact opaque square raster final.
