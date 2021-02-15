@extends('admin.layout')
@section('title', 'Chapters')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.manga.index') }}">Mangas</a></li>
                <li class="active">{{$manga->name}}</li>
                <li class="active">Chapters</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $manga->name }} - Chapters
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <span class="btn-group">
                            <a href="{{ route('admin.manga.chapter.index', ['id' => $manga->id]) }}"
                                class="btn btn-sm btn-default"><i class="fa fa-refresh"></i> Refresh</a>
                            <a href="{{ route('admin.manga.chapter.create', ['id' => $manga->id]) }}"
                                class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add</a>
                            <a href="{{ route('admin.manga.chapter.recycle', ['id' => $manga->id]) }}"
                                class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Recycle</a>
                        </span>
                    </div>
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-5">
                    </div>
                </div>
                <form method="GET" action="" enctype="multipart/form-data">
                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <select id="bulk_action" name="bulk_action" class="input-sm form-control w-sm inline v-middle">
                                <option>Bulk action</option>
                                <option value="0">Deactivate</option>
                                <option value="1">Activate</option>
                                <option value="2">Remove</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-default">Apply</button>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    @if (session('success'))
                        <div id="success_msg" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div id="error_msg" class="alert alert-danger">
                            {!! session('error') !!}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th style="width:20px;">
                                        <label class="i-checks m-b-none">
                                            <input type="checkbox"><i></i>
                                        </label>
                                    </th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>View</th>
                                    <th>Active</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chapters as $chapter)
                                    <tr>
                                        <td>
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox" value="{{ $chapter->id }}"
                                                    name="chapter_id_list[]"><i></i>
                                            </label>
                                        </td>
                                        <td>
                                            {{ $chapter->id }}
                                        </td>
                                        <td><span class="text-ellipsis">{{ $chapter->name }}</span></td>
                                        <td><span class="text-ellipsis">{{ $chapter->created_at }}</span></td>
                                        <td><span class="text-ellipsis">{{ $chapter->updated_at }}</span></td>
                                        <td><span class="text-ellipsis">{{ $chapter->view }}</span></td>
                                        <td>
                                            @if ($chapter->verified == 0)
                                                <label class="alert alert-danger">No</label>
                                            @else
                                                <label class="alert alert-success">Yes</label>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($chapter->verified == 0)
                                                <a class="btn btn-success"
                                                    href="{{ route('admin.manga.chapter.verify', ['id' => $manga->id,'chapter_id'=>$chapter->id, 'verified' => 1]) }}">
                                                    <span class="glyphicon glyphicon-check"></span>
                                                </a>
                                            @else
                                                <a class="btn btn-danger"
                                                    href="{{ route('admin.manga.chapter.verify', ['id' => $manga->id,'chapter_id'=>$chapter->id, 'verified' => 0]) }}">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="{{ route('admin.manga.chapter.detail.index', ['id' => $manga->id, 'chapter_id' => $chapter->id]) }}">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.manga.chapter.delete', ['id' => $chapter->id, 'chapter_id' => $chapter->id]) }}"
                                                class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-7 text-right text-center-xs">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    {!! $chapters->links() !!}
                                </ul>
                            </div>
                        </div>
                    </footer>
                </form>
            </div>
        </section>

        <!-- footer -->
        @include('admin.components.footer')
        <!-- / footer -->
    </section>

    <!--main content end-->
@endsection
