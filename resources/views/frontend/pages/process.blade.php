@extends('frontend.app')

@section('title')
    Application Process
@endsection
@section('content')
    <section class="banner">
       <div id="logo" class="hidden-xs hidden-md hidden-sm"><img src="https://www.eabl.com/sites/all/themes/eabl/images/logo.png"></div>
      <!---<div class="bannertitleinner os-animation"data-os-animation="fadeInDown" data-os-animation-delay="0"><h1>Our Heritage</div>--->
      <div id="banner">
        <img src="{{ url('frontend/images/gotskillz-banners/still-got-skillz-banner-06.jpg ') }}"/>
    </div>
    </section>
    <article class="article">
        <div class="containercontent">
            <div class="row">
                <!-- breadcrumbs -->
                @include('frontend.partials.breadcrumbs')
                <!-- sidemenu -->
                @include('frontend.partials.sidemenu')
                <!-- sidemenu -->
                <!-- main content area -->
                <div class="col-md-10 os-animation" id="content" data-os-animation="fadeInDown" data-os-animation-delay="0">
                   <!---heading title--->
                  <div class="spanwrapper">
                     <span class="bgleft"></span><h3>Submission Process</h3><span class="bgright"></span>
                  </div>
                  <p class="pfirst">If you are an artist from Kenya between 21 – 25yrs old, follow the easy steps below to submit your entry by …………………………</p>
                  <p>
                    <div class="row">
                      <!---col-one steps-->
                        <div class="col-md-3">
                            <div class="bg-steps">
                                <figure class="step-icon"><img src="{{ url('frontend/images/step-one-icon.png') }}"></figure>
                                  <h2>Step 1:</h2>
                                   <p>Create your interpretation of the KBL Logo</p>
                               </div>
                        </div>
                        <!---col-two steps-->
                        <div class="col-md-3">
                            <div class="bg-steps">
                                <figure class="step-icon"><img src="{{ url('frontend/images/step-two-icon.png') }}"></figure>
                                  <h2>Step 2:</h2>
                                   <p>Log on to eabl.com/stillgotskillz and click on the “Submit entry” button.</p>
                               </div>
                        </div>
                        <!---col-three steps-->
                        <div class="col-md-3">
                            <div class="bg-steps">
                                <figure class="step-icon"><img src="{{ url ('frontend/images/step-three-icon.png') }}"></figure>
                                  <h2>Step 3:</h2>
                                   <p>Submit your entry + a portfolio of your work on the submission form by ………………………………</p>
                               </div>
                        </div>
                         <!---col-four steps-->
                        <div class="col-md-3">
                            <div class="bg-steps">
                                <figure class="step-icon"><img src="{{ url ('frontend/images/step-four-icon.png') }}"></figure>
                                  <h2>Step 4:</h2>
                                   <p>You will receive a confirmation of your entry via email. </p>
                               </div>
                        </div>
                    </div>
                  </p>
                  <div class="steps"><a style="width:auto" href="#" class="btn btn-lg btn-primary" role="button"><span style="color: #fff">Application form coming soon</span></a></div>

                </div>
<!--main content area -->
            </div>
        </div>
    </article>
@endsection