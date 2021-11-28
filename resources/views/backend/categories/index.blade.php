@extends('backend.app')
    @section('page_title')
        {{ $pageTitle }}
    @endsection
    @section('content')
        @include('backend.partials.flash')
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">

                    <div class="card-header d-flex">
                        <h4 class="card-header-title">{{ $pageTitle}} : {{ $subTitle}}</h4>
                        <div class="toolbar ml-auto">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary pull-right">Add Category</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $c=>$category)
                                            <tr>
                                                <td>{{++$c}}</td>
                                                <td>{{ $category->name }}</td>
                                                
                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">
                                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('admin.categories.delete', $category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex text-muted">
                        <p>Pagination will come here</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection