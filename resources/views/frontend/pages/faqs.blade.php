@extends('frontend.app')

@section('title')
    FAQs
@endsection
@section('content')
    <section class="banner">
       <div id="logo" class="hidden-xs hidden-md hidden-sm"><img src="https://www.eabl.com/sites/all/themes/eabl/images/logo.png"></div>
      <!---<div class="bannertitleinner os-animation"data-os-animation="fadeInDown" data-os-animation-delay="0"><h1>Our Heritage</div>--->
      <div id="banner">
        <img src="{{ asset('public/frontend/images/gotskillz-banners/still-got-skillz-banner-04.jpg ') }}"/>
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
                     <span class="bgleft"></span><h3>FAQS</h3><span class="bgright"></span>
                  </div>
                  <div class="row col-md-12" id="accordion">
                    <button class="accordion">1.  Who is Kenya Breweries Limited?</button>
                    <div class="panel show" style="">
                      <p>Kenya Breweries Limited (KBL) Kenya’s biggest manufacturer and leading alcoholic beverages in Kenya. KBL was established in 1922 and is headquartered in Ruaraka, Nairobi.</p>
                  </div>

                  <button class="accordion">2. Who is eligible for this competition and ow long will the competition period last?</button>
                  <div class="panel" style="">
                       <p>The competition is open to Kenyans between the ages of 21 and 25 years. The competition begins on November 26, 2021, and will close at midnight on December 10, 2021. No entries will be received after midnight on December 10, 2021. </p>
                  </div>


                  <button class="accordion">3.  What should inspire the logo design? </button>
                    <div class="panel">
                      <p>KBL has been around for the last 99 years and as the company celebrates its centenary year in 2022, we are looking for a vibrant logo design that will represent the hopes and aspirations into the next century.
                      </p>  
                    </div>


                  <button class="accordion">4.  Why did you involve a group broader than copy designers?</button>
                  <div class="panel">
                      <p>
                        We want to involve Kenya’s young artists/designers in develop in the next generation KBL logo. Our 2019 EABL logo development was inspired and developed by young designers. In the process helped build design careers, for individuals like Elvis Otieno, and this is one of our long-standing ambitions. KBL has been supporting the youth over the years, mainly through sports, arts and music, and this competition is an extension of that work.  
                      </p>
                  </div>

                  <button class="accordion">5.  Is there a fee to be paid?</button>
                    <div class="panel">
                      <p>
                     The competition is free and participants are not required to buy anything or pay anybody to participate.
                    </p>
                  </div>

                  <button class="accordion">6.  What are the awards for the top designers?</button>
                  <div class="panel">
                       <p> The winning logo design will win Kshs 1 million. The first and second runners up will win Kshs 500,000 and Kshs 250,000 respectively.</p>
                  </div>

                  <button class="accordion">7.  Can a group participate in the competition or is it only individuals? </button>
                  <div class="panel" style=""><p>An applicant can participate as an individual or with a group with a maximum of four people.</p>
                  </div>

                  <button class="accordion">8. Is the competition limited to a certain type of artist?</button>
                  <div class="panel">
                    <p>The competition is open to artists of all types – painters, sculptors, wood carvers, sketch artists, fashion designers, graffiti artists and anyone with any artistic skill.</p>
                  </div>

                  <button class="accordion">9.  Has KBL involved communities in creating corporate and brand looks before? </button>
                  <div class="panel" style="">
                    <p>Yes. KBL corporate and product brands are constantly working with members of communities and Kenyans in developing their look. </p>
                  </div>

                  <button class="accordion">10. Will this engagement form part of KBL’s CSR efforts/initiatives? </button>
                  <div class="panel" style="">
                    <p>
                    Our customers, consumers and community are at the heart of our business, as evidenced by KBL initiatives across Kenya. We want to further that by not only rewarding the winners but also honing the skills of top 20 designers through a hackathon where they will learn from experienced designers, art directors and creative directors. Recognising and appreciating local talent is important to us.</p>
                    <p><i>(For more info, please refer to this competition’s <a href="{{route('terms-conditions')}}">Terms & Conditions</a> in on this site)</i></p>
                 </div>



                  </div>
                </div>
<!--main content area -->
            </div>
        </div>
    </article>
@endsection