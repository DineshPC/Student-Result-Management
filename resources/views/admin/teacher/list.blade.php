@extends('layouts.app')

    @section('content')
    
<div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teacher List</h1>
          </div>
          <div class="col-sm-6" style="text-align : right;">
            <a href=" {{ url('admin/teacher/add')}} " class="btn btn-primary">Add New Teacher</a>
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
            <div class="card">
              <div class="card-header"> 
                <h3 class="card-title"> Teacher List </h3>
              </div>

                <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Create By</th>
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                    @foreach($getRecord as $value)
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->created_by }}</td>
                      <td>{{ $value->created_at }}</td>
                      <td>
                        <a href="{{ url('admin/teacher/edit', $value->id) }}" class="btn btn-primary">Edit</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('deleteForm-{{ $value->id }}').submit();" class="btn btn-danger">Delete</a>
                        <form id="deleteForm-{{ $value->id }}" action="{{ url('admin/teacher/delete', $value->id) }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                      </td>
                    </tr>   
                    @endforeach
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



@endsection

