@extends('layouts/dashboard')

@section('secretary-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Index:secretary Info</li>
    </ol>
  </div><!--/.row-->


  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Index:Secretary Info</h1>
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
  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Index:Secretary Info:{{ App\Secretary::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <th>SL.No</th>
                      <th>Secretary Name</th>
                      <th>Secretary Title</th>
                      <th>Secretary Details</th>
                      <th>Secretary Speech</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Secretary Image</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($secretaries as $secretary)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$secretary->secretary_name}}</td>
                      <td>{{$secretary->secretary_title}}</td>
                      <td>{{$secretary->secretary_Details}}</td>
                      <td>{{$secretary->secretary_Speech}}</td>
                      <td>{{$secretary->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/secretary/delete') }}/{{ $secretary->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/secretary/edit') }}/{{ $secretary->id }}">Edit</a>
                      </td>
                      <td> <a href="#"><img width="80px" src="{{ asset($secretary->secretary_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

{{-- {{ print_r($mainslider) }} --}}

@endsection
