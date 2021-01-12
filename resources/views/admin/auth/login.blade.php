@extends('admin.auth.templates.header')
@section('title')
Login Page
@endsection
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-3 offset-md-3 col-lg-3 offset-lg-3 col-xl-3 offset-xl-3">
            <div class="card card-primary" style="width: 34rem !important;">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ url('/admin/post-login') }}" class="needs-validation" novalidate="">

                  @include('admin.feedback.index')
                  {{ csrf_field() }}

                  <div class="form-group">
                    <h6 for="email">Email</h6>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<h6 for="password">Password</h6>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      <h6>Login</h6>
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  Don't have an account? <a href="{{url('admin/registration')}}">Register Here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

