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
      <li class="active">Index:Next Event<</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-10">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Index:Next Event</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/indexnextevent/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="indexnextevent_id" value="{{ $indexnextevents->id }}">

                          <div class="form-group">
                            <label>Team One Name</label>
                            <input type="text" class="form-control" placeholder="Enter Team One Name" name="indexnextevent_teamone" value="{{ $indexnextevents->indexnextevent_teamone }}">
                          </div>
                          <div class="form-group">
                            <label>Team Two Name</label>
                            <input type="text" class="form-control" placeholder="Enter Team One Name" name="indexnextevent_teamtwo" value="{{ $indexnextevents->indexnextevent_teamtwo }}">
                          </div>
                          <div class="form-group">
                            <label>Match Time</label>
                            <input type="text" class="form-control" placeholder="Enter Match Time" name="indexnextevent_time" value="{{ $indexnextevents->indexnextevent_time }}">
                          </div>
                          <div class="form-group">
                            <label>Premises Name</label>
                            <input type="text" class="form-control" placeholder="Enter Premises Name" name="indexnextevent_place" value="{{ $indexnextevents->indexnextevent_place }}">
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
