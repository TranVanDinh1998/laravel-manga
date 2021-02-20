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
                                        <h4>Tên thể loại</h4>
                                        <span>Mô tả</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Thể loại</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Tên thể loại</a>
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
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Thể loại 
                                                    </td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>Thể loại 1<option>
                                                            <option>Thể loại 2<option>
                                                            <option>Thể loại 3<option>
                                                            <option>Thể loại 4<option>
                                                            <option>Thể loại 5<option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Tình trạng 
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-outline-info">Đang tiến hành</a>
                                                        <a href="#" class="btn btn-outline-info">Đã hoàn thành</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Sắp xếp theo
                                                    </td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>Ngày cập nhật<option>
                                                            <option>Lượt xem<option>
                                                            <option>Đánh giá<option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Product detail page end -->
                            </div>
                        </div>
                        <!-- Product list start -->
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view text-center">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view text-center">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view text-center">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card prod-view">
                                            <div class="prod-item">
                                                <div class="prod-img">
                                                    <a href="#!" data-toggle="tooltip" data-placement="auto"
                                                        data-html="true" data-trigger="hover" title='                                                <h6>Tên truyện</h6>
                                                <p>Tên thay thế khác</p>
                                                <p>Tình trạng: đang tiến hành</p>
                                                <p>Lượt xem: 10000</p>
                                                <p>Lượt theo dõi: 10000</p>
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                    <a href="#" class="btn btn-sm btn-primary btn-round">Thể loại 1</a>
                                                 </p>
                                                <p>
                                                    Mô tả về truyện
                                                </p> 
                                                 ' class="hvr-shrink">
                                                        <img src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                            class="img-fluid o-hidden" alt="prod1.jpg">
                                                    </a>
                                                    <div class="p-new"><a href=""> New </a></div>
                                                </div>
                                                <div class="prod-info">
                                                    <a href="#!" class="txt-muted">
                                                        <h4>Tên truyện</h4>
                                                    </a>
                                                    <div class="m-b-10">
                                                        <label class="label label-success">3.5 <i
                                                                class="fa fa-star"></i></label><a
                                                            class="text-muted f-w-600">14 Ratings
                                                            &amp; 3
                                                            Reviews</a>
                                                    </div>
                                                    <a href="#">
                                                        Chương 10
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Product list end -->
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
