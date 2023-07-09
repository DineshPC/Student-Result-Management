@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Result</h1>
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
              <form method="post" action="{{ url('admin/result/added') }}">
                    {{ csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Class</label>
                    <div class="col-md-4">
                      <select class="form-select col-md-4" id="classroom" name="classroom">
                        @foreach($getClasses as $classroom)
                          <option value="{{ $classroom->name }}">
                            {{ $classroom->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                    <div class="form-group">
                      <label>Student Name</label>
                      <div class="col-md-4">
                        <select class="form-select col-md-4" id="student" name="student">
                          @foreach($getStudent as $student)
                            <option value="{{ $student->id }}">
                              {{ $student->name }}
                            </option>
                          @endforeach
                        </select>
                        
                      </div>
                    </div>
                  <!-- <div class="form-group">
                    <label>Subjects</label>
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
                            <th>{{ $value->name }}</th>
                            <th><input type="integer" class="form-control" name="obtain_marks"  placeholder="obtain_marks" style="width:120px"></th>
                            <th><input type="integer" class="form-control" name="total_marks"  placeholder="Out of marks" style="width:120px"></th>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div> -->
                </div>  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{url('admin/result/list')}}" class="btn btn-secondary">Cancel</a>
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


