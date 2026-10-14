<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Social Media & Creative Agency') | Common3</title>
    <meta name="description" content="Three minds. One common idea. Common3 brings social media strategy, content creation, video, Meta ads and web development together to make your brand matter.">
    <meta name="author" content="Common3">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Common3 — Make it matter.">
    <meta property="og:description" content="Social-first thinking. Content worth stopping for. Three minds working together for your brand.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('assets/front/img/common3/web/three-minds.webp') }}">
    <meta name="theme-color" content="#0a0a0a">
    @include('layouts.partials.styles')
    @yield('css')
</head>
<body class="common3">
    <a class="c3-skip" href="#main-content">Skip to content</a>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
    @yield('js')
</body>
</html>
