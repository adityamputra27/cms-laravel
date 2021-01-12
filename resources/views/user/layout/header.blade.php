<!DOCTYPE html>
<html>
<head>
  <title>Home | Coding</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/css/styles.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/css/style2.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/vendor/aos/aos.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/plugins/highlight-master/src/styles/default.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/user/plugins/highlight-master/src/styles/monokai-sublime.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/plugins/prism/prism.css">
  @stack('style')
</head>
<body>
<header class="">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">BelajarKoding</a>
      <button class="btn btn-cari" data-toggle="modal" data-target="#ModalSearch" type="button">
        <span class="fa fa-search"></span>
      </button>
      <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-item2">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item nav-item2">
            <a class="nav-link" href="{{ route('kategori') }}">Categories</a>
          </li>
          <li class="nav-item nav-item2">
            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
          </li>
          <li id="search" class="nav-item nav-item2" data-toggle="modal" data-target="#ModalSearch">
            <a class="nav-link search" href="#"><i class="fa fa-search"></i> Search</a>
          </li>
          <li class="nav-item nav-item2">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-sign-up nav-link" href="#"><span class="fa fa-sign-in"></span> Register</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<!-- MODAL SEARCH -->
<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('cari') }}" method="GET">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="search" id="input-cari" name="cari" class="form-control" placeholder="Cari Kategori / Judul / Produk / Blog">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-search btn-block">
              <span class="fa fa-search"></span> Cari
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@yield('content')
@yield('js')
@extends('user/layout/footer')