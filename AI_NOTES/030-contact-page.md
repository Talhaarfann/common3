# 030 - Theme contact page, shared layout and email enquiries

Date: 2026-10-14 (Asia/Karachi)

## Request and source

The user requested extracting the current homepage header/footer into layouts/partials before building a contact page based mainly on THEME's contact.html. Required info@common3.com delivery, a team picture after the form, Instagram common.3, GitHub Talhaarfann and a commented office section. The user confirmed Hostinger as the email provider.

Reference: THEME/rayo-digital-agency-and-personal-portfolio-html-template/HTML/contact.html. Original theme files remain unchanged.

## Shared frontend

- resources/views/layouts/front.blade.php: shared layout built from the approved active homepage, not the earlier custom layouts.master.
- layouts/partials/header.blade.php and footer.blade.php: extracted Rayo/Common3 menu/header and footer. Home/contact links now resolve to Laravel routes. Shared email/phone links match the existing visible Common3 details. Social lists show only the supplied Instagram and GitHub links; template affiliate attribution replaced with Common3.
- layouts/partials/front-head.blade.php, front-scripts.blade.php and preloader.blade.php: extracted the existing head, loader and original libs.min.js → app.js → common3-brand.js script order. The new preloader remains included.
- layouts/partials/cta.blade.php: existing Common3 CTA shared by both pages; on contact its button points to the form.
- resources/views/index2.blade.php: now extends layouts.front and contains the existing homepage main content. Homepage section markup/artwork is preserved apart from using the shared CTA and working contact links. The legacy custom master/styles/scripts are not used.
- resources/views/contact.blade.php: preserved the theme's inner headline, two-column form and five visible fields, divider, Connect marquee, social-link rows and CTA. Branded the copy and email link, reused the team's homepage parallax/framing classes, and commented the entire original office/address section with a Blade comment so it is absent from rendered HTML. Removed unsupported demo social profiles.

Only small contact-specific CSS was needed for feedback and to fit the longer email address. The form keeps the original theme classes. public/assets/front/js/app.js excludes data-laravel-contact forms from the legacy mail.php AJAX handler so Laravel receives a native CSRF-protected POST. Other theme animations remain unchanged.

Backups: AI_NOTES/backups/030-before-contact contains the full pre-extraction index2 and previous header/footer files. AI_NOTES/tools/030-build-contact.ps1 records the one-time extraction/conversion process; it is historical tooling, not a script to rerun on the already-extracted views.

## Backend and routes

- app/Http/Controllers/ContactController.php: contact GET and validated enquiry POST; persist before email; redirect with clear success or failure feedback and retained input. Feedback redirects target #contact-feedback.
- app/Http/Requests/ContactRequest.php: required name/email/message, optional company/phone, input length limits, email validation, header-newline rejection for the reply-to name, and a hidden honeypot.
- app/Models/ContactEnquiry.php and database/migrations/2026_10_14_000000_create_contact_enquiries_table.php: store enquiry fields, pending/failed/sent notification status and emailed_at.
- app/Mail/ContactEnquiryMail.php and resources/views/emails/contact-enquiry.blade.php: send to the server-controlled info@common3.com recipient, use the authenticated Common3 sender and visitor Reply-To, and HTML-escape user content. Recipient cannot be overridden by posted admin_email fields.
- app/Services/SendContactEnquiry.php: dedicated Common3 mailer, missing-credential and transport failure handling, no enquiry content/credentials in diagnostic logs, and delivered status after SMTP send succeeds.
- app/Console/Commands/RetryContactEnquiries.php: php artisan contact:retry --id=123 retries one pending/failed notification; omitting --id retries all unsent ones. Sent records are skipped. SMTP success means the server accepted the message, not verified inbox arrival.
- config/contact.php, config/mail.php: fixed Common3 recipient and dedicated common3 SMTP transport, independent of the project's pre-existing mail account.
- routes/web.php: GET /contact named contact, POST /contact named contact.store with five submissions/minute throttle, and /contact.html redirect for old theme links.

No queue worker is required; SMTP sends synchronously with a 15-second timeout. An SMTP failure retains the enquiry for retry and never shows the email-success message. No admin enquiry dashboard was requested or added.

## Hostinger setup still required for real delivery

The existing .env had SMTP settings for a different domain. Those credentials were left untouched. Added a separate Common3 block in .env and .env.example:

```dotenv
CONTACT_MAIL_HOST=smtp.hostinger.com
CONTACT_MAIL_PORT=465
CONTACT_MAIL_SCHEME=smtps
CONTACT_MAIL_USERNAME=info@common3.com
CONTACT_MAIL_PASSWORD=
```

Set CONTACT_MAIL_PASSWORD locally to the info@common3.com mailbox password; do not paste secrets into the chat or notes. After configuration, run php artisan config:clear (and restart long-running app processes if necessary), then perform a real contact submission and confirm inbox delivery. If hPanel lists a different email service such as Titan, use that mailbox's exact SMTP host/settings instead. Settings verified against [Hostinger email configuration documentation](https://www.hostinger.com/support/1575756-how-to-get-email-account-configuration-details-for-hostinger-email/).

The password was not supplied, so no live SMTP delivery was attempted or claimed. Until configured, a valid submission is saved but the page displays an email-delivery warning. Saved failed enquiries can be retried afterward.

### Finding the password (follow-up)

The user asked where to obtain the password. Hostinger supports a separate app password on eligible email plans: Emails → domain → Mailboxes → mailbox Options (⋮) → App passwords → Generate. Name it Common3 Website, copy the generated password once, and place it locally in CONTACT_MAIL_PASSWORD. This authenticates in place of the main mailbox password. See [Hostinger app-password instructions](https://www.hostinger.com/support/how-to-create-an-app-password-for-hostinger-email/).

If the plan does not offer app passwords, use the info@common3.com webmail/mailbox password. If forgotten, reset it through the mailbox options using [Hostinger's mailbox password guide](https://www.hostinger.com/support/1583468-how-to-reset-a-hostinger-email-mailbox-password/). The user must perform password generation/reset and enter the secret locally. No password was requested in chat or changed by the agent.

## Database setup

Configured local MySQL initially refused connections. Started the installed Laragon MySQL 8.4 server using its existing my.ini (background process, no credentials/settings changed). Ran only the new contact-table migration against common3; existing tables/migrations remained intact. MySQL remains available for the app.

## Verification

- Homepage and /contact returned HTTP 200; /contact.html redirects to /contact.
- New migration applied successfully; existing migrations remained in place.
- php artisan test: 10 tests passed, 52 assertions. Eight contact tests cover theme details/route, persisted mail to the fixed recipient with Reply-To, validation and honeypot, missing SMTP configuration, transport failure, retries without re-sending sent records, escaped email content and rate limiting. All contact tests use isolated in-memory SQLite and Mail fakes/mocks; no real visitor records or emails were created by tests.
- Browser native form submission with a deliberately short message reached Laravel and rendered the length error while preserving entered fields. CSRF token, POST action and form accessibility labels verified.
- Desktop and 390px mobile layouts inspected; mobile document width equals viewport width (no horizontal overflow). Team picture, email and supplied social links verified. Browser JavaScript error log empty.
- PHP Pint checks passed for changed backend files; Blade compilation and git diff --check passed.
- Original home partials/classes and preloader/script order retained; no old custom common3.css/common3.js/master loaded.

Screenshots: [Desktop form](previews/030-contact-desktop.jpg), [Mobile form](previews/030-contact-mobile.jpg), [Team divider](previews/030-contact-team.jpg).
