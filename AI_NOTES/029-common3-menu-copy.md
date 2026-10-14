# 029 - Common3 menu introduction and copyright

Date: 2026-10-14 (Asia/Karachi)

The user requested correcting the menu copyright and replacing the Alex Walker/Odesa introduction with Common3 branding.

Updated resources/views/index2.blade.php:

- Menu caption: “👋 Meet Common3. Three minds. One common idea. We create social content, build brands and develop websites that make it matter.”
- Copyright: © followed by the server's current year and Common3 linked to the homepage; the second existing line reads “All rights reserved.” Removed the Envato affiliate link and heart from this copyright block.
- Browser review revealed that the original menu video displays the template's “Mix Design” branding. Replaced that video element with the existing teamTogether.png image and descriptive alt text, retaining the menu-video sizing class and original media wrapper. No new Common3 video was supplied and no video files were modified.

Preserved menu layout, classes, navigation links and animations. No other homepage sections or asset files changed. git diff --check passed.

Browser verification: rendered caption and copyright checked, homepage link resolved correctly, and the menu preview loads the team image. [Menu preview](previews/029-common3-menu.jpg).
