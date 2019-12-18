@extends('layouts/dashboard')

@section('secretary-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Secretary Info</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Secretary Info</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/secretary/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="secretary_id" value="{{ $secretaries->id }}">
                          <div class="form-group">
                            <label>Secretary Name</label>
                            <input type="text" class="form-control" placeholder="Enter Secretary Name" name="secretary_name" value="{{ $secretaries->secretary_name }}">
                          </div>
                          <div class="form-group">
                            <label>Secretary Title</label>
                            <input type="text" class="form-control" placeholder="Enter Secretary Title" name="secretary_title" value="{{ $secretaries->secretary_title }}">
                          </div>
                          <div class="form-group">
                            <label>Secretary Details</label>
                            <input type="text" class="form-control" placeholder="Enter Secretary Details" name="secretary_Details" value="{{ $secretaries->secretary_Details }}">
                          </div>
                          <div class="form-group">
                            <label>Secretary Image</label>
                            <input type="file" class="form-control" name="secretary_image">
                          </div>
                          <div class="form-group">
                            <label>Secretary Speech</label>
                            <input type="text" class="form-control" placeholder="Enter Secretary Speech" name="secretary_Speech" value="{{ $secretaries->secretary_Speech }}">
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
