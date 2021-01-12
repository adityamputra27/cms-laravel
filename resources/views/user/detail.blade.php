@extends('user/layout/header')
@section('content')

<section id="content-detail">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @foreach($data as $post)
        <div class="breadcumb">
          <a href="" class="home">Home</a>
          /
          <a href="" class="title">{{ $post->judul }}</a>
        </div>
        <div class="post">
          <div class="title">
            <h3>{{ $post->judul }}</h3>
          </div>
          <hr>
          <div class="thumbnail">
            <img src="{{ asset('uploads/posts/'.$post->gambar) }}" class="img-fluid" alt="">
          </div>
          <div class="info">
            <span class="badge badge-info">{{ $post->category->name }}</span>
            <span class="badge badge-info">0 DIBACA</span>
            <span class="badge badge-info"><span class="fa fa-user"></span> {{ $post->users->name }}</span>
          </div>
          <div class="content">
            <p class="text-default">{!! htmlspecialchars_decode($post->content) !!}</p>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-4">
        <div class="recent-post">
          <h3>Recent Post</h3>
          <hr>
          @foreach(\App\Posts::all() as $post)
          <div class="recent-content">
            <span class="recent-title">{{ $post->judul }}</span>
          </div>
          @endforeach
        </div>
        <div class="products">
          <h3>Products</h3>
          <hr>
          <ul>
              <li>A</li>
              <li>B</li>
              <li>C</li>
              <li>D</li>
          </ul>
        </div>
        <div class="tags">
          <h3>Tag Populer</h3>
          <hr>
          @foreach($post->tags as $tag)
          <span class="badge badge-info">{{ $tag->name }}</span>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

@endsection