@extends('layouts/dashboard')

@section('clubsANDteams-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Clubs AND Teams Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Clubs AND Teams Table</h1>
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
              <div class="panel-heading">Clubs AND Teams List:{{ App\ClubsANDteams::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Club Name</th>
                      <th>Createed at</th>
                      <th>Action</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($clubsANDteamss as $clubsANDteams)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$clubsANDteams->clubsANDteams_name}}</td>
                      <td>{{$clubsANDteams->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/clubsANDteams/delete') }}/{{ $clubsANDteams->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/clubsANDteams/edit') }}/{{ $clubsANDteams->id }}">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

@endsection
