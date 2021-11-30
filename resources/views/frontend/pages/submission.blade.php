@extends('frontend.app')

@section('title')
    Submission Form
@endsection
@section('content')
    <section class="banner">
    <div id="logo" class="hidden-xs hidden-md hidden-sm">
        <img src="https://www.eabl.com/sites/all/themes/eabl/images/logo.png">
    </div>
 
    <div id="banner">
        <img src="{{ asset('frontend/images/gotskillz-banners/still-got-skillz-banner-06.jpg') }}">
    </div>
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
                    <div class="spanwrapper">
                        <span class="bgleft"></span>
                        <h3>Submission Form</h3>
                        <span class="bgright"></span>
                    </div>
                    <!-- form -->
                    @include('backend.partials.flash')
                    <form class="submit-form" method="POST" action="{{ route('submit-logo') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name:" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="dob" class="form-control @error('dob') is_invalid @enderror" id="dob" placeholder="Birthday:">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="id_number" id="id_number" class="form-control @error('id_number') is-invalid @enderror"  placeholder="ID/Passport Number:" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email_address') is-invalid @enderror" id="email_address" name="email_address" placeholder="E-mail Address:">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control @error('phone_number') is_invalid @enderror" id="phone_number" placeholder="Phone Number:">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="County:">
                                </div>

                            </div>
                            <div class="col-md-6">
                               
                                <div class="form-group">
                                    <select class="form-control" required name="category_id" id="category_id">
                                        <option selected>Type of Art</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="is-invalid">
                                        @error('category') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group upload-content">
                                       <label class="custom-file-upload">Upload Logo
                                            <input name="logo" id="logo2" type="file" class="form-control-file" required />
                                        </label>
                                        <p class="user-desc">Logo: Only .jpg .png or .pdf file, required</p>
                                        <span id="logoExt" class="error"></span>
                                        <span id="logoSelected" class="success"></span>

                                        <div class="is-invalid">
                                        @error('logo') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 <div class="form-group">
                                        <label for="portfolio" class="custom-file-upload">Upload Portfolio Images
                                            <input type="file" class="form-control-file" id="portfolio" name="portfolio[]" multiple />
                                        </label>
                                        <p class="user-desc">Portfolio: Only .jpg .png or .pdf file, required. <br/>Max 5 images</p>
                    
                                         <span id="portfolioExt" class="error"></span>
                                         <span id="portfolioImageSizeLimit" class="error"></span>
                                         <span id="portfolioSelected" class="success"></span>
                                        <div class="is-invalid">
                                        @error('portfolio') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 <div class="form-group upload-content">
                                    <p>(Upload Portolio/Recent Works:Max 5 images) Confirm that you have read and agreed to the</p>
                                    <div class="form-check">
                                        <u style="padding-right:5px;">Term and conditions</u>
                                        <input required class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </div>
                                    <div class="form-check">
                                        <u style="padding-right:5px;">I agree to give KBL consent to store my data</u>
                                        <input required class="form-check-input position-static" type="checkbox" id="blankCheckbox2" value="option1" aria-label="...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="createNewEntry" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </div>
                <!-- main content area -->
            </div>
        </div>
    </article>
</section>
@endsection
<style type="text/css">
    input[type="file"]{
        /*border: 1px solid #A0A71D;
        display: inline-block;
        cursor: pointer;
        background-color: #A0A71D;
        color: #FFF;
        padding: 15px 40px;
        border-radius: 3px;
        float: right;
        margin-bottom: 15px;
        font-family: PlayfairDisplay-Bold;
        font-size: 18px;
        width: 100%;
        text-align: center;*/
    }
</style>