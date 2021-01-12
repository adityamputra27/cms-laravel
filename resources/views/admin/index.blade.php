@extends('admin.templates.app')
@section('title')
Home | Admin BelajarKoding
@endsection
@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">
    Selamat Datang, {{ ucfirst(Auth()->user()->name) }}
  </div>
</div>
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Posts Total</span>
    <div class="count blue">{{ $posts_total }}</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Blogs Total </span>
    <div class="count text-danger">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Category Total </span>
    <div class="count green">{{ $category }}</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Tags Total </span>
    <div class="count purple">{{ $tags }}</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Comments Total </span>
    <div class="count text-warning">0</div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Users Total </span>
    <div class="count text-primary">{{ $users }}</div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="dashboard_graph">
      <div class="row x_title">
        <div class="col-md-6">
          <h3>Top Rank Total Visitor <small>Post</small></h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <h5>Tanggal : {{ date('d F Y') }}</h5>
      <table class="table table-hover table-bordered table-striped">
        <thead>
          <th>No</th>
          <th>Judul</th>
          <th>Jumlah Visitor</th>
        </thead>
      </table>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="dashboard_graph">
      <div class="row x_title">
        <div class="col-md-6">
          <h3>Top Rank Total Visitor <small>Blog</small></h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <h5>Tanggal : {{ date('d F Y') }}</h5>
      <table class="table table-hover table-bordered table-striped">
        <thead>
          <th>No</th>
          <th>Judul</th>
          <th>Jumlah Visitor</th>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection
            


