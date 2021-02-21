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
                                <h4>Truyện tranh</h4>
                                <span>Danh sách các truyện tranh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('manager.manga.index') }}">truyện tranh</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Tạo mới</a>
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
                        <!-- Post comment card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Tạo truyện tranh mới</h5>
                                <span>Nhập vào các thông tin liên quan</span>
                            </div>
                            <div class="card-block">
                                <div class="j-wrapper j-wrapper-640">
                                    <form method="post" class="j-pro" action="{{ route('manager.manga.store') }}"
                                        enctype='multipart/form-data'>
                                        @csrf
                                        <div class="j-content">
                                            <!-- start name -->
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Tên</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ old('name') }}" placeholder="tên">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end name -->
                                            <!-- start name -->
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Tên khác</label>
                                                        <input type="text" class="form-control" name="alter_name"
                                                            value="{{ old('alter_name') }}" placeholder="tên khác">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end name -->
                                            <!-- start message -->
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Mô tả</label>
                                                        <textarea id="descript" class="form-control" name="description"
                                                            placeholder="Password">{{ old('description') }}</textarea>
                                                        <script>
                                                            CKEDITOR.replace('descript');

                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end message -->
                                            <!-- start name -->
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Hình ảnh</label>
                                                        <input type="file" class="form-control" name="image"
                                                            value="{{ old('image') }}" placeholder="tên">
                                                        {{-- <input type="file" name="image" id="filer_input"> --}}
                                                        {{-- <input type="file" name="image" id="filer_input1"> --}}

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end name -->
                                            <!-- start name -->
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Tác giả</label>
                                                        <input type="text" class="form-control" name="author"
                                                            value="{{ old('author') }}" placeholder="tên tác giả">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end name -->
                                            <!-- start name -->
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Trạng thái</label>
                                                        <select name="status" class="form-control form-control-primary">
                                                            <option value="0">Đang tiến hành
                                                            </option>
                                                            <option value="1">Hoàn thành</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="j-unit">
                                                <div class="j-input">
                                                    <div class="form-group">
                                                        <label class="j-label m-b-10">Thể loại</label>
                                                        <select class="js-example-basic-multiple form-control" name="categories[]"
                                                        multiple>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end name -->
                                            <!-- start response from server -->
                                            <!--message-->
                                            <div class="j-unit">
                                                @if (count($errors) > 0)
                                                    @foreach ($errors->all() as $error)
                                                        <p class="alert alert-danger">{{ $error }}</p>
                                                    @endforeach
                                                @endif
                                                @if (session('success'))
                                                    <p class="alert-success alert">{{ session('success') }}</p>
                                                @endif
                                            </div>
                                            <!-- end response from server -->
                                        </div>
                                        <!-- end /.content -->
                                        <div class="j-footer">
                                            <button type="submit" class="btn btn-primary">Lưu</button>
                                        </div>
                                        <!-- end /.footer -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Post comment card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
@endsection
