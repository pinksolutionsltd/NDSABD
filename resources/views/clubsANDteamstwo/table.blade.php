@extends('layouts/dashboard')

@section('clubsANDteamstwo-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">First Division Cricket League Clubs</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">First Division Clubs Table</h1>
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
              <div class="panel-heading">Clubs AND Teams List:{{ App\ClubsANDteamstwo::count() }}</div>

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

                    @foreach($clubsANDteamstwos as $clubsANDteamstwo)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$clubsANDteamstwo->clubsANDteamstwo_name}}</td>
                      <td>{{$clubsANDteamstwo->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/clubsANDteamstwo/delete') }}/{{ $clubsANDteamstwo->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/clubsANDteamstwo/edit') }}/{{ $clubsANDteamstwo->id }}">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

@endsection
