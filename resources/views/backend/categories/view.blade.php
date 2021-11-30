@extends('backend.app')
    @section('page_title')
        {{ $pageTitle }} 
    @endsection
    @section('content')
        @include('backend.partials.flash')
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="section-block">
                    <h3 class="section-title">
                        {{-- $pageTitle --}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card-columns">
            @foreach($category['logos'] as $l=> $logo)
                
                <div class="card">
                    <img src="{{ asset('storage/'.$logo->path)}}" alt="{{$logo->participant->full_name}}" class="img-fluid thumbnails" alt="{{$logo->participant->full_name}}">

                    <div class="card-body">
                        <h3 class="card-title">
                            Submitted: {{ date_format($logo->created_at,'dS M Y')}}</h5>
                        </h3>
                        <h5>
                        <hr />
                        <h2 class="card-title">Participant Details</h2>
                        <p class="card-text">
                            Name:   {{ $logo->participant->full_name }}<br/>
                            Email:  {{  $logo->participant->email_address }} <br/>
                            Phone:  {{  $logo->participant->phone_number }} <br/>
                            ID Num: {{  $logo->participant->id_number }} <br/>
                            County: {{  $logo->participant->city }} <br/>
                        </p>
                        <hr />
                        <p>
                            <a class="btn btn-primary" download="{{ $logo->participant->full_name.'-'.$logo->participant->phone_number.'-'.$logo->participant->id_number.'-'.$logo->category->name.'-'.$logo->path }}" href="{{asset('storage/'.$logo->path)}}">Download Logo</a>
                        </p>
                    </div>
                </div>
                
            @endforeach
            
                </div>
            </div>
        </div>
    @endsection;