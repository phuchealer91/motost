@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cập nhật thành viên</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Danh sách thành viên</a></li>
                    <li class="breadcrumb-item active">Cập nhật thành viên</li>
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
                            <h3 class="card-title">Cập nhật thành viên - {{ $user->name }}</h3>
                            <a href="{{ route('user.index') }}" class="btn btn-primary">Danh sách thành viên</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Tên</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Điền tên" value="{{ $user->name }} ">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Điền email" value="{{ $user->email }} ">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mật khẩu <small>(Điền mật khẩu nếu bạn muốn thay đổi.)</small></label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Điền mật khẩu">
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
