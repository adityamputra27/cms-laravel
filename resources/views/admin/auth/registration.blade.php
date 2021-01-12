@extends('admin.auth.templates.header')
@section('title')
Registration Page
@endsection
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>
              <div class="card-body">
                <form method="POST" action="{{url('/admin/post-registration')}}">

                  @include('admin.feedback.index')
                  {{ csrf_field() }}

                  <div class="form-group">
                    <h6>Full Name</h6>
                    <input type="text" id="inputName" name="name" class="form-control"autofocus>
                  </div>

                  <div class="form-group">
                    <h6 for="email">Email</h6>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <h6 for="password" class="d-block">Password</h6>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <h6 for="password2" class="d-block">Password Confirmation</h6>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      <h6>Register</h6>
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  Sudah Punya Akun? <a href="{{url('login')}}">Login In</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>