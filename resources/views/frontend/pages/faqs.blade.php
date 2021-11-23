@extends('frontend.app')

@section('title')
    FAQs
@endsection
@section('content')
    <section class="banner">
       <div id="logo" class="hidden-xs hidden-md hidden-sm"><img src="https://www.eabl.com/sites/all/themes/eabl/images/logo.png"></div>
      <!---<div class="bannertitleinner os-animation"data-os-animation="fadeInDown" data-os-animation-delay="0"><h1>Our Heritage</div>--->
      <div id="banner">
        <img src="{{ asset('frontend/images/gotskillz-banners/still-got-skillz-banner-04.jpg ') }}"/>
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
                    <button class="accordion">1.    Who is EABL?</button>
                    <div class="panel show" style="">
                      <p>East African Breweries Limited (EABL) is a regional leader in beverage alcohol with an exceptional collection of brands across beer and spirits. Although our business is concentrated on three core markets of Kenya, Uganda and Tanzania, our products are sold in more than 10 countries across Africa and beyond. 
                      Our brands are an outstanding combination of local jewels and international premium spirits. These include among others Tusker, Guinness, Bell Lager, Serengeti Lager, Kenya Cane, Chrome Vodka, Johnnie Walker, Captain Morgan and Smirnoff. Our performance ambition is to be one of the best performing, most trusted and respected consumer products companies in Africa. We are proud of the brands we make and the enjoyment they give to millions. We are passionate about alcohol playing a positive role in society as part of a balanced lifestyle. 
                    </p>
                  </div>

                  <button class="accordion">2.    When was the KBL logo last redesigned?</button>
                  <div class="panel" style="">
                           <p>The last KBL logo was redesigned in ……………………………………………………</p>
                  </div>


                  <button class="accordion">3.  Who is eligible for this competition?</button>
                    <div class="panel">
                      <p>This Competition is open to Kenyan residents between the ages 21 – 25 years. Participation in the Competition is free. Proof of age shall be required during registration, prior to participation and redemption of any prize. (Please refer to T&Cs for more info).
                      </p>  
                    </div>


                  <button class="accordion">4.   How long will the Competition period last?</button>
                  <div class="panel">
                      <p>
                        KBL’s Still Got Skillz?  ? will run from ……………………to……………………………… The top 20 submissions, as picked by a panel of judges from J Walter Thomson/Scangroup, then enter into a Hackathon. The winner from the Hackathon will be awarded with Kshs 1 million, while the 1st and 2nd Runners up will win Kshs 500,000 and Kshs 300,000 respectively. 
                      </p>
                  </div>

                  <button class="accordion">5.   What should inspire the current logo design?</button>
                    <div class="panel">
                      <p>
                      We aim to develop modern, dynamic logo and up-to-date with the contemporary look and feel. Our desire is to ensure that the logo and the creativity around celebrate our rich heritage in Kenya: the diversity in people, colour and culture.
                    </p>
                  </div>

                  <button class="accordion">6.  Why did you involve a group broader than copy designers?</button>
                  <div class="panel">
                       <p> Kenya  has an immensely rich culture evident in variety of music, art and so on, beautifully interwoven in the tapestry that makes extends across the region. Thus, we decided to open the contest to a wider range of designers (sketch and graffiti artists, designers and so on) to capture the imagination of this rich heritage.<p>
                      <p>In addition, this initiative will give young artists an opportunity to learn and apply various skills to hone and monetize their craft through the three-month mentorship programme which will see the winning artist work with a creative agency to bring the new logo to life. 
                      </p>
                  </div>

                  <button class="accordion">7.  Has KBL involved communities in creating corporate and brand look before?</button>
                  <div class="panel" style=""><p>………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………………… </p>
                  </div>

                  <button class="accordion">8.   Will this engagement form part of KBL’s CSR efforts/initiatives?</button>
                  <div class="panel">
                    <p>Because our consumers and community are at the heart of the way we do business, as evidenced by the numerous initiatives KBL has embarked on, we intend to incorporate a range of activities into this competition, giving the design artists in the competition an opportunity to showcase their work. Recognising and appreciating local talent and offering the consumers a platform to showcase and benefit off their talent is at the heart of what we do. </p>
                  </div>

                  <button class="accordion">9.  How does it align with the company’s overall brand strategy?</button>
                  <div class="panel" style="">
                    <p>As we pursue our ambition, to be the best performing, most trusted and respected business in the region, we intend to refresh our corporate brand outlook to embrace the diversity of our people, and culture and ensure that is in the fabric of our creative thinking, in everything we do.</p>
                  </div>

                  <button class="accordion">10. What does KBL see as the future for the arts community and corporate organisations?</button>
                  <div class="panel" style="">
                    <p>
                    We are in the age of collaboration and this is already evident in the manner we are going about crafting our new logo. Corporate organizations depend on artists to tell their stories and to reach their customers and this is what we are doing with this project and intend to continue doing. </p>
                    <p><i>(For more info, please refer to this competition’s <a href="{{route('terms-conditions')}}">Terms & Conditions</a> in on this site)</i></p>
                 </div>



                  </div>
                </div>
<!--main content area -->
            </div>
        </div>
    </article>
@endsection