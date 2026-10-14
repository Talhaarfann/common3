# 026 - Burgher social media case study

Date: 2026-10-14 (Asia/Karachi)

The user supplied Burgher's mark and four food campaign creatives for the next portfolio case study. Continue the approved light-background mockup style with a central phone and two supporting posts, showing the client's deep green and yellow identity.

Use Gymnasium's approved cover as the style reference, plus Burgher's supplied mark, Big Grill Energy burger, Side? Think Bigger loaded-fries, and Too Saucy To Scroll artwork. The This Or That burger creative provides context but is not an extra panel; five reference inputs fit the tool limit.

## Deliverable and integration

Generated public/assets/front/img/common3/burgher-case-study.png with the built-in image tool, showing the sauce campaign on a smartphone and burger/fries campaigns on two cards. The client mark, deep green, golden yellow and cream maintain the supplied identity. Inspected the generated title, food presentation and campaign recognition. It is a reference-based generated mockup; fine lettering, logo and food details can differ from source artwork.

Exported the square image at 1400×1400 with FFmpeg Lanczos resizing. Updated only the sixth homepage case-study card in resources/views/index2.blade.php: new image URL via asset(), accessible label, Burgher social media campaigns title, and Social Media / Content Design / Food & Beverage tags. Preserved existing masonry, parallax and project-details.html demo link; the prior five cards are unchanged.

## Validation

PNG dimensions verified as 1400×1400; asset HTTP 200 and git diff --check passed. Browser review confirmed the new background, caption and tags. Theme background-cover/parallax framing crops the square artwork during scrolling.

[Full artwork](../public/assets/front/img/common3/burgher-case-study.png). [Installed preview](previews/026-burgher-case-study.jpg).

## Generation prompt

Create a premium square 1400x1400 social-media portfolio case-study thumbnail for Burgher, the food brand. Reference 1 is the approved Gymnasium cover: follow its balanced warm light-background mockup style, one angled black smartphone and ONLY TWO supporting campaign post cards, realistic short soft shadows, generous spacing. Reference 2 is Burgher's actual yellow Urdu burger-shaped brand mark on deep green: preserve this mark recognizably; do not redesign or mistranscribe it. Reference 3 is the supplied 'BIG GRILL ENERGY.' burger creative, reference 4 is the yellow 'SIDE? THINK BIGGER.' loaded-fries creative, reference 5 is the 'TOO SAUCY TO SCROLL.' burger creative. Central phone displays reference 5 faithfully, including the food photography, deep green, mustard/yellow type and visible social-handle design. Left supporting card shows reference 3; right shows reference 4. Preserve the actual campaign imagery and wording as closely as possible. Above the devices, clean dark-green title exactly 'BURGHER', small actual Urdu brand mark above or beside it, and a restrained label exactly 'SOCIAL MEDIA CASE STUDY'. Color palette forest green #004B37, golden yellow #FFDC36, cream #F8F3E8, black phone; overall cover backdrop light cream, client palette prominent within the three artworks. Art-directed natural studio feel, subtle warm daylight, no dramatic beams, no neon glow, no floating sauce outside the original artworks, no loose burger/fries props, no utensils or restaurant background, no extra panels or invented profile screenshot, no fabricated performance metrics, no extra marketing copy. This is a presentation of existing creative work, not a new food ad. Keep full mockup composition comfortably inside square margins and readable at thumbnail scale. A tasteful middle ground, neither crowded nor overly flat. Opaque square raster.
