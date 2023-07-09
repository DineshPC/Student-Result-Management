@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>Enter Student Result</h1>
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
            <form method="post" action="{{ url('teacher/result/upload') }}">
              {{ csrf_field()}}
              <div class="card-body">
                <div class="form-group col-sm-12">
                  <div class="col-md-4">
                    <label>Student Name:</label>&nbsp;
                    <span class="col-md-4">{{ $getRecord->name }}</span>
                    <input type="hidden" name="student_name" value="{{ $getRecord->name }}">
                  </div>
                  <div class="col-md-4">
                    <label>Class Name:</label>&nbsp;
                    <span name="class_name">{{ $getRecord-> class }}</span>
                    <input type="hidden" name="class_name" value="{{ $getRecord->class }}">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="form-group">&nbsp;
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Subject Name</th>
                        <th>Obtain Marks</th>
                        <th>Out Of Marks</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($getSubjects as $value)
                      <tr>
                        <th>{{ $value -> name}}</th>
                        <td><input type="integer" class="form-control" name="obtain_marks[]" placeholder="Obtain Marks"
                            style="width:120px"></td>
                        <td><input type="integer" class="form-control" name="total_marks[]" placeholder="Out of Marks"
                            style="width:120px"></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('teacher/result/list')}}" class="btn btn-secondary">Cancel</a>
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