@extends('layouts/dashboard')

@section('testimonialtwo-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Testimonialtwo</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-10">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Testimonialtwo</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/testimonialtwo/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="testimonialtwo_id" value="{{ $testimonialtwos->id }}">
                          <div class="form-group">
                            <label>Testimonialtwo Comments</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialtwo Comments" name="testimonialtwo_comments" value="{{ $testimonialtwos->testimonialtwo_comments }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialtwo Name</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialtwo  Name" name="testimonialtwo_name" value="{{ $testimonialtwos->testimonialtwo_name }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialtwo Details</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialtwo Details" name="testimonialtwo_details" value="{{ $testimonialtwos->testimonialtwo_details }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialtwo Image</label>
                            <input type="file" class="form-control" name="testimonialtwo_image">
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
