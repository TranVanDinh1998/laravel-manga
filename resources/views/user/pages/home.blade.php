@extends('user.layouts.index')
@section('title', 'Home')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header m-t-50">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Truyện đề cử</h4>
                                <span>Những truyện tranh xếp hạng cao nhất</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page body start -->
            <div class="page-body">
                <!-- Product list start -->
                <div class="card">
                    <div class="card-block">
                        <div class="card-body">
                            <div id="slider">
                                <div class="row">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid">
                                                <figure class="effect-ming">
                                                    <img class="img-fluid rounded"
                                                        src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                        alt="img09">
                                                    <figcaption>
                                                        <h2>Truyện 1</h2>
                                                        <p>Chương 1 - <span>1 phút trước</span>
                                                        </p>
                                                        <a href="#"></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="grid">
                                                <figure class="effect-ming">
                                                    <img class="img-fluid rounded"
                                                        src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                        alt="img09">
                                                    <figcaption>
                                                        <h2>Truyện 1</h2>
                                                        <p>Chương 1 - <span>1 phút trước</span>
                                                        </p>
                                                        <a href="#"></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="grid">
                                                <figure class="effect-ming">
                                                    <img class="img-fluid rounded"
                                                        src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                        alt="img09">
                                                    <figcaption>
                                                        <h2>Truyện 1</h2>
                                                        <p>Chương 1 - <span>1 phút trước</span>
                                                        </p>
                                                        <a href="#"></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="grid">
                                                <figure class="effect-ming">
                                                    <img class="img-fluid rounded"
                                                        src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                        alt="img09">
                                                    <figcaption>
                                                        <h2>Truyện 1</h2>
                                                        <p>Chương 1 - <span>1 phút trước</span>
                                                        </p>
                                                        <a href="#"></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="grid">
                                                <figure class="effect-ming">
                                                    <img class="img-fluid rounded"
                                                        src="{{ url('admin2/files/assets/images/image-placeholder.jpg') }}"
                                                        alt="img09">
                                                    <figcaption>
                                                        <h2>Truyện 1</h2>
                                                        <p>Chương 1 - <span>1 phút trước</span>
                                                        </p>
                                                        <a href="#"></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        {{-- <div class="item">
                                        <div class="grid">
                                            <figure class="effect-ming">
                                                <img src="{{ url('admin2/files/assets/images/light-box/l1.jpg') }}"
                                                    alt="img09">
                                                <figcaption>
                                                    <h2>Funny <span>Ming</span></h2>
                                                    <p>Ming sits in the corner the whole
                                                        day. She's into crochet.</p>
                                                    <a href="#">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="grid">
                                            <figure class="effect-ming">
                                                <img src="{{ url('admin2/files/assets/images/light-box/l1.jpg') }}"
                                                    alt="img09">
                                                <figcaption>
                                                    <h2>Funny <span>Ming</span></h2>
                                                    <p>Ming sits in the corner the whole
                                                        day. She's into crochet.</p>
                                                    <a href="#">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="grid">
                                            <figure class="effect-ming">
                                                <img src="{{ url('admin2/files/assets/images/light-box/l1.jpg') }}"
                                                    alt="img09">
                                                <figcaption>
                                                    <h2>Funny <span>Ming</span></h2>
                                                    <p>Ming sits in the corner the whole
                                                        day. She's into crochet.</p>
                                                    <a href="#">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="grid">
                                            <figure class="effect-ming">
                                                <img src="{{ url('admin2/files/assets/images/light-box/l1.jpg') }}"
                                                    alt="img09">
                                                <figcaption>
                                                    <h2>Funny <span>Ming</span></h2>
                                                    <p>Ming sits in the corner the whole
                                                        day. She's into crochet.</p>
                                                    <a href="#">View more</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product list end -->
            </div>
            <!-- Page body end -->
        </div>
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Truyện mới cập nhật</h4>
                                        <span>Những truyện tranh mới nhất</span>
                                    </div>
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
                    <div class="col-8">
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
                    <div class="col-4">
                        @include('user.components.ranking')
                        @include('user.components.category')
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
@endsection
