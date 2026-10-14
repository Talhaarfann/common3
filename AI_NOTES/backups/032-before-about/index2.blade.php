@extends('layouts.front')
@section('content')
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
                          <em class="hero-05-title__item common3-gradient-text">into real stories</em>
                        </span>
                      </h1>
                    </div>
                    <div class="col-12 col-xl-4 col-xxl-2 order-1 order-xl-2 mxd-grid-item no-margin">
                      <!-- clients avatars -->
                      <div class="hero-05-headline__avatars loading__fade">
                        <div class="mxd-avatars-group align-right">
                          <div class="mxd-avatars align-right">
                            <div class="mxd-avatars__item small">
                              <img src="{{ asset('assets/front/img/common3/testi1.png') }}" alt="Avatar">
                            </div>
                            <div class="mxd-avatars__item small bg-base-opp">
                              {{-- <svg class="mxd-avatars__icon small" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                              </svg> --}}
                              <img src="{{ asset('assets/front/img/common3/testi3.png') }}" alt="Avatar">
                            </div>
                            <div class="mxd-avatars__item small">
                              <img src="{{ asset('assets/front/img/common3/testi2.png') }}" alt="Avatar">
                            </div>
                          </div>
                          <div class="mxd-avatars-group__text">
                            <p>Trusted by<br>
                              <a href="#0">30+ customers</a>
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
                <img class="mxd-move" src="{{ asset('assets/front/img/common3/logo2.png') }}" alt="Hero image">
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
                    <source type="video/mp4" src="{{ asset('assets/front/img/common3/firstsection.mp4') }}">
                    {{-- <source type="video/webm" src="{{ asset('assets/front/video/1280x720_video.webm') }}">
                    <source type="video/ogv" src="{{ asset('assets/front/video/1280x720_video.ogv') }}"> --}}
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
                  <p class="marquee__text">Social Media</p>
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
            <div class="mxd-divider__image divider-image-10 parallax-img common3-team-divider" style="background-image: url('{{ asset('assets/front/img/common3/teamTogether.png') }}'); background-position: center top !important;"></div>
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
                      <p class="mxd-manifest mxd-manifest-l reveal-type">Three minds. One common idea. We are Common3,
                        a social media and creative agency built by three founders with a shared vision.
                        From content creation and video editing to design, Meta ads and web development,
                        we help brands show up with purpose, connect with their audience and make it matter.</p>
                      <div class="mxd-manifest__controls">
                        <a class="btn btn-anim btn-default btn-outline slide-right-up anim-uni-in-up" href="about-us.html">
                          <span class="btn-caption">About Common3</span>
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
            <div class="mxd-pinned" aria-label="Common3 services">
              <div class="mxd-pinned__visual page-padding">
                <div class="mxd-pinned__img-wrap">
                  <div class="mxd-pinned__img-list" role="list">
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/social-media-marketing.png') }}" alt="Social content, audience engagement and growth in Common3 colors" width="800" height="800">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/brand-identity.png') }}" alt="">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/content-creation.png') }}" alt="">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/web-development.png') }}" alt="">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/video-editing.png') }}" alt="">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/graphic-design.png') }}" alt="">
                    </div>
                    <div class="mxd-pinned__img-item" role="listitem">
                      <img class="mxd-pinned__img" src="{{ asset('assets/front/img/common3/transparent/videography.png') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mxd-pinned__content page-padding">
                <div class="mxd-pinned__text-wrap">
                  <div class="mxd-pinned__text-list" role="list">
                    <!-- Social Media Marketing -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/social-media-marketing.png') }}" alt="Social content, audience engagement and growth in Common3 colors" width="800" height="800">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Social Media Marketing</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Social Strategy</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Page Management</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Meta Ads</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Campaign Planning</span>
                      </div>
                      <p class="anim-uni-in-up">We help your brand show up consistently and connect with the right audience. From social media planning and page management to Meta ad campaigns, we bring your content and marketing together with a clear purpose.</p>
                    </div>
                    <!-- Brand Identity -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/brand-identity.png') }}" alt="">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Brand Identity</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Logo Design</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Color Palette</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Typography</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Brand Guidelines</span>
                      </div>
                      <p class="anim-uni-in-up">We shape a visual identity that feels like your brand. With a distinctive logo, considered colors and typography, and clear guidelines, we help you stay recognizable across your social pages, content and website.</p>
                    </div>
                    <!-- Content Creation -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/content-creation.png') }}" alt="">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Content Creation</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Content Planning</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Reels</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Social Posts</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Brand Storytelling</span>
                      </div>
                      <p class="anim-uni-in-up">We turn your brand's ideas into content people can connect with. From planning concepts to creating reels and social posts, we build stories around your products, your people and what makes your business different.</p>
                    </div>
                    <!-- Web Development -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/web-development.png') }}" alt="">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Web Development</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Business Websites</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Landing Pages</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Responsive Design</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Laravel</span>
                      </div>
                      <p class="anim-uni-in-up">We build responsive websites that bring your brand online with clarity. From business websites to campaign landing pages, we focus on clear navigation, practical functionality and a smooth experience across devices.</p>
                    </div>
                    <!-- Video Editing -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/video-editing.png') }}" alt="">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Video Editing</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Reels Editing</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Motion Graphics</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Long-form Videos</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Captions</span>
                      </div>
                      <p class="anim-uni-in-up">We turn raw footage into videos with a clear story and a purposeful pace. From short-form reels to long-form edits, motion graphics and captions, we shape each video for its audience and platform.</p>
                    </div>
                    <!-- Graphic Design -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/graphic-design.png') }}" alt="">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Graphic Design</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Social Media Creatives</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Ad Creatives</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Posters</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Digital Design</span>
                      </div>
                      <p class="anim-uni-in-up">We create visuals that carry your message and feel consistent with your brand. From social media posts and ad creatives to posters and digital graphics, we balance strong ideas with clear, readable design.</p>
                    </div>
                    <!-- Videography -->
                    <div class="mxd-pinned__text-item" role="listitem">
                      <div class="mxd-pinned__img-mobile anim-uni-in-up">
                        <img src="{{ asset('assets/front/img/common3/transparent/videography.png') }}" alt="">
                      </div>
                      <h2 class="mxd-pinned__title h2-small anim-uni-in-up">Videography</h2>
                      <div class="mxd-pinned__tags">
                        <span class="tag tag-default tag-outline anim-uni-in-up">Brand Films</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Product Shoots</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">On-location Filming</span>
                        <span class="tag tag-default tag-outline anim-uni-in-up">Social Video</span>
                      </div>
                      <p class="anim-uni-in-up">We capture the people, products and moments behind your brand. With planned shoots and thoughtful framing, we create footage for brand stories, product showcases and social media content.</p>
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
                              <h2 class="reveal-type common3-gradient-text">Case studies</h2>
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
                      <div class="mxd-project-item__preview masonry-preview parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/mathtrix-case-study.png') }}');" role="img" aria-label="MathTrix by Waqar Naeem social media case study"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Social Media</span>
                        <span class="tag tag-default tag-permanent">Content Design</span>
                        <span class="tag tag-default tag-permanent">Education</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>MathTrix</span> by Waqar Naeem</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/cims-case-study-v3.png') }}');" role="img" aria-label="CIMS Academy social media case study"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Social Media</span>
                        <span class="tag tag-default tag-permanent">Content Design</span>
                        <span class="tag tag-default tag-permanent">Education</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>CIMS Academy</span> O &amp; A Levels, Gujranwala</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/rills-attendance-case-study.png') }}');" role="img" aria-label="Rills Attendance Management System web application case study"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Web Development</span>
                        <span class="tag tag-default tag-permanent">Dashboard</span>
                        <span class="tag tag-default tag-permanent">Staff Management</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a href="project-details.html"><span>Rills</span> Attendance Management System</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/cims-website-case-study.png') }}');" role="img" aria-label="CIMS Academy cimsofficial.com website design case study"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Web Design</span>
                        <span class="tag tag-default tag-permanent">Web Development</span>
                        <span class="tag tag-default tag-permanent">Education</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>CIMS Academy</span> cimsofficial.com website</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/gymnasium-case-study.png') }}');" role="img" aria-label="Gymnasium Gujranwala social media case study"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Social Media</span>
                        <span class="tag tag-default tag-permanent">Content Design</span>
                        <span class="tag tag-default tag-permanent">Fitness</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>Gymnasium</span> Gujranwala</a>
                      </div>
                    </div>
                  </div>
                  <!-- portfolio gallery single item -->
                  <div class="col-12 col-xl-6 mxd-project-item mxd-projects-masonry__item anim-uni-in-up">
                    <a class="mxd-project-item__media masonry-media" href="project-details.html">
                      <div class="mxd-project-item__preview masonry-preview parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/burgher-case-study.png') }}');" role="img" aria-label="Burgher social media food campaign case study"></div>
                      <div class="mxd-project-item__tags">
                        <span class="tag tag-default tag-permanent">Social Media</span>
                        <span class="tag tag-default tag-permanent">Content Design</span>
                        <span class="tag tag-default tag-permanent">Food &amp; Beverage</span>
                      </div>
                    </a>
                    <div class="mxd-project-item__promo">
                      <div class="mxd-project-item__name">
                        <a class="anim-uni-in-up" href="project-details.html"><span>Burgher</span> social media campaigns</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Gallery End -->
    
                <!-- Portfolio Link Start -->
                <div class="mxd-projects-masonry__btngroup animate-in-up">
                  <a href="{{ route('contact') }}" class="btn-rotating btn-rotating-180 ver-02">
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
                    <img class="btn-rotating__image" src="{{asset('assets/front/img/common3/logo.png')}}" alt="Object">
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
                {{-- <div class="marquee__item image">
                  <a class="marquee__link" href="team.html">
                    <img src="{{ asset('assets/front/img/common3/left-professional-1200x1000.png') }}" alt="Image">
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
                    <img src="{{ asset('assets/front/img/common3/center-professional-1200x1000.png') }}" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="{{ asset('assets/front/img/common3/right-professional-1200x1000.png') }}" alt="Image">
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
                    <img src="{{ asset('assets/front/img/common3/right-professional-1200x1000.png') }}" alt="Image">
                  </a>
                </div> --}}
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
                    <img src="{{ asset('assets/front/img/common3/left-professional-1200x1000.png') }}" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="{{ asset('assets/front/img/common3/center-professional-1200x1000.png') }}" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="{{ asset('assets/front/img/common3/right-professional-1200x1000.png') }}" alt="Image">
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
                    <img src="{{ asset('assets/front/img/common3/left-professional-1200x1000.png') }}" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="{{ asset('assets/front/img/common3/center-professional-1200x1000.png') }}" alt="Image">
                  </a>
                </div>
                <!-- item -->
                <div class="marquee__item">
                  <a class="marquee__link" href="team.html">
                    <img src="{{ asset('assets/front/img/common3/right-professional-1200x1000.png') }}" alt="Image">
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
                      <h2 class="reveal-type anim-uni-in-up common3-gradient-text">Recent insights</h2>
                    </div>
                  </div>
                  <div class="col-12 col-xl-4 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrdescr">
                      <p class="anim-uni-in-up">Fresh perspectives on content, video and websites—useful reads selected by Common3.</p>
                    </div>
                  </div>
                  <div class="col-12 col-xl-3 mxd-grid-item no-margin">
                    <div class="mxd-section-title__hrcontrols anim-uni-in-up">
                      <a class="btn btn-anim btn-default btn-outline slide-right-up" href="https://buffer.com/library" target="_blank" rel="noopener noreferrer">
                        <span class="btn-caption">More Reads</span>
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
                    <a class="mxd-blog-preview__media" href="https://buffer.com/resources/social-media-calendar/" target="_blank" rel="noopener noreferrer">
                      <div class="mxd-blog-preview__image parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/insights/content-planning.jpg') }}');" role="img" aria-label="Planner and phone arranged for social media content planning">
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="{{ asset('assets/front/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <span class="tag tag-default tag-permanent">Social Media</span>
                        <span class="tag tag-default tag-permanent">Buffer</span>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="https://buffer.com/resources/social-media-calendar/" target="_blank" rel="noopener noreferrer"><span>Build a social media</span> content calendar</a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                    <a class="mxd-blog-preview__media" href="https://www.adobe.com/express/learn/blog/instagram-reels" target="_blank" rel="noopener noreferrer">
                      <div class="mxd-blog-preview__image parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/insights/reels-creation.jpg') }}');" role="img" aria-label="Smartphone filming a coffee cup for a short-form video">
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="{{ asset('assets/front/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <span class="tag tag-default tag-permanent">Reels</span>
                        <span class="tag tag-default tag-permanent">Adobe</span>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="https://www.adobe.com/express/learn/blog/instagram-reels" target="_blank" rel="noopener noreferrer">Create better <span>Instagram Reels</span></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="col-12 col-xl-4 mxd-blog-preview__item mxd-grid-item animate-card-3">
                    <a class="mxd-blog-preview__media" href="https://web.dev/learn/design/" target="_blank" rel="noopener noreferrer">
                      <div class="mxd-blog-preview__image parallax-img-small" style="background-image: url('{{ asset('assets/front/img/common3/insights/responsive-design.jpg') }}');" role="img" aria-label="Laptop and phone displaying desktop and mobile website layouts">
                      </div>
                      <div class="mxd-preview-hover">
                        <i class="mxd-preview-hover__icon">
                          <img src="{{ asset('assets/front/img/icons/icon-eye.svg') }}" alt="Eye Icon">
                        </i>
                      </div>
                      <div class="mxd-blog-preview__tags">
                        <span class="tag tag-default tag-permanent">Web Design</span>
                        <span class="tag tag-default tag-permanent">web.dev</span>
                      </div>
                    </a>
                    <div class="mxd-blog-preview__data">
                      <a class="anim-uni-in-up" href="https://web.dev/learn/design/" target="_blank" rel="noopener noreferrer"><span>Design for</span> every screen</a>
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

      @include('layouts.partials.cta')

    </main>
    <!-- Page Content End -->
@endsection
