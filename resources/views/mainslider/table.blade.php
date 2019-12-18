@extends('layouts/dashboard')

@section('mainslider-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Main Slider Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Slider Table</h1>
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
              <div class="panel-heading">Main Slider List:{{ App\Mainslider::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Slider Heading</th>
                      <th>Slider Sub heading</th>
                      <th>Slider Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Slider Image</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($mainsliders as $mainslider)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$mainslider->slider_heading}}</td>
                      <td>{{$mainslider->slider_sub_heading}}</td>
                      <td>{{$mainslider->slider_details}}</td>
                      <td>{{$mainslider->created_at}}</td>
                      <td>
                        <button class="delete_item btn btn-danger" value="{{ url('/mainslider/delete') }}/{{ $mainslider->id }}">Delete</button> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/mainslider/edit') }}/{{ $mainslider->id }}">Edit</a>
                      </td>
                      <td> <a href="#"><img width="80px" src="{{ asset($mainslider->slider_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>
      </div>
  </div>

{{-- {{ print_r($mainslider) }} --}}

@if ((App\Mainslider::onlyTrashed()->count()) > 0)

  <!---                    DEleted Item table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Deleted Item List:{{ App\Mainslider::onlyTrashed()->count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Slider Heading</th>
                      <th>Slider Sub heading</th>
                      <th>Slider Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Slider Image</th>
                      <th>Status</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($mainslider_restores as $mainslider_restore)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$mainslider_restore->slider_heading}}</td>
                      <td>{{$mainslider_restore->slider_sub_heading}}</td>
                      <td>{{$mainslider_restore->slider_details}}</td>
                      <td>{{$mainslider_restore->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/mainslider/restore') }}/{{ $mainslider_restore->id }}">Restore</a>
                      </td>
                      <td> <a href="#"><img width="80px" src="{{ asset($mainslider_restore->slider_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                      {{-- <td> <a href="#"><img width="80px" src="{{ asset($mainslider->slider_image) }}" alt="featured-product-img" class="img-responsive"></a> </td> --}}

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>
    </div>
  </div>

          <!---                    DEleted Item table                     -->
@endif



@endsection
