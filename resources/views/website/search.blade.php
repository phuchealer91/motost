@extends('layouts.website')
@section('content')
    <div class="py-3 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Kết quả tìm kiếm ({{$posts->count()}})</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
          <div class="row">
            @if($posts->count())
          @foreach($posts as $post)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="{{ route('website.post', ['slug' => $post->slug]) }}"><img src="{{ asset($post->image) }}" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name}}</span>

              <h2><a href="{{ route('website.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left">
                  <img src="@if($post->user->image){{ asset($post->user->image) }} @else {{ asset('website/images/user.png') }} @endif" alt="Image" class="img-fluid">
                </figure>
                <span class="d-inline-block mt-1">By <a href="#">{{ $post->user->name }}</a></span>
                <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }}</span>
              </div>

                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                <p><a href="{{ route('website.post', ['slug' => $post->slug]) }}">Read More</a></p> -->
              </div>
            </div>
          </div>
          @endforeach
          @else
        <div>
        <h5 class="text-center">Không có kết quả tìm kiếm.</h5>
        </div>
        @endif
        </div>

    </div>
    </div>
@endsection

