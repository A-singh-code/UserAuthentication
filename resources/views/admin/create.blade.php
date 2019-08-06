@extends('layouts/app')

  @section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create User
        
      </h1>
          </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         

           <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Users</h3>
            </div>

            @include('layouts/message')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('home.store') }}" method="POST">
             {{ csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" value="" name="first_name" placeholder="Enter User First Name">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" value="" name="last_name" placeholder="Enter User Last Name">
                </div>
                <div class="form-group">
                  <label for="email">User Email</label>
                  <input type="email" class="form-control" id="email" value="" name="email" placeholder="Enter Email">
                </div>
                
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" value="" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="confirmpassword">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmpassword" value="" name="confirmpassword" placeholder="Re-Enter Password">
                </div>  
                </div>
              <div class="row">
                <div class="col-md-12">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div >
            </div>  
            </form>
          </div>



          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
 @endsection