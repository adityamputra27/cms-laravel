@extends('user/layout/header')
@section('content')
<section id="kategori content">
	<div class="header-blog" style="height: 300px;
	background-image: linear-gradient(-45deg, rgba(106, 66, 194, 0.80), rgba(117, 19, 93, 0.80)), url('{{ asset('assets') }}/user/img/bg-4.jpg'); background-size: cover;">
		<div class="container text-center">
			<h1 class="text-center home-blog" data-aos="fade-up" data-aos-delay="200">Category</h1>
			<ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="500">
			    <li class="breadcrumb-item">
			    	<a href="">Home</a>
			    </li>
			    <li class="breadcrumb-item">
			    	<a href="">Category</a>
			    </li>
			</ol>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			@foreach($category as $c)
			<div class="col-md-4">
				
				<div class="card card-categories mx-auto shadow" style="width: 22rem;">
					<img src="{{ asset('uploads/category/'.$c->gambar) }}" class="card-img-top" alt="">
					<div class="card-body">
						<center><a href="" class="btn-categories">Belajar {{ $c->name }} Sekarang!</a></center>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection