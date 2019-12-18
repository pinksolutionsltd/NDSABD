@extends('layouts/dashboard')

@section('presidentinfo-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Index:President Info</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Index:President Info</h1>
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
              <div class="panel-heading">Index:President Info:{{ App\Presidentinfo::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <th>SL.No</th>
                      <th>President Name</th>
                      <th>President Title</th>
                      <th>President Details</th>
                      <th>President Speech</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>President Image</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($presidentinfos as $presidentinfo)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$presidentinfo->presidentinfo_name}}</td>
                      <td>{{$presidentinfo->presidentinfo_title}}</td>
                      <td>{{$presidentinfo->presidentinfo_Details}}</td>
                      <td>{{$presidentinfo->presidentinfo_Speech}}</td>
                      <td>{{$presidentinfo->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/presidentinfo/delete') }}/{{ $presidentinfo->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/presidentinfo/edit') }}/{{ $presidentinfo->id }}">Edit</a>
                      </td>


                      <td> <a href="#"><img width="80px" src="{{ asset($presidentinfo->presidentinfo_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>


                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

{{-- {{ print_r($mainslider) }} --}}

@endsection
