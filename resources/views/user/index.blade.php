@extends('user/layout/header')
@section('content')
<div class="jumbotron">
	<div class="container">
	  	<div class="row">
	  		<div class="col-md-8">
	  			<h1 class="title" data-aos="fade-right" data-aos-delay="100">Selamat Datang!</h1>
			  	<p class="content-title" data-aos="fade-right" data-aos-delay="400">Website blablabla ini merupakan tempat belajar progamming, pada website ini akan dibahas bahasa pemograman, framework, web design & dunia linux</p>
			  	<p class="content-title" data-aos="fade-right" data-aos-delay="600">Ayo kawanku kita belajar bareng progamming di website ini dengan bahasan yang lengkap dan akan mudah dipahami!.</p>
			  	<div class="btn-select" data-aos="fade-right" data-aos-delay="800">
			  		<a class="btn btn-belajar" href="" role="button">Belajar Sekarang! &raquo;</a>
			  		<a class="btn btn-nanti" href="">Nanti Aja Dulu</a>
			  	</div>
	  		</div>
	  	</div>
	</div>
</div>

<section id="content">
	<div class="container">
	<h2 class="text-center">HOME</h2>
	<div class="row">
		@foreach($data as $post)
		<div class="col-md-4" data-aos="fade-up">
			<div class="card shadow card-blog mx-auto">
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
			<button class="btn btn-load-more" id="load-more">
				<i class="loading-icon fa fa-spinner fa-spin hide"></i>
				<span class="btn-text"> Load More</span>
			</button>
		</center>
	</div>
</div>
</section>

@endsection
@push('style')
<style>
	.hide{display: none;}
</style>
@endpush
@section('js')
<script>
	$(document).ready(function () {
		$('.btn-load-more').on('click', function () {
			$('.loading-icon').removeClass('hide');
			$('.btn-load-more').attr('disabled', true);
			$('.btn-text').text('Loading...');

			setTimeout(function () {
				$('.loading-icon').addClass('hide');
				$('.btn-load-more').attr('disabled', false);
				$('.btn-text').text('Load More');
			}, 2000);
		});
	});
</script>
@stop