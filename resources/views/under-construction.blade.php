@extends('layouts.front')
@section('title', 'Under Construction | Common3')
@section('description', 'Our full portfolio and case studies are coming soon. Meet Common3 or get in touch about your next project.')
@push('styles')
<style>
  @media (max-width: 575px) {
    .common3-construction-title .common3-gradient-text { font-size: clamp(3.2rem, 9vw, 5.6rem); }
  }
</style>
@endpush
@section('content')
<main id="mxd-page-content" class="mxd-page-content inner-page-content">
  <div class="mxd-section mxd-section-inner-headline padding-default overflow-hidden">
    <div class="mxd-container grid-container">
      <div class="mxd-block loading-wrap">
        <div class="container-fluid px-0">
          <div class="row gx-0">
            <div class="col-12 col-xl-2 mxd-grid-item no-margin">
              <div class="mxd-block__name name-inner-headline loading__item">
                <p class="mxd-point-subtitle"><i class="ph ph-hammer" aria-hidden="true"></i><span>Coming soon</span></p>
              </div>
            </div>
            <div class="col-12 col-xl-10 mxd-grid-item no-margin">
              <div class="mxd-block__content">
                <div class="mxd-block__inner-headline">
                  <h1 class="inner-headline__title common3-construction-title loading__item">Under<br><span class="common3-gradient-text">construction.</span></h1>
                  <p class="inner-headline__text t-large t-bright loading__item">Good work deserves a good story. We’re putting the finishing touches on our portfolio and case studies.</p>
                  <p class="t-muted loading__item">In the meantime, meet the three minds behind Common3 or tell us about your next project.</p>
                  <div class="mxd-section-title__controls d-flex flex-wrap gap-3 loading__fade">
                    <a class="btn btn-anim btn-default btn-accent slide-right-up flex-shrink-0" href="{{ route('index2') }}">
                      <span class="btn-caption">Back to Home</span><i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                    <a class="btn btn-anim btn-default btn-outline slide-right-up flex-shrink-0" href="{{ route('contact') }}">
                      <span class="btn-caption">Let’s talk</span><i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
