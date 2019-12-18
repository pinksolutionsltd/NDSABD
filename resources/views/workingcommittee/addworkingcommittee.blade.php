@extends('layouts/dashboard')

@section('workingcommittee-page')
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
                      <div class="panel-heading">Add Item</div>

                      @if(session('success'))
                      <div class="alert alert-success">
                        <h3>{{session('success')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/workingcommittee/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>Committee Name</label>
                            <input type="text" class="form-control" placeholder="Enter Committee Name" name="committee_name" value="{{ old('committee_name') }}">
                          </div>
                          <div class="form-group">
                            <label>Committee Details</label>
                            <input type="text" class="form-control" placeholder="Enter Committee Details" name="committee_Details" value="{{ old('committee_Details') }}">
                          </div>
                          <div class="form-group">
                            <label>Committee Image</label>
                            <input type="file" class="form-control" name="committee_image">
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
