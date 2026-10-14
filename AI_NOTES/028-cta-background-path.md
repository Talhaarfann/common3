# 028 - CTA background path

Date: 2026-10-14 (Asia/Karachi)

The user reported that the .mxd-promo__bg background rule at main.css line 425 did not load bg3.png.

The image exists at public/assets/front/img/common3/bg3.png. CSS URLs resolve relative to the stylesheet's location, so assets/front/img/common3/bg3.png incorrectly resolved under /assets/front/css/assets/front/img/common3/. Changed only the background-image declaration in public/assets/front/css/main.css to url('../img/common3/bg3.png'). No sizing, positioning, markup or animation changes were made.

Verified the image URL returns HTTP 200 and the browser's computed background URL resolves to /assets/front/img/common3/bg3.png. git diff --check passed.

[CTA preview](previews/028-cta-background.jpg).
