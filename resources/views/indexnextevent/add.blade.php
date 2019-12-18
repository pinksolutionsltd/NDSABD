@extends('layouts/dashboard')

@section('indexnextevent-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Index:Next Event</li>
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
                        <form action="{{ url('/indexnextevent/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>Team One Name</label>
                            <input type="text" class="form-control" placeholder="Enter Team One Name" name="indexnextevent_teamone" value="{{ old('indexnextevent_teamone') }}">
                          </div>
                          <div class="form-group">
                            <label>Team Two Name</label>
                            <input type="text" class="form-control" placeholder="Enter Team One Name" name="indexnextevent_teamtwo" value="{{ old('indexnextevent_teamtwo') }}">
                          </div>
                          <div class="form-group">
                            <label>Match Time</label>
                            <input type="text" class="form-control" placeholder="Enter Match Time" name="indexnextevent_time" value="{{ old('indexnextevent_time') }}">
                          </div>
                          <div class="form-group">
                            <label>Premises Name</label>
                            <input type="text" class="form-control" placeholder="Enter Premises Name" name="indexnextevent_place" value="{{ old('indexnextevent_place') }}">
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
