@extends('app')
@section('main-content')
<div class="container">
  <div class="row">
<div class="col-md-8 col-md-offset-2">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              
              <li class="dropdown">
                <a class="btn btn-success" href="{{route('login.login')}}">
                  Login 
                </a>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> Custom Tabs</li>
            </ul>
          
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
       </div> 
@endsection