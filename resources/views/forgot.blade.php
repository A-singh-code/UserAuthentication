@extends('app')
@section('main-content')
<!-- Post Content -->
  <article>
    <div class="container" style="background:#eee;margin-top:10px;padding:10px;">
      <div class="row">
       <div class="col-md-8 col-md-offset-2" >
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Forgot Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             @include('layouts.message')
            <form action="/forgot_password" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </article>
@endsection