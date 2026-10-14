<head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>@yield('title', 'Common3 | Social Media & Creative Agency')</title>

    <!-- Meta Tags -->
    <meta name="description" content="Elevate your digital presence with Rayo - dynamic and stylish HTML template designed for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic, Rayo template helps showcase projects, services and expertise with clarity and impact.">
    <meta name="keywords" content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
    <meta name="author" content="mix_design">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <!-- Common3 Favicon & Icons Start -->
    <link rel="icon" href="{{ asset('assets/front/img/common3/logo.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('assets/front/img/common3/logo.png') }}">
    <!-- Common3 Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Rayo - Digital Agency & Personal Portfolio HTML Template">
    <meta property="og:description" content="Elevate your digital presence with Rayo - dynamic and stylish HTML template designed for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic, Rayo template helps showcase projects, services and expertise with clarity and impact.">
    <meta property="og:url" content="https://mixdesign.dev/themeforest/rayo">
    <meta property="og:image" content="https://mixdesign.dev/themeforest/rayo/img/og-image.jpg">
    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/loaders/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/common3-brand.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/common3-preloader.css') }}">
    <script src="{{ asset('assets/front/js/common3-preloader.js') }}" defer></script>
    @stack('styles')
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#F5F3F7">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0A0A0A">
    <meta name="msapplication-navbutton-color" content="#0A0A0A">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Custom Browser Color End -->
    
  </head>