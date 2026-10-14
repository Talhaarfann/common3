@extends('layouts.front')
@section('title', 'Message received | Common3')
@section('content')
<main id="mxd-page-content" class="mxd-page-content inner-page-content">
  <div class="mxd-section mxd-section-inner-headline padding-default overflow-hidden">
    <div class="mxd-container grid-container">
      <div class="mxd-block loading-wrap">
        <div class="container-fluid px-0">
          <div class="row gx-0">
            <div class="col-12 col-xl-2 mxd-grid-item no-margin">
              <div class="mxd-block__name name-inner-headline">
                <p class="mxd-point-subtitle"><i class="ph ph-check-circle" aria-hidden="true"></i><span>Thank you</span></p>
              </div>
            </div>
            <div class="col-12 col-xl-8 mxd-grid-item no-margin">
              <div class="mxd-block__content">
                <div class="mxd-block__inner-headline loading__item">
                  <h1 class="inner-headline__title">Message<br><span class="common3-gradient-text">received.</span></h1>
                  <p class="inner-headline__text t-large t-bright loading__item">Thanks for reaching out to Common3. We’ve received your enquiry and will contact you soon.</p>
                  <p class="t-muted loading__item">Three minds. One common idea. We look forward to hearing more about your project.</p>
                  <div class="mxd-section-title__controls loading__fade">
                    <a class="btn btn-anim btn-default btn-accent slide-right-up" href="{{ route('index2') }}">
                      <span class="btn-caption">Back to Home</span><i class="ph-bold ph-arrow-up-right"></i>
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
