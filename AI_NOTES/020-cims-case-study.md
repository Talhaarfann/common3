# 020 - CIMS Academy case study

Date: 2026-10-13 (Asia/Karachi)

## Request and output

Following the MathTrix thumbnail and integration, the user supplied CIMS Academy's profile and post-grid screenshots and requested the corresponding academy case study.

Created `public/assets/front/img/common3/cims-case-study.png`, an opaque 1400×1400 PNG in the client's navy, royal blue, cyan, white and subtle gold identity. The artwork uses a smartphone profile mockup surrounded by recognizable educational post cards. It identifies CIMS Academy and O & A Levels in Gujranwala without fabricated campaign results. This is a generated reference-based mockup; small post and interface text may differ from the screenshots.

Used the built-in image generation tool with both reference screenshots, visually inspected the title, composition, palette and recognizable posts, and resized its 1254×1254 output to exactly 1400×1400 with FFmpeg Lanczos filtering.

## Homepage integration

Updated only the second case-study card in resources/views/index2.blade.php: image URL through asset(), accessible image label, “CIMS Academy” title with “O & A Levels, Gujranwala”, and Social Media / Content Design / Education tags. Preserved Rayo's existing masonry framing, parallax and project-details.html demo link. MathTrix and other cards remain intact. The original background-cover framing crops the square artwork during parallax.

## Validation

PNG dimensions verified as 1400×1400. Asset URL returned HTTP 200. Browser inspection confirmed the second card's image and matching caption/tags. git diff --check passed. [Installed preview](previews/020-cims-case-study.jpg).

## Reference inputs

- `C:/Users/SPOOOD~1/AppData/Local/Temp/codex-clipboard-1c310feb-f3b6-49d6-98c5-c4e77da6a63f.png`: CIMS Instagram profile.
- `C:/Users/SPOOOD~1/AppData/Local/Temp/codex-clipboard-e5b96b03-5fe2-433a-8a41-288cbd8be0d8.png`: educational post grid.

## Generation prompt

Use case: compositing / ads-marketing. Create a premium square 1400 x 1400 agency portfolio case-study thumbnail for CIMS Academy, an O & A Levels, Matric and SAT teaching academy in Gujranwala, Pakistan. Reference image 1 is the actual Instagram profile cims.grw; reference image 2 is its actual educational post grid. Use BOTH as client material. A sophisticated editorial social media campaign presentation, photorealistic mockups, confidently art-directed. Background deep midnight navy with subtle blue technical grid and soft studio illumination. Large crisp top title exactly 'CIMS ACADEMY', smaller subtitle exactly 'O & A LEVELS · GUJRANWALA', restrained label exactly 'SOCIAL MEDIA CASE STUDY'. Central angled black smartphone displays the recognizable supplied Instagram identity and navy-blue feed. Around the phone arrange 3 to 4 floating rounded post cards faithfully based on reference 2, particularly 'YOUR RESULT MATTERS. SO DO YOU.', '5 STUDY HABITS', 'SIMILAR TERMS. DIFFERENT MEANINGS.' and 'QUESTION KO SAMJHO.' Preserve these actual designs, white/cyan text and navy backgrounds; retain recognizable academy crest. CIMS colors navy #060735, royal blue #0D238F, bright electric blue #2389F4, white typography and restrained gold crest accents. Gentle realistic shadows, edge light, considered negative space. This should belong to the same portfolio family as a premium phone-and-social-posts mockup cover. Keep title and main visual safely within margins and readable as thumbnail. Remove screenshot status bars, edit-profile/dashboard controls, floating note bubble, and engagement counters from the presented design. No fabricated growth/results statistics, no new people or portraits, no unrelated Common3 neon palette. Do not invent a new logo; use reference crest. Show education through the actual posts rather than generic graduation props. Opaque square raster artwork.
