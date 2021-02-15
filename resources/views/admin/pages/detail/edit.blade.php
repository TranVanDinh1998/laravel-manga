@extends('admin.layout')
@section('title', 'Edit detail')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.manga.index') }}">Mangas</a></li>
                <li class="active">{{ $manga->name }}</li>
                <li><a href="{{ route('admin.manga.chapter.index', ['id' => $manga->id]) }}">Chapters</a></li>
                <li class="active">Chapter #{{ $chapter->id }}</li>
                <li><a href="{{ route('admin.manga.chapter.detail.index', ['id' => $manga->id,'chapter_id'=>$chapter->id]) }}">Details</a></li>
                <li class="active">Detail #{{$detail->id}}</li>
            </ol>
            <section class="panel">
                <div class="panel-heading">
                    Detail #{{ $detail->id }}
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
                        <form method='POST'
                            action="{{ route('admin.manga.chapter.detail.update', ['id' => $manga->id,'chapter_id'=>$chapter->id,'detail_id'=>$detail->id]) }}"
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image_selected" name="image"
                                    placeholder="Select image">
                                <p class="help-block">Only accept file .jpg, .png, .gif and < 5MB</p>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-1" for="current_image">Current:</label>
                                                <div class="col-sm-5">
                                                    @if ($detail->image)
                                                        <img src="{{ asset('storage/images/chapters/' . $manga->id.'/'.$chapter->id.'/'.$detail->image) }}"
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
