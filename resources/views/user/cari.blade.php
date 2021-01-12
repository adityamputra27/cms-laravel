@extends('user/layout/header')
@section('content')
<section id="content" class="mt-3">
	<div class="container">
	<h2 class="text-center mb-3">Kamu Cari : {{ $cari }}</h2>
	<div class="row">
		@foreach($data as $post)
		<div class="col-md-4" data-aos="fade-up">
			<div class="card card-blog mx-auto">
			  <img src="{{ asset('uploads/posts/'.$post->gambar) }}" class="card-img-top" alt="...">
			  <div class="card-body">
			  	<div class="card-category-box">
	                <div class="card-category">
	                  <h6 class="category">{{ $post->category->name }}</h6>
	                </div>
	            </div>
			    <h5 class="card-title"><a href="{{ route('user.detail', $post->slug) }}">{{ $post->judul }}</a></h5>
			  </div>
			  <div class="card-footer">
	              <div class="post-author">
	                <a href="#">
	                  <img src="{{ asset('assets') }}/admin/images/admin2.jpg" alt="" class="avatar rounded-circle">
	                  <span class="author">{{ $post->users->name }}</span>
	                </a>
	              </div>
	              <div class="post-date">
	                <span class="ion-ios-clock-outline"></span> {{ $post->created_at->diffForHumans() }}
	              </div>
	            </div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="mb-5">
		<center>
			<!-- {{ $data->links() }} -->
			<!-- <button id="load-more" class="btn btn-load-more">Load More</button> -->
		</center>
	</div>
</div>
</section>

@endsection