# 001 - Theme asset setup

Date: 2026-10-10 (Asia/Karachi)

## Request

Set up the existing Laravel Common3 project using the supplied theme. Fix CSS and JavaScript loading on the Web Agency homepage and document all work in AI_NOTES alongside implementation.

## Existing setup inspected

- Laravel 12 project with dependencies already present in vendor.
- routes/web.php serves the index Blade view at GET /.
- resources/views/index.blade.php extends layouts.master and supplies the Home title and content section.
- The master includes header, footer, styles, and scripts partials.
- Original theme lives in THEME; copied runtime assets already exist in public/assets/front, including css, js, fonts, img, and video.
- AI_NOTES was empty. No AGENTS.md was found in the project or checked parent directories.

## Root cause

The styles partial used asset('css/main.css') and similar root-level paths. The scripts partial used asset('js/libs.min.js') and asset('js/app.js'). These URLs target public/css and public/js, which do not contain the theme files. The files actually live in public/assets/front/css and public/assets/front/js.

Laravel's asset() helper generates a public URL for the path supplied; it does not search for files or add the theme directory automatically. The project-level THEME folder is outside the public document root and is not served directly.

The homepage also retained raw video/... and img/... source paths from the original HTML. Those paths have the same mismatch.

## Changes

- resources/views/layouts/partials/styles.blade.php: Prefixed all three stylesheet paths and four favicon/manifest paths with assets/front/.
- resources/views/layouts/partials/scripts.blade.php: Prefixed both JavaScript paths with assets/front/. Preserved library-before-app execution order and placement at the end of the body.
- resources/views/index.blade.php: Converted six local video source paths and six local image source paths (three active eye icons and three commented blog examples) to asset('assets/front/...'). External placeholder images remain as supplied by the theme.
- AI_NOTES/README.md: Added the documentation convention and task index.
- AI_NOTES/001-theme-asset-setup.md: Recorded this task's inspection, cause, changes, decisions, and verification.

## Decisions and usage

- Reused the existing public asset copy; no extra copy, symlink, npm install, or Vite build is required for these prebuilt theme files.
- Example: public/assets/front/css/main.css is referenced as {{ asset('assets/front/css/main.css') }}. Do not include public/ in asset() paths.
- Kept CSS-relative font/image references intact. Paths such as ../fonts/Phosphor/Phosphor.woff2 resolve relative to assets/front/css/plugins.css and already match the copied directory structure.
- Serve Laravel through its public document root (or php artisan serve), rather than opening Blade files directly.

## Verification

- php artisan view:cache: passed; Blade templates compiled successfully.
- HTTP GET / through a temporary php artisan serve instance: 200, with corrected URLs in the rendered Web Agency homepage.
- All 16 distinct active local assets exist and return HTTP 200: three CSS files, two JavaScript files, four favicon/manifest files, six videos, and the eye icon. CSS and JavaScript content types are correct.
- Phosphor.woff2 icon font: HTTP 200.
- php artisan view:clear: passed after the compilation check.
- git diff --check: passed.
- Temporary verification servers stopped. Browser visual and JavaScript interaction tests were not performed.
- The first direct PHP server attempt did not yield the expected rendered asset markup. Retested using Laravel's artisan serve. The initial inventory included three commented blog images absent from disk; the successful final check excludes HTML comments and checks all active asset references.

## Remaining template setup

- Demo navigation links still point to .html pages; corresponding Laravel routes/pages have not yet been implemented.
- Remote dummyimage.com images and Google Fonts remain theme dependencies. Three commented blog image examples refer to files absent from the public asset copy; supply them before enabling those examples.
- Theme form JavaScript includes a demo newsletter service and mail.php; Laravel form handling is a separate task.
- Master layout has two title tags inherited from setup; this task only changes asset loading.

## Tooling

Normal terminal and Node tools could not start because the Windows sandbox reported helper_unknown_error: setup refresh had errors. Approved terminal execution allowed inspection and editing within the Common3 workspace.

## Follow-up verification (2026-10-10)

The user repeated the setup request after normal workspace access recovered. Reinspected the current styles/scripts partials and homepage route: the asset path corrections are still present. Cleared compiled Blade views and rechecked GET / plus all 16 actual generated asset URLs using a temporary Laravel development server; every response returned HTTP 200. No further source changes were necessary. Stopped the verification server. Normal workspace tools now work without elevated execution. If the user's own browser still fails, inspect its specific site URL and failed network requests to identify a host/document-root or browser-cache issue.
