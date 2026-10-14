@extends('layouts.master')
@section('title', 'Social Media & Creative Agency')
@section('content')
<main id="main-content">
    <section class="c3-hero c3-shell" aria-labelledby="hero-title">
        <div class="c3-hero-copy">
            <p class="c3-eyebrow"><span class="c3-live-dot"></span> Independent minds. Collective impact.</p>
            <h1 id="hero-title">Common minds.<br><span class="c3-gradient">Uncommon</span><br>impact<span class="c3-gradient">.</span></h1>
            <p class="c3-hero-description">We turn brands into something people<br class="c3-desktop-break"> stop scrolling for.</p>
            <p class="c3-hero-detail">Social strategy, standout content, and digital experiences.<br class="c3-desktop-break"> Three minds. All in on your brand.</p>
            <div class="c3-hero-actions">
                <a href="#contact" class="c3-button c3-button-primary">Let’s make it matter <i class="ph ph-arrow-up-right" aria-hidden="true"></i></a>
                <a href="#work" class="c3-text-link">Explore our work <i class="ph ph-arrow-down" aria-hidden="true"></i></a>
            </div>
            <div class="c3-founder-note"><div class="c3-mini-marks" aria-hidden="true"><span>T</span><span>M</span><span>A</span></div><p>Strategy. Creation. Execution.<br><strong>One team, from idea to impact.</strong></p></div>
        </div>
        <div class="c3-hero-art" aria-label="Common3 social creative showcase">
            <span class="c3-art-number" aria-hidden="true">3</span>
            <span class="c3-art-orbit" aria-hidden="true"></span>
            <span class="c3-art-cross" aria-hidden="true">✳</span>
            <span class="c3-art-label c3-art-label-top"><span class="c3-live-dot"></span> Built to stop the scroll</span>
            <div class="c3-phone">
                <div class="c3-phone-header"><span class="c3-phone-mark">c<span>3</span></span><span>common.3<br><small>Original thinking. Always.</small></span><i class="ph ph-dots-three" aria-hidden="true"></i></div>
                <img src="{{ asset('assets/front/img/common3/web/make-every-click-count.webp') }}" width="900" height="1125" alt="Common3 creative: Make every click count, with a flowing money tap" fetchpriority="high">
                <div class="c3-phone-footer" aria-hidden="true"><i class="ph ph-heart"></i><i class="ph ph-chat-circle"></i><i class="ph ph-paper-plane-tilt"></i><i class="ph ph-bookmark-simple"></i></div>
            </div>
            <div class="c3-art-sticker"><i class="ph ph-sparkle" aria-hidden="true"></i><span>Good content.<br><strong>Common sense.</strong></span></div>
            <span class="c3-art-caption">A little common ground.<br>A lot of creative possibility.</span>
        </div>
        <div class="c3-hero-bottom"><span>Social-first. Human at heart.</span><a href="#work">Scroll to discover <i class="ph ph-arrow-down-right" aria-hidden="true"></i></a><span>EST. 2026 / COMMON3</span></div>
    </section>

    <div class="c3-service-strip" aria-label="Our capabilities"><div class="c3-shell"><span>Social media</span><b aria-hidden="true">✳</b><span>Content creation</span><b aria-hidden="true">✳</b><span>Meta ads</span><b aria-hidden="true">✳</b><span>Video & motion</span><b aria-hidden="true">✳</b><span>Web development</span></div></div>

    <section class="c3-section c3-shell" id="work" aria-labelledby="work-title">
        <div class="c3-section-heading">
            <div><p class="c3-eyebrow"><span>01 /</span> The creative side</p><h2 id="work-title">Made to be seen.<br><span class="c3-muted">Built to be remembered.</span></h2></div>
            <p class="c3-section-intro">A look inside the Common3 creative world.<br>Our own brand. Our own point of view.</p>
        </div>
        <div class="c3-work-toolbar"><div class="c3-filters" role="group" aria-label="Filter creative work" hidden><button type="button" data-filter="all" aria-pressed="true">All work <span>03</span></button><button type="button" data-filter="social" aria-pressed="false">Social design</button><button type="button" data-filter="brand" aria-pressed="false">Brand stories</button></div><span class="c3-work-kicker">COMMON3 ORIGINALS — VOL. 01</span></div>
        <div class="c3-work-grid" id="work-grid">
            <article class="c3-work-card" data-category="social">
                <a class="c3-work-image c3-work-image-clicks" href="{{ asset('assets/front/img/common3/Post 1.png') }}" data-artwork data-title="Make every click count." data-description="Common3 original · Social design. A bold visual metaphor connecting attention with business value.">
                    <img src="{{ asset('assets/front/img/common3/web/make-every-click-count.webp') }}" alt="Make every click count — Common3 social design" width="900" height="1125" loading="lazy">
                    <span class="c3-image-tag">Social design</span><span class="c3-image-arrow" aria-hidden="true">↗</span>
                </a><div class="c3-work-caption"><h3>Make every click count.</h3><span>01</span></div><p>Visual storytelling / Common3</p>
            </article>
            <article class="c3-work-card" data-category="brand">
                <a class="c3-work-image" href="{{ asset('assets/front/img/common3/ChatGPT Image Sep 23, 2026, 11_53_48 PM.png') }}" data-artwork data-title="Three minds. One common idea." data-description="Common3 original · Brand story. The founding idea expressed through bold typography and our signature gradient.">
                    <img src="{{ asset('assets/front/img/common3/web/three-minds.webp') }}" alt="Three minds. One common idea. Make it matter — Common3 brand manifesto" width="900" height="1125" loading="lazy">
                    <span class="c3-image-tag">Brand story</span><span class="c3-image-arrow" aria-hidden="true">↗</span>
                </a><div class="c3-work-caption"><h3>A common beginning.</h3><span>02</span></div><p>Brand identity / Common3</p>
            </article>
            <article class="c3-work-card" data-category="social">
                <a class="c3-work-image" href="{{ asset('assets/front/img/common3/Common 3.png') }}" data-artwork data-title="Better content starts with a strategy." data-description="Common3 original · Social design. An educational post about consistency, strategy and knowing your audience.">
                    <img src="{{ asset('assets/front/img/common3/web/instagram-strategy.webp') }}" alt="Three things killing your Instagram — an educational Common3 post" width="900" height="1125" loading="lazy">
                    <span class="c3-image-tag">Social design</span><span class="c3-image-arrow" aria-hidden="true">↗</span>
                </a><div class="c3-work-caption"><h3>Give your feed a purpose.</h3><span>03</span></div><p>Social strategy / Common3</p>
            </article>
        </div>
        <p class="c3-filter-status c3-sr-only" role="status" aria-live="polite"></p>
    </section>

    <section class="c3-services-section" id="services" aria-labelledby="services-title"><div class="c3-shell c3-services-layout">
        <div class="c3-services-intro"><p class="c3-eyebrow"><span>02 /</span> What we bring</p><h2 id="services-title">Your brand.<br>Our common<br><span class="c3-gradient">obsession.</span></h2><p>From the first idea to the final upload, we connect the dots that make your brand feel like itself.</p><a href="#contact" class="c3-text-link">Find your starting point <i class="ph ph-arrow-up-right" aria-hidden="true"></i></a><div class="c3-services-symbol" aria-hidden="true">c<span>3</span></div></div>
        <div class="c3-services-list">
            <details class="c3-service" open><summary><span class="c3-service-number">01</span><h3>Social media & strategy</h3><i class="ph ph-plus" aria-hidden="true"></i></summary><div class="c3-service-content"><p>A clear voice, a consistent presence, and a plan behind every post. We shape your content around your audience and what your business needs.</p><div class="c3-tags"><span>Content planning</span><span>Account management</span><span>Brand voice</span></div></div></details>
            <details class="c3-service"><summary><span class="c3-service-number">02</span><h3>Content creation & design</h3><i class="ph ph-plus" aria-hidden="true"></i></summary><div class="c3-service-content"><p>Original concepts, considered visuals, and shoots with a story to tell. From the camera to the carousel, we give your brand a recognizable creative language.</p><div class="c3-tags"><span>Videography</span><span>Graphic design</span><span>Social campaigns</span></div></div></details>
            <details class="c3-service"><summary><span class="c3-service-number">03</span><h3>Reels, editing & motion</h3><i class="ph ph-plus" aria-hidden="true"></i></summary><div class="c3-service-content"><p>The hook, the pacing, the last frame. We turn raw footage into reels, motion graphics and long-form videos that hold the story together.</p><div class="c3-tags"><span>Short-form video</span><span>Motion graphics</span><span>Long-form editing</span></div></div></details>
            <details class="c3-service"><summary><span class="c3-service-number">04</span><h3>Meta ads & campaigns</h3><i class="ph ph-plus" aria-hidden="true"></i></summary><div class="c3-service-content"><p>Put purposeful creative in front of the right people. We plan, launch and refine Facebook and Instagram campaigns around clear business goals.</p><div class="c3-tags"><span>Campaign strategy</span><span>Ad creative</span><span>Testing & reporting</span></div></div></details>
            <details class="c3-service"><summary><span class="c3-service-number">05</span><h3>Web design & development</h3><i class="ph ph-plus" aria-hidden="true"></i></summary><div class="c3-service-content"><p>Give the attention you earn somewhere to land. We build responsive websites and landing pages that feel like your brand and make the next step clear.</p><div class="c3-tags"><span>Business websites</span><span>Landing pages</span><span>Laravel development</span></div></div></details>
        </div>
    </div></section>

    <section class="c3-section c3-shell c3-about" id="about" aria-labelledby="about-title">
        <div class="c3-story"><div><p class="c3-eyebrow"><span>03 /</span> The common thread</p><h2 id="about-title">Three minds.<br>One common idea.<br><span class="c3-gradient">Make it matter.</span></h2></div><div class="c3-story-copy"><span class="c3-story-asterisk" aria-hidden="true">✳</span><p>Common3 started with three people who saw things the same way: good ideas deserve to become something real.</p><p>We bring strategy, production, design, editing and development to the same table. You work directly with the people making your work.</p><span class="c3-small-label">Different skills. Shared standards.</span></div></div>
        <div class="c3-team-grid">
            <article class="c3-person"><div class="c3-person-top"><span>CO-FOUNDER / 01</span><i class="ph ph-code" aria-hidden="true"></i></div><div class="c3-person-initial" aria-hidden="true">TA<span>↗</span></div><h3>Talha Arfan</h3><p>Strategy meets design meets code.</p><div class="c3-person-roles">Web development<br>Social media management<br>Graphic design</div></article>
            <article class="c3-person"><div class="c3-person-top"><span>CO-FOUNDER / 02</span><i class="ph ph-video-camera" aria-hidden="true"></i></div><div class="c3-person-initial" aria-hidden="true">MB<span>↗</span></div><h3>Muhammad Butt</h3><p>From the camera to the campaign.</p><div class="c3-person-roles">Content creation<br>Videography<br>Meta ads</div></article>
            <article class="c3-person"><div class="c3-person-top"><span>CO-FOUNDER / 03</span><i class="ph ph-film-strip" aria-hidden="true"></i></div><div class="c3-person-initial" aria-hidden="true">AH<span>↗</span></div><h3>Syed Ali Haider</h3><p>Every frame has a reason.</p><div class="c3-person-roles">Reels editing<br>Motion graphics<br>Long-form video editing</div></article>
        </div>
    </section>

    <section class="c3-process c3-shell" aria-labelledby="process-title"><div class="c3-section-heading"><div><p class="c3-eyebrow"><span>04 /</span> How we work</p><h2 id="process-title">Less back-and-forth.<br><span class="c3-muted">More making things happen.</span></h2></div></div><div class="c3-process-grid"><article><span class="c3-step">01 <i class="ph ph-arrow-right" aria-hidden="true"></i></span><h3>Find the common ground.</h3><p>We get to know your brand, your audience and what you want to achieve. That becomes our starting point.</p></article><article><span class="c3-step">02 <i class="ph ph-arrow-right" aria-hidden="true"></i></span><h3>Make something that matters.</h3><p>We turn the direction into a content plan, then design, shoot, edit or build it with your feedback along the way.</p></article><article><span class="c3-step">03 <i class="ph ph-arrow-up-right" aria-hidden="true"></i></span><h3>Put it out. Keep improving.</h3><p>We launch the work, look at what connects, and use what we learn to make the next round stronger.</p></article></div></section>

    <section class="c3-contact c3-shell" id="contact" aria-labelledby="contact-title"><div class="c3-contact-panel"><div class="c3-contact-glow" aria-hidden="true"></div><p class="c3-eyebrow"><span class="c3-live-dot"></span> Your next chapter starts here</p><h2 id="contact-title">Got something<br>in <span class="c3-gradient">mind?</span></h2><div class="c3-contact-bottom"><p>Let’s find the common ground.<br>And build something worth talking about.</p><a class="c3-button c3-button-primary" href="https://www.instagram.com/common.3/" target="_blank" rel="noopener noreferrer" data-open-brief>Let’s talk about it <i class="ph ph-arrow-up-right" aria-hidden="true"></i></a></div><span class="c3-contact-watermark" aria-hidden="true">3</span></div></section>
