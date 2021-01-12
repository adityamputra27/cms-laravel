<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('assets') }}/user/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/user/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/admin/stisla-assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/admin/stisla-assets/css/components.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/admin/plugins/animate/animate.min.css">
</head>
<body>
@include('admin.auth.templates.footer')