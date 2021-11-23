@extends('frontend.app')

@section('title')
    Home
@endsection
@section('content')
    <section class="banner">
       <div id="logo" class="hidden-xs hidden-md hidden-sm"><img src="https://www.eabl.com/sites/all/themes/eabl/images/logo.png"></div>
      <!---<div class="bannertitleinner os-animation"data-os-animation="fadeInDown" data-os-animation-delay="0"><h1>Our Heritage</div>--->
      <div id="banner">
        <img src="{{ asset('frontend/images/gotskillz-banners/still-got-skillz-banner-02.jpg') }}"/>
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
                     <span class="bgleft"></span><h3>About Contest</h3><span class="bgright"></span>
                  </div>
                  <p class="pfirst">Unleash a million opportunities & make history!</p>
                  <p>Kenya Breweries Limited (KBL)  introduces an exciting challenge for painters, sculptors, wood carvers, sketch artists, fashion designers, graffiti artists and anyone with any artistic skill from Kenya to create their own artistic interpretation of the KBL logo. We are looking for someone who can interpret a logo into something that brings out the greatest things about Kenyan; Culture, Color and People for a chance to win Kshs 1 Million and mentorship with a leading Advertising Agency to bring the Logo to life.
                  </p>
                  <h4>Prizes</h4>
                  <p>With breweries, distilleries, support industries and.</p>
                    <!---figure one--->
                    <figure class="prizes">
                        <div class="pri-col-one">
                          <div class="prizes-one">1ST PLACE:</div>
                            <h6>Kshs, 1,000,000</h6>
                              <p>One Million (KShs. 1,000,000) and an opportunity for a three (3) month mentorship with an agency within Kenya, nominated by KBL. </p>
                        </div>
                    </figure>
                      <!---figure two--->
                    <figure class="prizes">
                        <div class="pri-col-one">
                          <div class="prizes-two">2ND PLACE:</div>
                            <h6>KES 500,000/- Cash Prize</h6>
                          </div>
                    </figure>
                    <!---end figure three--->
                    <figure class="prizes">
                      <div class="pri-col-one">
                        <div class="prizes-three">3RD PLACE:</div>
                          <h6>KES 300,000/- Cash Prize</h6>
                      </div>
                    </figure>
                </div>
<!--main content area -->
            </div>
        </div>
    </article>
@endsection