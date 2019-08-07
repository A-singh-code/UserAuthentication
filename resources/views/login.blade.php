@extends('app')
@section('main-content')
<!-- Post Content -->
  <article>
    <div class="container" style="background:#eee;margin-top:10px;padding:10px;">
      <div class="row">
       <div class="col-md-8 col-md-offset-2" >
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             @include('layouts.message')
            <form action="/login" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                
                  <label>
                    <a href="{{ URL('/forgot_password')}}">Forget Password?</a>
                  </label>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('/register')}}" class="btn btn-success">Register</a>
              </div>
              <div class="bg-color-primary">
                <h4 class="alert alert-warning">
                  Username:admin@gmail.com<br/>
                  Password:1234
                </h4>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </article>
@endsection