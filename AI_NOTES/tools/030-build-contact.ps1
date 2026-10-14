$ErrorActionPreference = 'Stop'
$root = 'E:\laravel\common3'
$viewPath = Join-Path $root 'resources/views/index2.blade.php'
$contactHomeView = [IO.File]::ReadAllText($viewPath)
$theme = [IO.File]::ReadAllText((Join-Path $root 'THEME/rayo-digital-agency-and-personal-portfolio-html-template/HTML/contact.html'))
$backup = Join-Path $root 'AI_NOTES/backups/030-before-contact'
New-Item -ItemType Directory -Path $backup -Force | Out-Null
if (!(Test-Path (Join-Path $backup 'index2.blade.php'))) { Copy-Item -LiteralPath $viewPath -Destination (Join-Path $backup 'index2.blade.php') }
foreach ($name in @('header','footer')) {
    if (!(Test-Path (Join-Path $backup "$name.blade.php"))) { Copy-Item -LiteralPath (Join-Path $root "resources/views/layouts/partials/$name.blade.php") -Destination (Join-Path $backup "$name.blade.php") }
}
function Extract-Block($source, $start, $end) {
    $a = $source.IndexOf($start)
    if ($a -lt 0) { throw "Missing block: $start" }
    $b = $source.IndexOf($end, $a)
    if ($a -lt 0 -or $b -lt 0) { throw "Missing block: $start" }
    return $source.Substring($a, $b + $end.Length - $a)
}
function Save-View($relative, $content) {
    [IO.File]::WriteAllText((Join-Path $root $relative), $content, [Text.UTF8Encoding]::new($false))
}
$header = Extract-Block $contactHomeView '<!-- Menu & Menu Hamburger Start -->' '<!-- Header End -->'
$header = $header.Replace('href="contact.html"', 'href="{{ route(''contact'') }}"')
$header = $header.Replace('href="index-main.html"', 'href="{{ url(''/'') }}"')
$footer = Extract-Block $contactHomeView '<!-- Footer Start -->' '<!-- To Top Button End -->'
$footer = $footer.Replace('href="contact.html"', 'href="{{ route(''contact'') }}"')
$footer = $footer.Replace('href="index-main.html"', 'href="{{ url(''/'') }}"')
$footer = $footer.Replace('mailto:example@example.com?subject=Message%20from%20your%20site', 'mailto:info@common3.com')
$footer = $footer.Replace('tel:+12127089400', 'tel:+923025719705')
$footer = $footer.Replace('https://www.instagram.com/', 'https://www.instagram.com/common.3/')
$footer = $footer.Replace('https://github.com/', 'https://github.com/Talhaarfann')
# Publish only the two supplied social profiles, retain the theme list classes.
$footer = [regex]::Replace($footer, '(?m)^.*<li class="footer-socials__item.*(?:Dribbble|Behance|Codepen|Figma).*\r?\n', '')
$footer = $footer.Replace('<a class="no-effect" href="https://1.envato.market/EKA9WD" target="_blank">Mix_Design</a>', '<a class="no-effect" href="{{ url(''/'') }}">Common3</a>')
Save-View 'resources/views/layouts/partials/header.blade.php' $header
Save-View 'resources/views/layouts/partials/footer.blade.php' $footer
Save-View 'resources/views/layouts/partials/preloader.blade.php' (Extract-Block $contactHomeView '<div id="loader"' '<!-- Loader End -->')
$head = Extract-Block $contactHomeView '<head>' '</head>'
$head = $head.Replace('<title>Common3 | Social Media &amp; Creative Agency</title>', '<title>@yield(''title'', ''Common3 | Social Media & Creative Agency'')</title>')
$head = $head.Replace('<!-- Template Styles End -->', "@stack('styles')`r`n    <!-- Template Styles End -->")
Save-View 'resources/views/layouts/partials/front-head.blade.php' $head
$scripts = Extract-Block $contactHomeView '<!-- Load Scripts Start -->' '<!-- Load Scripts End -->'
Save-View 'resources/views/layouts/partials/front-scripts.blade.php' $scripts
$layout = @'
<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('layouts.partials.front-head')
<body>
    @include('layouts.partials.preloader')
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.front-scripts')
    @stack('scripts')
</body>
</html>
'@
Save-View 'resources/views/layouts/front.blade.php' $layout
$homeMain = Extract-Block $contactHomeView '<!-- Page Content Start -->' '<!-- Page Content End -->'
$cta = Extract-Block $homeMain '<!-- Section - CTA Start -->' '<!-- Section - CTA End -->'
$sharedCta = $cta.Replace('href="contact.html"', 'href="{{ ($contactPage ?? false) ? ''#contact-form'' : route(''contact'') }}"')
Save-View 'resources/views/layouts/partials/cta.blade.php' $sharedCta
$homeMain = $homeMain.Replace($cta, "@include('layouts.partials.cta')")
$homeMain = $homeMain.Replace('href="contact.html"', 'href="{{ route(''contact'') }}"')
Save-View 'resources/views/index2.blade.php' ("@extends('layouts.front')`r`n@section('content')`r`n" + $homeMain + "`r`n@endsection`r`n")

