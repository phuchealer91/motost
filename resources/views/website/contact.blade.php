@extends('layouts.website')
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_4.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class="">Liên hệ với chúng tôi</h1>
              <!-- <p class="lead mb-4 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, adipisci?</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <form action="{{ route('website.contact') }}" method="post" class="p-5 bg-white">
              @csrf
              @include('includes.errors')
              @if(Session::has('message-send'))
                <div class="alert alert-success">{{ Session::get('message-send') }}</div>
              @endif
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="fname">Tên</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Điền tên">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Điền địa chỉ Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Sở thích</label>
                  <input type="subject" id="subject" name="subject" class="form-control" placeholder="Điền sở thích">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Lời nhắn</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Viết lời nhắn..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Gửi" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-md-5">

            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Địa chỉ</p>
              <p class="mb-4">{{ $setting->address }}</p>

              <p class="mb-0 font-weight-bold">Số điện thoại</p>
              <p class="mb-4"><a href="#">{{ $setting->phone }}</a></p>

              <p class="mb-0 font-weight-bold">Địa chỉ Email</p>
              <p class="mb-0"><a href="#">{{ $setting->email }}</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
