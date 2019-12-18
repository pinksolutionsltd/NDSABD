@extends('layouts/dashboard')

@section('presidentinfo-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">President Info</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit President Info</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/presidentinfo/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="presidentinfo_id" value="{{ $presidentinfos->id }}">
                          <div class="form-group">
                            <label>President Name</label>
                            <input type="text" class="form-control" placeholder="Enter President Name" name="presidentinfo_name" value="{{ $presidentinfos->presidentinfo_name }}">
                          </div>
                          <div class="form-group">
                            <label>President Title</label>
                            <input type="text" class="form-control" placeholder="Enter Committee Title" name="presidentinfo_title" value="{{ $presidentinfos->presidentinfo_title }}">
                          </div>
                          <div class="form-group">
                            <label>President Details</label>
                            <input type="text" class="form-control" placeholder="Enter President Details" name="presidentinfo_Details" value="{{ $presidentinfos->presidentinfo_Details }}">
                          </div>
                          <div class="form-group">
                            <label>President Image</label>
                            <input type="file" class="form-control" name="presidentinfo_image">
                          </div>
                          <div class="form-group">
                            <label>President Speech</label>
                            <input type="text" class="form-control" placeholder="Enter President Speech" name="presidentinfo_Speech" value="{{ $presidentinfos->presidentinfo_Speech }}">
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
