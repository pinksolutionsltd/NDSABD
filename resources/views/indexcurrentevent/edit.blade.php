@extends('layouts/dashboard')

@section('indexcurrentevent-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Index:Current Event<</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-10">
                  <div class="panel panel-success">
                      <div class="panel-heading">Edit Index:Current Event</div>

                      @if(session('editsuccess'))
                      <div class="alert alert-success">
                        <h3>{{session('editsuccess')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/indexcurrentevent/update') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <input type="hidden" name="indexcurrentevent_id" value="{{ $indexcurrentevents->id }}">

                          <div class="form-group">
                            <label>Clubs AND Teams Name</label>
                            <input type="text" class="form-control" placeholder="Enter Event Heading" name="indexcurrentevent_heading" value="{{ $indexcurrentevents->indexcurrentevent_heading }}">
                          </div>
                          <div class="form-group">
                            <label>Clubs AND Teams Name</label>
                            <input type="text" class="form-control" placeholder="Enter Event Details" name="indexcurrentevent_details" value="{{ $indexcurrentevents->indexcurrentevent_details }}">
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
