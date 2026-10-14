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
                      <a class="main-menu__link btn btn-anim" href="{{ route('index2') }}">
                        <span class="btn-caption">Home</span>
                      </a>
                    </li>
                    {{-- <li class="main-menu__item">
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
                          <a href="{{ url('/') }}">Main home</a>
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
                    </li> --}}
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
                      <a class="main-menu__link btn btn-anim" href="{{ route('contact') }}">
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
                  <p class="menu-promo__caption menu-fade-in">👋 Meet Common3.<br>Three minds. One common idea. We create social content, build brands and develop websites that make it matter.</p>
                  <div class="menu-promo__video">
                    <img class="menu-video" src="{{ asset('assets/front/img/common3/teamTogether.png') }}" alt="The three Common3 founders together" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <!-- data bottom line -->
            <div class="mxd-menu__data menu-fade-in">
              <p class="t-xsmall">
                <i class="ph ph-copyright" aria-hidden="true"></i>
                {{ date('Y') }} <a class="no-effect" href="{{ url('/') }}">Common3</a>
              </p>
              <p class="t-xsmall">
                All rights reserved.
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
        <a href="{{ url('/') }}" class="mxd-logo" aria-label="Common3 home">
          <img class="mxd-logo__image" src="{{ asset('assets/front/img/common3/web/logo.webp') }}" alt="" width="256" height="256">
          <span class="mxd-logo__text">Common3</span>
        </a>
      </div>
      <!-- header controls -->
      <div class="mxd-header__controls loading__fade">
        <button id="color-switcher" class="mxd-color-switcher" type="button" role="switch" aria-label="light/dark mode" aria-checked="true"></button>
        <a class="btn btn-anim btn-default btn-mobile-icon btn-outline slide-right-up" href="{{ route('contact') }}" aria-label="Say Hello">
          <span class="btn-caption">Say Hello</span>
          <i class="ph-bold ph-arrow-up-right"></i>
        </a>
      </div>
    </header>
    <!-- Header End -->