@extends('layouts.website')
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_5.jpg');">
        <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
                <h1 class="">Giới thiệu về chúng tôi</h1>
                <p class="lead mb-4 text-white">Kênh tin tức bổ ích về xe hàng đầu Sóc Trăng.</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
            <img src="@if($user->image) {{ asset($user->image) }} @else {{ asset('website/images/user.png') }} @endif" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-5 mr-auto order-md-1">
                <h2> {{ $user->name }}</h2>
                <p>{{ $user->description }}</p>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section bg-white">
        <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
            <div class="subscribe-1 ">
                <h2>Đăng ký để theo dõi nhiều tin tức</h2>
                <p class="mb-5">Motost hy vọng sẽ cung cấp nhiều kiến thức và tin tức về xe cho tất cả mọi người.</p>
                <form action="#" class="d-flex">
                <input type="text" class="form-control" placeholder="Điền địa chỉ email">
                <input type="submit" class="btn btn-primary" value="Đăng ký">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
