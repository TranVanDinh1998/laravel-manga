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
                                <h4>Truyện tranh</h4>
                                <span>Danh sách các truyện tranh</span>
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
                                <li class="breadcrumb-item"><a href="{{ route('manager.manga.index') }}">Truyện tranh</a>
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
                                <h5>Truyện tranh</h5>
                                <a href="{{ route('manager.manga.recycle') }}"
                                    class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger"
                                    data-modal="modal-13"> <i class="icofont icofont-trash m-r-5"></i> Thùng rác
                                </a>
                                <a href="{{ route('manager.manga.create') }}"
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
                                                        <th>Hình ảnh</th>
                                                        <th>Tên Truyện tranh</th>
                                                        <th>Ngày khởi tạo</th>
                                                        <th>Lượt xem</th>
                                                        <th>Lượt like</th>
                                                        <th>Lượt dislike</th>
                                                        <th>Hoạt động</th>
                                                        <th>Thao tác</th>
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
                                                            <td>
                                                                <img width="200px;" height="auto"
                                                                    src="{{ asset('/storage/images/mangas/' . $manga->image) }}">
                                                            </td>
                                                            <td class="pro-name">
                                                                {{ $manga->name }}
                                                            </td>
                                                            <td>
                                                                {{ $manga->created_at }}
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
                                                                    <label class="alert alert-danger">Không</label>
                                                                @else
                                                                    <label class="alert alert-success">Có</label>
                                                                @endif
                                                            </td>
                                                            <td class="action-icon">
                                                                @if ($manga->verified == 0)
                                                                    <a href="{{ route('manager.manga.verify', ['id' => $manga->id, 'verified' => 1]) }}"
                                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Activate"><i
                                                                            class="icofont icofont-ui-check"></i></a>
                                                                @else
                                                                    <a href="{{ route('manager.manga.verify', ['id' => $manga->id, 'verified' => 0]) }}"
                                                                        class="m-r-15 text-muted" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Deactivate"><i
                                                                            class="icofont icofont-ui-close"></i></a>
                                                                @endif
                                                                <a href="{{ route('manager.manga.edit', ['id' => $manga->id]) }}"
                                                                    class="m-r-15 text-muted" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Edit"><i
                                                                        class="icofont icofont-ui-edit"></i></a>
                                                                <a href="{{ route('manager.manga.delete', ['id' => $manga->id]) }}"
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
