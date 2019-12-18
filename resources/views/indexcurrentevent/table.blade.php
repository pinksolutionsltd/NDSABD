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
      <li class="active">Index:Event Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Events Table</h1>
    </div>
  </div><!--/.row-->
{{-- Alert Message After Deleted Item------------------------------------}}
          <div class="page-info">
            @if(session('deletesuccess'))
            <div class="alert alert-info">
              <h3>{{session('deletesuccess')}}</h3>
            </div>
            @endif
          </div>
  <!---                    Banner table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="panel panel-success">
              <div class="panel-heading">Event List:{{ App\Indexcurrentevent::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <th>SL.No</th>
                      <th>Event Heading</th>
                      <th>Event Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($indexcurrentevents as $indexcurrentevent)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$indexcurrentevent->indexcurrentevent_heading}}</td>
                      <td>{{$indexcurrentevent->indexcurrentevent_details}}</td>
                      <td>{{$indexcurrentevent->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/indexcurrentevent/delete') }}/{{ $indexcurrentevent->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/indexcurrentevent/edit') }}/{{ $indexcurrentevent->id }}">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

@endsection
