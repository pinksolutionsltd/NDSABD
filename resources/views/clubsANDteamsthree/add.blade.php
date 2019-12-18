@extends('layouts/dashboard')

@section('clubsANDteamsthree-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Second Division Cricket League Clubs</li>
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
                        <form action="{{ url('/clubsANDteamsthree/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>Clubs AND Teams</label>
                            <input type="text" class="form-control" placeholder="Enter Clubs Name" name="clubsANDteamsthree_name" value="{{ old('clubsANDteamsthree_name') }}">
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
