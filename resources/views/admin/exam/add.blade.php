@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Exam Form</h1>
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
              <form method="post" action="{{ url('admin/exam/add') }}">
                    {{ csrf_field()}}
                <div class="card-body">
                    <label for="class form-group">Exam Month</label><br>
                        <div class="col-md-4">
                            <select class="form-select col-md-4" id="month" name="month" required >
                                <option selected value=''>--Select Month--</option>
                                <option value='January'>January</option>
                                <option value='February'>February</option>
                                <option value='March'>March</option>
                                <option value='April'>April</option>
                                <option value='May'>May</option>
                                <option value='June'>June</option>
                                <option value='July'>July</option>
                                <option value='August'>August</option>
                                <option value='September'>September</option>
                                <option value='October'>October</option>
                                <option value='November'>November</option>
                                <option value='December'>December</option>
                            </select>
                        </div>
                    <br>
                    <div class="form-group">
                        <label for="class">Exam Year</label><br>
                        <div class="col-md-4">
                        <select class="form-select col-md-4" id="year" name="year" required>
                            <option value="">
                                --Select Year--
                            </option>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="class">Exam Type</label><br>
                        <div class="col-md-4">
                        <select class="form-select col-md-4" id="type" name="type" required>
                            <option value="">--Select Type--</option>
                            <option value='Regular'>Regular</option>
                            <option value='Internal'>Internal</option>
                            <option value='ATKT'>ATKT</option>
                        </select>
                        </div>
                    </div>
                </div>  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{url('admin/exam/list')}}" class="btn btn-secondary">Cancel</a>
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
<script>
    let dateDropdown = document.getElementById('year');

    let currentYear = new Date().getFullYear();
    let earliestYear = 2000;

    while (currentYear >= earliestYear) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear;
      dateOption.value = currentYear;
      dateDropdown.add(dateOption);
      currentYear -= 1;
    }
  </script>

@endsection