$contact = Extract-Block $theme '<!-- Page Content Start -->' '<!-- Page Content End -->'
$contact = [regex]::Replace($contact, '(src|href)="((?:img|video)/[^"]+)"', '$1="{{ asset(''assets/front/$2'') }}"')
$contact = $contact.Replace('mailto:example@example.com?subject=Message%20from%20your%20site', 'mailto:info@common3.com').Replace('hello@rayo.com','info@common3.com')
$contact = [regex]::Replace($contact, '(?s)<p class="inner-headline__text.*?</p>', '<p class="inner-headline__text t-large t-bright loading__item">Tell us what you have in mind. From social media and content creation to video, design and web development, three common minds are ready to help your brand make it matter.</p>', 1)
$reply = Extract-Block $contact '<!-- Reply Messages Start -->' '<!-- Reply Messages End -->'
$feedback = @'
@if (session('contact_success'))
                          <div class="common3-contact-feedback" role="status"><p class="t-bright">{{ session('contact_success') }}</p></div>
                        @endif
                        @if ($errors->any())
                          <div class="common3-contact-feedback" role="alert">
                            <p class="t-bright">Please check your enquiry:</p>
                            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                          </div>
                        @endif
'@
$contact = $contact.Replace($reply,$feedback)
$oldForm = Extract-Block $contact '<!-- Contact Form Start -->' '<!-- Contact Form End -->'
$form = @'
<!-- Contact Form Start -->
                        <form class="form contact-form" id="contact-form" data-laravel-contact method="POST" action="{{ route('contact.store') }}">
                          @csrf
                          <div hidden aria-hidden="true"><label for="contact-website">Website</label><input id="contact-website" name="website" tabindex="-1" autocomplete="off"></div>
                          <div class="container-fluid p-0">
                            <div class="row gx-0">
                              <div class="col-12 col-md-6 mxd-grid-item anim-uni-in-up">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name*" aria-label="Your name" autocomplete="name" maxlength="120" required>
                              </div>
                              <div class="col-12 col-md-6 mxd-grid-item anim-uni-in-up">
                                <input type="text" name="company" value="{{ old('company') }}" placeholder="Company name" aria-label="Company name" autocomplete="organization" maxlength="160">
                              </div>
                              <div class="col-12 col-md-6 mxd-grid-item anim-uni-in-up">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email*" aria-label="Email" autocomplete="email" maxlength="254" required>
                              </div>
                              <div class="col-12 col-md-6 mxd-grid-item anim-uni-in-up">
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone" aria-label="Phone" autocomplete="tel" maxlength="40">
                              </div>
                              <div class="col-12 mxd-grid-item anim-uni-in-up">
                                <textarea name="message" placeholder="A few words about your project*" aria-label="A few words about your project" maxlength="5000" required>{{ old('message') }}</textarea>
                              </div>
                              <div class="col-12 mxd-grid-item anim-uni-in-up">
                                <button class="btn btn-anim btn-default btn-large btn-opposite slide-right-up" type="submit">
                                  <span class="btn-caption">Submit</span><i class="ph-bold ph-arrow-up-right"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                        <!-- Contact Form End -->
'@
$contact = $contact.Replace($oldForm,$form)
$contact = $contact.Replace('<div class="mxd-divider__image divider-image-3 parallax-img"></div>', '<div class="mxd-divider__image parallax-img" style="background-image: url(''{{ asset(''assets/front/img/common3/teamTogether.png'') }}''); background-position: center 40%;" role="img" aria-label="The Common3 founders together"></div>')
$socialBlock = Extract-Block $contact '<!-- Section - Socials List Start -->' '<!-- Section - Socials List End -->'
$socialBlock = [regex]::Replace($socialBlock, '(?s)<!-- item -->\s*<div class="mxd-links-lines__item">.*?</a>\s*<div class="mxd-links-lines__divider anim-uni-in-up"></div>\s*</div>', { param($m) if ($m.Value -match '>Instagram<|>Github<') { $m.Value } else { '' } })
$socialBlock = $socialBlock.Replace('https://www.instagram.com/','https://www.instagram.com/common.3/').Replace('https://github.com/','https://github.com/Talhaarfann').Replace('target="_blank"','target="_blank" rel="noopener noreferrer"')
$contact = [regex]::Replace($contact, '(?s)<!-- Section - Socials List Start -->.*?<!-- Section - Socials List End -->', [Text.RegularExpressions.MatchEvaluator]{ param($m) $socialBlock })
$address = Extract-Block $contact '<!-- Section - Text Block Start -->' '<!-- Section - Text Block End -->'
$contact = $contact.Replace($address, "{{-- Office address omitted: Common3 currently works remotely.`r`n$address`r`n--}}")
$contactCta = Extract-Block $contact '<!-- Section - CTA Start -->' '<!-- Section - CTA End -->'
$contact = $contact.Replace($contactCta,"@include('layouts.partials.cta', ['contactPage' => true])")
$contactWrapper = @'
@extends('layouts.front')
@section('title', 'Contact Common3 | Let’s talk about your project')
@push('styles')
<style>.common3-contact-feedback { margin-bottom: 3rem; padding: 2rem; border: 1px solid var(--st-muted); border-radius: 1.5rem; } .common3-contact-feedback ul { padding-left: 2rem; list-style: disc; }</style>
@endpush
@section('content')
'@
Save-View 'resources/views/contact.blade.php' ($contactWrapper + "`r`n" + $contact + "`r`n@endsection`r`n")
