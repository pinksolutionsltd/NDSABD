@extends('layouts/dashboard')

@section('technicalmember-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Technical Member</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Technical Member</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/technicalmember/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="technicalmember_id" value="{{ $technicalmembers->id }}">
                          <div class="form-group">
                            <label>Technical Member Name</label>
                            <input type="text" class="form-control" placeholder="Enter Technical Member Name" name="technicalmember_name" value="{{ $technicalmembers->technicalmember_name }}">
                          </div>
                          <div class="form-group">
                            <label>Committee Details</label>
                            <input type="text" class="form-control" placeholder="Enter Technical Member Details" name="technicalmember_Details" value="{{ $technicalmembers->technicalmember_Details }}">
                          </div>
                          <div class="form-group">
                            <label>Technical Member Image</label>
                            <input type="file" class="form-control" name="technicalmember_image">
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
