@extends('manager.layouts.index')
@section('content')
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Thể loại</h4>
                                <span>Danh sách các thể loại truyện</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('manager.category.index') }}">Thể loại</a>
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
                                <h5>Thể loại</h5>
                                <a href="{{ route('manager.category.recycle') }}"
                                    class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger"
                                    data-modal="modal-13"> <i class="icofont icofont-trash m-r-5"></i> Thùng rác
                                </a>
                                <a href="{{ route('manager.category.create') }}"
                                    class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                                    data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Thêm mới
                                </a>

                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <div class="table-content">
                                        <div class="project-table">
                                            @if (session('success'))
                                                <div id="success_msg" class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                            @if (session('error'))
                                                <div id="error_msg" class="alert alert-danger">
                                                    {!! session('error') !!}
                                                </div>
                                            @endif
                                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width:20px;">
                                                            <label class="i-checks m-b-none">
                                                                <input type="checkbox"><i></i>
                                                            </label>
                                                        </th>
                                                        <th>ID</th>
                                                        <th>Tên thể loại</th>
                                                        <th>Mô tả</th>
                                                        <th>Ngày khởi tạo</th>
                                                        <th>Hoạt động</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td>
                                                                <label class="i-checks m-b-none">
                                                                    <input type="checkbox" value="{{ $category->id }}"
                                                                        name="category_id_list[]"><i></i>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                {{ $category->id }}
                                                            </td>
                                                            <td class="pro-name">
                                                                {{ $category->name }}
                                                            </td>
                                                            <td>
                                                                {!! $category->description !!}
                                                            </td>
                                                            <td>
                                                                {{$category->created_at}}
                                                            </td>
                                                            <td>
                                                                @if ($category->verified == 0)
                                                                    <label class="alert alert-danger">Không</label>
                                                                @else
                                                                    <label class="alert alert-success">Có</label>
                                                                @endif
                                                            </td>
                                                            <td class="action-icon">
                                                                @if ($category->verified == 0)
                                                                    <a href="{{ route('manager.category.verify', ['id' => $category->id, 'verified' => 1]) }}"
                                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Activate"><i
                                                                            class="icofont icofont-ui-check"></i></a>
                                                                @else
                                                                    <a href="{{ route('manager.category.verify', ['id' => $category->id, 'verified' => 0]) }}"
                                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Deactivate"><i
                                                                            class="icofont icofont-ui-close"></i></a>
                                                                @endif
                                                                <a href="{{ route('manager.category.edit', ['id' => $category->id]) }}"
                                                                    class="m-r-15 text-muted" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Edit"><i
                                                                        class="icofont icofont-ui-edit"></i></a>
                                                                <a href="{{ route('manager.category.delete', ['id' => $category->id]) }}"
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

@endsection
