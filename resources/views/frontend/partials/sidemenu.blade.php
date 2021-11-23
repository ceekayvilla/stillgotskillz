<div class="col-md-2 leftmenus os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0">
      <ul>
         <li class="{{ Route::currentRouteName() == ''|| Route::currentRouteName() =='about' ? 'active' : '' }}">
            <a href="{{ route('about') }}">About Contest</a>
        </li>
         <li class="{{ Route::currentRouteName() =='submission-process' ? 'active' : '' }}">
            <a href="{{ route('submission-process') }}">Submission Process</a>
        </li>
         <li class="{{ Route::currentRouteName() =='terms-conditions' ? 'active' : '' }}">
            <a href="{{ route('terms-conditions') }}">Term & Conditions</a>
         </li>
         <li class="{{ Route::currentRouteName() =='faqs' ? 'active' : '' }}">
            <a href="{{ route('faqs') }}">FAQS</a>
         </li>
      </ul>
  </div>