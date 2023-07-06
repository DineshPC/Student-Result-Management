@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Admin Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          @include('_message')
            <!-- general form elements -->
            <div class="card card-primary">

              <!-- form start -->
              <form method="post" action="{{ url('admin/admin/add') }}">
                    {{ csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="name" class="form-control" name="name" required placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Password">
                  </div>
                </div>  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->     
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection


