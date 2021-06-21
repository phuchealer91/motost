@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách tin tức</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh sách tin tức</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Danh sách tin tức</h3>
                            <a href="{{ route('post.create') }}" class="btn btn-primary">Thêm mới tin tức</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Hình ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục</th>
                                    <th>Thẻ (Tags)</th>
                                    <th>Tác giả</th>
                                    <th style="width: 130px">Ngày tạo</th>
                                    <th style="width: 40px">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($posts->count())
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>
                                            <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                                <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                                            </div>
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            @foreach($post->tags as $tag)
                                                <span class="badge badge-primary">{{ $tag->name }} </span>
                                            @endforeach
                                        </td>
                                        <td>{{ $post->user->name }}</td>
                                        <td style="width: 130px">{{ $post->created_at->format('d M, Y') }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                                            <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                            <a href="{{ route('website.post', [$post->slug]) }}" target="_blank" class="btn btn-sm btn-dark mr-1"> <i class="fas fa-link"></i> </a>
                                            <form action="{{ route('post.destroy', [$post->id]) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">
                                            <h5 class="text-center">Không có dữ liệu tin tức.</h5>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
