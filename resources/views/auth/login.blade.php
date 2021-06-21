@extends('layouts.app')

@section('content')

<div class="card-body login-card-body">
    <p class="login-box-msg">Đăng nhập để bắt đầu phiên làm việc</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-6">
                <div class="icheck-primary">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        Ghi nhớ
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mb-1 mt-2">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Bạn quên mật khẩu?') }}
            </a>
        @endif
    </p>
    <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Bạn chưa có tài khoản?</a>
    </p>
</div>
@endsection
