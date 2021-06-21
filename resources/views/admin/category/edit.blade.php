@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cập nhật danh mục</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Danh sách danh mục</a></li>
                    <li class="breadcrumb-item active">Cập nhật danh mục</li>
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
                            <h3 class="card-title">Cập nhật danh mục - {{ $category->name }}</h3>
                            <a href="{{ route('category.index') }}" class="btn btn-primary">Danh sách danh mục</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('category.update', [$category->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Tên danh mục</label>
                                            <input type="name" name="name" class="form-control" value="{{ $category->name }}" placeholder="Điền tên">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Miêu tả</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Điền miêu tả"> {{ $category->description }} </textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
