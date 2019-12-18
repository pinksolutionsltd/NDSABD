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
      <li class="active">Technical Memeber</li>
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
                        <form action="{{ url('/technicalmember/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>Technical Member Name</label>
                            <input type="text" class="form-control" placeholder="Enter Technical Member Name" name="technicalmember_name" value="{{ old('technicalmember_name') }}">
                          </div>
                          <div class="form-group">
                            <label>Technical Member Details</label>
                            <input type="text" class="form-control" placeholder="Enter Technical Member Details" name="technicalmember_Details" value="{{ old('technicalmember_Details') }}">
                          </div>
                          <div class="form-group">
                            <label>Technical Member Image</label>
                            <input type="file" class="form-control" name="technicalmember_image">
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
