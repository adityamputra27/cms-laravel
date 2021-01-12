@extends('user.layout.header')
@section('content')
<section id="content">
	<div class="header-blog" style="height: 260px;
	background-image: linear-gradient(-45deg, rgba(106, 66, 194, 0.80), rgba(117, 19, 93, 0.80)), url('{{ asset('assets') }}/user/img/bg.jpg'); background-size: cover;">
		<div class="text-center">
			<h1 class="home-blog" data-aos="fade-up" data-aos-delay="200">Blog</h1>
			<ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="500">
			    <li class="breadcrumb-item">
			    	<a href="">Home</a>
			    </li>
			    <li class="breadcrumb-item">
			    	<a href="">Blog</a>
			    </li>
			</ol>
		</div>
	</div>
	<div class="container" style="margin-top: -100px;">
		<div class="blog">
			<div class="row">
				<h3 class="text-center">RESULT Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
			</div>
		</div>
	</div>
	<br>
</section>
@endsection