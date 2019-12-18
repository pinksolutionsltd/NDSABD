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
      <li class="active">Index:Next Event Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Next Events Table</h1>
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
              <div class="panel-heading">Next Event List:{{ App\Indexnextevent::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <th>SL.No</th>
                      <th>Team One Name</th>
                      <th>Team Two Name</th>
                      <th>Match Time</th>
                      <th>Match Place</th>
                      <th>Createed at</th>
                      <th>Action</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($indexnextevents as $indexnextevent)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{ $indexnextevent->indexnextevent_teamone }}</td>
                      <td>{{ $indexnextevent->indexnextevent_teamtwo }}</td>
                      <td>{{ $indexnextevent->indexnextevent_time }}</td>
                      <td>{{ $indexnextevent->indexnextevent_place }}</td>
                      <td>{{$indexnextevent->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/indexnextevent/delete') }}/{{ $indexnextevent->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/indexnextevent/edit') }}/{{ $indexnextevent->id }}">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

@endsection
