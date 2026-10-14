# 027 - Recent Insights content and pictures

Date: 2026-10-14 (Asia/Karachi)

## Request

Populate the next homepage section, Recent Insights, with relevant content and pictures sourced from the web or created for the site.

## Changes

Updated the existing three Rayo preview cards in resources/views/index2.blade.php. Replaced generic demo content with useful reads selected by Common3:

- Build a social media content calendar — Buffer; https://buffer.com/resources/social-media-calendar/
- Create better Instagram Reels — Adobe; https://www.adobe.com/express/learn/blog/instagram-reels
- Design for every screen — web.dev; https://web.dev/learn/design/

These are curated external resources, not claimed as Common3-authored articles. Each image and title link opens the corresponding guide in a new tab with noopener/noreferrer. Publisher names appear in the existing tags. Updated the section description and changed All Articles to More Reads, linking Buffer's resource library at https://buffer.com/library. Original navigation/footer demo blog links are outside this section and remain unchanged.

Used built-in image generation to create three matching editorial photographs with neutral surfaces and subtle violet accents. Visually inspected each image and exported local 1000×1250 JPEGs with FFmpeg scaling/cropping:

- public/assets/front/img/common3/insights/content-planning.jpg
- public/assets/front/img/common3/insights/reels-creation.jpg
- public/assets/front/img/common3/insights/responsive-design.jpg

No web photography was downloaded. The original Rayo section/card layout, rounded framing, parallax, eye hover treatment and entrance animations are preserved. No custom sections, CSS or JavaScript changes were needed.

## Validation

All three local image URLs returned HTTP 200. Opened/verified the linked guide pages with web tools and checked browser card URLs, backgrounds and titles. Visually checked the stacked layout at the existing viewport and all three cards at a 1440px desktop viewport. The original hover blur/eye behavior remains active. No browser JavaScript errors were captured; git diff --check passed. Temporary viewport override reset after QA.

[Section preview](previews/027-recent-insights.jpg).

## Generation prompts

1. Generate a portrait 4:5 editorial photograph for a creative agency article about social media content planning. A natural overhead desk scene: an open paper weekly planner with simple colored blocks and handwritten marks that need not be readable, a black smartphone showing a small grid of varied photo thumbnails, a pen and two muted violet sticky notes. Light warm gray desktop, soft window daylight, thoughtful minimal arrangement with generous empty space and realistic textures. Modern human creative workspace, off-white, charcoal and restrained violet accents inspired by Common3. No neon, no holographic UI, no floating objects, no fake social-media logos, no big headline or readable text, no people or clutter. Objects kept safely inside central area for cropping. High-quality natural photography, opaque portrait image.

2. Generate a portrait 4:5 editorial photograph for a creative agency article about producing Instagram Reels. A realistic black smartphone on a small tabletop tripod filming a simple ceramic coffee cup in a tasteful compact content-creation setup; phone screen shows the same cup in a vertical view. Neutral light-gray studio tabletop and backdrop, one subtle muted violet backdrop edge, soft natural daylight, restrained minimal scene, real shadows, carefully composed with breathing room. Off-white, charcoal and subtle violet Common3 accents. No people, no neon, no floating graphics, no invented app logos, no readable interface text or headline, no overengineered camera rig, no extra props or clutter. Main setup centered safely for responsive cropping. High-quality natural photography, opaque portrait image.

3. Generate a portrait 4:5 editorial photograph for a creative agency article about responsive website design. One slim laptop and one smartphone on a light neutral studio desk, both showing the same tasteful simple website concept with a neutral architectural photo and minimal violet accent buttons; laptop has desktop layout and phone has clearly narrower mobile layout. Natural three-quarter view, soft window daylight, realistic short shadows, understated off-white/charcoal/violet palette, abundant breathing room, clean professional composition. No neon, no floating browser windows, no code overlay, no brand logos, no readable headline or fabricated statistics, no additional devices, no clutter. Devices inside center safe area for cropping. High-quality editorial photography, opaque portrait image.
