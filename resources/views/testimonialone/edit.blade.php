@extends('layouts/dashboard')

@section('testimonialone-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Testimonialone</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-10">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Testimonialone</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/testimonialone/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="testimonialone_id" value="{{ $testimonialones->id }}">
                          <div class="form-group">
                            <label>Testimonialone Comments</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialone Comments" name="testimonialone_comments" value="{{ $testimonialones->testimonialone_comments }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialone Name</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialone  Name" name="testimonialone_name" value="{{ $testimonialones->testimonialone_name }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialone Details</label>
                            <input type="text" class="form-control" placeholder="Enter Testimonialone Details" name="testimonialone_details" value="{{ $testimonialones->testimonialone_details }}">
                          </div>
                          <div class="form-group">
                            <label>Testimonialone Image</label>
                            <input type="file" class="form-control" name="testimonialone_image">
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
