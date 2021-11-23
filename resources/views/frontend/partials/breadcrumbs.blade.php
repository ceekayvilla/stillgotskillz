<div class="col-md-12 os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('about') }}">Still Got Skillz?</a></li>
        <?php $link = "" ?>
        @for($i = 1; $i <= count(Request::segments()); $i++)
            @if($i < count(Request::segments()) & $i > 0)
            <?php $link .= "/" . Request::segment($i); ?>
            <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a> >
            @else 
                <li class="active" aria-current="page">{{ucwords(str_replace('-',' ',Request::segment($i)))}}</li>
            @endif
        @endfor
    </ol>
  </nav>
</div>