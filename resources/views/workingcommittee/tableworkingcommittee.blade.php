@extends('layouts/dashboard')

@section('workingcommittee-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Working Committee Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Working Committee Table</h1>
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
              <div class="panel-heading">Working Committee List:{{ App\Workingcommittee::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>workingcommittee Name</th>
                      <th>workingcommittee Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Slider Image</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($workingcommittees as $workingcommittee)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$workingcommittee->committee_name}}</td>
                      <td>{{$workingcommittee->committee_Details}}</td>
                      <td>{{$workingcommittee->created_at}}</td>
                      <td>
<button class="delete_item btn btn-danger" value="{{ url('/workingcommittee/delete') }}/{{ $workingcommittee->id }}">Delete</button> </br>
  {{-- <a class="btn btn-danger delete_item"  href="{{ url('/workingcommittee/delete') }}/{{ $workingcommittee->id }}">Delete</a> </br> --}}
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/workingcommittee/edit') }}/{{ $workingcommittee->id }}">Edit</a>
                      </td>
                      <td> <a href="#"><img width="80px" src="{{ asset($workingcommittee->committee_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

{{-- {{ print_r($mainslider) }} --}}

{{-- <script type="text/javascript">

$(document).ready(function() {

  $('.delete_item').click(function() {
      alert('asaddd');
  } );

} ); --}}



{{-- </script> --}}

@endsection
