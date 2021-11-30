@extends('backend.app')
    @section('page_title')
        {{ $pageTitle }} 
    @endsection
    @section('content')
        @include('backend.partials.flash')
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">{{-- $pageTitle --}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <h5 class="card-header">{{ $pageTitle }}</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableCustom" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>ID/Passport number</th>
                                    <th>Birthday</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    <th>City/Town</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($participants as $p=>$participant)
                                <tr>
                                    <td>{{ ++$p }}</td>
                                    <td>{{ $participant->full_name }}</td>
                                    <td>{{ $participant->id_number }}</td>
                                    <td>{{-- $participant->birthday --}}</td>
                                    <td>{{ $participant->email_address }}</td>
                                    <td>{{ $participant->phone_number }}</td>
                                    <td>{{ $participant->city }}</td>
                                    <td>{{-- <a href="{{ route('admin.portfolio.download',$participant->id) }}">Download Portfolio</td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
