@extends('user.layouts.index')
@section('title', 'Tên truyện')
@section('content')
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header  m-t-50">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Tên truyện</h4>
                                        <span>Chi tiết truyện</span>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Product detail page start -->
                                <div class="card product-detail-page">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-5 col-xs-12">
                                                <div class="port_details_all_img row">
                                                    <div class="col-lg-12 m-b-15">
                                                        <div id="big_banner">
                                                            <div class="port_big_img">
                                                                <img class="img img-fluid"
                                                                    src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                                    alt="Big_ Details">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                <div class="row">
                                                    <div>
                                                        <div class="col-lg-12">
                                                            <h4 class="pro-desc">Tên truyện
                                                            </h4>
                                                        </div>
                                                        <table class="table table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tên khác</td>
                                                                    <td>Tên truyện khác</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tác giả</td>
                                                                    <td>Tên tác giả</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tình trạng</td>
                                                                    <td>Đang tiến hàng</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Thể loại</td>
                                                                    <td>
                                                                        <a class="" href="">Thể loại
                                                                            1</a> <span>-</span>
                                                                        <a class="" href="">Thể loại
                                                                            2</a><span>-</span>
                                                                        <a class="" href="">Thể loại
                                                                            3</a><span>-</span>
                                                                        <a class="" href="">Thể loại
                                                                            4</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tên truyện</td>
                                                                    <td>
                                                                        <label class="label label-success">3.5 <i
                                                                                class="fa fa-star"></i></label><a
                                                                            class="text-muted f-w-600">14 Ratings
                                                                            &amp; 3
                                                                            Reviews</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>
                                                                        <div
                                                                            class="stars stars-example-css m-t-15 detail-stars col-lg-12">
                                                                            <select id="product-view" class="rating-star"
                                                                                name="rating" autocomplete="off">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-danger waves-effect waves-light m-r-20"><i
                                                                                class="icofont icofont-heart"></i>Lượt theo
                                                                            dõi</button>
                                                                    </td>
                                                                    <td>
                                                                        10 người theo dõi
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-lg-12 col-sm-12 mob-product-btn">
                                                            <button type="button"
                                                                class="btn btn-outline-primary waves-effect waves-light m-r-20"
                                                                data-toggle="tooltip">
                                                                Đọc từ đầu
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-outline-primary waves-effect waves-light"
                                                                data-toggle="tooltip">
                                                                Đọc mới nhất
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product detail page end -->
                            </div>
                        </div>
                        <!-- Nav tabs start-->
                        <div class="card product-detail-page">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description"
                                        role="tab">Mô tả</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item m-b-0">
                                    <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Danh sách
                                        chương</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item m-b-0">
                                    <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#sizeguide" role="tab">Bình
                                        luận</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav tabs start-->

                        <!-- Nav tabs card start-->
                        <div class="card">
                            <div class="card-block">
                                <!-- Tab panes -->
                                <div class="tab-content bg-white">
                                    <div class="tab-pane active" id="description" role="tabpanel">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It
                                            has
                                            survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it.</p>
                                    </div>
                                    <div class="tab-pane" id="review" role="tabpanel">
                                        <table class="table table-responsive-sm table-hover">
                                            <thead>
                                                <th>Số chương</th>
                                                <th>Ngày cập nhật</th>
                                                <th>Lượt xem</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">Chương 10</a></td>
                                                    <td>13:2 20/2/2021</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Chương 10</a></td>
                                                    <td>13:2 20/2/2021</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Chương 10</a></td>
                                                    <td>13:2 20/2/2021</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Chương 10</a></td>
                                                    <td>13:2 20/2/2021</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Chương 10</a></td>
                                                    <td>13:2 20/2/2021</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Chương 10</a></td>
                                                    <td>13:2 20/2/2021</td>
                                                    <td>10</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="sizeguide" role="tabpanel">
                                        <!-- Post comment card start -->
                                        @include("user.components.comment")
                                        <!-- Post comment card end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs card end-->
                    </div>
                    <div class="col-md-4">
                        @include('user.components.ranking')
                        @include('user.components.category')
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
@endsection
