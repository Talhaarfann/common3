# 017 - Common3 footer wordmark

Date: 2026-10-13 (Asia/Karachi)

The user requested branding `mxd-footer__text-wrap` as Common3 in the brand colors.

Replaced the existing “rayo studio” SVG artwork in resources/views/index2.blade.php with a scalable `common3` text wordmark using the theme's Funnel Sans font, a bold weight, and a violet (#8B2CFA), magenta (#D735EF), coral (#FF6268) SVG gradient. Added an accessible Common3 title. The existing footer wrappers, sizing class, scroll trigger and top-to-bottom animation are retained. No other page content, CSS or JavaScript files were edited.

Verified the rendered footer in the browser: the wordmark spans the existing footer area and the gradient fill resolves correctly. `git diff --check` passed.

[Footer preview](previews/017-common3-footer.jpg).
