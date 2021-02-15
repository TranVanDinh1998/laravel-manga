@extends('admin2.layouts.index')
@section('title','Mangas')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Mangas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin2.index') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#!">Mangas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Product list card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Manga List</h5>
                                <a href="{{ route('admin2.manga.recycle') }}"
                                    class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger"> <i
                                        class="icofont icofont-trash m-r-5"></i> Recycle
                                </a>
                                <a href="{{ route('admin2.manga.create') }}"
                                    class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"> <i
                                        class="icofont icofont-plus m-r-5"></i> Create
                                </a>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <div class="table-content">
                                        <div class="project-table">
                                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width:20px;">
                                                            <label class="i-checks m-b-none">
                                                                <input type="checkbox"><i></i>
                                                            </label>
                                                        </th>
                                                        <th>ID</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Created at</th>
                                                        <th>Updated at</th>
                                                        <th>View</th>
                                                        <th>Like</th>
                                                        <th>Dislike</th>
                                                        <th>Verified</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($mangas as $manga)
                                                        <tr>
                                                            <td>
                                                                <label class="i-checks m-b-none">
                                                                    <input type="checkbox" value="{{ $manga->id }}"
                                                                        name="manga_id_list[]"><i></i>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                {{ $manga->id }}
                                                            </td>
                                                            <td class="pro-list-img">
                                                                <img src="{{ asset('storage/images/mangas/' . $manga->image) }}"
                                                                    class="img-fluid" alt="tbl">
                                                            </td>
                                                            <td class="pro-name">
                                                                <h6>{{ $manga->name }}</h6>
                                                            </td>
                                                            <td>
                                                                {{ $manga->created_at }}
                                                            </td>
                                                            <td>
                                                                {{ $manga->updated_at }}
                                                            </td>
                                                            <td>
                                                                {{ $manga->view }}
                                                            </td>
                                                            <td>
                                                                {{ $manga->like }}
                                                            </td>
                                                            <td>
                                                                {{ $manga->dislike }}
                                                            </td>
                                                            <td>
                                                                @if ($manga->verified == 0)
                                                                    <label class="text-danger">Inactive</label>

                                                                @else
                                                                    <label class="text-success">Active</label>

                                                                @endif
                                                            </td>
                                                            <td class="action-icon">
                                                                <a href="{{ route('admin.manga.edit', ['id' => $manga->id]) }}"
                                                                    class="m-r-15 text-muted" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Edit"><i
                                                                        class="icofont icofont-ui-edit"></i></a>
                                                                <a href="{{ route('admin.manga.delete', ['id' => $manga->id]) }}"
                                                                    class="text-muted" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Delete"><i
                                                                        class="icofont icofont-delete-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product list card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
@endsection
