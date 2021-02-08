@extends('admin.layout')
@section('title', 'Trash can')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <ol class="breadcrumb">
                <li><a href="">Category management</a></li>
                <li class="active">Recycle</li>
            </ol>
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Categories - Trash can
                    </div>
                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <span class="btn-group">
                                <a href="" class="btn btn-sm btn-default"><i
                                        class="fa fa-refresh"></i> Refresh</a>
                            </span>
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-5">
                            <form enctype="multipart/form-data" method="GET" action="">
                                <div class="input-group">
                                    <input type="text" class="input-sm form-control" value="{{ old('search') }}" name="search"
                                        placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-default">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form method="GET" action="" enctype="multipart/form-data">
                        <div class="row w3-res-tb">
                            <div class="col-sm-5 m-b-xs">
                                <select name="bulk_action" class="input-sm form-control w-sm inline v-middle">
                                    <option>Bulk action</option>
                                    <option value="3">Restore</option>
                                    <option value="4">Delete</option>
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
                                        <th>Description</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox" value="{{ $category->id }}"
                                                        name="category_id_list[]"><i></i>
                                                </label>
                                            </td>
                                            <td>
                                                {{ $category->id }}
                                            </td>
                                            <td><span class="text-ellipsis">{{ $category->name }}</span></td>
                                            <td><span class="text-ellipsis">{!! $category->description !!}</span></td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.category.restore',['id'=>$category->id]) }}"
                                                    class="btn btn-success"><span class="glyphicon glyphicon-check"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.category.destroy',['id'=>$category->id]) }}"
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
                                        {!! $categories->links() !!}
                                    </ul>
                                </div>
                            </div>
                        </footer>
                    </form>
                </div>
            </div>
        </section>
        <!-- footer -->
        @include('admin.components.footer')
        <!-- / footer -->
    </section>

    <!--main content end-->

@endsection
