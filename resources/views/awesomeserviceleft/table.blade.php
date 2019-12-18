@extends('layouts/dashboard')

@section('awesomeserviceleft-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Awesome Service Left Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Awesome Service left Table</h1>
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
              <div class="panel-heading">Awesome Service left List:{{ App\Awesomeserviceleft::count() }}</div>

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

                    @foreach($awesomeservicelefts as $awesomeserviceleft)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$awesomeserviceleft->awesomeserviceleft_name}}</td>
                      <td>{{$awesomeserviceleft->awesomeserviceleft_details}}</td>
                      <td>{{$awesomeserviceleft->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/awesomeserviceleft/delete') }}/{{ $awesomeserviceleft->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/awesomeserviceleft/edit') }}/{{ $awesomeserviceleft->id }}">Edit</a>
                      </td>

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

{{-- {{ print_r($mainslider) }} --}}





<!---                    DEleted Item table                     -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-success">
            <div class="panel-heading">Awesome Service left Deleted List:{{ App\Awesomeserviceleft::onlyTrashed()->count() }}</div>

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

                  @foreach($deleted_awesomeservicelefts as $deleted_awesomeserviceleft)
                  <tr>
                    <td>{{$flag++}}</td>
                    <td>{{$deleted_awesomeserviceleft->awesomeserviceleft_name}}</td>
                    <td>{{$deleted_awesomeserviceleft->awesomeserviceleft_details}}</td>
                    <td>{{$deleted_awesomeserviceleft->created_at}}</td>
                    <td>
                      <a class="btn btn-success" href="{{ url('/awesomeserviceleft/restore') }}/{{ $deleted_awesomeserviceleft->id }}">Restore</a> </br>
                      {{-- <a style="margin-top:5px" class="btn btn-info" href="{{ url('/awesomeserviceleft/edit') }}/{{ $awesomeserviceleft->id }}">Edit</a> --}}
                    </td>

                  </tr>
                  @endforeach
                </table>
            </div>
          </div>
        </div>
        <!---                    DEleted Item table                     -->




@endsection
