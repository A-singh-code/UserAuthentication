@extends('app')
@section('main-content')
<!-- Post Content -->
  <article>
    <div class="container" style="background:#eee;margin-top:10px;padding:10px;">
      <div class="row">
       <div class="col-md-8 col-md-offset-2" >
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('layouts.message')
            <form role="form" action="/register" method="POST">
             {{ csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" value="" name="first_name" placeholder="Enter User First Name" required>
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" value="" name="last_name" placeholder="Enter User Last Name" required>
                </div>
                <div class="form-group">
                  <label for="email">User Email</label>
                  <input type="email" class="form-control" id="email" value="" name="email" placeholder="Enter Email" required>
                </div>
                 <div class="form-group">
                  <label for="role">User Email</label>
                    <select name="role" id="role" class="form-control">
                      @foreach($roles as $role)
                      <option value="{{$role->id}}">{{$role->name}}</option>
                      @endforeach
                    </select>
                  </div> 
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" value="" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                  <label for="confirmpassword">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmpassword" value="" name="confirmpassword" placeholder="Re-Enter Password" required>
                </div>  
                </div>
              <div class="row">
                <div class="col-md-12">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('/login')}}" class="btn btn-info">Back</a>
              </div>
            </div >
            </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </article>
@endsection