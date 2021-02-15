@extends('admin.layout')
@section('title', 'Add new detail')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.manga.index') }}">Mangas</a></li>
                <li class="active">{{ $manga->name }}</li>
                <li><a href="{{ route('admin.manga.chapter.index', ['id' => $manga->id]) }}">Chapters</a></li>
                <li class="active">Chapter #{{ $chapter->id }}</li>
                <li><a href="{{route('admin.manga.chapter.detail.index',['id'=>$manga->id,'chapter_id'=>$chapter->id])}}">Details</a></li>
                <li class="active">Create</li>
            </ol>
            <section class="panel">
                <div class="panel-heading">
                    New detail
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
                        <form method='POST' action="{{ route('admin.manga.chapter.detail.store',['id'=>$manga->id,'chapter_id'=>$chapter->id]) }}"
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image_selected" name="images[]"
                                    value="{{ old('image') }}" placeholder="Select image" multiple>
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