</main>

<dialog class="c3-dialog c3-art-dialog" id="artwork-dialog" aria-labelledby="artwork-title"><button type="button" class="c3-dialog-close" data-close-dialog aria-label="Close artwork preview">×</button><img id="artwork-image" alt=""><div class="c3-art-dialog-copy"><p class="c3-eyebrow">Inside Common3</p><h2 id="artwork-title"></h2><p id="artwork-description"></p></div></dialog>

<dialog class="c3-dialog c3-brief-dialog" id="brief-dialog" aria-labelledby="brief-title"><button type="button" class="c3-dialog-close" data-close-dialog aria-label="Close project brief">×</button><p class="c3-eyebrow">A little about your big idea</p><h2 id="brief-title">Let’s make it matter.</h2><p class="c3-dialog-intro">Put your thoughts into a brief, then share it with us on Instagram. Nothing is sent automatically.</p><form id="project-brief-form"><div class="c3-form-row"><label>Your name<input name="name" autocomplete="name" placeholder="What should we call you?" required maxlength="100"></label><label>Brand / business<input name="brand" autocomplete="organization" placeholder="Your brand name" required maxlength="120"></label></div><label>Where can we help?<select name="service" required><option value="">Choose your starting point</option><option>Social media & strategy</option><option>Content creation & design</option><option>Reels, editing & motion</option><option>Meta ads & campaigns</option><option>Web design & development</option><option>A bit of everything</option></select></label><label>What do you have in mind?<textarea name="idea" rows="3" placeholder="Tell us about your goals, your project, or the thing you need a hand with." required maxlength="2000"></textarea></label><button type="submit" class="c3-button c3-button-primary">Prepare my brief <i class="ph ph-arrow-right" aria-hidden="true"></i></button></form><div id="brief-result" hidden><label>Your project brief<textarea id="brief-text" readonly rows="7"></textarea></label><div class="c3-brief-actions"><button class="c3-button c3-button-primary" id="copy-brief" type="button">Copy brief <i class="ph ph-copy" aria-hidden="true"></i></button><button class="c3-text-link" id="download-brief" type="button">Download .txt <i class="ph ph-download-simple" aria-hidden="true"></i></button></div><p class="c3-brief-status" id="brief-status" role="status" aria-live="polite">Your brief is ready. Copy it, then paste it into your message.</p><a href="https://www.instagram.com/common.3/" target="_blank" rel="noopener noreferrer" class="c3-text-link">Open @common.3 on Instagram <i class="ph ph-arrow-up-right" aria-hidden="true"></i></a><button class="c3-edit-brief" id="edit-brief" type="button">← Edit my brief</button></div></dialog>
@endsection
