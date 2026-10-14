# 023 - Rills Attendance Management System

Date: 2026-10-13 (Asia/Karachi)

## Request and direction

The user supplied six screenshots for the next portfolio case study, Rills Attendance Management System. Continue the approved balanced mockup style, adapted to a desktop web application: one laptop showing the overview, one supporting staff-category UI card, light neutral background, navy/mint identity and soft shadows.

Selected the overview and staff-category screenshots as generation references, plus the approved CIMS v3 composition. The settings screenshot contains a visible bearer token and was not used as a generation input; its value is not recorded here. Individual staff tables were also not used as inputs. The prompt excludes credentials, staff identities and device information from the artwork.

## Deliverable and integration

Created public/assets/front/img/common3/rills-attendance-case-study.png using built-in image generation. The composition shows the recognizable dashboard on a laptop and a single staff-category panel. The device-connection area is replaced by a generic summary illustration; the mockup is a portfolio presentation, not an exact product screenshot. Fine UI text/logo details may differ. No credentials, personal staff records or device identifiers are visible in the output.

Exported the generated square to 1400×1400 with FFmpeg Lanczos resizing. Updated only the third case-study card in resources/views/index2.blade.php with the new image, an accessible label, “Rills Attendance Management System” title and Web Development / Dashboard / Staff Management tags. Preserved existing masonry, parallax and project-details.html demo link; the existing background-cover treatment crops the square artwork while scrolling. Previous case studies and all other sections remain unchanged.

## Validation

Verified PNG dimensions as 1400×1400 and asset URL HTTP 200. Visually inspected the generated artwork and the installed card. git diff --check passed.

[Full artwork](../public/assets/front/img/common3/rills-attendance-case-study.png). [Installed preview](previews/023-rills-case-study.jpg).

## Generation prompt

Create a premium square 1400x1400 website portfolio case-study thumbnail for 'RILLS Attendance Management System'. Reference 1 is the real desktop dashboard: faithfully retain its dark navy sidebar, mint green active navigation, white panels and attendance summary structure. Reference 2 is its real staff-category settings screen; it demonstrates staff categories and check-in times. Reference 3 is an approved CIMS thumbnail, use ONLY its balanced light-background mockup presentation style, not its branding or phone. Design a tasteful agency portfolio cover with one thin silver laptop at a modest natural three-quarter angle as the main subject showing the RILLS dashboard, and ONLY ONE smaller supporting rectangular UI card showing the staff-category table alongside it. Keep generous breathing room, natural daylight, soft realistic short shadows and a warm off-white/light gray studio surface. Above, crisp navy title exactly 'RILLS' and subtitle exactly 'Attendance Management System'. Small understated label 'WEB APPLICATION'. Optional small bottom line 'Staff attendance · Reporting · Administration'. Use original RILLS logo from the reference, navy #101827 and mint #2DCE9B, white and gray, very restrained accent. Preserve recognizable UI arrangement; this is an attendance management web application, not social media. On dashboard show the four summary cards Active teachers 28, Checked in 27, Late arrivals 4, Not yet arrived 1, and the dark navy attendance coverage panel. Omit the device-connection panel completely and replace its location with a simple generic attendance status graphic. DO NOT reproduce device IP addresses, device serial numbers, bearer tokens, passwords, email addresses, teacher names, individual attendance records or administrator identifiers. Category table may show generic categories General, Admin and Teachers only. The two UI visual elements are sufficient: no multiple floating panels, no phone, no neon glow, no holographic treatment, no crowded callouts, no books or office props, no dramatic perspective. Keep all significant elements comfortably within square canvas margins; laptop and supporting UI fill the middle and lower area naturally. Polished editorial product mockup matching the approved reference's middle-ground complexity, opaque raster.
