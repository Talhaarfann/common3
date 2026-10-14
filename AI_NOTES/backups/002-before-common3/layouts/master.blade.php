<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>Rayo - Digital Agency & Personal Portfolio HTML Template</title>

    <!-- Meta Tags -->
    <meta name="description" content="Elevate your digital presence with Rayo - dynamic and stylish HTML template designed for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic, Rayo template helps showcase projects, services and expertise with clarity and impact.">
    <meta name="keywords" content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
    <meta name="author" content="mix_design">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>@yield('title') | Common3</title>
    @yield('css')
    @include('layouts.partials.styles')
  </head>

  <body>

    <!-- Loader Start -->
    <div id="loader" class="loader">
      <div class="loader__wrapper">
        <div class="loader__content">
          <div class="loader__count">
            <span class="count__text">0</span>
            <span class="count__percent">%</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Loader End -->

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')
    @yield('js')
  </body>

</html>