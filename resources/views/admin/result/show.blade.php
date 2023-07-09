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
                <label class="card-title">Name : </label>
                <label class="card-title"> &nbsp;&nbsp;{{ $getUser->name}}</label>
              </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">

                    <thead>
                      <tr>
                      @foreach($getSubject as $value)
                        <td>{{ $value-> name }}</td>
                      @endforeach
                      </tr> 
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($getRecord as $value)
                        <td>{{ $value->obtain_marks }} / {{ $value->total_marks }} </td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
                  <div class="card-footer">
                    
                  </div>
                </div>  
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


