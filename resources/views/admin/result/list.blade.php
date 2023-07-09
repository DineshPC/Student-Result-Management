@extends('layouts.app')

    @section('content')
    
<div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students Result</h1>
          </div>
          <div class="col-sm-6" style="text-align : right;">
            <a href=" {{ url('admin/result/add')}} " class="btn btn-primary">Add Result</a>
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
                <h3 class="card-title">Student List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Create By</th>
                        <th>Create Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($getRecord as $value)
                        @if($resultAvailable->contains('student_id', $value->id))
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->class }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>
                              <a href="{{ url('admin/result/show', $value->id) }}" class="btn btn-primary">Show Result</a>
                              <a href="#" onclick="event.preventDefault(); document.getElementById('deleteForm-{{ $value->id }}').submit();" class="btn btn-danger">Delete Result</a>
                              <form id="deleteForm-{{ $value->id }}" action="{{ url('admin/result/delete', $value->id) }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- <div style="float: right;" class="py-0 px-3">
                  {!! $getRecord->appends(Request::except('page'))->links() !!}
                </div> -->
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


