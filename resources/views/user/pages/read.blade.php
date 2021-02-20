@extends('user.layouts.index')
@section('title', 'Tên truyện')
@section('content')
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header  m-t-50">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Tên truyện</h4>
                                <span>Chương 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Tên truyện</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Chương 1</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page body start -->
            <div class="page-body">
                <div class="card">
                    <div class="card-block">
                        <div class="card-header">
                            <div class="col-lg-12 m-10">
                                <span class="txt-muted d-inline-block pro-desc">
                                    <h4>Tên truyện chương 1</h4>
                                </span>
                                <span class="f-right">(Cập nhật lúc: 09:44 18/02/2021) </span>
                            </div>
                            <div class="col-lg-12 text-center">
                                <p class="alert alert-info">Sử dụng mũi tên trái (←) hoặc phải (→) để chuyển chương</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="col text-center">
                                    <button class="btn btn-info"><i class="icofont icofont-arrow-left"></i>Chương
                                        trước</button>
                                    <button class="btn btn-info"><i class="icofont icofont-arrow-right"></i>Chương
                                        sau</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <div class="row">
                                    <div class="mx-auto d-block">
                                        <a href="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                            data-lightbox="example-set">
                                            <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                class="img-fluid m-b-10" alt="">
                                        </a>
                                    </div>
                                    <div class="mx-auto d-block">
                                        <a href="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                            data-lightbox="example-set">
                                            <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                class="img-fluid m-b-10" alt="">
                                        </a>
                                    </div>
                                    <div class="mx-auto d-block">
                                        <a href="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                            data-lightbox="example-set">
                                            <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                class="img-fluid m-b-10" alt="">
                                        </a>
                                    </div>
                                    <div class="mx-auto d-block">
                                        <a href="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                            data-lightbox="example-set">
                                            <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                class="img-fluid m-b-10" alt="">
                                        </a>
                                    </div>
                                    <div class="mx-auto d-block">
                                        <a href="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                            data-lightbox="example-set">
                                            <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                class="img-fluid m-b-10" alt="">
                                        </a>
                                    </div>
                                    <div class="mx-auto d-block">
                                        <a href="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                            data-lightbox="example-set">
                                            <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                class="img-fluid m-b-10" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- Post comment card start -->
                            @include('user.components.comment')
                            <!-- Post comment card end -->
                            @include('user.components.footer_menu')
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page body end -->
    </div>
    <!-- Main-body end -->
@endsection
