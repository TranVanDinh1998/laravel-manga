@extends('admin.layout')
@section('title', 'Add new manga')
@section('head')
    <script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="">Mangas</a></li>
                <li class="active">Add</li>
            </ol>
            <section class="panel">
                <div class="panel-heading">
                    New manga
                </div>
                <div class="panel-body">
                    <div class="position-center">
                        <form method='POST' id="add_manga_form" action="{{ route('admin.manga.store') }}"
                            enctype='multipart/form-data'>
                            @csrf
                            <div id="errorMessage"></div>
                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach
                            @endif
                            @if (session('success'))
                                <p class="alert-success alert">{{ session('success') }}</p>
                            @endif
                            @if (session('error'))
                                <p class="alert-danger alert">{{ session('error') }}</p>
                            @endif
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Alternative name</label>
                                <input type="text" class="form-control" name="alter_name" value="{{ old('alter_name') }}"
                                    placeholder="alter-name">
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image_selected" name="image"
                                    value="{{ old('image') }}" placeholder="Select image">
                                <p class="help-block">Only accept file .jpg, .png, .gif and < 5MB</p>
                                        <img id="image_tag" width="200px" height="auto;" class="img-responsive" src="">
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
            // $('#add_manga_form').on('submit', (function(e) {
            //     for (instance in CKEDITOR.instances) {
            //         CKEDITOR.instances[instance].updateElement();
            //     }
            //     e.preventDefault();
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //     $.ajax({
            //         url: "{{ route('admin.manga.store') }}",
            //         type: 'POST',
            //         data: new FormData(this),
            //         contentType: false,
            //         cache: false,
            //         processData: false,
            //         dataType: 'JSON',
            //         beforeSend: function() {},
            //         success: function(response) {
            //             console.log(response);
            //             if (response.error == true) {

            //             } else {
            //                 alert("Added a new manga.");
            //             }
            //         },
            //         error: function(e) {
            //             console.log("Error connection.");
            //             console.log(e);
            //         }

            //     });
            // }));
        });

    </script>
@endsection
