@extends('admin.layout')
@section('title', 'Edit manga')
@section('head')
    <script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.manga.index') }}">Mangas</a></li>
                <li class="active">{{ $manga->name }}</li>
            </ol>
            <section class="panel">
                <div class="panel-heading">
                    {{ $manga->name }}
                </div>
                <div class="panel-body">
                    <div class="position-center">
                        @if (session('success'))
                            <p class="alert-success alert">{{ session('success') }}</p>
                        @endif
                        @if (session('error'))
                            <p class="alert-danger alert">{{ session('error') }}</p>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method='POST' id="add_manga_form"
                            action="{{ route('admin.manga.update', ['id' => $manga->id]) }}"
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $manga->name }}"
                                    placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Alternative name</label>
                                <input type="text" class="form-control" name="alter_name" value="{{ $manga->alter_name }}"
                                    placeholder="alter-name">
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image_selected" name="image"
                                    placeholder="Select image">
                                <p class="help-block">Only accept file .jpg, .png, .gif and < 5MB</p>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-1" for="current_image">Current:</label>
                                                <div class="col-sm-5">
                                                    @if ($manga->image)
                                                        <img src="{{ asset('storage/images/mangas/' . $manga->image) }}"
                                                            style="width: 250px;height:auto;">
                                                    @endif
                                                </div>
                                                <label class="control-label col-sm-1" for="current_image">New:</label>
                                                <div class="col-sm-5">
                                                    <img id="image_tag" width="250px;" height="auto;" alt="new image"
                                                        class="img-responsive" src="">
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea id="descript" class="form-control" name="description"
                                    placeholder="Password">{{ $manga->description }}</textarea>
                                <script>
                                    CKEDITOR.replace('descript');

                                </script>
                            </div>
                            <div class="form-group">
                                <label for="name">Author</label>
                                <input type="text" class="form-control" value="{{ $manga->author }}" name="author"
                                    placeholder="author">
                            </div>
                            <div class="form-group">
                                <label for="name">Like</label>
                                <input type="number" class="form-control" value="{{ $manga->like }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Follow</label>
                                <input type="number" class="form-control" value="{{ $manga->follow }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">View</label>
                                <input type="number" class="form-control" value="{{ $manga->view }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Status:</label>
                                <select class="form-control" name="status">
                                    <option value="0" @if ($manga->status == 0) selected @endif>Ongoing</option>
                                    <option value="1" @if ($manga->status == 1) selected @endif>Complete</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Created at</label>
                                <input type="text" class="form-control" name="created_at"
                                    value="{{ $manga->created_at }}" placeholder="created at" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Updated at</label>
                                <input type="text" class="form-control" name="updated_at"
                                    value="{{ $manga->updated_at }}" placeholder="updated at" disabled>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Verified:</label>
                                <select class="form-control" name="verified">
                                    <option value="0" @if ($manga->verified == 0) selected @endif>No</option>
                                    <option value="1" @if ($manga->verified == 1) selected @endif>Yes</option>
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
            </section>
        </section>

        <!-- footer -->
        @include('admin.components.footer')
        <!-- / footer -->
    </section>

    <!--main content end-->
    <script>
        $(document).ready(function() {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#image_tag').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image_selected").change(function() {
                readURL(this);
            });
        });

    </script>
@endsection
