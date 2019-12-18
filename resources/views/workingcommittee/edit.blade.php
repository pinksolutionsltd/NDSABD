@extends('layouts/dashboard')

@section('mainslider-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Working Committee</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Working Committee</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/workingcommittee/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="workingcommittee_id" value="{{ $workingcommittees->id }}">
                          <div class="form-group">
                            <label>Workingcommittee Name</label>
                            <input type="text" class="form-control" placeholder="Enter Workingcommittee Name" name="committee_name" value="{{ $workingcommittees->committee_name }}">
                          </div>
                          <div class="form-group">
                            <label>Committee Details</label>
                            <input type="text" class="form-control" placeholder="Enter Committee Details" name="committee_Details" value="{{ $workingcommittees->committee_Details }}">
                          </div>
                          <div class="form-group">
                            <label>Workingcommittee Image</label>
                            <input type="file" class="form-control" name="committee_image">
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
