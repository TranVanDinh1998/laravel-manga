@extends('admin.layout')
@section('title', 'Update category')
@section('head')
    <script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="">Category</a></li>
                <li class="active">Update</li>
            </ol>
            <section class="panel">
                <div class="panel-heading">
                    New category
                </div>
                <div class="panel-body">
                    <div class="position-center">
                        <form method='POST' action="{{ route('admin.category.update',['id'=>$category->id]) }}" {{-- action="{{URL::to('administrator/Category/store')}}" --}}
                            enctype='multipart/form-data'>
                            @csrf
                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach
                            @endif
                            @if (session('success'))
                                <p class="alert-success alert">{{ session('success') }}</p>
                            @endif
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}"
                                    placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea id="descript" class="form-control" name="description"
                                    placeholder="Password">{{ $category->description }}</textarea>
                                <script>
                                    CKEDITOR.replace('descript');
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="name">Created at</label>
                                <input type="text" class="form-control" name="created_at"
                                    value="{{ $category->created_at }}" placeholder="created at" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Updated at</label>
                                <input type="text" class="form-control" name="updated_at"
                                    value="{{ $category->updated_at }}" placeholder="updated at" disabled>
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
            </section>
        </section>

        <!-- footer -->
        @include('admin.components.footer')
        <!-- / footer -->
    </section>

    <!--main content end-->
@endsection
