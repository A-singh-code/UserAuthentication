@extends('layouts/app')
@section('main-Header')
 <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection
@section('main-content')

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if(Sentinel::check())
    <section class="content-header">
      <h1>
        User Data
        
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
          <!-- <center><a class="btn btn-info" href="{{ route('home.create') }}">ADD NEW USER</a></center> -->
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                @include('layouts.message')
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  
                  <th>Name</th>
                  <th>email</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                   <tr>
                    <td>{{$loop->iteration}}</td>
                    
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <form id="delete-form-{{$user->id}}" action="{{ route('home.destroy',$user->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        </form>
                      <a href="" onclick="
                      if(confirm('Are you sure, You want to delete this post ?'))
                      {
                     event.preventDefault();
                     document.getElementById('delete-form-{{$user->id}}').submit(); 
                      }
                   else{
                   event.preventDefault();
                 }"><i class="fa fa-trash" aria-hidden="true"></i></i></a></td>
                      
                  </tr>
                  @endforeach
               
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    @else
      @php
        header("Location: " . URL::to('/'), true, 302);
                    exit();
                  @endphp
                @endif
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('main-Footer') 
  <script type="text/javascript" src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
  @endsection