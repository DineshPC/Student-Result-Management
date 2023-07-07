@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Subject Details</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form method="post" action="">
                    {{ csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Subject Name</label>
                    <input type="name" class="form-control" name="name" value=" {{ $getRecord->name }}" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label><br>
                    <div class="col-md-4">
                      <select class="form-select col-md-4" id="type" name="type">
                        <option value="Theory" {{ $getRecord->type === 'Theory' ? 'selected' : '' }}>Theory</option>
                        <option value="Practical" {{ $getRecord->type === 'Practical' ? 'selected' : '' }}>Practical</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="class">Class</label><br>
                    <div class="col-md-4">
                      <select class="form-select col-md-4" id="class" name="class">
                        @foreach($getClasses as $classroom)
                          <option value="{{ $classroom->name }}" {{ $getRecord->class === $classroom->name ? 'selected' : '' }}>
                            {{ $classroom->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                </div>
                </div>  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{url('admin/subjects/list')}}" class="btn btn-secondary">Cancel</a>
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


