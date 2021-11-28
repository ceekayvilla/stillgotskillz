@extends('themes.administrator.app')
    @section('page_title')
        {{ $pageTitle }}
    @endsection
    @section('maincontent')
        @include('themes.administrator.partials.flash')
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
                                        <th scope="col">Slug</th>
                                        <th scope="col">Products</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Update Products</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as  $category)
                                        @if($category->id!=1)
                                            <tr>
                                                <td></td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{{ $category->products()->count()}}</td>
                                                <td><a href="{{ route('admin.categories.sub-categories', $category->id) }}">View Second Level</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">
                                                        @if($category->products()->count() > 0)
                                                        <a href="{{ route('admin.products.update-industry', $category->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit">Update industry</i></a>
                                                        @else
                                                         <p>N/A</p>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
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