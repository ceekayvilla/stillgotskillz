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
                        {{ $pageTitle}}
                    </h3>

                </div>

                <div class="card">
                    <h5 class="card-header">{{ $subTitle}}</h5>
                    
                    <form action="{{ route('admin.categories.update') }}" method="POST" role="form" enctype="multipart/form-data">
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name <span class="m-l-5 text-danger"> *</span></label>
                                <input
                                    class="form-control @error('name') is-invalid @enderror" 
                                    type="text" 
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $category->name) }}"
                                    placeholder="Name"/>
                                     <input type="hidden" name="id" value="{{ $category->id }}">
                                    @error('name') {{ $message }} @enderror
                            </div>


                        </div>
                        <div class="card-footer p-0 text-center d-flex justify-content-center">
                            <div class="card-footer-item card-footer-item-bordered pull-right">
                                <button class="btn btn-success " type="submit">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                    Update Category &nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                            <div class="card-footer-item card-footer-item-bordered pull-right">
                                <a class="btn btn-secondary"
                                   href="{{ route('admin.categories.index') }}">
                                    <i class="fa fa-fw fa-lg fa-times-circle"></i>
                                    Cancel
                                </a>
                            </div>
                                
                            </div>
                    </form>
                    
                </div>
            </div>
        </div>
    @endsection