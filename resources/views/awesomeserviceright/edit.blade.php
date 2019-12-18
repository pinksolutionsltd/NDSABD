@extends('layouts/dashboard')

@section('awesomeserviceright-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Awesome Service Right</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Awesome Service Right</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/awesomeserviceright/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="awesomeserviceright_id" value="{{ $awesomeservicerights->id }}">
                          <div class="form-group">
                            <label>Awesome Service Left Name</label>
                            <input type="text" class="form-control" placeholder="Enter Awesome Service Right Name" name="awesomeserviceright_name" value="{{ $awesomeservicerights->awesomeserviceright_name }}">
                          </div>
                          <div class="form-group">
                            <label>Awesome Service Right Details</label>
                            <input type="text" class="form-control" placeholder="Enter Awesome Service Right Details" name="awesomeserviceright_details" value="{{ $awesomeservicerights->awesomeserviceright_details }}">
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      </div>
                          @if($errors->all())
                          <div class="alert alert-danger">
                              @foreach ($errors->all() as $value)
                                <h3><li>{{ $value }}</li></h3>
                              @endforeach
                          </div>
                          @endif
                  </div>
              </div>
          </div>
@endsection
