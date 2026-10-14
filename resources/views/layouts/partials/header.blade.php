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
              <p class="mxd-menu__caption menu-fade-in">Three minds. One common idea.<br>Social media, design &amp; development.</p>
              <div class="main-menu">
                <nav class="main-menu__content">
                  <ul id="main-menu" class="main-menu__accordion">
                    @foreach ([
                      ['label' => 'Home', 'url' => route('index2')],
                      ['label' => 'About Us', 'url' => route('about')],
                      ['label' => 'Works', 'url' => route('under-construction')],
                      ['label' => 'Services', 'url' => route('index2').'#common3-services'],
                      ['label' => 'Insights', 'url' => route('index2').'#common3-insights'],
                      ['label' => 'Contact', 'url' => route('contact')],
                    ] as $menuLink)
                    <li class="main-menu__item">
                      <a class="main-menu__link btn btn-anim" href="{{ $menuLink['url'] }}">
                        <span class="btn-caption">{{ $menuLink['label'] }}</span>
                      </a>
                    </li>
                    @endforeach
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