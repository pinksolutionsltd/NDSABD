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
      <li class="active">Testimonial Two</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Add Item</div>

                      @if(session('success'))
                      <div class="alert alert-success">
                        <h3>{{session('success')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/testimonialtwo/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>Testimonialtwo Comments</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialtwo Comments" name="testimonialtwo_comments" value="{{ old('testimonialtwo_comments') }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialtwo Name</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialtwo Name" name="testimonialtwo_name" value="{{ old('testimonialtwo_name') }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialtwo Details</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialtwo Details" name="testimonialtwo_details" value="{{ old('testimonialtwo_details') }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialtwo Image</label>
                            <input type="file" class="form-control" name="testimonialtwo_image">
                          </div>

                          <button type="submit" class="btn btn-primary">Add</button>
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
