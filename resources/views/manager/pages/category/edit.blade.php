@extends('manager.layouts.index')
@section('head')
    <script src="{{ url('admin2/ckeditor/ckeditor.js') }}"></script>
@endsection
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
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('manager.category.index') }}">Thể loại</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">{{ $category->name }}</a>
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
                        <!-- Product edit card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Cập nhật thể loại</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="product-edit">
                                            <ul class="nav nav-tabs nav-justified md-tabs " role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home7" role="tab">
                                                        <div class="f-20">
                                                            <i class="icofont icofont-edit"></i>
                                                        </div>
                                                        Chỉnh sửa thể loại
                                                    </a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#messages7" role="tab">
                                                        <div class="f-20">
                                                            <i class="icofont icofont-ui-image"></i>
                                                        </div>
                                                        Truyện tranh liên quan
                                                    </a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home7" role="tabpanel">
                                                    <form class="md-float-material card-block" method="POST"
                                                        enctype="multipart/form-data"
                                                        action="{{ route('manager.category.update', ['id' => $category->id]) }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="name">Tên</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        value="{{ $category->name }}" placeholder="tên">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="name">Ngày tạo</label>
                                                                    <input type="text" class="form-control"
                                                                        name="created_at"
                                                                        value="{{ $category->created_at }}"
                                                                        placeholder="created at" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="name">Ngày cập nhật</label>
                                                                    <input type="text" class="form-control"
                                                                        name="updated_at"
                                                                        value="{{ $category->updated_at }}"
                                                                        placeholder="updated at" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="verified"
                                                                        class="form-control form-control-primary">
                                                                        <option value="1" @if ($category->verified == 1) selected @endif>Đang hoạt
                                                                            động</option>
                                                                        <option value="0" @if ($category->verified == 0) selected @endif>Ngừng
                                                                            hoạt động</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i
                                                                            class="icofont icofont-align-center"></i></span>
                                                                    <textarea id="descript" class="form-control"
                                                                        name="description" placeholder="Mô tả">
                                                                                        {{ $category->description }}
                                                                                                </textarea>
                                                                    <script>
                                                                        CKEDITOR.replace('descript');

                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                @if (count($errors) > 0)
                                                                    @foreach ($errors->all() as $error)
                                                                        <p class="alert alert-danger">{{ $error }}
                                                                        </p>
                                                                    @endforeach
                                                                @endif
                                                                @if (session('success'))
                                                                    <p class="alert-success alert">
                                                                        {{ session('success') }}
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="text-center m-t-20">
                                                                    <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                                    </button>
                                                                    <button type="cancel"
                                                                        class="btn btn-warning waves-effect waves-light">Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="messages7" role="tabpanel">
                                                    <div class="md-float-material card-block">
                                                        @foreach ($category->mangaCategories as $mangaCategory)
                                                        <div class="row p-t-10 p-b-10">
                                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                                <a href="">
                                                                    <img src="{{ asset('/storage/images/mangas/' . $mangaCategory->manga->image) }}"
                                                                        class="img-fluid width-100 m-b-20" alt="{{$mangaCategory->manga->name}}">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-9 col-md-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-all-caps"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label Name" value="{{$mangaCategory->manga->name}}" disabled>
                                                                        </div>
                                                                        <div class="col-xs-6 edit-right text-right">
                                                                            <a href=""
                                                                                class="btn btn-danger waves-effect waves-light">Remove
                                                                                <i
                                                                                    class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product edit card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
@endsection
