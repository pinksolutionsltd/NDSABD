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
      <li class="active">Index:President Info</li>
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
                        <form action="{{ url('/presidentinfo/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>President Name</label>
                            <input type="text" class="form-control" placeholder="Enter President Name" name="presidentinfo_name" value="{{ old('presidentinfo_name') }}">
                          </div>
                          <div class="form-group">
                            <label>President Title</label>
                            <input type="text" class="form-control" placeholder="Enter President Title" name="presidentinfo_title" value="{{ old('presidentinfo_title') }}">
                          </div>
                          <div class="form-group">
                            <label>President Details</label>
                            <input type="text" class="form-control" placeholder="Enter President Details" name="presidentinfo_Details" value="{{ old('presidentinfo_Details') }}">
                          </div>
                          <div class="form-group">
                            <label>President Image</label>
                            <input type="file" class="form-control" name="presidentinfo_image">
                          </div>
                          <div class="form-group">
                            <label>President Speech</label>
                            <textarea name="presidentinfo_Speech" class="form-control"> {{ old('presidentinfo_Speech') }} </textarea>
                            <!-- <input type="text" class="form-control" placeholder="Enter President Speech" name="presidentinfo_Speech" value="{{ old('presidentinfo_Speech') }}"> -->
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
