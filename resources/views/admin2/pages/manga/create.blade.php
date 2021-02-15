@extends('admin2.layouts.index')
@section('title', 'Mangas')
@section('head')
    <script src="{{ url('admin2/ckeditor/ckeditor.js') }}"></script>
@endsection
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
                                <li class="breadcrumb-item"><a href="{{ route('admin2.manga.index') }}">Mangas</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#!">Create</a>
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
                                <h5>Create a new manga</h5>
                            </div>
                            <div class="card-block">
                                @if (session('success'))
                                    <p class="alert-success alert">{{ session('success') }}</p>
                                @endif
                                @if (session('error'))
                                    <p class="alert-danger alert">{{ session('error') }}</p>
                                @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ol>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                @endif
                                <form method='POST' id="add_manga_form" action="{{ route('admin2.manga.store') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                            placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Alternative name</label>
                                        <input type="text" class="form-control" name="alter_name"
                                            value="{{ old('alter_name') }}" placeholder="alter-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        {{-- <input type="file" class="form-control" id="image_selected" name="image"
                                            value="{{ old('image') }}" placeholder="Select image">
                                        <p class="help-block">Only accept file .jpg, .png, .gif and < 5MB</p>
                                                <img id="image_tag" width="200px" height="auto;" class="img-responsive"
                                                    src=""> --}}
                                        {{-- <input type="file" name="image" id="filer_input1"> --}}
                                        <input type="file" name="image" id="filer_input">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea id="descript" class="form-control" name="description"
                                            placeholder="Password">{{ old('description') }}</textarea>
                                        <script>
                                            CKEDITOR.replace('descript');

                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Author</label>
                                        <input type="text" class="form-control" value="{{ old('author') }}" name="author"
                                            placeholder="author">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Status:</label>
                                        <select class="form-control" name="status">
                                            <option value="0" selected>Ongoing</option>
                                            <option value="1">Complete</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 col-sm-hidden"></div>
                                        <div class="col-sm-10">
                                            <button type="submit" id="btnRegister" name="btn_add"
                                                class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
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
