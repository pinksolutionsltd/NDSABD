@extends('layouts/dashboard')

@section('awesomeserviceright-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Awesome Service Right Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Awesome Service Right Table</h1>
    </div>
  </div><!--/.row-->
{{-- Alert Message After Deleted Item---------------------------------- --}}
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
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Awesome Service Right List:{{ App\Awesomeserviceright::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <th>SL.No</th>
                      <th>Awesome Service Name</th>
                      <th>Awesome Service Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($awesomeservicerights as $awesomeserviceright)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$awesomeserviceright->awesomeserviceright_name}}</td>
                      <td>{{$awesomeserviceright->awesomeserviceright_details}}</td>
                      <td>{{$awesomeserviceright->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/awesomeserviceright/delete') }}/{{ $awesomeserviceright->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/awesomeserviceright/edit') }}/{{ $awesomeserviceright->id }}">Edit</a>
                      </td>

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

{{-- {{ print_r($mainslider) }} --}}



@if ((App\Awesomeserviceright::onlyTrashed()->count()) > 0)

  <!---                    DEleted Item table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Awesome Service Right Deleted List:{{ App\Awesomeserviceright::onlyTrashed()->count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Awesome Service Name</th>
                      <th>Awesome Service Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($deleted_awesomeservicerights as $deleted_awesomeserviceright)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$deleted_awesomeserviceright->awesomeserviceright_name}}</td>
                      <td>{{$deleted_awesomeserviceright->awesomeserviceright_details}}</td>
                      <td>{{$deleted_awesomeserviceright->created_at}}</td>
                      <td>
                        <a class="btn btn-success" href="{{ url('/awesomeserviceright/restore') }}/{{ $deleted_awesomeserviceright->id }}">Restore</a> </br>
                        {{-- <a style="margin-top:5px" class="btn btn-info" href="{{ url('/awesomeserviceleft/edit') }}/{{ $awesomeserviceleft->id }}">Edit</a> --}}
                      </td>

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>
          <!---                    DEleted Item table                     -->

@endif






@endsection
