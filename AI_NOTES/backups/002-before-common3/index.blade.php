@extends('layouts.master')
@section('title', 'Home')
@section('content')
<!-- Menu & Menu Hamburger Start -->
    <nav class="mxd-nav__wrap" data-lenis-prevent="">

      <!-- Hamburger Start -->
      <div class="mxd-nav__contain loading__fade">
        <a href="#0" class="mxd-nav__hamburger" aria-label="Menu">
          <!-- flip element -->
          <div class="hamburger__base"></div>
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
        </a>
      </div>
      <!-- Hamburger End -->

      <!-- Main Navigation Start -->
      <div class="mxd-menu__wrapper">
        <!-- background active layer -->
        <div class="mxd-menu__base"></div>
        <!-- menu container -->
        <div class="mxd-menu__contain">
          <div class="mxd-menu__inner">
            <!-- left side -->
            <div class="mxd-menu__left">
              <p class="mxd-menu__caption menu-fade-in">🦄 Innovative design<br>and cutting-edge development</p>
              <div class="main-menu">
                <nav class="main-menu__content">
                  <ul id="main-menu" class="main-menu__accordion">
                    <li class="main-menu__item">
                      <div class="main-menu__toggle">
                        <span class="main-menu__link btn btn-anim">
                          <span class="btn-caption">Home</span>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.1" viewBox="0 0 20 20">
                          <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                        </svg>
                      </div>
                      <ul class="submenu">
                        <li class="submenu__item">
                          <a href="index-main.html">Main home</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-software-development-company.html">Software development company</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-freelancer-portfolio.html">Freelancer portfolio</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-digital-agency.html">Digital agency</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-creative-design-studio.html">Creative design studio</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-personal-portfolio.html">Personal portfolio</a>
                        </li>
                        <li class="submenu__item active">
                          <a href="index-web-agency.html">Web agency</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-creative-developer.html">Creative developer</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index-designer.html">Designer</a>
                        </li>
                      </ul>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__toggle">
                        <span class="main-menu__link btn btn-anim">
                          <span class="btn-caption">Works</span>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.1" viewBox="0 0 20 20">
                          <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                        </svg>
                      </div>
                      <ul class="submenu">
                        <li class="submenu__item">
                          <a href="works-simple.html">Portfolio</a>
                        </li>
                        <li class="submenu__item">
                          <a href="works-masonry.html">Works masonry</a>
                        </li>
                        <li class="submenu__item">
                          <a href="project-details.html">Project details</a>
                        </li>
                      </ul>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__toggle">
                        <span class="main-menu__link btn btn-anim">
                          <span class="btn-caption">Pages</span>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.1" viewBox="0 0 20 20">
                          <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                        </svg>
                      </div>
                      <ul class="submenu">
                        <li class="submenu__item">
                          <a href="about-me.html">About me</a>
                        </li>
                        <li class="submenu__item">
                          <a href="about-us.html">About us</a>
                        </li>
                        <li class="submenu__item">
                          <a href="services.html">Services</a>
                        </li>
                        <li class="submenu__item">
                          <a href="team.html">Our team</a>
                        </li>
                        <li class="submenu__item">
                          <a href="pricing.html">Pricing</a>
                        </li>
                        <li class="submenu__item">
                          <a href="faq.html">FAQ page</a>
                        </li>
                        <li class="submenu__item">
                          <a href="404.html">404 error page</a>
                        </li>
                        <li class="submenu__item">
                          <a href="index.html">Landing page</a>
                        </li>
                      </ul>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__toggle">
                        <span class="main-menu__link btn btn-anim">
                          <span class="btn-caption">Insights</span>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.1" viewBox="0 0 20 20">
                          <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                        </svg>
                      </div>
                      <ul class="submenu">
                        <li class="submenu__item">
                          <a href="blog-standard.html">Blog standard</a>
                        </li>
                        <li class="submenu__item">
                          <a href="blog-creative.html">Blog creative</a>
                        </li>
                        <li class="submenu__item">
                          <a href="blog-article.html">Single post</a>
                        </li>
                      </ul>
                    </li>
                    <li class="main-menu__item">
                      <a class="main-menu__link btn btn-anim" href="contact.html">
                        <span class="btn-caption">Contact</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- right side -->
            <div class="mxd-menu__right">
              <div class="menu-promo">
                <div class="menu-promo__content">
                  <p class="menu-promo__caption menu-fade-in">👋 Nice to see you!<br>I'm Alex Walker, digital 
                    designer and illustrator based in Odesa, Ukraine</p>
                  <div class="menu-promo__video">
                    <video class="menu-video" id="inner-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="https://dummyimage.com/540x310/5d5d5d/737373">
                      <source type="video/mp4" src="{{ asset('assets/front/video/540x310_video.mp4') }}">
                      <source type="video/webm" src="{{ asset('assets/front/video/540x310_video.webm') }}">
                      <source type="video/ogv" src="{{ asset('assets/front/video/540x310_video.ogv') }}">
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <!-- data bottom line -->
            <div class="mxd-menu__data menu-fade-in">
              <p class="t-xsmall">
                Made with
                <i class="ph-fill ph-heart t-additional"></i>
                by
                <a class="no-effect" href="https://1.envato.market/EKA9WD" target="_blank">Mix_Design</a>
              </p>
              <p class="t-xsmall">
                <i class="ph ph-copyright"></i>
                2026
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation End -->

    </nav>
    <!-- Menu & Menu Hamburger End -->

    <!-- Header Start -->
    <header id="header" class="mxd-header">
      <!-- header logo -->
      <div class="mxd-header__logo loading__fade">
        <a href="index-main.html" class="mxd-logo">
          <!-- logo icon -->
          <svg class="mxd-logo__image" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 56 56" style="enable-background:new 0 0 56 56;" xml:space="preserve">
            <style type="text/css">
              .mxd-logo__bg{fill:var(--base-opp);}
              .mxd-logo__cat{clip-path:url(#mxd-logo__id);fill:var(--base);}
            </style>
            <path class="mxd-logo__bg" d="M56,28c0,11.1-2.9,28-28,28S0,39.1,0,28S2.9,0,28,0S56,16.9,56,28z"/>
            <g>
              <defs>
                <path id="mxd-logo__clippath" d="M28,0C2.9,0,0,16.9,0,28s2.9,28,28,28s28-16.9,28-28S53.1,0,28,0z"/>
              </defs>
              <clipPath id="mxd-logo__id">
                <use xlink:href="#mxd-logo__clippath"  style="overflow:visible;"/>
              </clipPath>
              <path class="mxd-logo__cat" d="M33.6,34.5h0.9
                c0.5,0,0.9,0.4,0.9,0.9v3.7c0,0.5-0.4,0.9-0.9,0.9h-0.9c-0.5,0-0.9-0.4-0.9-0.9v-3.7C32.7,34.9,33.1,34.5,33.6,34.5z M20.5,37.3
                v1.9c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-3.7c0-0.5-0.4-0.9-0.9-0.9h-0.9c-0.5,0-0.9,0.4-0.9,0.9V37.3L20.5,37.3z
                M39.2,21.5v0.9c0,0.5-0.4,0.9-0.9,0.9h-0.9c-0.5,0-0.9-0.4-0.9-0.9v-0.9c0-0.5,0.4-0.9,0.9-0.9h0.9C38.8,20.5,39.2,21,39.2,21.5z
                M34.5,26.1h0.9c0.5,0,0.9-0.4,0.9-0.9v-0.9c0-0.5-0.4-0.9-0.9-0.9h-0.9c-0.5,0-0.9,0.4-0.9,0.9v0.9C33.6,25.7,34,26.1,34.5,26.1z
                M28,26.1h-4.7c-0.5,0-0.9,0.4-0.9,0.9V28c0,0.5,0.4,0.9,0.9,0.9h9.3c0.5,0,0.9-0.4,0.9-0.9v-0.9c0-0.5-0.4-0.9-0.9-0.9H28L28,26.1
                z M19.6,24.3v0.9c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-0.9c0-0.5-0.4-0.9-0.9-0.9h-0.9C20,23.3,19.6,23.8,19.6,24.3z
                M16.8,21.5v0.9c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-0.9c0-0.5-0.4-0.9-0.9-0.9h-0.9C17.2,20.5,16.8,21,16.8,21.5z
                M14,26.1v4.7c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-6.5c0-0.5-0.4-0.9-0.9-0.9h-0.9c-0.5,0-0.9,0.4-0.9,0.9V26.1
                L14,26.1z M11.2,34.5v1.9c0,0.5-0.4,0.9-0.9,0.9H7.5c-0.5,0-0.9,0.4-0.9,0.9v0.9c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9,0.4,0.9,0.9
                V42c0,0.5-0.4,0.9-0.9,0.9H7.5c-0.5,0-0.9,0.4-0.9,0.9v0.9c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9,0.4,0.9,0.9V56
                c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-6.5c0-0.5,0.4-0.9,0.9-0.9h3.7c0.5,0,0.9-0.4,0.9-0.9v-0.9
                c0-0.5-0.4-0.9-0.9-0.9h-3.7c-0.5,0-0.9-0.4-0.9-0.9v-6.5c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9-0.4,0.9-0.9v-3.7c0-0.5-0.4-0.9-0.9-0.9
                h-0.9c-0.5,0-0.9,0.4-0.9,0.9L11.2,34.5L11.2,34.5z M42,26.1v-1.9c0-0.5-0.4-0.9-0.9-0.9h-0.9c-0.5,0-0.9,0.4-0.9,0.9v6.5
                c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9V26.1L42,26.1z M49.5,39.2v-0.9c0-0.5-0.4-0.9-0.9-0.9h-2.8
                c-0.5,0-0.9-0.4-0.9-0.9v-3.7c0-0.5-0.4-0.9-0.9-0.9h-0.9c-0.5,0-0.9,0.4-0.9,0.9v3.7c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9,0.4,0.9,0.9
                v6.5c0,0.5-0.4,0.9-0.9,0.9h-3.7c-0.5,0-0.9,0.4-0.9,0.9v0.9c0,0.5,0.4,0.9,0.9,0.9h3.7c0.5,0,0.9,0.4,0.9,0.9V56
                c0,0.5,0.4,0.9,0.9,0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-9.3c0-0.5,0.4-0.9,0.9-0.9h0.9c0.5,0,0.9-0.4,0.9-0.9v-0.9
                c0-0.5-0.4-0.9-0.9-0.9h-0.9c-0.5,0-0.9-0.4-0.9-0.9v-0.9c0-0.5,0.4-0.9,0.9-0.9h0.9C49,40.1,49.5,39.7,49.5,39.2L49.5,39.2z"/>
            </g>
          </svg>
          <!-- logo text -->
          <span class="mxd-logo__text">rayo<br>template</span>
        </a>
      </div>
      <!-- header controls -->
      <div class="mxd-header__controls loading__fade">
        <button id="color-switcher" class="mxd-color-switcher" type="button" role="switch" aria-label="light/dark mode" aria-checked="true"></button>
        <a class="btn btn-anim btn-default btn-mobile-icon btn-outline slide-right-up" href="contact.html" aria-label="Say Hello">
          <span class="btn-caption">Say Hello</span>
          <i class="ph-bold ph-arrow-up-right"></i>
        </a>
      </div>
    </header>
    <!-- Header End -->

    <!-- Page Content Start -->
    <main id="mxd-page-content" class="mxd-page-content">

      <!-- Hero Section Start -->
      <div class="mxd-section mxd-hero-section padding-grid-pre-mtext">
        <div class="mxd-hero-05">
          <div class="mxd-hero-05__wrap loading-wrap">
            <div class="mxd-hero-05__top">
              <div class="mxd-hero-05__headline">
                <div class="container-fluid p-0">
                  <div class="row g-0 d-flex flex-column flex-xl-row">
                    <div class="col-12 col-xl-8 col-xxl-10 order-2 order-xl-1 mxd-grid-item no-margin">
                      <!-- title text -->
                      <h1 class="hero-05-title">
                        <span class="hero-05-title__row loading__item">
                          <em class="hero-05-title__item">Shaping ideas</em>
                        </span>
                        <span class="hero-05-title__row loading__item">
                          <em class="hero-05-title__item title-item-image">
                            <svg class="mxd-pulse" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
                              <path d="M19.6,9.6h-3.9c-.4,0-1.8-.2-1.8-.2-.6,0-1.1-.2-1.6-.6-.5-.3-.9-.8-1.2-1.2-.3-.4-.4-.9-.5-1.4,0,0,0-1.1-.2-1.5V.4c0-.2-.2-.4-.4-.4s-.4.2-.4.4v4.4c0,.4-.2,1.5-.2,1.5,0,.5-.2,1-.5,1.4-.3.5-.7.9-1.2,1.2s-1,.5-1.6.6c0,0-1.2,0-1.7.2H.4c-.2,0-.4.2-.4.4s.2.4.4.4h4.1c.4,0,1.7.2,1.7.2.6,0,1.1.2,1.6.6.4.3.8.7,1.1,1.1.3.5.5,1,.6,1.6,0,0,0,1.3.2,1.7v4.1c0,.2.2.4.4.4s.4-.2.4-.4v-4.1c0-.4.2-1.7.2-1.7,0-.6.2-1.1.6-1.6.3-.4.7-.8,1.1-1.1.5-.3,1-.5,1.6-.6,0,0,1.3,0,1.8-.2h3.9c.2,0,.4-.2.4-.4s-.2-.4-.4-.4h0Z"/>
                            </svg>
                          </em>
                          <em class="hero-05-title__item">into real stories</em>
                        </span>
                      </h1>
                    </div>
                    <div class="col-12 col-xl-4 col-xxl-2 order-1 order-xl-2 mxd-grid-item no-margin">
                      <!-- clients avatars -->
                      <div class="hero-05-headline__avatars loading__fade">
                        <div class="mxd-avatars-group align-right">
                          <div class="mxd-avatars align-right">
                            <div class="mxd-avatars__item small">
                              <img src="https://dummyimage.com/300x300/5d5d5d/838383" alt="Avatar">
                            </div>
                            <div class="mxd-avatars__item small bg-base-opp">
                              <svg class="mxd-avatars__icon small" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="60px" height="60px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                <style type="text/css">
                                  .icon-star {
                                    fill:var(--additional);
                                  }
                                </style>
                                <path class="icon-star" d="M58.9,28.9c0,0-9.1,0.1-12.1,0c-1.3,0-5.3-0.5-5.3-0.5c-1.7-0.2-3.4-0.7-4.8-1.7c-1.4-1-2.7-2.3-3.6-3.7
                                  c-0.8-1.3-1.3-2.7-1.5-4.2c0,0-0.4-3.3-0.5-4.4c-0.2-3.3,0-13.1,0-13.1c0-0.6-0.5-1.1-1.1-1.1s-1.1,0.5-1.1,1.1
                                  c0,0,0.2,9.8,0,13.1c0,1.1-0.5,4.4-0.5,4.4c-0.2,1.5-0.6,3-1.5,4.2c-0.9,1.5-2.2,2.7-3.6,3.7s-3,1.5-4.7,1.7c0,0-3.7,0.4-5,0.5
                                  c-3.1,0.2-12.5,0-12.5,0C0.5,28.9,0,29.4,0,30s0.5,1.1,1.1,1.1c0,0,9.4-0.2,12.5,0c1.2,0,5,0.5,5,0.5c1.7,0.2,3.3,0.7,4.7,1.7
                                  c1.3,0.9,2.4,2,3.3,3.3c1,1.4,1.5,3.1,1.7,4.8c0,0,0.4,3.9,0.5,5.2c0.1,3,0,12.2,0,12.2c0,0.6,0.5,1.1,1.1,1.1s1.1-0.5,1.1-1.1
                                  c0,0-0.1-9.2,0-12.2c0-1.3,0.5-5.2,0.5-5.2c0.2-1.7,0.7-3.4,1.7-4.8c0.9-1.3,2-2.4,3.3-3.3c1.4-1,3.1-1.5,4.8-1.7
                                  c0,0,3.9-0.4,5.3-0.5c3-0.1,12.1,0,12.1,0c0.6,0,1.1-0.5,1.1-1.1s-0.5-1.1-1.1-1.1l0,0L58.9,28.9z"/>
                              </svg>
                            </div>
                            <div class="mxd-avatars__item small">
                              <img src="https://dummyimage.com/300x300/5d5d5d/838383" alt="Avatar">
                            </div>
                          </div>
                          <div class="mxd-avatars-group__text">
                            <p>Trusted by<br>
                              <a href="#0">10k+ customers</a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mxd-hero-05__bottom mxd-grid-item no-margin">
              <div class="mxd-hero-05__worksblock loading__item">
                <img class="mxd-move" src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Hero image">
                <div class="hero-05-worksblock__descr">
                  <p class="t-large t-caption t-bright">Blending creativity with practical design</p>
                  <a class="btn btn-anim btn-default btn-outline slide-right-up" href="works-simple.html">
                    <span class="btn-caption">Explore</span>
                    <i class="ph-bold ph-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="mxd-hero-05__videoblock loading__item">
                <div class="mxd-hero-05-videoblock__video">
                  <video preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="https://dummyimage.com/1280x720/4d4d4d/838383">
                    <source type="video/mp4" src="{{ asset('assets/front/video/1280x720_video.mp4') }}">
                    <source type="video/webm" src="{{ asset('assets/front/video/1280x720_video.webm') }}">
                    <source type="video/ogv" src="{{ asset('assets/front/video/1280x720_video.ogv') }}">
                  </video>
                </div>
                <div class="mxd-hero-05-videoblock__descr">
                  <p class="t-large t-caption t-bright">We are a creative digital agency specializing in 
                    innovative design and cutting-edge development.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Section End -->

      <!-- Section - Marquee Text One Line Start -->
      <div class="mxd-section padding-mtext">
        <div class="mxd-container fullwidth-container">

          <!-- Block - Marquee Text One Line Start -->
          <div class="mxd-block">
            <div class="marquee marquee-right--gsap muted-extra">
              <div class="marquee__toright">
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Design</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Development</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Branding</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">eCommerce</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Mobile Apps</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Marquee Text One Line End -->

        </div>
      </div>
      <!-- Section - Marquee Text One Line End -->

      <!-- Section - Parallax Divider Start -->
      <div class="mxd-section padding-pre-manifest">
        <div class="mxd-container">
          <div class="mxd-divider">
            <div class="mxd-divider__image divider-image-10 parallax-img"></div>
          </div>
        </div>
      </div>
      <!-- Section - Parallax Divider End -->

      <!-- Section - About Start -->
      <div class="mxd-section padding-pre-pinned-img">
        <div class="mxd-container grid-container">
        
          <!-- Block - About Description with Manifest Start -->
          <div class="mxd-block">
            <div class="container-fluid px-0">
              <div class="row gx-0 d-xl-flex justify-content-xl-center">
                <div class="col-12 col-xl-8 mxd-grid-item no-margin">
                  <div class="mxd-block__content">
                    <div class="mxd-block__manifest">
                      <p class="mxd-manifest mxd-manifest-l reveal-type">We are a creative web agency specializing in 
                        innovative design and cutting-edge development. We help businesses stand out and every aspect 
                        of our projects is crafted with the 
                        highest standards of quality.</p>
                      <div class="mxd-manifest__controls">
                        <a class="btn btn-anim btn-default btn-outline slide-right-up anim-uni-in-up" href="about-us.html">
                          <span class="btn-caption">About Us</span>
                          <i class="ph-bold ph-arrow-up-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - About Description with Manifest End -->

        </div>
      </div>
      <!-- Section - About End -->

      <!-- Section - Services Pinned Image Start -->
      <div class="mxd-section padding-pinned-img-pre-mtext">
        <div class="mxd-container">

          <!-- Block - Services Pinned Image Start -->
          <div class="mxd-block">
            <div class="mxd-pinned">
              <div class="mxd-pinned__visual page-padding">
                <div class="mxd-pinned__img-wrap">
                  <div class="mxd-pinned__img-list" role="list">
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Image">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="https://dummyimage.com/800x800/2d2d2d/838383" alt="Image">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Image">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="https://dummyimage.com/800x800/2d2d2d/838383" alt="Image">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-pinned__content page-padding">
                <div class="mxd-pinned__text-wrap">
                  <div class="mxd-pinned__text-list" role="list">
                    <!-- item -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Image">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Digital art and graphic design</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">UI/UX</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Web design</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Motion</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">3D models</span>
                      </div>
                      <p class="anim-uni-in-up">We create visually compelling designs that enhance user experience. We make sure your brand’s 
                        visuals resonate with your audience.</p>
                    </div>
                    <!-- item -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Image">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Creative development</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Frontend</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Interactions</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Backend</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">E-Commerce</span>
                      </div>
                      <p class="anim-uni-in-up">We build high-performance websites and applications using modern technologies. 
                        Our solutions are designed to be scalable and functional for optimal performance.</p>
                    </div>
                    <!-- item -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Image">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Brand identity</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Brand strategy</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Logo design</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Guidelines</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Visual identity</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Rebranding</span>
                      </div>
                      <p class="anim-uni-in-up">From logo design to comprehensive brand strategies, we ensure your business stands out 
                        with a unique visual identity and consistent messaging across all touchpoints.</p>
                    </div>
                    <!-- item -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="https://dummyimage.com/800x800/4d4d4d/838383" alt="Image">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Digital marketing solutions</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Social media</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">SEO Optimization</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Email</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Campaigns</span>
                      </div>
                      <p class="anim-uni-in-up">SEO and content marketing, social media management and paid campaigns - we help you 
                        reach and engage your target audience effectively.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Services Pinned Image End -->

        </div>
      </div>
      <!-- Section - Services Pinned Image End -->

      <!-- Section - Marquee Text One Line Start -->
      <div class="mxd-section padding-mtext mobile-title">
        <div class="mxd-container fullwidth-container">

          <!-- Block - Marquee Text One Line Start -->
          <div class="mxd-block">
            <div class="marquee marquee-right--gsap muted-extra">
              <div class="marquee__toright">
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Understanding Your Industry</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
                <!-- single item -->
                <div class="marquee__item one-line item-regular text">
                  <p class="marquee__text">Understanding Your Industry</p>
                  <div class="marquee__image">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
                      <path fill="currentColor" d="M78.4,38.4c0,0-11.8,0-15.8,0c-1.6,0-4.8-0.2-7.1-0.8c-2.3-0.6-4.3-0.8-6.3-2.4c-2-1.2-3.5-3.2-4.7-4.8
                        c-1.2-1.6-1.6-3.6-2-5.5c-0.3-1.5-0.7-4.3-0.8-5.9c-0.2-4.3,0-17.4,0-17.4C41.8,0.8,41,0,40.2,0s-1.6,0.8-1.6,1.6c0,0,0,13.1,0,17.4
                        c0,1.6-0.6,4.3-0.8,5.9c-0.3,2-0.8,4-2,5.5c-1.2,2-2.8,3.6-4.7,4.8s-4,1.8-6.3,2.4c-1.9,0.5-4.7,0.6-6.7,0.8c-3.9,0.4-16.6,0-16.6,0
                        C0.8,38.4,0,39.2,0,40c0,0.8,0.8,1.6,1.6,1.6c0,0,12.2,0,16.6,0c1.6,0,4.8,0.3,6.7,0.8c2.3,0.6,4.3,0.8,6.3,2.4
                        c1.6,1.2,3.2,2.8,4.3,4.4c1.2,2,2.1,3.9,2.4,6.3c0.2,1.7,0.7,4.7,0.8,6.7c0.2,4,0,16.2,0,16.2c0,0.8,0.8,1.6,1.6,1.6
                        s1.6-0.8,1.6-1.6c0,0,0-12.3,0-16.2c0-1.6,0.5-5.1,0.8-6.7c0.5-2.3,0.8-4.4,2.4-6.3c1.2-1.6,2.8-3.2,4.3-4.4c2-1.2,3.9-2,6.3-2.4
                        c1.8-0.3,5.1-0.7,7.1-0.8c3.5-0.2,15.8,0,15.8,0c0.8,0,1.6-0.8,1.6-1.6C80,39.2,79.2,38.4,78.4,38.4C78.4,38.4,78.4,38.4,78.4,38.4z
                        "/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Marquee Text One Line End -->

        </div>
      </div>
      <!-- Section - Marquee Text One Line End -->

      <!-- Section - Projects Masonry #01 Start -->
      <div class="mxd-section padding-pre-grid">
        <div class="mxd-container grid-l-container">

          <!-- Block - Projects Masonry #01 with Section Title Start -->
          <div class="mxd-block">
            <div class="mxd-projects-masonry">
              <div class="container-fluid p-0">
    
                <!-- Portfolio Gallery Start -->
                <div class="row g-0 mxd-projects-masonry__gallery" data-masonry='{"percentPosition": true }'>
                  <!-- portfolio gallery title -->
                  <div class="col-12 col-xl-6 mxd-projects-masonry__title section-title">
                    <div class="mxd-section-title no-margin-desktop">
                      <div class="container-fluid p-0">
                        <div class="row g-0">
                          <div class="col-12">
                            <div class="mxd-section-title__title anim-uni-in-up">
                              <h2 class="reveal-type">Case studies</h2>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mxd-section-title__descr">
                              <p class="anim-uni-in-up">Explore a selection of projects blending<br>creativity with practical design</p>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mxd-section-title__controls anim-uni-in-up">
                              <a class="btn btn-anim btn-default btn-outline slide-right-up" href="works-simple.html">
                                <span class="btn-caption">All Works</span>
                                <i class="ph ph-arrow-up-right"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview preview-image-2 parallax-img-small"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Sora</span>
                        <span class="tag tag-default tag-permanent">AI</span>
                        <span class="tag tag-default tag-permanent">Editorial</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>Interactive concept</span> powered by AI</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview preview-image-1 parallax-img-small"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">UI/UX</span>
                        <span class="tag tag-default tag-permanent">Web design</span>
                        <span class="tag tag-default tag-permanent">Illustrations</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>Creative studio</span> template for modern agencies</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview preview-image-3 parallax-img-small"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">UI/UX</span>
                        <span class="tag tag-default tag-permanent">Design</span>
                        <span class="tag tag-default tag-permanent">Android</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a href="project-details.html"><span>Mobile app design</span> for a cross-platform solution</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview preview-image-4 parallax-img-small"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Brand identity</span>
                        <span class="tag tag-default tag-permanent">Style guides</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>NFT project</span> branding</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview preview-image-5 parallax-img-small"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Illustrations</span>
                        <span class="tag tag-default tag-permanent">Design</span>
                        <span class="tag tag-default tag-permanent">Packaging</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>Illustrations set</span> for digital and print use</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview preview-image-6 parallax-img-small"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Midjourney</span>
                        <span class="tag tag-default tag-permanent">AI model</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>VR vision</span> experience concept</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Gallery End -->
    
                <!-- Portfolio Link Start -->
                <div class="mxd-projects-masonry__btngroup animate-in-up">
                  <a href="contact.html" class="btn-rotating btn-rotating-180 ver-02">
                    <!-- SVG rotating text -->
                    <svg version="1.1" id="scrollDown" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                      viewBox="0 0 160 160" style="enable-background:new 0 0 160 160;" xml:space="preserve" 
                      class="btn-rotating__text animate-rotation" data-value="360">
                      <defs>
                        <path id="textPath" d="M149.7,80c0,38.5-31.2,69.7-69.7,69.7S10.3,118.5,10.3,80S41.5,10.3,80,10.3S149.7,41.5,149.7,80z"/>
                      </defs>
                      <g>
                        <use xlink:href="#textPath" fill="none"></use>
                        <text>
                          <!-- button text here!!! -->
                          <textPath xlink:href="#textPath">Let's start new project * Let's start new project * </textPath>
                        </text>
                      </g>
                    </svg>
                    <!-- image -->
                    <img class="btn-rotating__image" src="https://dummyimage.com/100x100/4d4d4d/838383" alt="Object">
                  </a>
                </div>
                <!-- Portfolio Link End -->
                
              </div>
            </div>
          </div>
          <!-- Block - Projects Masonry #01 with Section Title Start -->

        </div>
      </div>
      <!-- Section - Projects Masonry #01 End -->

      <!-- Section - Marquee Images Two Lines Start -->
      <div class="mxd-section padding-pre-title">
        <div class="mxd-container fullwidth-container">

          <!-- Block - Marquee Images Two Lines Start -->
          <div class="mxd-block">
            <div class="marquee marquee--gsap">
              <!-- top line -->
              <div class="marquee__top">
                <!-- item -->
                <div class="marquee__item image">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item has-caption padding-4">
                  <div class="mxd-section-title no-margin">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12">
                          <div class="mxd-section-title__descr">
                            <p>Inspiring<br>ideas</p>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mxd-section-title__controls">
                            <a class="btn btn-anim btn-default btn-outline opposite slide-right-up" href="team.html">
                              <span class="btn-caption">Meet Our Team</span>
                              <i class="ph-bold ph-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item has-caption padding-4">
                  <div class="mxd-section-title no-margin">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12">
                          <div class="mxd-section-title__descr">
                            <p>Creative<br>minds</p>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mxd-section-title__controls">
                            <a class="btn btn-anim btn-default btn-outline opposite slide-right-up" href="team.html">
                              <span class="btn-caption">Meet Our Team</span>
                              <i class="ph-bold ph-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
              </div>
              <!-- bottom line -->
              <div class="marquee__bottom">
                <!-- item -->
                <div class="marquee__item has-caption padding-4">
                  <div class="mxd-section-title no-margin">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12">
                          <div class="mxd-section-title__descr">
                            <p>Creative<br>minds</p>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mxd-section-title__controls">
                            <a class="btn btn-anim btn-default btn-outline opposite slide-right-up" href="team.html">
                              <span class="btn-caption">Meet Our Team</span>
                              <i class="ph-bold ph-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item has-caption padding-4">
                  <div class="mxd-section-title no-margin">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12">
                          <div class="mxd-section-title__descr">
                            <p>Inspiring<br>ideas</p>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mxd-section-title__controls">
                            <a class="btn btn-anim btn-default btn-outline opposite slide-right-up" href="team.html">
                              <span class="btn-caption">Meet Our Team</span>
                              <i class="ph-bold ph-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="https://dummyimage.com/1200x1000/4d4d4d/838383" alt="Image">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Marquee Images Two Lines End -->

        </div>
      </div>
      <!-- Section - Marquee Images Two Lines End -->

      <!-- Section - Blog Preview Start -->
      <div class="mxd-section padding-blog">
        <div class="mxd-container grid-container">

          <!-- Block - Section Title Start -->
          <div class="mxd-block">
            <div class="mxd-section-title pre-grid">
              <div class="container-fluid p-0">
                <div class="row g-0">
                  <div class="col-12 col-xl-5 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrtitle">
                      <h2 class="reveal-type anim-uni-in-up">Recent insights</h2>
                    </div>
                  </div>
                  <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrdescr">
                      <p class="anim-uni-in-up">Inspiring ideas, creative insights, and the latest 
                        in design and tech. Fueling innovation for your digital journey.</p>
                    </div>
                  </div>
                  <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                      <a class="btn btn-anim btn-default btn-outline slide-right-up" href="blog-standard.html">
                        <span class="btn-caption">All Articles</span>
                        <i class="ph-bold ph-arrow-up-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Section Title End -->

          <!-- Block - Blog Preview Cards Start -->
          <div class="mxd-block">
            <div class="mxd-blog-preview">
              <div class="container-fluid p-0">
                <div class="row g-0">
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                    <a class="mxd-blog-preview__media" href="blog-article.html">
                      <div class="mxd-blog-preview__image blog-preview-image-1 parallax-img-small">
                        <!-- <img class="parallax-img-small" src="{{ asset('assets/front/img/blog/preview/1000x1250_prv-01.webp') }}" alt="Blog Preview Image"> -->
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="{{ asset('assets/front/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <span class="tag tag-default tag-permanent">Concept</span>
                        <span class="tag tag-default tag-permanent">Editorial</span>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="blog-article.html"><span>Frontend innovations</span> and user journeys</a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                    <a class="mxd-blog-preview__media" href="blog-article.html">
                      <div class="mxd-blog-preview__image blog-preview-image-2 parallax-img-small">
                        <!-- <img class="parallax-img-small" src="{{ asset('assets/front/img/blog/preview/1000x1250_prv-02.webp') }}" alt="Blog Preview Image"> -->
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="{{ asset('assets/front/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <span class="tag tag-default tag-permanent">UI/UX</span>
                        <span class="tag tag-default tag-permanent">Development</span>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="blog-article.html">Branding in creating <span>digital experiences</span></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                    <a class="mxd-blog-preview__media" href="blog-article.html">
                      <div class="mxd-blog-preview__image blog-preview-image-3 parallax-img-small">
                        <!-- <img class="parallax-img-small" src="{{ asset('assets/front/img/blog/preview/1000x1250_prv-03.webp') }}" alt="Blog Preview Image"> -->
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="{{ asset('assets/front/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <span class="tag tag-default tag-permanent">News</span>
                        <span class="tag tag-default tag-permanent">AI</span>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="blog-article.html">Elevating <span>digital workshops</span> with engaging design</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Blog Preview Cards End -->

        </div>
      </div>
      <!-- Section - Blog Preview End -->

      <!-- Section - CTA Start -->
      <div class="mxd-section overflow-hidden">
        <div class="mxd-container">

          <!-- Block - CTA Start -->
          <div class="mxd-block">
            <div class="mxd-promo">
              <div class="mxd-promo__inner anim-zoom-out-container">
                <!-- background -->
                <div class="mxd-promo__bg"></div>
                <!-- caption -->
                <div class="mxd-promo__content">
                  <p class="mxd-promo__title anim-uni-in-up">
                    <span class="mxd-promo__icon">
                      <img src="https://dummyimage.com/100x100/838383/5d5d5d" alt="Icon">
                    </span>
                    <span class="mxd-promo__caption reveal-type">Let's talk about your project!</span>
                  </p>
                  <div class="mxd-promo__controls anim-uni-in-up">
                    <a class="btn btn-anim btn-default btn-large btn-additional slide-right-up" href="contact.html">
                      <span class="btn-caption">Contact Us</span>
                      <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
                <!-- parallax images -->
                <div class="mxd-promo__images">
                  <img class="promo-image promo-image-1" src="https://dummyimage.com/600x600/5d5d5d/838383" alt="Image">
                  <img class="promo-image promo-image-2" src="https://dummyimage.com/300x300/5d5d5d/838383" alt="Image">
                </div>
              </div>
            </div>
          </div>
          <!-- Block - CTA End -->

        </div>
      </div>
      <!-- Section - CTA End -->

    </main>
    <!-- Page Content End -->

@endsection